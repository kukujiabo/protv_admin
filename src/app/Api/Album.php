<?php
namespace App\Api;

/**
 * 专辑接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-02
 */
class Album extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'addAlbum' => [
      
        'title' => 'title|string|true||专辑标题',
        'brief' => 'brief|string|true||专辑简介',
        'cover' => 'cover|string|true||专辑缩略图',
        'introduction' => 'introduction|string|true||专辑图文详情',
        'status' => 'status|int|true||专辑状态'
      
      ],

      'detail' => [
      
        'id' => 'id|int|true||专辑id'
      
      ],

      'editAlbum' => [
      
        'id' => 'id|int|true||专辑id',
        'title' => 'title|string|false||专辑标题',
        'brief' => 'brief|string|false||专辑简介',
        'cover' => 'cover|string|false||专辑缩略图',
        'introduction' => 'introduction|string|false||专辑图文内容',
        'status' => 'status|string|false||专辑状态'
      
      ],

      'listQuery' => [
      
        'title' => 'title|string|false||专辑标题',
        'status' => 'status|string|false||专辑状态',
        'album_type' => 'album_type|int|false||专辑类型',
        'author_name' => 'author_name|string|false||专辑名称',
        'all' => 'all|int|false||是否全部',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ],

      'remove' => [
      
        'id' => 'id|int|true||专辑id'

      ]
    
    ]);
  
  }

  /**
   * 添加专辑
   * @desc 添加专辑
   *
   * @return int id
   */
  public function addAlbum() {
  
    return $this->dm->addAlbum($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 专辑详情
   * @desc 专辑详情
   *
   * @return array info
   */
  public function detail() {
  
    return $this->dm->detail($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 编辑专辑
   * @desc 编辑专辑
   *
   * @return int num
   */
  public function editAlbum() {
  
    return $this->dm->editAlbum($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 专辑列表
   * @desc 专辑列表
   *
   * @return array data
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 删除专辑
   * @desc 删除专辑
   *
   * @return int num
   */
  public function remove() {

    return $this->dm->remove($this->retriveRuleParams(__FUNCTION__));
  
  }

}
