<?php
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $GLOBALS['xoopsConfig']['language'] . '/theme_common.php';
/**自訂設定之語系**/
define('TF_SHOW_VAR', '顯示佈景變數資訊');
define('TF_SHOW_VAR_DESC', '佈景開發時，會顯示所有 tad_themes 提供的控制變數及設定值');
define('TF_FOOTER_STYLE', '頁尾內容樣式設定');
define('TF_FOOTER_STYLE_DESC', '可使用CSS語法控制頁尾內容的外觀');
define('TF_FONT_FAMILY', '主要字型設定');
define('TF_FONT_FAMILY_DEFAULT', '"Helvetica Neue",Helvetica,Arial,"微軟正黑體",sans-serif');
define('TF_FONT_FAMILY_DESC', '輸入字型名稱，有空白的部份需要用""包起來。如：' . TF_FONT_FAMILY_DEFAULT);
define('TF_USE_SHADOW_LOGO', '陰影是否包含logo');
define('TF_USE_SHADOW_LOGO_DESC', '當logo在滑動圖文之上時，是否仍要加上陰影？');
define('TF_FOOTER_BG_CSS', '頁尾底圖CSS設定');
define('TF_FOOTER_BG_CSS_DESC', '可利用此處設定各種背景CSS設定，例如重複方式、位置...等');
define('TF_LEFT_SPARATE', '左區域分隔線');
define('TF_LEFT_SPARATE_DESC', '左區域和主內容間是否加上分隔線');
define('TF_RIGHT_SPARATE', '右區域分隔線');
define('TF_RIGHT_SPARATE_DESC', '右區域和主內容間是否加上分隔線');
define('TF_SPARATE_STYLE', '左右區域分隔線的樣式');
define('TF_SPARATE_STYLE_DESC', '左右區域分隔線的樣式');
define('TF_MY_CODE', '欲加入頁尾的CSS或JS語法');
define('TF_MY_CODE_DESC', '可自行載入CSS或JS');

define('TF_LOGO_DISPLAY_TYPE', 'logo區域顯示模式');
define('TF_LOGO_DISPLAY_TYPE_DESC', '以何種方式來呈現logo區域');
define('TF_LOGO_SHADOW', 'logo區域是否要套用陰影');
define('TF_LOGO_SHADOW_DESC', '若「是」會在logo區域周圍加上陰影');
define('TF_LOGO_BGCOLOR', 'logo顯示區域底色');
define('TF_LOGO_BGCOLOR_DESC', 'logo顯示區域底色');

define('TF_LOGO_BG1', 'logo區域的底圖1');
define('TF_LOGO_BG1_DESC', '若「是」會在logo區域加上底圖1');
define('TF_LOGO_BG1_REPEAT', 'logo底圖1重複方式');
define('TF_LOGO_BG1_REPEAT_DESC', 'logo底圖1重複的方式');
define('TF_LOGO_BG1_POSITION', 'logo底圖1位置');
define('TF_LOGO_BG1_POSITION_DESC', 'logo底圖1起始的位置');
define('TF_LOGO_BG1_SIZE', 'logo底圖1縮放');
define('TF_LOGO_BG1_SIZE_DESC', 'logo底圖1縮放方式');

define('TF_LOGO_BG2', 'logo區域的底圖2');
define('TF_LOGO_BG2_DESC', '若「是」會在logo區域加上底圖2');
define('TF_LOGO_BG2_REPEAT', 'logo底圖2重複方式');
define('TF_LOGO_BG2_REPEAT_DESC', 'logo底圖2重複的方式');
define('TF_LOGO_BG2_POSITION', 'logo底圖2位置');
define('TF_LOGO_BG2_POSITION_DESC', 'logo底圖2起始的位置');
define('TF_LOGO_BG2_SIZE', 'logo底圖2縮放');
define('TF_LOGO_BG2_SIZE_DESC', 'logo底圖2縮放方式');

