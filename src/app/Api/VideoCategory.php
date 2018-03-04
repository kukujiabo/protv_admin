<?php
namespace App\Api;

/**
 * 视频分类接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-03
 */
class VideoCategory extends BaseApi {

  public function getRules() {
  
    return $this->rules([

      'addCategory' => [
      
        'name' => 'name|string|true||分类名称',
        'brief' => 'brief|string|true||分类简介',
        'thumbnail' => 'thumbnail|string|true||分类图标',
        'parent' => 'parent|int|false||上级分类id',
        'display_order' => 'display_order|int|true||分类排序',
        'status' => 'status|int|true||分类状态',
        'description' => 'description|string|false||分类图文详情'
      
      ],

      'editCategory' => [

        'id' => 'id|int|true||分类id',
        'name' => 'name|string|false||分类名称',
        'brief' => 'brief|string|false||分类简介',
        'thumbnail' => 'thumbnail|string|false||分类图标',
        'parent' => 'parent|int|false||上级分类id',
        'display_order' => 'display_order|int|false||分类排序',
        'status' => 'status|int|false||分类状态',
        'description' => 'description|string|false||分类图文详情'
      
      ],

      'detail' => [
      
        'id' => 'id|int|true||分类id'
      
      ],

      'listQuery' => [
      
        'name' => 'name|string|false||分类名称',
        'parent' => 'parent|int|false||上级分类',
        'all' => 'all|int|false|0|是否所有分类',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      ],

      'remove' => [
      
        'id' => 'id|int|true||分类id'

      ]
    
    ]);
  
  }

  /**
   * 新增分类
   * @desc 新增分类
   *
   * @return int id
   */
  public function addCategory() {
  
    return $this->dm->addCategory($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 编辑分类
   * @desc 编辑分类
   *
   * @return int num
   */
  public function editCategory() {
  
    return $this->dm->editCategory($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 分类详情
   * @desc 获取详情
   *
   * @return array data
   */
  public function detail() {
  
    return $this->dm->detail($this->retriveRuleParams(__FUNCTION__));
  
  }
  
  /**
   * 分类列表
   * @desc 分类列表
   *
   * @return array list
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 删除分类
   * @desc 删除分类
   *
   * @return int num
   */
  public function remove() {

    $params = $this->retriveRuleParams(__FUNCTION__);
  
    return $this->dm->remove($params);
  
  }

}
