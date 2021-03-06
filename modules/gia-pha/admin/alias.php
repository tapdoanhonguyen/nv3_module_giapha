<?php

/**
 * @Project NUKEVIET 3.0
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2010 VINADES.,JSC. All rights reserved
 * @Createdate 2-10-2010 18:49
 */

if ( ! defined( 'NV_IS_FILE_ADMIN' ) ) die( 'Stop!!!' );

$title = filter_text_input( 'title', 'post', '' );
$alias = change_alias( $title );

$id = $nv_Request->get_int( 'id', 'post', 0 );
$mod = $nv_Request->get_string( 'mod', 'post', '' );

if ( $mod == "cat" )
{
    $tab = NV_PREFIXLANG . "_" . $module_data . "_cat";
    list( $nb ) = $db->sql_fetchrow( $db->sql_query( "SELECT count(*) FROM `" . $tab . "` WHERE `catid`!=" . $id . " AND `alias`=" . $db->dbescape( $alias ) ) );
    if ( ! empty( $nb ) )
    {
        $result = $db->sql_query( "SHOW TABLE STATUS WHERE `Name`=" . $db->dbescape( $tab ) );
        $item = $db->sql_fetch_assoc( $result );
        $db->sql_freeresult( $result );
        
        $alias .= "-" . $item['Auto_increment'];
    }
}
elseif ( $mod == "topics" )
{
    $tab = NV_PREFIXLANG . "_" . $module_data . "_topics";
    list( $nb ) = $db->sql_fetchrow( $db->sql_query( "SELECT count(*) FROM `" . $tab . "` WHERE `topicid`!=" . $id . " AND `alias`=" . $db->dbescape( $alias ) ) );
    if ( ! empty( $nb ) )
    {
        $result = $db->sql_query( "SHOW TABLE STATUS WHERE `Name`=" . $db->dbescape( $tab ) );
        $item = $db->sql_fetch_assoc( $result );
        $db->sql_freeresult( $result );
        
        $alias .= "-" . $item['Auto_increment'];
    }
}
elseif ( $mod == "family" )
{
    $tab = NV_PREFIXLANG . "_" . $module_data . "_family";
    list( $nb ) = $db->sql_fetchrow( $db->sql_query( "SELECT count(*) FROM `" . $tab . "` WHERE `fid`!=" . $id . " AND `alias`=" . $db->dbescape( $alias ) ) );
    if ( ! empty( $nb ) )
    {
        $result = $db->sql_query( "SHOW TABLE STATUS WHERE `Name`=" . $db->dbescape( $tab ) );
        $item = $db->sql_fetch_assoc( $result );
        $db->sql_freeresult( $result );
        
        $alias .= "-" . $item['Auto_increment'];
    }
}

include ( NV_ROOTDIR . "/includes/header.php" );
echo $alias;
include ( NV_ROOTDIR . "/includes/footer.php" );

?>