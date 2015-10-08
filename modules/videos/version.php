<?php

/**
 * @Project VIDEOS 4.x
 * @Author KENNYNGUYEN (nguyentiendat713@gmail.com)
 * @Website tradacongnghe.com
 * @License GNU/GPL version 2 or any later version
 * @Createdate Oct 08, 2015 10:47:41 AM
 */

if( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$module_version = array(
	'name' => 'Videos', // Tieu de module
	'modfuncs' => 'main,viewcat,playlists,player,groups,detail,search,content,tag,rss', // Cac function co block
	'change_alias' => 'playlists,groups,content,rss',
	'submenu' => 'rss,search',
	'is_sysmod' => 0, // 1:0 => Co phai la module he thong hay khong
	'virtual' => 1, // 1:0 => Co cho phep ao hoa module hay khong
	'version' => '0.1.02', // Phien ban cua modle
	'date' => 'Wed, 06 Oct 2015 00:00:00 GMT', // Ngay phat hanh phien ban
	'author' => 'KENNYNGUYEN (nguyentiendat713@gmail.com)', // Tac gia
	'note' => '', // Ghi chu
	'uploads_dir' => array( $module_upload, $module_upload . '/img', $module_upload . '/vid', $module_upload . '/playlists'),
	'files_dir' => array( $module_upload . '/img' )
);