<?php
//�G�������ưʰ϶�
$new_data[1] = array('options' => '', 'title' => '�G�������ưʰ϶�[hide]', 'side' => '5', 'weight' => '0', 'visible' => '0');
//�W�����ÿ��
$new_data[2] = array('options' => '', 'title' => '�W�����ÿ��[hide]', 'side' => '0', 'weight' => '17', 'visible' => '0');
//����BootStrap���
$new_data[3] = array('options' => '', 'title' => '����BootStrap���[hide]', 'side' => '0', 'weight' => '1', 'visible' => '0');
//�������
$new_data[4] = array('options' => '1,12,13,5,14,11,16,17|0', 'title' => '�������[hide]', 'side' => '0', 'weight' => '2', 'visible' => '1');

//select CONCAT('//',`name`,'\\n\$new_data[',`func_num`,'] = array(\'options\' => \'',`options`,'\', \'title\' => \'',`title`,'\', \'side\' => \'',`side`,'\', \'weight\' => \'',`weight`,'\', \'visible\' => \'',`visible`,'\');')from `xx_newblocks` where `dirname`='tad_themes' and `block_type`!='D' order by `func_num`
