<?php

$i = 0;
//外框是否套用 container
$i++;
$theme_config[$i]['name'] = "container_width";
$theme_config[$i]['text'] = TF_USE_CONTAINER_WIDTH;
$theme_config[$i]['desc'] = TF_USE_CONTAINER_WIDTH_DESC;
$theme_config[$i]['type'] = "radio";
$theme_config[$i]['options'] = array(12 => 12, 11 => 11, 10 => 10, 9 => 9, 8 => 8);
$theme_config[$i]['default'] = "10";

//內容區域顯示模式
$i++;
$theme_config[$i]['name'] = "content_display_type";
$theme_config[$i]['text'] = TF_CONTENT_DISPLAY_TYPE;
$theme_config[$i]['desc'] = TF_CONTENT_DISPLAY_TYPE_DESC;
$theme_config[$i]['type'] = "selectpicker";
$theme_config[$i]['options'] = array('not_full' => TF_DISPLAY_TYPE_NOT_FULL, 'bg_full' => TF_DISPLAY_TYPE_BG_FULL, 'all_full' => TF_DISPLAY_TYPE_ALL_FULL);
$theme_config[$i]['images'] = array('not_full' => XOOPS_URL . '/modules/tad_themes/images/dt_not_full.png', 'bg_full' => XOOPS_URL . '/modules/tad_themes/images/dt_bg_full.png', 'all_full' => XOOPS_URL . '/modules/tad_themes/images/dt_all_full.png');
$theme_config[$i]['default'] = "not_full";

//外框是否套用陰影
$i++;
$theme_config[$i]['name'] = "content_shadow";
$theme_config[$i]['text'] = TF_CONTENT_SHADOW;
$theme_config[$i]['desc'] = TF_CONTENT_SHADOW_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//左區域和主內容間是否加上分隔線
$i++;
$theme_config[$i]['name'] = "left_separate";
$theme_config[$i]['text'] = TF_LEFT_SPARATE;
$theme_config[$i]['desc'] = TF_LEFT_SPARATE_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//右區域和主內容間是否加上分隔線
$i++;
$theme_config[$i]['name'] = "right_separate";
$theme_config[$i]['text'] = TF_RIGHT_SPARATE;
$theme_config[$i]['desc'] = TF_RIGHT_SPARATE_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//左右區域和主內容間的分隔線樣式
$i++;
$theme_config[$i]['name'] = "separate_style";
$theme_config[$i]['text'] = TF_SPARATE_STYLE;
$theme_config[$i]['desc'] = TF_SPARATE_STYLE_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "1px dashed gray";

//字型設定
$i++;
$theme_config[$i]['name'] = "font_family";
$theme_config[$i]['text'] = TF_FONT_FAMILY;
$theme_config[$i]['desc'] = TF_FONT_FAMILY_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "";
