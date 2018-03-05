<?php
namespace App\Domain;

use App\Library\RedisClient;

/**
 * 视频处理域
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-03
 */
class VideoDm extends BaseDm {

  /**
   * 添加视频
   */
  public function addVideo($data) {

    $data['author_id'] = 0;
    $data['member_id'] = $this->_admin->id;
  
    return \App\request('App.Video.AddVideo', $data);
  
  }

  /**
   * 编辑视频
   */
  public function editVideo($data) {
  
    return \App\request('App.Video.EditVideo', $data);
  
  }

  /**
   * 视频列表
   */
  public function listQuery($data) {
  
    return \App\request('App.Video.ListQuery', $data);
  
  }

  /**
   * 视频详情
   */
  public function detail($data) {
  
    return \App\request('App.Video.Detail', $data);
  
  }

  /**
   * 删除视频
   */
  public function remove($data) {
  
    return \App\request('App.Video.Remove', $data);
  
  }

}
