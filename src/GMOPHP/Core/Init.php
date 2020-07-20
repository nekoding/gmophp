<?php

namespace GMOPHP\Core;

use Error;
use GMOPHP\Api\Endpoint;
use GMOPHP\Params\Verify;
use GMOPHP\Params\Input;
use GMOPHP\Params\Output;
use GMOPHP\Response\Error as ErrorResponse;

class Init
{

  protected $host;
  protected $apiUrl;
  protected $method;
  protected $params = array();
  protected $defaultParams = array();


  public function __construct($host, $params = array())
  {
    $this->host = trim($host, '/');
    // Set default parameters.
    if ($params && is_array($params)) {
      $this->defaultParams = $params;
    }
    // Set input parameters mapping.
    $this->inputParamsMapping = Input::$params;
  }

  protected function getParamsMapping()
  {
    return $this->inputParamsMapping;
  }

  protected function paramsExist()
  {
    // $required = self:getRequiredParams($this->method);
    $required = array();
    $params = array();
    foreach ($required as $key) {
      if (!array_key_exists($key, $this->params)) {
        $params[$key] = $key;
      }
    }

    return $params;
  }

  protected function initParams()
  {
    $this->params = array('user' => Constant::GMO_USER, 'version' => Constant::GMO_VERSION);
    $this->defaultParams();
  }

  protected function defaultParams()
  {
    if ($this->defaultParams) {
      $this->params = array_merge($this->params, $this->defaultParams);
    }
  }

  public function addParams($params)
  {
    if ($params && is_array($params)) {
      $this->params = array_merge($this->params, $params);
    }
  }

  public function setParam($key, $value)
  {
    $this->params[$key] = $value;
  }

  public function getParam($key, $default = '')
  {
    if (array_key_exists($key, $this->params)) {
      return $this->params[$key];
    }
    return $default;
  }

  protected function request($uri, $params)
  {
    $ch = curl_init($uri);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, TRUE);
    curl_setopt($ch, CURLOPT_FAILONERROR, TRUE);
    // Append post fields.
    if ($params) {
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params, '', '&'));
    }
    $response = curl_exec($ch);
    // Throw exception if curl error.
    $error = curl_error($ch);
    if ($error) {
      throw new \Exception($error, curl_errno($ch));
    }
    // Close curl connect.
    curl_close($ch);
    // Process response before return.
    if ($response) {
      $response = self::processResponse($response);
      return $response;
    }

    return NULL;
  }

  /**
   * Response separator.
   */
  public static function responseSeparator($value)
  {
    return explode(Constant::RESPONSE_SEPARATOR, $value);
  }

  /**
   * Process curl response before return callback.
   */
  public static function processResponse($response)
  {
    parse_str($response, $data);

    $success = isset($data['ErrCode']) ? FALSE : TRUE;
    $multiple = FALSE;
    $first = current($data);
    $result = array();

    if (strpos($first, Constant::RESPONSE_SEPARATOR) !== FALSE) {
      $multiple = TRUE;
    } else {
      foreach ($data as $key => $value) {
        if (isset(Output::$params[$key])) {
          $key = Output::$params[$key];
        }
        $result[$key] = $value;
      }
    }

    if ($success === FALSE && $multiple === TRUE) {
      $error = array_map('self::responseSeparator', $data);
      foreach ($error['ErrInfo'] as $key => $value) {
        $result['ErrMessage'][$key] = ErrorResponse::getErrorMessage($value);
      }
    }

    if ($success === FALSE && $multiple === FALSE) {
      $result['ErrCode'] = $data['ErrCode'];
      $result['ErrInfo']  = $data['ErrInfo'];
      $result['ErrMessage'] = ErrorResponse::getErrorMessage($data['ErrInfo']);
    }

    return array(
      'success' => $success,
      'multiple'  => $multiple,
      'response'  => $response,
      'result'  => $result
    );
  }

  /**
   * Add http parameters.
   */
  protected function addHttpParams()
  {
    // Add user agent.
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
      $this->defaultParams['http_user_agent'] = $_SERVER['HTTP_USER_AGENT'];
    } else {
      $this->defaultParams['http_user_agent'] = Constant::HTTP_USER_AGENT;
    }
    // Add accept.
    if (isset($_SERVER['HTTP_ACCEPT'])) {
      $this->defaultParams['http_accept'] = $_SERVER['HTTP_ACCEPT'];
    } else {
      $this->defaultParams['http_accept'] = Constant::HTTP_ACCEPT;
    }
  }

  public function getApiUrl()
  {
    return $this->apiUrl;
  }

  public function callApi($method, $params = array())
  {
    $this->call($method, $params);
    return $this->execute();
  }

  public function call($method, $params = array())
  {
    // Check api method exist.
    if (!isset(Endpoint::$apiEndpoint[$method])) {
      throw new \Exception(sprintf('API method %s does not exist.', $method));
    }
    $this->method = $method;
    $this->apiUrl = $this->host . '/' . Endpoint::$apiEndpoint[$method];
    // Initinial parameters.
    $this->initParams();
    // Add new params.
    $this->addParams($params);
  }

  public function execute()
  {
    $uri = $this->getApiUrl();
    // Process parameters as GMO format.
    $params = $this->buildParams();
    return $this->request($uri, $params);
  }

  /**
   * Process parameters as GMO format.
   */
  protected function buildParams()
  {
    $params = array();
    $mapping = $this->getParamsMapping();
    foreach ($this->params as $key => $value) {
      if (isset($mapping[$key])) {
        $gmo_key = $mapping[$key]['key'];
        // Only convert fields which need to be convert.
        if (isset($mapping[$key]['encode']) && $mapping[$key]['encode'] === TRUE) {
          $value = mb_convert_encoding($value, 'SJIS', 'UTF-8');
        }
        $params[$gmo_key] = $value;
      }
    }
    return $params;
  }
}
