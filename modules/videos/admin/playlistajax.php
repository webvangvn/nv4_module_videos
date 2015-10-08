<?php

/**
 * @Project VIDEOS 4.x
 * @Author KENNYNGUYEN (nguyentiendat713@gmail.com)
 * @Website tradacongnghe.com
 * @License GNU/GPL version 2 or any later version
 * @Createdate Oct 08, 2015 10:47:41 AM
 */

if( ! defined( 'NV_IS_FILE_ADMIN' ) ) die( 'Stop!!!' );

$q = $nv_Request->get_title( 'term', 'get', '', 1 );
if( empty( $q ) ) return;

$db->sqlreset()
	->select('title')
	->from( NV_PREFIXLANG . '_' . $module_data . '_playlists' )
	->where( 'title LIKE :title OR keywords LIKE :keywords' )
	->order( 'weight ASC' )
	->limit( 50 );

$sth = $db->prepare( $db->sql() );
$sth->bindValue( ':title', '%' . $q . '%', PDO::PARAM_STR );
$sth->bindValue( ':keywords', '%' . $q . '%', PDO::PARAM_STR );
$sth->execute();

$array_data = array();
while( list( $title ) = $sth->fetch( 3 ) )
{
	$array_data[] = $title;
}

header( 'Cache-Control: no-cache, must-revalidate' );
header( 'Content-type: application/json' );

ob_start( 'ob_gzhandler' );
echo json_encode( $array_data );
exit();