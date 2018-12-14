<?php

$i = 0;

//導覽列區域顯示模式
$i++;
$theme_config[$i]['name']    = "nav_display_type";
$theme_config[$i]['text']    = TF_NAV_DISPLAY_TYPE;
$theme_config[$i]['desc']    = TF_NAV_DISPLAY_TYPE_DESC;
$theme_config[$i]['type']    = "select";
$theme_config[$i]['options'] = array('not_full' => TF_DISPLAY_TYPE_NOT_FULL, 'bg_full' => TF_DISPLAY_TYPE_BG_FULL, 'all_full' => TF_DISPLAY_TYPE_ALL_FULL);
$theme_config[$i]['default'] = "not_full";

//nav 是否套用陰影
$i++;
$theme_config[$i]['name']    = "nav_shadow";
$theme_config[$i]['text']    = TF_NAV_SHADOW;
$theme_config[$i]['desc']    = TF_NAV_SHADOW_DESC;
$theme_config[$i]['type']    = "yesno";
$theme_config[$i]['default'] = "1";
