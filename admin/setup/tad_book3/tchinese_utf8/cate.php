<?php
use XoopsModules\Tadtools\Utility;

$prefix = '';
$suffix = '相關電子書';
// $c1=mt_rand( 200, 255 );
// $c2=mt_rand( 200, 255 );
// $c3=mt_rand( 200, 255 );
// $b1=mt_rand( 50, 255 );
// $b2=mt_rand( 50, 255 );
// $b3=mt_rand( 50, 255 );

$sql = 'select max(sort) from `' . $xoopsDB->prefix('tad_book3_cate') . '`';
$result = $xoopsDB->query($sql);
list($max_sort) = $xoopsDB->fetchRow($result);

$read_perm_name = '';
$post_perm_name = '';

foreach ($create_cate as $groupid => $cate_name) {
    $max_sort++;

    $sql = 'INSERT INTO `' . $xoopsDB->prefix('tad_book3_cate') . "`
    (`sort`, `title`, `description`)
    VALUES
    ('$max_sort', '{$prefix}{$cate_name}{$suffix}',  '{$prefix}{$cate_name}{$suffix}');
    ";
    $xoopsDB->queryF($sql) or Utility::web_error($sql, __FILE__, __LINE__);
    $insert_id = $xoopsDB->getInsertId();

    if (!empty($read_perm_name)) {
        add_perm(1, $insert_id, $mid, $read_perm_name);
        add_perm(2, $insert_id, $mid, $read_perm_name);
        add_perm(3, $insert_id, $mid, $read_perm_name);
        add_perm($groupid, $insert_id, $mid, $read_perm_name);
    }

    if (!empty($post_perm_name)) {
        add_perm(1, $insert_id, $mid, $post_perm_name);
        add_perm($groupid, $insert_id, $mid, $post_perm_name);
    }
}
