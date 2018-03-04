<?php
namespace App\Domain;

use App\Library\RedisClient;

/**
 * 管理员处理域
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-02
 */
class AdminDm {

  protected $_admin;

  public function __construct() {
  
    $requestHeader = getallheaders();
  
    $auth = RedisClient::get('admin_auth', $requestHeader['AX-TOKEN']);

    $this->_admin = $auth;

  }

  /**
   * 管理员登录
   */
  public function login($data) {
  
    return \App\request('App.Admin.Login', $data);
  
  }

  /**
   * 获取当前会话管理员信息
   */
  public function sessionAdminInfo() {

    $params = [

      'id' => $this->_admin->id
    
    ];
  
    return \App\request('App.Admin.sessionAdminInfo', $params);
  
  }

}