<?php
//�̷s�n���s��
$new_data[1] = array('options' => '5|1|1|0|sort|1|1|130', 'title' => '�žɺ���[pic]images/weblinks.png', 'side' => '5', 'weight' => '5', 'visible' => '1');
//�n�����˧ֳt�s��
$new_data[2] = array('options' => '1|', 'title' => '�n�����˧ֳt�s��[hide]', 'side' => '0', 'weight' => '12', 'visible' => '0');

//select CONCAT('//',`name`,'\\n\$new_data[',`func_num`,'] = array(\'options\' => \'',`options`,'\', \'title\' => \'',`title`,'\', \'side\' => \'',`side`,'\', \'weight\' => \'',`weight`,'\', \'visible\' => \'',`visible`,'\');')from `xx_newblocks` where `dirname`='tad_link' and `block_type`!='D' order by `func_num`
