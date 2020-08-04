<?php
$i = 0;

//導覽列區域顯示模式
$i++;
$theme_config[$i]['name'] = "nav_display_type";
$theme_config[$i]['text'] = TF_NAV_DISPLAY_TYPE;
$theme_config[$i]['desc'] = TF_NAV_DISPLAY_TYPE_DESC;
$theme_config[$i]['type'] = "selectpicker";
$theme_config[$i]['options'] = array('not_full' => TF_DISPLAY_TYPE_NOT_FULL, 'bg_full' => TF_DISPLAY_TYPE_BG_FULL, 'all_full' => TF_DISPLAY_TYPE_ALL_FULL);
$theme_config[$i]['images'] = array('not_full' => XOOPS_URL . '/modules/tad_themes/images/dt_not_full.png', 'bg_full' => XOOPS_URL . '/modules/tad_themes/images/dt_bg_full.png', 'all_full' => XOOPS_URL . '/modules/tad_themes/images/dt_all_full.png');
$theme_config[$i]['default'] = "not_full";

//nav 是否套用陰影
$i++;
$theme_config[$i]['name'] = "nav_shadow";
$theme_config[$i]['text'] = TF_NAV_SHADOW;
$theme_config[$i]['desc'] = TF_NAV_SHADOW_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//nav 背景透明度
$i++;
$theme_config[$i]['name'] = "nav_bg_opacity";
$theme_config[$i]['text'] = TF_NAV_BG_OPACITY;
$theme_config[$i]['desc'] = TF_NAV_BG_OPACITY_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "1";

//nav 圓角
$i++;
$theme_config[$i]['name'] = "nav_border_radius";
$theme_config[$i]['text'] = TF_NAV_BORDER_RADIUS;
$theme_config[$i]['desc'] = TF_NAV_BORDER_RADIUS_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "8px ";

//nav 間距
$i++;
$theme_config[$i]['name'] = "nav_margin";
$theme_config[$i]['text'] = TF_NAV_MARGIN;
$theme_config[$i]['desc'] = TF_NAV_MARGIN_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "15px  auto";
