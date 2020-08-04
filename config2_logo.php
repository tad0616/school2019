<?php
require XOOPS_ROOT_PATH . '/themes/school2019/bg_config.php';

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

//logo 底圖1
$i++;
$theme_config[$i]['name'] = "logo_bg";
$theme_config[$i]['text'] = TF_LOGO_BG1;
$theme_config[$i]['desc'] = TF_LOGO_BG1_DESC;
$theme_config[$i]['type'] = "bg_file";
$theme_config[$i]['default'] = "";
$theme_config[$i]['options'] = $bg_file;
$theme_config[$i]['repeat'] = "no-repeat";
$theme_config[$i]['position'] = "right top";
$theme_config[$i]['size'] = "auto";

//logo 底圖重複方式
$i++;
$theme_config[$i]['name'] = "logo_bg2";
$theme_config[$i]['text'] = TF_LOGO_BG2;
$theme_config[$i]['desc'] = TF_LOGO_BG2_DESC;
$theme_config[$i]['type'] = "bg_file";
$theme_config[$i]['default'] = "config2_logo_bg2_3_2.png";
$theme_config[$i]['options'] = $bg_file;
$theme_config[$i]['repeat'] = "no-repeat";
$theme_config[$i]['position'] = "left top";
$theme_config[$i]['size'] = "auto";

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

//logo 對齊
$i++;
$theme_config[$i]['name'] = "logo_align";
$theme_config[$i]['text'] = TF_LOGO_ALIGN;
$theme_config[$i]['desc'] = TF_LOGO_ALIGN_DESC;
$theme_config[$i]['type'] = "radio";
$theme_config[$i]['options'] = array('justify-content-start' => TF_LOGO_ALIGN_L, 'justify-content-center' => TF_LOGO_ALIGN_C, 'justify-content-end' => TF_LOGO_ALIGN_R);
$theme_config[$i]['default'] = "";
