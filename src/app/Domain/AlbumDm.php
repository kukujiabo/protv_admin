<?php
namespace App\Domain;

use App\Library\RedisClient;

/**
 * 专辑处理域
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-02
 */
class AlbumDm extends BaseDm  {

  /**
   * 添加专辑
   */
  public function addAlbum($data) {

    $data['author_id'] = 0;

    $data['member_id'] = $this->_admin->id;
  
    return \App\request('App.Album.AddAlbum', $data);
  
  }

  /**
   * 专辑详情
   */
  public function detail($data) {
  
    return \App\request('App.Album.Detail', $data);
  
  }

  /**
   * 编辑专辑
   */
  public function editAlbum($data) {
  
    return \App\request('App.Album.EditAlbum', $data);
  
  }

  /**
   * 专辑列表
   */
  public function listQuery($data) {
  
    return \App\request('App.Album.ListQuery', $data);
  
  }

  /**
   * 删除专辑
   */
  public function remove($data) {
  
    return \App\request('App.Album.Remove', $data);
  
  }

}
