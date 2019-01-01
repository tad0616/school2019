<?php

$i = 0;
//logo區域顯示模式
$i++;
$theme_config[$i]['name']    = "logo_display_type";
$theme_config[$i]['text']    = TF_LOGO_DISPLAY_TYPE;
$theme_config[$i]['desc']    = TF_LOGO_DISPLAY_TYPE_DESC;
$theme_config[$i]['type']    = "selectpicker";
$theme_config[$i]['options'] = array('not_full' => TF_DISPLAY_TYPE_NOT_FULL, 'bg_full' => TF_DISPLAY_TYPE_BG_FULL, 'all_full' => TF_DISPLAY_TYPE_ALL_FULL);
$theme_config[$i]['images']  = array('not_full' => XOOPS_URL . '/modules/tad_themes/images/dt_not_full.png', 'bg_full' => XOOPS_URL . '/modules/tad_themes/images/dt_bg_full.png', 'all_full' => XOOPS_URL . '/modules/tad_themes/images/dt_all_full.png');
$theme_config[$i]['default'] = "bg_full";

//logo 是否套用陰影
$i++;
$theme_config[$i]['name']    = "logo_shadow";
$theme_config[$i]['text']    = TF_LOGO_SHADOW;
$theme_config[$i]['desc']    = TF_LOGO_SHADOW_DESC;
$theme_config[$i]['type']    = "yesno";
$theme_config[$i]['default'] = "1";

//logo 顯示區域底色
$i++;
$theme_config[$i]['name']    = "logo_bgcolor";
$theme_config[$i]['text']    = TF_LOGO_BGCOLOR;
$theme_config[$i]['desc']    = TF_LOGO_BGCOLOR_DESC;
$theme_config[$i]['type']    = "color";
$theme_config[$i]['default'] = "#689F38";
