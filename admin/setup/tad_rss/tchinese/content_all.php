<?php
function tad_rss_content($cate_sn = "")
{
    global $xoopsDB;

    // $sql="delete from `".$xoopsDB->prefix("tad_rss")."`";
    // $xoopsDB->queryF($sql) or die($sql);

    $sql = "INSERT INTO `" . $xoopsDB->prefix("tad_rss") . "` (`title`, `url`, `enable`) VALUES
  ('��зs�D ',  'http://tw.news.yahoo.com/rss/art-edu', '1'),
  ('�ˤl����',  'http://tw.parenting.feedsportal.com/c/34791/f/641276/index.rss', '1'),
  ('�a�y�Ͽ趤',  'http://world.yam.com/rss.php', '1'),
  ('�Ш|��',  'http://www.edu.tw/rss.aspx?Node=1088', '1'),
  ('�Ÿq���Ш|��T��', 'http://www.cyc.edu.tw/backend.php',  '0')";

    $xoopsDB->queryF($sql) or die($sql);
}
