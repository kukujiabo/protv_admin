<?php
namespace App\Domain;

use App\Library\RedisClient;

/**
 * 处理域基础类
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-06
 */
class BaseDm {

  protected $_admin;

  public function __construct() {
  
    $requestHeader = \getallheaders();
  
    $auth = RedisClient::get('admin_auth', $requestHeader['AX-TOKEN']);

    $this->_admin = $auth;

  }


}
