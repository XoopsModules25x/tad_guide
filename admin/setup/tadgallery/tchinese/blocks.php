<?php
//�ۤ����b
$new_data[0] = array('options' => '12|0|1|rand|desc|s|0|140|105|0|1000|3|0|5000', 'title' => '�ۤ����b[hide]', 'side' => '9', 'weight' => '1', 'visible' => '0');
//����ۤ�
$new_data[1] = array('options' => '12|0|1|post_date|desc|m|0|200|160', 'title' => '����ۤ�[hide]', 'side' => '0', 'weight' => '1', 'visible' => '0');
//�ۤ���v�q
$new_data[2] = array('options' => '12|0|1|post_date|desc|s|0|100%|240', 'title' => '�ۤ���v�q[hide]', 'side' => '0', 'weight' => '3', 'visible' => '0');
//3D�ۤ���
$new_data[3] = array('options' => '0|1|100%|450', 'title' => '3D�ۤ���[hide]', 'side' => '9', 'weight' => '2', 'visible' => '0');
//�Ϥ��]���O
$new_data[4] = array('options' => '12|0|1|post_date|desc|m|0|100%|240|jscroller2_up|40', 'title' => '�Ϥ��]���O[hide]', 'side' => '0', 'weight' => '2', 'visible' => '0');
//�ۤ��̷s�^��
$new_data[5] = array('options' => '10|1|1', 'title' => '�ۤ��̷s�^��', 'side' => '9', 'weight' => '4', 'visible' => '0');
//�Y�ϦC��
$new_data[6] = array('options' => '12|0|1|post_date|desc|m|0|130|130|0|0|font-size:11px;font-weight:normal;overflow:hidden;', 'title' => '�Y�ϦC��[hide]', 'side' => '9', 'weight' => '0', 'visible' => '0');
//�L�_�]���O
$new_data[7] = array('options' => '12|0|1|rand|desc|m|0|100%|150|20', 'title' => '�L�_�]���O[hide]', 'side' => '9', 'weight' => '3', 'visible' => '1');
//��ï�@��
$new_data[8] = array('options' => '4|content|rand()||300|line-height:1.8;|0', 'title' => '��ï�@��[hide]', 'side' => '5', 'weight' => '4', 'visible' => '1');

//select CONCAT('//',`name`,'\\n\$new_data[',`func_num`,'] = array(\'options\' => \'',`options`,'\', \'title\' => \'',`title`,'\', \'side\' => \'',`side`,'\', \'weight\' => \'',`weight`,'\', \'visible\' => \'',`visible`,'\');')from `xx_newblocks` where `dirname`='tadgallery' and `block_type`!='D' order by `func_num`