define('TF_SLIDE_DISPLAY_TYPE', '滑動圖區域顯示模式');
define('TF_SLIDE_DISPLAY_TYPE_DESC', '以何種方式來呈現滑動圖');
define('TF_SLIDE_SHADOW', '滑動圖區域是否要套用陰影');
define('TF_SLIDE_SHADOW_DESC', '若「是」會在滑動圖區域周圍加上陰影');
define('TF_SLIDE_BGCOLOR', '滑動圖顯示區域底色');
define('TF_SLIDE_BGCOLOR_DESC', '滑動圖顯示區域底色');
define('TF_SLIDE_TIMEOUT', '滑動圖顯示時間');
define('TF_SLIDE_TIMEOUT_DESC', '單位為毫秒');
define('TF_SLIDE_NAV', '是否顯示左右箭頭');
define('TF_SLIDE_NAV_DESC', '若「否」左右滑動的圖示會消失');

define('TF_FOOTER_DISPLAY_TYPE', '頁尾區域顯示模式');
define('TF_FOOTER_DISPLAY_TYPE_DESC', '以何種方式來呈現頁尾');
define('TF_FOOTER_SHADOW', '頁尾區域是否要套用陰影');
define('TF_FOOTER_SHADOW_DESC', '若「是」會在頁尾區域周圍加上陰影');
define('TF_FOOTER_BGCOLOR', '頁尾顯示區域底色');
define('TF_FOOTER_BGCOLOR_DESC', '頁尾顯示區域底色');
define('TF_FOOTER_IMG', '頁尾底圖');
define('TF_FOOTER_IMG_DESC', '可自行上傳想要的底圖');
define('TF_FOOTER_IMG_REPEAT', '頁尾底圖重複方式');
define('TF_FOOTER_IMG_REPEAT_DESC', '頁尾底圖重複方式');
define('TF_FOOTER_IMG_SIZE', '頁尾底圖縮放方式');
define('TF_FOOTER_IMG_SIZE_DESC', '頁尾底圖縮放方式');
define('TF_FOOTER_IMG_POSITION', '頁尾底圖位置');
define('TF_FOOTER_IMG_POSITION_DESC', '頁尾底圖位置');
define('TF_FOOTER_COLOR', '頁尾文字顏色');
define('TF_FOOTER_COLOR_DESC', '頁尾內容的文字顏色');
define('TF_FOOTER_HEIGHT', '頁尾最低高度');
define('TF_FOOTER_HEIGHT_DESC', '沒內容時可設定頁尾最低呈現高度');
define('TF_FOOTER_PADDING', '頁尾文字內距');
define('TF_FOOTER_PADDING_DESC', '分別為：上 右 下 左');

define('TF_DISPLAY_TYPE_NOT_FULL', '內容底色皆置中');
define('TF_DISPLAY_TYPE_BG_FULL', '內容置中，底色滿版');
define('TF_DISPLAY_TYPE_ALL_FULL', '內容底色皆滿版');

define('TF_CONTENT_DISPLAY_TYPE', '內容區域顯示模式');
define('TF_CONTENT_DISPLAY_TYPE_DESC', '以何種方式來呈現內容區');
define('TF_CONTENT_SHADOW', '內容區域是否要套用陰影');
define('TF_CONTENT_SHADOW_DESC', '若「是」會在內容區域周圍加上陰影');
define('TF_USE_CONTAINER_WIDTH', '整體頁面顯示寬度');
define('TF_USE_CONTAINER_WIDTH_DESC', '12即滿版，12以下左右會自動留空');

define('TF_LOGO_AUTO', '是否使用自動配對');
define('TF_LOGO_AUTO_DESC', '讓系統自動偵測網址某變數來自動切換 logo');
define('TF_LOGO_PATH', '圖示放置路徑');
define('TF_LOGO_PATH_DESC', '前後都要有 /，如：/uploads/logo/');
define('TF_LOGO_VAR', '自動配對變數名稱');
define('TF_LOGO_VAR_DESC', '欲偵測的網址變數名稱，如：nsn');
define('TF_LOGO_EXT', 'logo圖的副檔名');
define('TF_LOGO_EXT_DESC', '例如 jpg 或 png');

