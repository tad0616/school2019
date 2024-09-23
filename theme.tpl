<!DOCTYPE html>
<html lang="<{$xoops_langcode|default:''}>">
    <head>
        <!--目前$_SESSION['bootstrap']="<{$smarty.session.bootstrap}>"; -->
        <!--將目前的資料夾名稱，設定為樣板標籤變數 theme_name-->
        <{assign var="theme_name" value=$xoTheme->folderName}>

        <!--載入由使用者設定的各項佈景變數-->
        <{* <{include file="$xoops_rootpath/modules/tadtools/themes_common/get_var.tpl"}> *}>

        <{if $container_width == 12}>
            <{assign var="container_width" value="100%"}>
        <{elseif $container_width == 11}>
            <{assign var="container_width" value="92%"}>
        <{elseif $container_width == 10}>
            <{assign var="container_width" value="83%"}>
        <{elseif $container_width == 9}>
            <{assign var="container_width" value="75%"}>
        <{elseif $container_width == 8}>
            <{assign var="container_width" value="67%"}>
        <{/if}>

        <{include file="$xoops_rootpath/modules/tadtools/themes_common/meta.tpl"}>
        <!-- 網站的標題及標語 -->
        <title><{$xoops_sitename|default:''}><{if $xoops_pagetitle|default:false}> - <{$xoops_pagetitle|default:''}><{/if}></title>

        <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/link_css.tpl"}>

        <!-- 給模組套用的樣板標籤開始 -->
