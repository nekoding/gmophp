<?php

namespace GMOPHP\Api;

use GMOPHP\Core\Init;

class ImmediateShop extends Init
{
  private $raw;
  private $response;

  /**
   * Site id and site pass disable flag.
   */
  protected $disableSiteIdAndPass = FALSE;

  /**
   * Shop id and shop pass disable flag.
   */
  protected $disableShopIdAndPass = FALSE;

  /**
   * Object constructor.
   */
  public function __construct($host, $shop_id, $shop_pass, $params = array())
  {
    if (!is_array($params)) {
      $params = array();
    }
    $params['shop_id']   = $shop_id;
    $params['shop_pass'] = $shop_pass;
    parent::__construct($host, $params);
  }

  /**
   * Disable site_id and site_pass fields which not required for some api.
   */
  protected function disableSiteIdAndPass()
  {
    $this->disableSiteIdAndPass = TRUE;
  }

  /**
   * Disable shop_id and shop_pass fields which not required for some api.
   */
  protected function disableShopIdAndPass()
  {
    $this->disableShopIdAndPass = TRUE;
  }

  /**
   * Append default parameters.
   *
   * Remove shop_id and shop_pass if disabled.
   */
  protected function defaultParams()
  {
    if ($this->disableSiteIdAndPass === TRUE) {
      unset($this->defaultParams['site_id'], $this->defaultParams['site_pass']);
    }
    if ($this->disableShopIdAndPass === TRUE) {
      unset($this->defaultParams['shop_id'], $this->defaultParams['shop_pass']);
    }
    parent::defaultParams();
  }

  /**
   * Entry Exec Transaction using Credit Card
   */
  public function creditCard($orderId, $jobCd, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['job_cd'] = $jobCd;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTran', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTran', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using Convenience Store
   */
  public function convenienceStore($orderId, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranCvs', $data);

    $data['access_id']  = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $data['receipts_disp_11'] = $data['receipt_name'] ?? $data['customer_name'];
    $data['receipts_disp_12'] = $data['receipt_tel'] ?? $data['tel_no'];
    $data['receipts_disp_13'] = $data['receipt_at'];

    $exec = $this->callApi('execTranCvs', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using Rakuten Edy
   */
  public function rakutenEdy($orderId, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranEdy', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranEdy', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using JCB Preca
   */
  public function jcbPreca($orderId, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranJcbPreca', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranJcbPreca', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using Suica Mobile
   */
  public function suicaMobile($orderId, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranSuica', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranSuica', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using WebMoney
   */
  public function webMoney($orderId, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranWebmoney', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranWebmoney', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using Virtual Account
   */
  public function virtualAccount($orderId, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranVirtualaccount', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranVirtualaccount', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction NetCash
   */
  public function netCash($orderId, $netcash_type, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['amount'] = $amount;
    $data['netcash_pay_type'] = $netcash_type;

    $entry = $this->callApi('entryTranNetcash', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranNetcash', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using Rakuten Id
   */
  public function rakutenId($orderId, $jobCd, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['job_cd'] = $jobCd;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranRakutenid', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranRakutenid', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using Line
   */
  public function linePayment($orderId, $jobCd, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['job_cd'] = $jobCd;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranLinePay', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranLinePay', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using netId
   */
  public function netId($orderId, $jobCd, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['job_cd'] = $jobCd;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranNetid', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranNetid', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using Brand Token Apple Pay
   */
  public function brandToken($orderId, $jobCd, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['job_cd'] = $jobCd;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranApplePay', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;
    $data['token_type'] = 'APay';

    $exec = $this->callApi('execTranApplePay', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using Virtual Account Aozora
   */
  public function aozoraVA($orderId, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranGANB', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranGANB', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Entry Exec Transaction using PayPay
   */
  public function payPay($orderId, $amount = 0, array $data)
  {
    $data['order_id'] = $orderId;
    $data['amount'] = $amount;

    $entry = $this->callApi('entryTranPaypay', $data);

    $data['access_id'] = $entry['result']['access_id'] ?? null;
    $data['access_pass'] = $entry['result']['access_pass'] ?? null;

    $exec = $this->callApi('execTranPaypay', $data);

    // Save array response
    $this->response = array_merge($entry['result'], $exec['result']);

    // Save raw response
    $this->raw = $entry['response'] . '&' . $exec['response'];

    return $this;
  }

  /**
   * Get Raw Response
   */
  public function rawString()
  {
    return $this->raw;
  }

  /**
   * Get Array Response
   */
  public function get()
  {
    return $this->response;
  }

  /**
   * Get Json Response
   */
  public function toJson()
  {
    $encodedResponse = mb_convert_encoding($this->raw, "UTF-8", array('EUC-JP', 'SHIFT-JIS', 'AUTO'));

    parse_str($encodedResponse, $data);
    $result =  array_combine(array_map('lcfirst', array_keys($data)), $data);
    return json_encode($result);
  }
}
