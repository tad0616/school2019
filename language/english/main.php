<?php
include_once XOOPS_ROOT_PATH . '/modules/tadtools/language/' . $GLOBALS['xoopsConfig']['language'] . '/theme_common.php';

/**Custom settings of Languages **/
define('TF_SHOW_VAR', 'Show set variable information');
define('TF_SHOW_VAR_DESC', 'When the scene is developed, all the control variables and settings provided by tad_themes will be displayed');
define('TF_FOOTER_STYLE', 'End of page content style setting');
define('TF_FOOTER_STYLE_DESC', 'Use CSS syntax to control the appearance of the content at the end of the page');
define('TF_FONT_FAMILY', 'Main font settings');
define('TF_FONT_FAMILY_DEFAULT', '"Helvetica Neue", Helvetica, Arial, "Microsoft is black", sans-serif');
define('TF_FONT_FAMILY_DESC', 'Enter the font name, the blank part needs to be wrapped with "". For example: ' . TF_FONT_FAMILY_DEFAULT);
define('TF_USE_SHADOW_LOGO', 'Does the shadow contain logo');
define('TF_USE_SHADOW_LOGO_DESC', 'When the logo is over the sliding image, do you still want to add a shadow?');
define('TF_FOOTER_BG_CSS', 'End of page CSS setting');
define('TF_FOOTER_BG_CSS_DESC', 'Use this to set various background CSS settings, such as repeat mode, location...etc.');
define('TF_LEFT_SPARATE', 'Left area divider');
define('TF_LEFT_SPARATE_DESC', 'Do you want to add a separator between the left area and the main content');
define('TF_RIGHT_SPARATE', 'Right area divider');
define('TF_RIGHT_SPARATE_DESC', 'Is there a dividing line between the right area and the main content');
define('TF_SPARATE_STYLE', 'The style of the left and right area dividers');
define('TF_SPARATE_STYLE_DESC', 'The style of the left and right area dividers');
define('TF_MY_CODE', 'CSS or JS syntax to add to the end of the page');
define('TF_MY_CODE_DESC', 'Can load CSS or JS by yourself');

define('TF_LOGO_DISPLAY_TYPE', 'logo area display mode');
define('TF_LOGO_DISPLAY_TYPE_DESC', 'How to render the logo area');
define('TF_LOGO_SHADOW', 'Do you want to apply a shadow to the logo area');
define('TF_LOGO_SHADOW_DESC', 'If "Yes" will add a shadow around the logo area');
define('TF_LOGO_BGCOLOR', 'logo display area background color');
define('TF_LOGO_BGCOLOR_DESC', 'logo display area background color');
define('TF_LOGO_BG', 'Background of the logo area');
define('TF_LOGO_BG_DESC', 'If "Yes" will add a background to the logo area');
define('TF_LOGO_BG_REPEAT', 'logo background repeating method');
define('TF_LOGO_BG_REPEAT_DESC', 'Logo background repeating');
define('TF_LOGO_POSITION', 'Logo background image location');
define('TF_LOGO_POSITION_DESC', 'Logo background image location');

define('TF_NAV_DISPLAY_TYPE', 'Navigation column area display mode');
define('TF_NAV_DISPLAY_TYPE_DESC', 'How to render the navigation column');
define('TF_NAV_SHADOW', 'Do you want to apply a shadow to the navigation column area');
define('TF_NAV_SHADOW_DESC', 'If "Yes" will add a shadow around the navigation column area');

define('TF_SLIDE_DISPLAY_TYPE', 'Sliding area display mode');
define('TF_SLIDE_DISPLAY_TYPE_DESC', 'How to render the sliding view');
define('TF_SLIDE_SHADOW', 'Do you want to apply a shadow to the sliding map area');
define('TF_SLIDE_SHADOW_DESC', 'If "Yes" will add a shadow around the sliding image area');
define('TF_SLIDE_BGCOLOR', 'Sliding map display area background color');
define('TF_SLIDE_BGCOLOR_DESC', 'Sliding map display area background color');

define('TF_FOOTER_DISPLAY_TYPE', 'End of page display mode');
define('TF_FOOTER_DISPLAY_TYPE_DESC', 'How to render the footer');
define('TF_FOOTER_SHADOW', 'Do you want to apply a shadow at the end of the page');
define('TF_FOOTER_SHADOW_DESC', 'If "Yes" will add a shadow around the end of the page');
define('TF_FOOTER_BGCOLOR', 'The bottom of the page shows the background color');
define('TF_FOOTER_BGCOLOR_DESC', 'The bottom of the page shows the background color');
define('TF_FOOTER_IMG', 'End of page');
define('TF_FOOTER_IMG_DESC', 'Can upload the desired basemap yourself');
define('TF_FOOTER_COLOR', 'End of page text color');
define('TF_FOOTER_COLOR_DESC', 'Text color of the content at the end of the page');
define('TF_FOOTER_HEIGHT', 'The minimum height at the end of the page');
define('TF_FOOTER_HEIGHT_DESC', 'Set the minimum presentation height at the end of the page when there is no content');
define('TF_FOOTER_PADDING', 'End of text at the end of the page');
define('TF_FOOTER_PADDING_DESC', 'Respectively: upper right lower left');

define('TF_DISPLAY_TYPE_NOT_FULL', 'The content is in the middle');
define('TF_DISPLAY_TYPE_BG_FULL', 'Content is centered, background full version');
define('TF_DISPLAY_TYPE_ALL_FULL', 'The content is full version');

define('TF_CONTENT_DISPLAY_TYPE', 'Content area display mode');
define('TF_CONTENT_DISPLAY_TYPE_DESC', 'How to render the content area');
define('TF_CONTENT_SHADOW', 'Do you want to apply shadows in the content area');
define('TF_CONTENT_SHADOW_DESC', 'If "Yes" will add a shadow around the content area');
define('TF_USE_CONTAINER_WIDTH', 'Overall page display width');
define('TF_USE_CONTAINER_WIDTH_DESC', '12 is full version, will be left blank after 12 or so');