<{$xoops_module_header|default:''}>
        <!-- 給模組套用的樣板標籤結束 -->

        <!-- 局部套用的樣式，如果有載入完整樣式 theme_css.tpl 那就不需要這一部份 -->
        <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/theme_css.tpl"}>

        <style type="text/css">
            #xoops_theme_left_zone{
            <{if $left_separate=='1'}>
                border-right:<{$separate_style|default:''}>;
            <{/if}>
            }

            #xoops_theme_right_zone{
            <{if $right_separate=='1'}>
                border-<{if $theme_type=="theme_type_3" or $theme_type=="theme_type_4" or $theme_type=="theme_type_8"}>top<{else}>left<{/if}>:<{$separate_style|default:''}>;
            <{/if}>
            }

            #xoops_theme_footer a,
            #xoops_theme_footer a:hover,
            #xoops_theme_footer a:active ,
            #xoops_theme_footer a:visited {
                color:<{$footer_color|default:''}>;
            }

            <{if $bg_bg2 and $bg_bg3}>
                body{
                    background-image: url('<{$bg_bg3|default:''}>'), url('<{$bg_bg2|default:''}>'), url('<{$bg_img|default:''}>');
                    background-position: <{$bg_bg3_position|default:''}>, <{$bg_bg2_position|default:''}>, <{$bg_position|default:''}>;
                    background-repeat: <{$bg_bg3_repeat|default:''}>, <{$bg_bg2_repeat|default:''}>, <{$bg_repeat|default:''}>;
                    background-size: <{$bg_bg3_size|default:''}>, <{$bg_bg2_size|default:''}>, <{$bg_size|default:''}>;
                }
            <{elseif $bg_bg2}>
                body{
                    background-image: url('<{$bg_bg2|default:''}>'), url('<{$bg_img|default:''}>');
                    background-position: <{$bg_bg2_position|default:''}>, <{$bg_position|default:''}>;
                    background-repeat: <{$bg_bg2_repeat|default:''}>, <{$bg_repeat|default:''}>;
                    background-size: <{$bg_bg2_size|default:''}>, <{$bg_size|default:''}>;
                }
            <{elseif $bg_bg3}>
                body{
                    background-image: url('<{$bg_bg3|default:''}>'),url('<{$bg_img|default:''}>');
                    background-position: <{$bg_bg3_position|default:''}>, <{$bg_position|default:''}>;
                    background-repeat: <{$bg_bg3_repeat|default:''}>, <{$bg_repeat|default:''}>;
                    background-size: <{$bg_bg3_size|default:''}>, <{$bg_size|default:''}>;
                }
            <{/if}>


            <{if $logo_bg|default:false}>
                #logo-container{
                    <{if $logo_display_type=='not_full'}>
                        background-image: none;
                    <{else}>
                        background-image: url('<{$logo_bg|default:''}>') <{if $logo_bg2|default:false}>, url('<{$logo_bg2|default:''}>')<{/if}>;
                        background-position: <{$logo_bg_position|default:''}><{if $logo_bg2_position|default:false}>, <{$logo_bg2_position|default:''}><{/if}>;
                        background-repeat: <{$logo_bg_repeat|default:''}><{if $logo_bg2_repeat|default:false}>, <{$logo_bg2_repeat|default:''}><{/if}>;
                        background-size: <{$logo_bg_size|default:''}><{if $logo_bg2_size|default:false}>, <{$logo_bg2_size|default:''}><{/if}>;
                    <{/if}>
                }

                #logo-container-display{
                    <{if $logo_display_type=='not_full'}>
                        background-image: url('<{$logo_bg|default:''}>') <{if $logo_bg2|default:false}>, url('<{$logo_bg2|default:''}>')<{/if}>;
                        background-position: <{$logo_bg_position|default:''}><{if $logo_bg2_position|default:false}>, <{$logo_bg2_position|default:''}><{/if}>;
                        background-repeat: <{$logo_bg_repeat|default:''}><{if $logo_bg2_repeat|default:false}>, <{$logo_bg2_repeat|default:''}><{/if}>;
                        background-size: <{$logo_bg_size|default:''}><{if $logo_bg2_size|default:false}>, <{$logo_bg2_size|default:''}><{/if}>;
                    <{else}>
                        background-image: none;
                    <{/if}>
                }
            <{/if}>

            #nav-container-display{
                background-color: transparent;
            }
            /* 不透明時 */
            <{if $nav_bg_opacity=='' or $nav_bg_opacity==1}>
                /* 沒有漸層 */
                <{if $navbar_bg_top==$navbar_bg_bottom}>
                    /* 非滿版狀態時 */
                    <{if ($nav_display_type=='not_full' and $navbar_pos!='fixed-top' and $navbar_pos!='fixed-bottom') or ($navbar_pos=='fixed-top' or $navbar_pos=='fixed-bottom')}>
                        #main-nav {
                            background-color: <{$navbar_bg_top|default:''}>;
                        }
                        #nav-container{
                            background-color: transparent;
                        }
                    <{else}>
                        /* 滿版狀態時，顏色放在外框，內容底透明 */
                        #main-nav {
                            background-color: transparent;
                        }
                        #nav-container{
                            background-color: <{$navbar_bg_top|default:''}>;
                        }
                    <{/if}>
                <{else}>
                    /* 有漸層 */
                    /* 非滿版狀態時 */
                    <{if ($nav_display_type=='not_full' and $navbar_pos!='fixed-top' and $navbar_pos!='fixed-bottom') or ($navbar_pos=='fixed-top' or $navbar_pos=='fixed-bottom')}>
                        #main-nav {
                            background: linear-gradient(<{$navbar_bg_top|default:''}>,<{$navbar_bg_bottom|default:''}>);
                        }
                        #nav-container{
                            background-color: transparent;
                        }
                    <{else}>
                        /* 滿版狀態時，顏色放在外框，內容底透明 */
                        #main-nav {
                            background-color: transparent;
                        }
                        #nav-container{
                            background: linear-gradient(<{$navbar_bg_top|default:''}>,<{$navbar_bg_bottom|default:''}>);
                        }

                    <{/if}>
                <{/if}>
            <{else}>
            /* 有設透明時 */
                /* 沒有漸層 */
                <{if $navbar_bg_top==$navbar_bg_bottom}>
                    /* 非滿版狀態時 */
                    <{if ($nav_display_type=='not_full' and $navbar_pos!='fixed-top' and $navbar_pos!='fixed-bottom') or ($navbar_pos=='fixed-top' or $navbar_pos=='fixed-bottom')}>
                        #main-nav {
                            background-color: rgba(<{$navbar_bg_top_rgb.r}>,<{$navbar_bg_top_rgb.g}>,<{$navbar_bg_top_rgb.b}>, <{$nav_bg_opacity|default:''}>);
                        }
                        #nav-container{
                            background-color: transparent;
                        }
                    <{else}>
                        /* 滿版狀態時，顏色放在外框，內容底透明 */
                        #main-nav {
                            background-color: transparent;
                        }
                        #nav-container{
                            background-color: rgba(<{$navbar_bg_top_rgb.r}>,<{$navbar_bg_top_rgb.g}>,<{$navbar_bg_top_rgb.b}>, <{$nav_bg_opacity|default:''}>);
                        }
                    <{/if}>
                <{else}>
                    /* 有漸層 */
                    /* 非滿版狀態時 */
                    <{if ($nav_display_type=='not_full' and $navbar_pos!='fixed-top' and $navbar_pos!='fixed-bottom') or ($navbar_pos=='fixed-top' or $navbar_pos=='fixed-bottom')}>
                        #main-nav {
                            background: linear-gradient(rgba(<{$navbar_bg_top_rgb.r}>,<{$navbar_bg_top_rgb.g}>,<{$navbar_bg_top_rgb.b}>, <{$nav_bg_opacity|default:''}>), rgb(<{$navbar_bg_bottom_rgb.r}>,<{$navbar_bg_bottom_rgb.g}>,<{$navbar_bg_bottom_rgb.b}>, <{$nav_bg_opacity|default:''}>));
                        }
                        #nav-container{
                            background-color: transparent;
                        }
                    <{else}>
                        /* 滿版狀態時，顏色放在外框，內容底透明 */
                        #main-nav {
                            background-color: transparent;
                        }
                        #nav-container{
                            background: linear-gradient(rgba(<{$navbar_bg_top_rgb.r}>,<{$navbar_bg_top_rgb.g}>,<{$navbar_bg_top_rgb.b}>, <{$nav_bg_opacity|default:''}>), rgb(<{$navbar_bg_bottom_rgb.r}>,<{$navbar_bg_bottom_rgb.g}>,<{$navbar_bg_bottom_rgb.b}>, <{$nav_bg_opacity|default:''}>));
                        }
                    <{/if}>
                <{/if}>
            <{/if}>

            /* nav_display_type=<{$nav_display_type|default:''}>, navbar_pos=<{$navbar_pos|default:''}> */
            <{assign var="nav_margin_y" value="$nav_margin|substr:0:1"}>
            <{if $nav_margin_y==0 or $nav_margin_y==''}>
                <{assign var="nav_border_radius" value="0"}>
            <{/if}>
            <{if $nav_border_radius and $nav_display_type=='not_full' and $navbar_pos!='fixed-top' and $navbar_pos!='fixed-bottom'}>
                #main-nav {
                    border-radius: <{$nav_border_radius|default:''}>;
                }
            <{/if}>

            <{if $navbar_pos=='fixed-top'}>
                #main-nav {
                    min-height: 50px;
                }
            <{/if}>


            <{if $nav_shadow=='1'}>
                <{if $nav_display_type=='not_full'}>
                    #main-nav {
                        <{if $nav_margin_y==0 or $nav_margin_y==''}>
                            box-shadow: 2px 0px 2px 0px  rgb(51, 51, 51, 0.7),-2px 0px 2px 0px  rgb(51, 51, 51, 0.7) ;
                        <{else}>
                            box-shadow: 0px 0px 5px 1px rgb(51, 51, 51);
                        <{/if}>
                    }
                <{else}>
                    #nav-container {
                        <{if $nav_margin_y==0 or $nav_margin_y==''}>
                            box-shadow: 2px 0px 2px 0px  rgb(51, 51, 51, 0.7),-2px 0px 2px 0px  rgb(51, 51, 51, 0.7) ;
                        <{else}>
                            box-shadow: 0px 0px 5px 1px rgb(51, 51, 51);
                        <{/if}>
                    }
                <{/if}>
            <{/if}>


            #footer-container{
                <{if $footer_display_type!='not_full'}>
                    background-repeat: <{$footer_img_repeat|default:''}>;
                    background-position: <{$footer_img_position|default:''}>;
                    background-size: <{$footer_img_size|default:''}>;
                <{/if}>
            }

            #footer-container-display{
                <{if $footer_display_type=='not_full'}>
                    background-repeat: <{$footer_img_repeat|default:''}>;
                    background-position: <{$footer_img_position|default:''}>;
                    background-size: <{$footer_img_size|default:''}>;
                <{/if}>
            }

            #xoops_theme_slide{
                <{if $slide_mt|default:false}>margin-top: <{$slide_mt|default:''}>px;<{/if}>
                <{if $slide_mb|default:false}>margin-bottom: <{$slide_mb|default:''}>px;<{/if}>
            }

            #logo-container>.container,
            #slide-container>.container,
            #content-container,
            #footer-container
            {
                max-width: 100%;
            }

            @media (min-width: 768px) {

                #logo-container>.container
                {
                    max-width: <{if $logo_display_type=='all_full'}>100%<{else}><{$container_width|default:''}><{/if}>;
                }

                #slide-container>.container
                {
                    max-width: <{if $slide_display_type=='all_full'}>100%<{else}><{$container_width|default:''}><{/if}>;
                }

                #content-container
                {
                    max-width: <{if $content_display_type!='all_full'}><{$container_width|default:''}><{else}>100%<{/if}>;
                }

                #footer-container
                {
                    max-width: <{if $footer_display_type!='all_full'}><{$container_width|default:''}><{else}>100%<{/if}>;
                }
            }


        </style>

        <!-- 載入bootstrap -->
        <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/bootstrap_js.tpl"}>
    </head>

    <body>
        <{if $margin_top|default:false}><div style="margin-top: <{$margin_top|default:''}>;"></div><{/if}>
        <!-- logo區域 -->
        <{if $logo_img and $logo_position=="page"}>
            <div id="logo-container">
                <div class="container">
                    <{assign var="mylogofile" value="$xoops_rootpath$logo_path`$smarty.get.$logo_var`.$logo_ext"}>
                    <div id="logo-container-display" class="row <{if $logo_align|default:false}>d-flex <{$logo_align|default:''}><{/if}> <{if $logo_shadow=='1' and $logo_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                        <{if $logo_auto==1 and $smarty.server.REQUEST_URI|strpos:$smarty.get.$logo_var!==false and $mylogofile|file_exists}>
                            <a href="<{$xoops_url}>/index.php?<{$logo_var|default:''}>=<{$smarty.get.$logo_var}>"><img id="website_logo" src="<{$xoops_url}><{$logo_path|default:''}><{$smarty.get.$logo_var}>.<{$logo_ext|default:''}>" style="max-width: 100%;<{if $logo_position=="slide"}>position: absolute; z-index: 5; <{$logo_place|default:''}><{else}>position: relative; z-index:10;<{/if}>" alt="<{$xoops_sitename|default:''}>" title="<{$xoops_sitename|default:''}>" class="img-fluid"></a>
                        <{else}>
                            <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/logo.tpl"}>
                        <{/if}>
                    </div>
                </div>
            </div>
        <{/if}>

        <!-- 導覽列區域 -->
        <{if $navbar_pos=='sticky-top'}>
            <{include file="$xoops_rootpath/themes/school2019/tpl/nav-container.tpl"}>
        <{/if}>

        <!-- 滑動圖區域 -->
        <{if $use_slide }>
            <div id="slide-container">
                <div class="container">
                    <div id="xoops_theme_slide" class="row  <{if $slide_shadow=='1' and $slide_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                        <div id="slide-container-display" style="width:100%; position:relative; z-index:1;">
                            <{include file="$xoops_rootpath/themes/school2019/tpl/slideshow_responsive.tpl"}>
                            <{if $slide_mask|default:false}>
                                <img src="<{$slide_mask|default:''}>" alt="mask" class="img-fluid" style="width:100%; position:absolute; z-index:2; left:0px; top:0px;">
                            <{elseif $slide_def_mask}>
                                <img src="<{$xoops_url}>/uploads/tad_themes/school2019/mask/<{$slide_def_mask|default:''}>.svg" alt="mask" class="img-fluid" style="width:100%; position:absolute; z-index:2; left:0px; top:0px;">
                            <{/if}>
                        </div>
                    </div>
                </div>
            </div>
        <{/if}>

        <!-- 導覽列區域 -->
        <{if $navbar_pos=='default'}>
            <{include file="$xoops_rootpath/themes/school2019/tpl/nav-container.tpl"}>
        <{/if}>

        <!-- 主內容區域 -->
        <div class="container" id="content-container">
            <div id="xoops_theme_content" class="row <{if $content_shadow=='1' and $content_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                <div id="content-container-display" style="<{$content_zone|default:''}>" class="col-sm-12">
                    <!-- 載入布局 -->
                    <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/$theme_type.tpl"}>

                    <!-- 顯示參數，開發用，開發完可刪除 -->
                    <{if $show_var=='1'}><{include file="$xoops_rootpath/modules/tadtools/themes_common/show_var.tpl"}><{/if}>
                </div>
            </div>
        </div>

        <!-- 頁尾區域 -->
        <div class="container" id="footer-container">
            <div id="xoops_theme_footer" class="row <{if $footer_shadow=='1' and $footer_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                <div id="footer-container-display" class="col-sm-12">
                    <{if $xoops_isadmin|default:false}><a href="<{$xoops_url}>/modules/system/admin.php?fct=preferences&op=show&confcat_id=3" class="block_config"></a><{/if}>

                    <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/footerBlock.tpl"}>

                    <{$xoops_footer|default:''}>
                </div>
            </div>
        </div>

        <{if $navbar_pos=='fixed-top' or $navbar_pos=='fixed-bottom'}>
            <div id="nav-container-display" style="width:100%;">
                <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/navbar.tpl"}>
            </div>
        <{/if}>


        <!-- 載入自訂js -->
        <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/my_js.tpl"}>
        <{$my_code|default:''}>
        <{if $margin_bottom|default:false}><div style="margin-bottom: <{$margin_bottom|default:''}>px;"></div><{/if}>
    </body>
</html>