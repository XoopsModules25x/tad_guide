<?php
//�p��ƾ�
$new_data[1] = array('options' => '', 'title' => '�p��ƾ�[hide]', 'side' => '1', 'weight' => '3', 'visible' => '1');
//����ƶ�
$new_data[2] = array('options' => '7', 'title' => '����ƶ�', 'side' => '1', 'weight' => '4', 'visible' => '1');
//�j��ƾ�
$new_data[3] = array('options' => '', 'title' => '�j��ƾ�[hide]', 'side' => '9', 'weight' => '0', 'visible' => '0');

//select CONCAT('//',`name`,'\\n\$new_data[',`func_num`,'] = array(\'options\' => \'',`options`,'\', \'title\' => \'',`title`,'\', \'side\' => \'',`side`,'\', \'weight\' => \'',`weight`,'\', \'visible\' => \'',`visible`,'\');')from `xx_newblocks` where `dirname`='tad_cal' and `block_type`!='D' order by `func_num`
