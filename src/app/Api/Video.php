<?php
namespace App\Api;

/**
 * 视频管理接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-03
 */
class Video extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'addVideo' => [

        'out_id' => 'out_id|string|true||第三方平台资源id',
        'album_id' => 'album_id|int|false||专辑id',
        'category_id' => 'category_id|int|true||分类id',
        'title' => 'title|string|true||视频标题',
        'brief' => 'brief|string|true||视频简介',
        'introduction' => 'introduction|string|false||视频图文信息',
        'cover' => 'cover|string|true||视屏封面',
        'url' => 'url|string|true||视频链接',
        'duration' => 'duration|string|true||视频时长',
        'status' => 'status|int|true||视频状态'
      
      ],
    
      'editVideo' => [
      
        'id' => 'id|int|true||视频id',
        'out_id' => 'out_id|string|false||第三方平台资源id',
        'album_id' => 'album_id|int|false||专辑id',
        'category_id' => 'category_id|int|false||分类id',
        'title' => 'title|string|false||视频标题',
        'brief' => 'brief|string|false||视频简介',
        'introduction' => 'introduction|string|false||视频图文信息',
        'cover' => 'cover|string|false||视屏封面',
        'url' => 'url|string|false||视频链接',
        'duration' => 'duration|string|true||视频时长',
        'status' => 'status|int|true||视频状态'
      
      ],

      'listQuery' => [
      
        'album_id' => 'album_id|int|false||专辑id',
        'category_id' => 'category_id|int|false||分类id',
        'title' => 'title|string|false||视频标题',
        'all' => 'all|int|false|0|是否查询全部内容',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数',
      
      ],

      'detail' => [
      
        'id' => 'id|int|true||视频id'

      ],

      'remove' => [
      
        'id' => 'id|int|true||视频id'
      
      ]
    
    ]);
  
  }

  /**
   * 新增视频
   * @desc 新增视频
   *
   * @return int id
   */
  public function addVideo() {
  
    return $this->dm->addVideo($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 编辑视频
   * @desc 编辑视频
   *
   * @return int id
   */
  public function editVideo() {
  
    return $this->dm->editVideo($this->retriveRuleParams(__FUNCTION__));
  
  }


  /**
   * 视频列表
   * @desc 视频列表
   *
   * @return int id
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 视频详情
   * @desc 视频详情
   *
   * @return int id
   */
  public function detail() {
  
    return $this->dm->detail($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 删除视频
   * @desc 删除视频
   *
   * @return int id
   */
  public function remove() {
  
    return $this->dm->remove($this->retriveRuleParams(__FUNCTION__));
  
  }

}
