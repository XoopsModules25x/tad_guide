<?php
$new_data[1] = array('options' => '10', 'title' => '�̷s�Q��', 'side' => '5', 'weight' => '14', 'visible' => '0');
$new_data[2] = array('options' => '10|30', 'title' => '�̼����Q��', 'side' => '5', 'weight' => '12', 'visible' => '1');
$new_data[3] = array('options' => '0|350|#B4C58D|#FFFFFF|#000000|1', 'title' => '�Y�ɯd��ï[hide]', 'side' => '1', 'weight' => '1', 'visible' => '1');

//select CONCAT('//',`name`,'\\n\$new_data[',`func_num`,'] = array(\'options\' => \'',`options`,'\', \'title\' => \'',`title`,'\', \'side\' => \'',`side`,'\', \'weight\' => \'',`weight`,'\', \'visible\' => \'',`visible`,'\');')from `xx_newblocks` where `dirname`='tad_discuss' and `block_type`!='D' order by `func_num`
