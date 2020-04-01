<?php
$bg_file['repeat'] = array('repeat' => TF_BG_REPEAT_NORMAL, 'repeat-x' => TF_BG_REPEAT_X, 'repeat-y' => TF_BG_REPEAT_Y, 'no-repeat' => TF_BG_NO_REPEAT);
$bg_file['position'] = array('left top' => TF_BG_POSITION_LT, 'right top' => TF_BG_POSITION_RT, 'left bottom' => TF_BG_POSITION_LB, 'right bottom' => TF_BG_POSITION_RB, 'center center' => TF_BG_POSITION_CC, 'center top' => TF_BG_POSITION_CT, 'center bottom' => TF_BG_POSITION_CB);
$bg_file['size'] = array('auto' => TF_BG_SIZE_NONE, 'cover' => TF_BG_SIZE_COVER, 'contain' => TF_BG_SIZE_CONTAIN, '100%' => TF_BG_SIZE_FULL);

$i = 0;
//背景底圖2
$i++;
$theme_config[$i]['name'] = "bg_bg2";
$theme_config[$i]['text'] = TF_BG_BG2;
$theme_config[$i]['desc'] = TF_BG_BG2_DESC;
$theme_config[$i]['type'] = "bg_file";
$theme_config[$i]['default'] = "";
$theme_config[$i]['options'] = $bg_file;
$theme_config[$i]['repeat'] = "no-repeat";
$theme_config[$i]['position'] = "left top";
$theme_config[$i]['size'] = "auto";

//背景底圖3
$i++;
$theme_config[$i]['name'] = "bg_bg3";
$theme_config[$i]['text'] = TF_BG_BG3;
$theme_config[$i]['desc'] = TF_BG_BG3_DESC;
$theme_config[$i]['type'] = "bg_file";
$theme_config[$i]['default'] = "";
$theme_config[$i]['options'] = $bg_file;
$theme_config[$i]['repeat'] = "no-repeat";
$theme_config[$i]['position'] = "left top";
$theme_config[$i]['size'] = "auto";
