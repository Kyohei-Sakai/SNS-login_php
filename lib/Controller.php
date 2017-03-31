<?php

namespace MyApp;

class Controller {

  private $_errors;
  private $_values;

  public function __construct() {
    if (!isset($_SESSION['token'])) {
      $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(16));
    }
    // PHPのデフォルトのクラス(stdClass) -> オブジェクト型のデータを簡単に作れる
    // 連想配列の代用 ( $member->['name'] = 'hoge'; )
    // set: $member->name = 'hoge';
    // get: echo $member->name;
    $this->_errors = new \stdClass();
    $this->_values = new \stdClass();
  }

  protected function setValues($key, $value) {
    $this->_values->$key = $value;
  }

  public function getValues() {
    return $this->_values;
  }

  protected function setErrors($key, $error) {
    $this->_errors->$key = $error;
  }

  public function getErrors($key) {
    return isset($this->_errors->$key) ? $this->_errors->$key : '';
  }

  public function hasError() {
    // get_object_vars — 指定したオブジェクトのプロパティを取得する
    // [ array get_object_vars ( object $object ) ]
    return !empty(get_object_vars($this->_errors));
  }

  protected function isLoggedIn() {
    // $_SESSION['me']
    return isset($_SESSION['me']) && !empty($_SESSION['me']);
  }

  public function me() {
    return $this->isLoggedIn() ? $_SESSION['me'] : null;
  }

}
