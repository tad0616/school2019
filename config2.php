<?php
require XOOPS_ROOT_PATH . '/themes/school2019/bg_config.php';

$i = 0;
$theme_config[$i]['name'] = "show_var";
$theme_config[$i]['text'] = TF_SHOW_VAR;
$theme_config[$i]['desc'] = TF_SHOW_VAR_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//頁尾區域顯示模式
$i++;
$theme_config[$i]['name'] = "footer_display_type";
$theme_config[$i]['text'] = TF_FOOTER_DISPLAY_TYPE;
$theme_config[$i]['desc'] = TF_FOOTER_DISPLAY_TYPE_DESC;
$theme_config[$i]['type'] = "selectpicker";
$theme_config[$i]['options'] = ['not_full' => TF_DISPLAY_TYPE_NOT_FULL, 'bg_full' => TF_DISPLAY_TYPE_BG_FULL, 'all_full' => TF_DISPLAY_TYPE_ALL_FULL];
$theme_config[$i]['images'] = ['not_full' => XOOPS_URL . '/modules/tad_themes/images/dt_not_full.png', 'bg_full' => XOOPS_URL . '/modules/tad_themes/images/dt_bg_full.png', 'all_full' => XOOPS_URL . '/modules/tad_themes/images/dt_all_full.png'];
$theme_config[$i]['default'] = "bg_full";

//頁尾 是否套用陰影
$i++;
$theme_config[$i]['name'] = "footer_shadow";
$theme_config[$i]['text'] = TF_FOOTER_SHADOW;
$theme_config[$i]['desc'] = TF_FOOTER_SHADOW_DESC;
$theme_config[$i]['type'] = "yesno";
$theme_config[$i]['default'] = "0";

//頁尾底圖
$i++;
$theme_config[$i]['name'] = "footer_img";
$theme_config[$i]['text'] = TF_FOOTER_IMG;
$theme_config[$i]['desc'] = TF_FOOTER_IMG_DESC;
$theme_config[$i]['type'] = "bg_file";
$theme_config[$i]['default'] = "";
$theme_config[$i]['options'] = $bg_file;
$theme_config[$i]['repeat'] = "no-repeat";
$theme_config[$i]['position'] = "left top";
$theme_config[$i]['size'] = "contain";

//頁尾底圖CSS設定
$i++;
$theme_config[$i]['name'] = "foot_bg_css";
$theme_config[$i]['text'] = TF_FOOTER_BG_CSS;
$theme_config[$i]['desc'] = TF_FOOTER_BG_CSS_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "";

//頁尾高度
$i++;
$theme_config[$i]['name'] = "footer_height";
$theme_config[$i]['text'] = TF_FOOTER_HEIGHT;
$theme_config[$i]['desc'] = TF_FOOTER_HEIGHT_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "200px";

//頁尾底色
$i++;
$theme_config[$i]['name'] = "footer_bgcolor";
$theme_config[$i]['text'] = TF_FOOTER_BGCOLOR;
$theme_config[$i]['desc'] = TF_FOOTER_BGCOLOR_DESC;
$theme_config[$i]['type'] = "color";
$theme_config[$i]['default'] = "transparent";

//頁尾文字內距
$i++;
$theme_config[$i]['name'] = "footer_padding";
$theme_config[$i]['text'] = TF_FOOTER_PADDING;
$theme_config[$i]['desc'] = TF_FOOTER_PADDING_DESC;
$theme_config[$i]['type'] = "text";
$theme_config[$i]['default'] = "20px";

//頁尾文字顏色
$i++;
$theme_config[$i]['name'] = "footer_color";
$theme_config[$i]['text'] = TF_FOOTER_COLOR;
$theme_config[$i]['desc'] = TF_FOOTER_COLOR_DESC;
$theme_config[$i]['type'] = "color";
$theme_config[$i]['default'] = "#ffffff";

//頁尾內容樣式設定
$i++;
$theme_config[$i]['name'] = "footer_style";
$theme_config[$i]['text'] = TF_FOOTER_STYLE;
$theme_config[$i]['desc'] = TF_FOOTER_STYLE_DESC;
$theme_config[$i]['type'] = "textarea";
$theme_config[$i]['default'] = "background: rgba(0, 0, 0, 0.5);
margin:80px auto 10px;
line-height:1.5;
border-radius: 10px;";

//我要加入的js或css
$i++;
$theme_config[$i]['name'] = "my_code";
$theme_config[$i]['text'] = TF_MY_CODE;
$theme_config[$i]['desc'] = TF_MY_CODE_DESC;
$theme_config[$i]['type'] = "textarea";
$theme_config[$i]['default'] = "";

//網站縮圖
$i++;
$theme_config[$i]['name'] = "og_image";
$theme_config[$i]['text'] = TF_OG_FILE;
$theme_config[$i]['desc'] = TF_OG_FILE_DESC;
$theme_config[$i]['type'] = "file";
$theme_config[$i]['default'] = "";
