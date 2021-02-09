<?php
$i = 0;

//slide 區域顯示模式
$i++;
$theme_config[$i]['name'] = "slide_display_type";
$theme_config[$i]['text'] = TF_SLIDE_DISPLAY_TYPE;
$theme_config[$i]['desc'] = TF_SLIDE_DISPLAY_TYPE_DESC;
$theme_config[$i]['type'] = "selectpicker";
$theme_config[$i]['options'] = ['not_full' => TF_DISPLAY_TYPE_NOT_FULL, 'bg_full' => TF_DISPLAY_TYPE_BG_FULL, 'all_full' => TF_DISPLAY_TYPE_ALL_FULL];
$theme_config[$i]['images'] = ['not_full' => XOOPS_URL . '/modules/tad_themes/images/dt_not_full.png', 'bg_full' => XOOPS_URL . '/modules/tad_themes/images/dt_bg_full.png', 'all_full' => XOOPS_URL . '/modules/tad_themes/images/dt_all_full.png'];
$theme_config[$i]['default'] = "not_full";

//slide 是否套用陰影
$i++;
$theme_config[$i]['name'] = "slide_shadow";
$theme_config[$i]['text'] = TF_SLIDE_SHADOW;
$theme_config[$i]['desc'] = TF_SLIDE_SHADOW_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//slide 顯示區域底色
$i++;
$theme_config[$i]['name'] = "slide_bgcolor";
$theme_config[$i]['text'] = TF_SLIDE_BGCOLOR;
$theme_config[$i]['desc'] = TF_SLIDE_BGCOLOR_DESC;
$theme_config[$i]['type'] = "color";
$theme_config[$i]['default'] = "transparent";

//slide 速度調整
$i++;
$theme_config[$i]['name'] = "slide_timeout";
$theme_config[$i]['text'] = TF_SLIDE_TIMEOUT;
$theme_config[$i]['desc'] = TF_SLIDE_TIMEOUT_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "3000";

//slide 顯示左右箭頭
$i++;
$theme_config[$i]['name'] = "slide_nav";
$theme_config[$i]['text'] = TF_SLIDE_NAV;
$theme_config[$i]['desc'] = TF_SLIDE_NAV_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//slide 上方距離
$i++;
$theme_config[$i]['name'] = "slide_mt";
$theme_config[$i]['text'] = TF_SLIDE_MT;
$theme_config[$i]['desc'] = TF_SLIDE_MT_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "0";

//slide 下方距離
$i++;
$theme_config[$i]['name'] = "slide_mb";
$theme_config[$i]['text'] = TF_SLIDE_MB;
$theme_config[$i]['desc'] = TF_SLIDE_MB_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "0";

//slide 圖片遮罩
$i++;
$theme_config[$i]['name'] = "slide_mask";
$theme_config[$i]['text'] = TF_SLIDE_MASK;
$theme_config[$i]['desc'] = TF_SLIDE_MASK_DESC;
$theme_config[$i]['type'] = "file";
$theme_config[$i]['default'] = "";
