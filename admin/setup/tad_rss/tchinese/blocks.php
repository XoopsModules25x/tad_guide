<?php
//�ͯ�����
$new_data[1]    = array('options' => '1|5', 'title' => '��зs�D [hide]', 'side' => '7', 'weight' => '2', 'visible' => '1');
$copy_data[1][] = array('options' => '2|5', 'title' => '�ˤl���� [hide]', 'side' => '8', 'weight' => '2', 'visible' => '1');

//select CONCAT('//',`name`,'\\n\$new_data[',`func_num`,'] = array(\'options\' => \'',`options`,'\', \'title\' => \'',`title`,'\', \'side\' => \'',`side`,'\', \'weight\' => \'',`weight`,'\', \'visible\' => \'',`visible`,'\');')from `xx_newblocks` where `dirname`='tad_rss' and `block_type`!='D' order by `func_num`