define('TF_BG_IMG', '背景圖');
define('TF_BG_COLOR', '背景顏色');
define('TF_BG_REPEAT', '背景重複');
define('TF_BG_REPEAT_NORMAL', '一般重複');
define('TF_BG_REPEAT_X', '僅橫向重複');
define('TF_BG_REPEAT_Y', '僅垂直重複');
define('TF_BG_NO_REPEAT', '不重複');
define('TF_BG_NO_REPEAT_COVER', '不重複，並放大圖片填滿畫面');
define('TF_BG_NO_REPEAT_CONTAIN', '不重複，並縮放以呈現完整圖片');
define('TF_BG_ATTACHMENT', '背景模式');
define('TF_BG_ATTACHMENT_SCROLL', '隨畫面捲動');
define('TF_BG_ATTACHMENT_FIXED', '固定不捲動');
define('TF_BG_POSITION', '背景位置');
define('TF_BG_POSITION_LT', '左上');
define('TF_BG_POSITION_LC', '左中');
define('TF_BG_POSITION_LB', '左下');
define('TF_BG_POSITION_RT', '右上');
define('TF_BG_POSITION_RC', '右中');
define('TF_BG_POSITION_RB', '右下');
define('TF_BG_POSITION_CC', '正中');
define('TF_BG_POSITION_CT', '上中');
define('TF_BG_POSITION_CB', '下中');
define('TF_BG_BG2', '背景底圖2');
define('TF_BG_BG2_DESC', '背景加上底圖2');
define('TF_BG_BG2_REPEAT', '背景底圖2重複方式');
define('TF_BG_BG2_REPEAT_DESC', '背景底圖2重複的方式');
define('TF_BG_BG2_POSITION', '背景底圖2位置');
define('TF_BG_BG2_POSITION_DESC', '背景底圖2起始的位置');
define('TF_BG_BG2_SIZE', '背景底圖2尺寸');
define('TF_BG_BG2_SIZE_DESC', '背景底圖2尺寸');
define('TF_BG_BG3', '背景底圖3');
define('TF_BG_BG3_DESC', '背景加上底圖3');
define('TF_BG_BG3_REPEAT', '背景底圖3重複方式');
define('TF_BG_BG3_REPEAT_DESC', '背景底圖2重複的方式');
define('TF_BG_BG3_POSITION', '背景底圖3位置');
define('TF_BG_BG3_POSITION_DESC', '背景底圖3起始的位置');
define('TF_BG_BG3_SIZE', '背景底圖3尺寸');
define('TF_BG_BG3_SIZE_DESC', '背景底圖3尺寸');

define('TF_BG_SIZE_NONE', '無');
define('TF_BG_SIZE_COVER', '放大圖片填滿畫面');
define('TF_BG_SIZE_CONTAIN', '縮放以呈現完整圖片');
define('TF_BG_SIZE_FULL', '滿版');

define('TF_NAV_DISPLAY_TYPE', '導覽列顯示模式');
define('TF_NAV_DISPLAY_TYPE_DESC', '以何種方式來呈現導覽列');
define('TF_NAV_SHADOW', '導覽列是否套用陰影');
define('TF_NAV_SHADOW_DESC', '若「是」會在導覽列區域周圍加上陰影');
define('TF_NAV_BG_OPACITY', '導覽列透明度');
define('TF_NAV_BG_OPACITY_DESC', '請設定 0（透明）~1（不透明）之間的小數值');
define('TF_NAV_BORDER_RADIUS', '導覽列圓角設定');
define('TF_NAV_BORDER_RADIUS_DESC', '可針對四個角設定圓角，如「8px 8px 0px 0px」，僅「' . TF_DISPLAY_TYPE_NOT_FULL . '」時有作用');
define('TF_NAV_MARGIN', '導覽列外間距設定');
define('TF_NAV_MARGIN_DESC', '可針對上右下左設定間距，如「8px 0px 8px 0px」');

define('TF_SLIDE_MT', '上方距離');
define('TF_SLIDE_MT_DESC', '滑動圖距離上方多少像素（px）');
define('TF_SLIDE_MB', '下方距離');
define('TF_SLIDE_MB_DESC', '下方距離下方多少像素（px）');

define('TF_NAV_MARGIN_TOP', '上方鎖定時，主內容區要距離上方多遠');
define('TF_NAV_MARGIN_TOP_DESC', '預設是 50（px），若覺得空太大，可自行縮小');
