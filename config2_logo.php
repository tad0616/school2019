<?php

$i = 0;
//logo區域顯示模式
$i++;
$theme_config[$i]['name'] = "logo_display_type";
$theme_config[$i]['text'] = TF_LOGO_DISPLAY_TYPE;
$theme_config[$i]['desc'] = TF_LOGO_DISPLAY_TYPE_DESC;
$theme_config[$i]['type'] = "selectpicker";
$theme_config[$i]['options'] = array('not_full' => TF_DISPLAY_TYPE_NOT_FULL, 'bg_full' => TF_DISPLAY_TYPE_BG_FULL, 'all_full' => TF_DISPLAY_TYPE_ALL_FULL);
$theme_config[$i]['images'] = array('not_full' => XOOPS_URL . '/modules/tad_themes/images/dt_not_full.png', 'bg_full' => XOOPS_URL . '/modules/tad_themes/images/dt_bg_full.png', 'all_full' => XOOPS_URL . '/modules/tad_themes/images/dt_all_full.png');
$theme_config[$i]['default'] = "not_full";

//logo 是否套用陰影
$i++;
$theme_config[$i]['name'] = "logo_shadow";
$theme_config[$i]['text'] = TF_LOGO_SHADOW;
$theme_config[$i]['desc'] = TF_LOGO_SHADOW_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//logo 顯示區域底色
$i++;
$theme_config[$i]['name'] = "logo_bgcolor";
$theme_config[$i]['text'] = TF_LOGO_BGCOLOR;
$theme_config[$i]['desc'] = TF_LOGO_BGCOLOR_DESC;
$theme_config[$i]['type'] = "color";
$theme_config[$i]['default'] = "transparent";

//logo 底圖
$i++;
$theme_config[$i]['name'] = "logo_bg";
$theme_config[$i]['text'] = TF_LOGO_BG1;
$theme_config[$i]['desc'] = TF_LOGO_BG1_DESC;
$theme_config[$i]['type'] = "file";
$theme_config[$i]['default'] = "config2_logo_bg_3_3.png";

//logo 底圖重複方式
$i++;
$theme_config[$i]['name'] = "logo_bg_repeat";
$theme_config[$i]['text'] = TF_LOGO_BG1_REPEAT;
$theme_config[$i]['desc'] = TF_LOGO_BG1_REPEAT_DESC;
$theme_config[$i]['type'] = "select";
$theme_config[$i]['options'] = array('repeat' => TF_BG_REPEAT_NORMAL, 'repeat-x' => TF_BG_REPEAT_X, 'repeat-y' => TF_BG_REPEAT_Y, 'no-repeat' => TF_BG_NO_REPEAT, 'no-repeat; background-size: cover' => TF_BG_NO_REPEAT_COVER, 'no-repeat; background-size: contain' => TF_BG_NO_REPEAT_CONTAIN);
$theme_config[$i]['default'] = "no-repeat";

//logo 底圖重複方式
$i++;
$theme_config[$i]['name'] = "logo_bg_position";
$theme_config[$i]['text'] = TF_LOGO_BG1_POSITION;
$theme_config[$i]['desc'] = TF_LOGO_BG1_POSITION_DESC;
$theme_config[$i]['type'] = "select";
$theme_config[$i]['options'] = array('left top' => TF_BG_POSITION_LT, 'right top' => TF_BG_POSITION_RT, 'left bottom' => TF_BG_POSITION_LB, 'right bottom' => TF_BG_POSITION_RB, 'center center' => TF_BG_POSITION_CC, 'center top' => TF_BG_POSITION_CT, 'center bottom' => TF_BG_POSITION_CB);
$theme_config[$i]['default'] = "right top";

//logo1 底圖
$i++;
$theme_config[$i]['name'] = "logo_bg2";
$theme_config[$i]['text'] = TF_LOGO_BG2;
$theme_config[$i]['desc'] = TF_LOGO_BG2_DESC;
$theme_config[$i]['type'] = "file";
$theme_config[$i]['default'] = "config2_logo_bg2_3_2.png";

//logo 底圖重複方式
$i++;
$theme_config[$i]['name'] = "logo_bg2_repeat";
$theme_config[$i]['text'] = TF_LOGO_BG2_REPEAT;
$theme_config[$i]['desc'] = TF_LOGO_BG2_REPEAT_DESC;
$theme_config[$i]['type'] = "select";
$theme_config[$i]['options'] = array('repeat' => TF_BG_REPEAT_NORMAL, 'repeat-x' => TF_BG_REPEAT_X, 'repeat-y' => TF_BG_REPEAT_Y, 'no-repeat' => TF_BG_NO_REPEAT, 'no-repeat; background-size: cover' => TF_BG_NO_REPEAT_COVER, 'no-repeat; background-size: contain' => TF_BG_NO_REPEAT_CONTAIN);
$theme_config[$i]['default'] = "no-repeat";

//logo 底圖位置
$i++;
$theme_config[$i]['name'] = "logo_bg2_position";
$theme_config[$i]['text'] = TF_LOGO_BG2_POSITION;
$theme_config[$i]['desc'] = TF_LOGO_BG2_POSITION_DESC;
$theme_config[$i]['type'] = "select";
$theme_config[$i]['options'] = array('left top' => TF_BG_POSITION_LT, 'right top' => TF_BG_POSITION_RT, 'left bottom' => TF_BG_POSITION_LB, 'right bottom' => TF_BG_POSITION_RB, 'center center' => TF_BG_POSITION_CC, 'center top' => TF_BG_POSITION_CT, 'center bottom' => TF_BG_POSITION_CB);
$theme_config[$i]['default'] = "left top";

//logo 是否使用自動配對
$i++;
$theme_config[$i]['name'] = "logo_auto";
$theme_config[$i]['text'] = TF_LOGO_AUTO;
$theme_config[$i]['desc'] = TF_LOGO_AUTO_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//logo 圖示放置路徑
$i++;
$theme_config[$i]['name'] = "logo_path";
$theme_config[$i]['text'] = TF_LOGO_PATH;
$theme_config[$i]['desc'] = TF_LOGO_PATH_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "/uploads/logos/";

//logo 自動配對變數名稱
$i++;
$theme_config[$i]['name'] = "logo_var";
$theme_config[$i]['text'] = TF_LOGO_VAR;
$theme_config[$i]['desc'] = TF_LOGO_VAR_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "";

//logo 圖副檔名
$i++;
$theme_config[$i]['name'] = "logo_ext";
$theme_config[$i]['text'] = TF_LOGO_EXT;
$theme_config[$i]['desc'] = TF_LOGO_EXT_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "png";
