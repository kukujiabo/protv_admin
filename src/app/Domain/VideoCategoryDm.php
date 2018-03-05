<?php
namespace App\Domain;

/**
 * 分类处理域
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-03
 */
class VideoCategoryDm extends BaseDm {

  /**
   * 添加分类
   */
  public function addCategory($params) {
  
    return \App\request('App.VideoCategory.AddCategory', $params);
  
  }

  /**
   * 编辑分类
   */
  public function editCategory($params) {
  
    return \App\request('App.VideoCategory.EditCategory', $params);
  
  }

  /**
   * 分类列表
   */
  public function listQuery($params) {
  
    return \App\request('App.VideoCategory.ListQuery', $params);
  
  }

  /**
   * 分类详情
   */
  public function detail($params) {
  
    return \App\request('App.VideoCategory.Detail', $params);
  
  }

  /**
   * 删除分类
   */
  public function remove($params) {
  
    return \App\request('App.VideoCategory.Remove', $params);
  
  }

}
