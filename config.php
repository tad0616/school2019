<?php
//佈景種類是否可自訂
$theme_change = 0;

//預設佈景種類 bootstrap4 , bootstrap3 , html , mix
$theme_kind = 'bootstrap4';

//可選用佈景種類 bootstrap4 , bootstrap3 , html , mix （$theme_change=1 時才有用）
$theme_kind_arr = 'bootstrap4';

//引入哪些選單？ all(含 my_menu,admin,user),my_menu,admin,user
$menu_var_kind = 'my_menu';

//額外顏色設定 如： bootstrap3/themes/light/Cerulean
$theme_color = 'bootstrap4';

//是否為可選用佈景
$theme_set_allowed = 1;

/*
tabs-1 版面基礎設定
 */

$config_tabs[1] = 1;

//版面類型[自]，值： theme_type_1 ~ theme_type_8
$config_enable['theme_type'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'theme_type_5'];

//版面寬度[自]，值：若bootstrap模式，最大值為 12，若 html 模式，則輸入預設版面寬度，如： 980
$config_enable['theme_width'] = ['enable' => '0', 'min' => '', 'max' => '', 'require' => '1', 'default' => '12'];

//內容區顏色[theme_type_x.tpl]
$config_enable['base_color'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#ffffff'];

//左區域顏色[theme_type_1.tpl]
$config_enable['lb_color'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#f8f8f8'];

//中區域顏色[theme_type_x.tpl]
$config_enable['cb_color'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'transparent'];

//右區域顏色[theme_type_2~4.tpl]
$config_enable['rb_color'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#f8f8f8'];

//左區域寬度[theme_type_x.tpl]，值：若 bootstrap 模式，最大值為 12，若 html 模式，則輸入預設左區域寬度，如： 220
$config_enable['lb_width'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'auto'];

//中區域寬度[theme_type_1~8.tpl]，值：若 bootstrap 模式，最大值為 12，若 html 模式，則輸入預設右區域寬度，如： 220
$config_enable['cb_width'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '7'];

//右區域寬度[theme_type_2~8.tpl]，值：若 bootstrap 模式，最大值為 12，若 html 模式，則輸入預設右區域寬度，如： 220
$config_enable['rb_width'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'auto'];

//中左區塊寬度[無]
$config_enable['clb_width'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '50%'];

//中右區塊寬度[無]
$config_enable['crb_width'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '50%'];

//離上邊界距離[自]
$config_enable['margin_top'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '55px'];

//文字大小[theme_css.tpl]
$config_enable['font_size'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '1em'];

//離下邊界距離[自]
$config_enable['margin_bottom'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

//文字顏色[theme_css.tpl]
$config_enable['font_color'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#202020'];

//連結顏色[theme_css.tpl]
$config_enable['link_color'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#005ca8'];

//移到連結顏色[theme_css.tpl]
$config_enable['hover_color'] = ['enable' => '', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#a40019'];

/*
tabs-2 背景圖
 */

$config_tabs[2] = 1;

//上傳背景圖[theme_css.tpl]，值：可指定置於「themes/佈景/images/bg/」下的某一檔案名稱
$config_enable['bg_img'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => ''];

//背景顏色[theme_css.tpl]
$config_enable['bg_color'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#007fa0'];

//背景重複[theme_css.tpl]，值： repeat （重複）, repeat-x （水平重複）, repeat-y （垂直重複）, no-repeat （不重複）
$config_enable['bg_repeat'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'repeat'];

//背景縮放[theme_css.tpl]，值： cover （放大圖片填滿畫面）, contain （縮放以呈現完整圖片）
$config_enable['bg_size'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '', 'default' => 'auto'];

//背景模式[theme_css.tpl]，值： scroll （捲動）,fixed （固定）
$config_enable['bg_attachment'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'scroll'];

//背景位置[theme_css.tpl]，值： left top （預設，左上）, right top （右上）, left bottom （左下）, right bottom （右下）, center center （中中）, center top （中上）, center bottom （中下）
$config_enable['bg_position'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'center top'];

/*
tabs-3 滑動圖片
 */

$config_tabs[3] = 1;

//佈景圖片寬度[slideshow_responsive.tpl]，值：若bootstrap模式，最大值為 12，若 html 模式，則輸入預設佈景圖片寬度，如： 980
$config_enable['slide_width'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

//佈景圖片高度[slideshow_responsive.tpl]，值：數值，單位一律為 px
$config_enable['slide_height'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

//是否可上傳滑動圖片[slideshow_responsive.tpl]
$config_enable['use_slide'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '1'];

/*
tabs-4 logo圖
 */

$config_tabs[4] = 1;

// 上傳logo圖[logo.tpl]，值：可指定置於「themes/佈景/images/logo/」下的某一檔案名稱
$config_enable['logo_img'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'logo.png'];

//logo圖位置[logo.tpl]，值： slide （在滑動圖文上）, page （在頁面上）
$config_enable['logo_position'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'page'];

//Logo離上方距離[logo.tpl]，值：數值，單位一律為 px
$config_enable['logo_top'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

//Logo離右邊距離[logo.tpl]，值：數值，單位一律為 px
$config_enable['logo_right'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

//Logo離下方距離[logo.tpl]，值：數值，單位一律為 px
$config_enable['logo_bottom'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

//Logo離左邊距離[logo.tpl]，值：數值，單位一律為 px
$config_enable['logo_left'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

//Logo置中[logo.tpl]，值：1,0
$config_enable['logo_center'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

/*
tabs-5 區塊標題列
 */

$config_tabs[5] = 1;

//區塊標題文字大小[theme_css_blocks.tpl]，值：數值含單位
$config_enable['bt_text_size'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '1.3em'];

//區塊標題縮排[theme_css_blocks.tpl]，值：數值，單位一律為 px
$config_enable['bt_text_padding'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

//區塊標題文字顏色[theme_css_blocks.tpl]
$config_enable['bt_text'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#ffffff'];

//區塊標題背景顏色[theme_css_blocks.tpl]
$config_enable['bt_bg_color'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#007fa0'];

//區塊標題圓角設定[theme_css_blocks.tpl]，值： 1 （圓角）, 0 （直角）
$config_enable['bt_radius'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '1'];

//區塊標題設定按鈕[theme_css_blocks.tpl]，值： right （右）, left （左）
$config_enable['block_config'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'right'];

//區塊標題背景圖[theme_css_blocks.tpl]
$config_enable['bt_bg_img'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => ''];

//區塊標題背景重複[theme_css_blocks.tpl]，值： 1 （重複）, 0 （不重複）
$config_enable['bt_bg_repeat'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '0'];

//區塊整體樣式手動設定[theme_css_blocks.tpl]，值： 1 （重複）, 0 （不重複）
$config_enable['block_style'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'background: rgba(255, 255, 255, 0.5];
border: none;
border-radius: 6px;
padding: 0px;
margin:0px 0px 20px;', ];

//區塊標題區樣式手動設定[theme_css_blocks.tpl]，值： 1 （重複）, 0 （不重複）
$config_enable['block_title_style'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'padding:6px;
text-align:center;
font-family: 微軟正黑體;
text-shadow: 0px 1px #0c4d5b, 1px 0px #0c4d5b, -1px 0px #0c4d5b, 0px -1px #0c4d5b, -1px -1px #0c4d5b, 1px 1px #0c4d5b, 1px -1px #0c4d5b, -1px 1px #0c4d5b;', ];

//區塊內容區樣式手動設定[theme_css_blocks.tpl]，值： 1 （重複）, 0 （不重複）
$config_enable['block_content_style'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'padding: 5px 0px 10px;'];

/*
若沒指定位置（如上方預設），那就是全部區塊預設值，若欲指定位置，只要多一個索引值即可：
$config_enable['bt_xx']['leftBlock']：左區塊設定
$config_enable['bt_xx']['rightBlock']：右區塊設定
$config_enable['bt_xx']['centerBlock']：上中區塊設定
$config_enable['bt_xx']['centerLeftBlock']：上中左區塊設定
$config_enable['bt_xx']['centerRightBlock']：上中右區塊設定
$config_enable['bt_xx']['centerBottomBlock']：下中區塊設定
$config_enable['bt_xx']['centerBottomLeftBlock']：下中左區塊設定
$config_enable['bt_xx']['centerBottomRightBlock']：下中右區塊設定
$config_enable['bt_xx']['footerCenterBlock']：頁尾中區塊設定
$config_enable['bt_xx']['footerLeftBlock']：頁尾左區塊設定
$config_enable['bt_xx']['footerRightBlock']：頁尾右區塊設定
例如：
$config_enable['bt_bg_color']['leftBlock'] = ['enable'=>1, 'min' => '', 'max' => '', 'require'=>0 , 'default' => '#7CBBBB'];
$config_enable['bt_bg_color']['rightBlock'] = ['enable'=>1, 'min' => '', 'max' => '', 'require'=>0 , 'default' => '#D2C38E'];
 */
$config_enable['block_style']['footerCenterBlock'] = ['enable' => 1, 'min' => '', 'max' => '', 'require' => 0, 'default' => 'border: none;
border-radius: 6px;
padding: 0px;
margin:0px 0px 20px;', ];
$config_enable['block_style']['footerLeftBlock'] = ['enable' => 1, 'min' => '', 'max' => '', 'require' => 0, 'default' => 'border: none;
border-radius: 6px;
padding: 0px;
margin:0px 0px 20px;', ];
$config_enable['block_style']['footerRightBlock'] = ['enable' => 1, 'min' => '', 'max' => '', 'require' => 0, 'default' => 'border: none;
border-radius: 6px;
padding: 0px;
margin:0px 0px 20px;', ];
$config_enable['bt_bg_color']['leftBlock'] = ['enable' => 1, 'min' => '', 'max' => '', 'require' => 0, 'default' => '#ff7163'];
$config_enable['bt_bg_color']['rightBlock'] = ['enable' => 1, 'min' => '', 'max' => '', 'require' => 0, 'default' => '#ff7163'];

/*
tabs-6 導覽工具列
 */

$config_tabs[6] = 1;

//導覽工具列位置[navbar.tpl]，值： fixed-top （固定上方）, fixed-bottom （固定下方）, sticky-top（滑動圖片上方）, default （滑動圖片下方）, not-use （不使用）
$config_enable['navbar_pos'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'fixed-top'];

//導覽工具列 漸層顏色(top)[theme_css_navbar.tpl]
$config_enable['navbar_bg_top'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#e6e6e6'];

//導覽工具列 漸層顏色(bottom)[theme_css_navbar.tpl]
$config_enable['navbar_bg_bottom'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#e6e6e6'];

//導覽工具列 連結區塊底色[theme_css_navbar.tpl]
$config_enable['navbar_hover'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#00b39c'];

//上傳導覽列背景圖[navbar.tpl]，值：可指定置於「themes/佈景/images/nav_bg/」下的某一檔案名稱
$config_enable['navbar_img'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => ''];

//導覽工具列 文字顏色[theme_css_navbar.tpl]
$config_enable['navbar_color'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#0a0028'];

//導覽工具列 文字移過顏色[theme_css_navbar.tpl]
$config_enable['navbar_color_hover'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => '#ffffff'];

//導覽工具列 圖示顏色[navbar.tpl]，值： icon-white （白色圖案）, '' （黑色圖案）
$config_enable['navbar_icon'] = ['enable' => '0', 'min' => '', 'max' => '', 'require' => '0', 'default' => 'style='];

//導覽工具列 導覽選項上下距離[theme_css_navbar.tpl]
$config_enable['navbar_py'] = ['enable' => '1', 'min' => '2', 'max' => '30', 'require' => '1', 'default' => ''];

//導覽工具列 導覽選項左右距離[theme_css_navbar.tpl]
$config_enable['navbar_px'] = ['enable' => '1', 'min' => '2', 'max' => '30', 'require' => '1', 'default' => '15'];

// 上傳導覽列logo圖[navbar.tpl]，值：可指定置於「themes/佈景/images/navlogo/」下的某一檔案名稱
$config_enable['navlogo_img'] = ['enable' => '1', 'min' => '', 'max' => '', 'require' => '0', 'default' => ''];
