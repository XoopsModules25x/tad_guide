<?php
//�H���n��
$new_data[1] = array('options' => '1|1', 'title' => '�H���n��', 'side' => '0', 'weight' => '9', 'visible' => '1');
//�̷s�峹
$new_data[2] = array('options' => '5', 'title' => '�̷s�峹', 'side' => '0', 'weight' => '10', 'visible' => '0');
//���y�C��
$new_data[3] = array('options' => '5|create_date|desc', 'title' => '���y�C��', 'side' => '0', 'weight' => '11', 'visible' => '0');
//���y�ؿ�
$new_data[4] = array('options' => '', 'title' => '���y�ؿ�', 'side' => '0', 'weight' => '4', 'visible' => '1');

//select CONCAT('//',`name`,'\\n\$new_data[',`func_num`,'] = array(\'options\' => \'',`options`,'\', \'title\' => \'',`title`,'\', \'side\' => \'',`side`,'\', \'weight\' => \'',`weight`,'\', \'visible\' => \'',`visible`,'\');')from `xx_newblocks` where `dirname`='tad_book3' and `block_type`!='D' order by `func_num`
