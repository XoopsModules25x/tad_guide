<?php
//�v���S��
$new_data[1] = array('options' => '0|0|true', 'title' => '�v���S��[hide]', 'side' => '8', 'weight' => '2', 'visible' => '1');
//�s�i�v����
$new_data[2] = array('options' => '10|1', 'title' => '�s�i�v����', 'side' => '7', 'weight' => '0', 'visible' => '1');
//�����v����
$new_data[3] = array('options' => '10|1', 'title' => '�����v����', 'side' => '8', 'weight' => '1', 'visible' => '0');
//�v���M�漽��
$new_data[4] = array('options' => '1|0|160|true', 'title' => '�v���M�漽��', 'side' => '0', 'weight' => '22', 'visible' => '0');

//select CONCAT('//',`name`,'\\n\$new_data[',`func_num`,'] = array(\'options\' => \'',`options`,'\', \'title\' => \'',`title`,'\', \'side\' => \'',`side`,'\', \'weight\' => \'',`weight`,'\', \'visible\' => \'',`visible`,'\');')from `xx_newblocks` where `dirname`='tad_player' and `block_type`!='D' order by `func_num`
