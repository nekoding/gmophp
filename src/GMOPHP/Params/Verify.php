<?php

namespace GMOPHP\Params;

class Verify
{

  /**
   * Verify field by condition before call api.
   */
  public static function verifyField($value, $condition)
  {
    $key = $condition['key'];
    // Check length.
    if (isset($condition['length'])) {
      if (strlen($value) != $condition['length']) {
        return sprintf('Field [%s] value length should be [%s].', $key, $condition['length']);
      }
    } else {
      if (isset($condition['min-length'])) {
        if (strlen($value) < $condition['min-length']) {
          return sprintf('Field [%s] value length should be more than [%s].', $key, $condition['min-length']);
        }
      }
      if (isset($condition['max-length'])) {
        if (strlen($value) > $condition['max-length']) {
          return sprintf('Field [%s] value length should not be more than [%s].', $key, $condition['max-length']);
        }
      }
    }
    // Check integer.
    if (isset($condition['integer']) && $condition['integer'] === TRUE) {
      if (!is_numeric($value)) {
        return sprintf('Field [%s] value should be integer.', $key);
      }
    }
    // Check allowed values.
    if (isset($condition['allow'])) {
      if (is_array($condition['allow'])) {
        if (!in_array($value, $condition['allow'])) {
          return sprintf('Field [%s] value should be one of [%s].', $key, implode(',', $condition['allow']));
        }
      } else {
        if (!preg_match($condition['allow'], $value)) {
          return sprintf('Field [%s] value should be match regex [%s].', $key, $condition['allow']);
        }
      }
    }
    // Check allowed values.
    if (isset($condition['max'])) {
      $value = (int) $value;
      $max = (int) $condition['max'];
      if ($value > $max) {
        return sprintf('Field [%s] value should be larger than [%s].', $key, $max);
      }
    }

    return TRUE;
  }
}
