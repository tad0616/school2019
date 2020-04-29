<!DOCTYPE html>
<html lang="<{$xoops_langcode}>">
    <head>
        <!--目前$_SESSION['bootstrap']="<{php}>echo $_SESSION['bootstrap'];<{/php}>"; -->
        <!--將目前的資料夾名稱，設定為樣板標籤變數 theme_name-->
        <{assign var=theme_name value=$xoTheme->folderName}>

        <!--載入由使用者設定的各項佈景變數-->
        <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/get_var.tpl"}>

        <{includeq file="$xoops_rootpath/modules/tadtools/themes_common/meta.tpl"}>
        <!-- 網站的標題及標語 -->
        <title><{$xoops_sitename}><{if $xoops_pagetitle}> - <{$xoops_pagetitle}><{/if}></title>

        <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/link_css.tpl"}>

        <!-- 給模組套用的樣板標籤開始 -->
<{$xoops_module_header}>
        <!-- 給模組套用的樣板標籤結束 -->

        <!-- 局部套用的樣式，如果有載入完整樣式 theme_css.tpl 那就不需要這一部份 -->
        <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/theme_css.tpl"}>
        <{if $navbar_pos=='fixed-top'}>
            <{assign var=margin_top value=$nav_margin_top}>
        <{/if}>
        <style type="text/css">
            #xoops_theme_left_zone{
            <{if $left_separate=='1'}>
                border-right:<{$separate_style}>;
            <{/if}>
            }

            #xoops_theme_right_zone{
            <{if $right_separate=='1'}>
                border-<{if $theme_type=="theme_type_3" or $theme_type=="theme_type_4" or $theme_type=="theme_type_8"}>top<{else}>left<{/if}>:<{$separate_style}>;
            <{/if}>
            }

            #xoops_theme_footer a,
            #xoops_theme_footer a:hover,
            #xoops_theme_footer a:active ,
            #xoops_theme_footer a:visited {
                color:<{$footer_color}>;
            }

            <{if $bg_bg2 and $bg_bg3}>
                body{
                    background-image: url('<{$bg_bg3}>'), url('<{$bg_bg2}>'), url('<{$bg_img}>');
                    background-position: <{$bg_bg3_position}>, <{$bg_bg2_position}>, <{$bg_position}>;
                    background-repeat: <{$bg_bg3_repeat}>, <{$bg_bg2_repeat}>, <{$bg_repeat}>;
                    background-size: <{$bg_bg3_size}>, <{$bg_bg2_size}>, <{$bg_size}>;
                }
            <{elseif $bg_bg2}>
                body{
                    background-image: url('<{$bg_bg2}>'), url('<{$bg_img}>');
                    background-position: <{$bg_bg2_position}>, <{$bg_position}>;
                    background-repeat: <{$bg_bg2_repeat}>, <{$bg_repeat}>;
                    background-size: <{$bg_bg2_size}>, <{$bg_size}>;
                }
            <{elseif $bg_bg3}>
                body{
                    background-image: url('<{$bg_bg3}>'),url('<{$bg_img}>');
                    background-position: <{$bg_bg3_position}>, <{$bg_position}>;
                    background-repeat: <{$bg_bg3_repeat}>, <{$bg_repeat}>;
                    background-size: <{$bg_bg3_size}>, <{$bg_size}>;
                }
            <{/if}>


            <{if $logo_bg}>
                #logo-container{
                    <{if $logo_display_type!='not_full'}>
                    background-image: url('<{$logo_bg}>') <{if $logo_bg2}>, url('<{$logo_bg2}>')<{/if}>;
                    background-position: <{$logo_bg_position}><{if $logo_bg2_position}>, <{$logo_bg2_position}><{/if}>;
                    background-repeat: <{$logo_bg_repeat}><{if $logo_bg2_repeat}>, <{$logo_bg2_repeat}><{/if}>;
                    background-size: <{$logo_bg_size}><{if $logo_bg2_size}>, <{$logo_bg2_size}><{/if}>;
                    <{else}>
                    background-image: none;
                    <{/if}>
                }

                #logo-container-display{
                    <{if $logo_display_type=='not_full'}>
                    background-image: url('<{$logo_bg}>') <{if $logo_bg2}>, url('<{$logo_bg2}>')<{/if}>;
                    background-position: <{$logo_bg_position}><{if $logo_bg2_position}>, <{$logo_bg2_position}><{/if}>;
                    background-repeat: <{$logo_bg_repeat}><{if $logo_bg2_repeat}>, <{$logo_bg2_repeat}><{/if}>;
                    background-size: <{$logo_bg_size}><{if $logo_bg2_size}>, <{$logo_bg2_size}><{/if}>;
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
                            background-color: <{$navbar_bg_top}>;
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
                            background-color: <{$navbar_bg_top}>;
                        }
                    <{/if}>
                <{else}>
                    /* 有漸層 */
                    /* 非滿版狀態時 */
                    <{if ($nav_display_type=='not_full' and $navbar_pos!='fixed-top' and $navbar_pos!='fixed-bottom') or ($navbar_pos=='fixed-top' or $navbar_pos=='fixed-bottom')}>
                        #main-nav {
                            background: linear-gradient(<{$navbar_bg_top}>,<{$navbar_bg_bottom}>);
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
                            background: linear-gradient(<{$navbar_bg_top}>,<{$navbar_bg_bottom}>);
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
                            background-color: rgba(<{$navbar_bg_top_rgb.r}>,<{$navbar_bg_top_rgb.g}>,<{$navbar_bg_top_rgb.b}>, <{$nav_bg_opacity}>);
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
                            background-color: rgba(<{$navbar_bg_top_rgb.r}>,<{$navbar_bg_top_rgb.g}>,<{$navbar_bg_top_rgb.b}>, <{$nav_bg_opacity}>);
                        }
                    <{/if}>
                <{else}>
                    /* 有漸層 */
                    /* 非滿版狀態時 */
                    <{if ($nav_display_type=='not_full' and $navbar_pos!='fixed-top' and $navbar_pos!='fixed-bottom') or ($navbar_pos=='fixed-top' or $navbar_pos=='fixed-bottom')}>
                        #main-nav {
                            background: linear-gradient(rgba(<{$navbar_bg_top_rgb.r}>,<{$navbar_bg_top_rgb.g}>,<{$navbar_bg_top_rgb.b}>, <{$nav_bg_opacity}>), rgb(<{$navbar_bg_bottom_rgb.r}>,<{$navbar_bg_bottom_rgb.g}>,<{$navbar_bg_bottom_rgb.b}>, <{$nav_bg_opacity}>));
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
                            background: linear-gradient(rgba(<{$navbar_bg_top_rgb.r}>,<{$navbar_bg_top_rgb.g}>,<{$navbar_bg_top_rgb.b}>, <{$nav_bg_opacity}>), rgb(<{$navbar_bg_bottom_rgb.r}>,<{$navbar_bg_bottom_rgb.g}>,<{$navbar_bg_bottom_rgb.b}>, <{$nav_bg_opacity}>));
                        }
                    <{/if}>
                <{/if}>
            <{/if}>

            /* nav_display_type=<{$nav_display_type}>, navbar_pos=<{$navbar_pos}> */
            <{if $nav_border_radius and $nav_display_type=='not_full' and $navbar_pos!='fixed-top' and $navbar_pos!='fixed-bottom'}>
                #main-nav {
                    border-radius: <{$nav_border_radius}>;
                }
            <{/if}>

            <{if $navbar_pos=='fixed-top'}>
                #main-nav {
                    min-height: 50px;
                }
            <{/if}>


            <{if $nav_margin!=''}>
                #nav-container {
                    margin: <{$nav_margin}>;
                }
            <{/if}>

            <{if $nav_shadow=='1'}>
                <{if $nav_display_type=='not_full'}>
                    #main-nav {
                        box-shadow: rgb(51, 51, 51) 0px 0px 5px 1px;
                    }
                <{else}>
                    #nav-container {
                        box-shadow: rgb(51, 51, 51) 0px 0px 5px 1px;
                    }
                <{/if}>
            <{/if}>


            #footer-container{
                <{if $footer_display_type!='not_full'}>
                    background-repeat: <{$footer_img_repeat}>;
                    background-position: <{$footer_img_position}>;
                    background-size: <{$footer_img_size}>;
                <{/if}>
            }

            #footer-container-display{
                <{if $footer_display_type=='not_full'}>
                    background-repeat: <{$footer_img_repeat}>;
                    background-position: <{$footer_img_position}>;
                    background-size: <{$footer_img_size}>;
                <{/if}>
            }

            #xoops_theme_slide{
                <{if $slide_mt}>margin-top: <{$slide_mt}>px;<{/if}>
                <{if $slide_mb}>margin-bottom: <{$slide_mb}>px;<{/if}>
            }

            blockquote {
                position: relative;
                text-align: left;
                padding: 1.2em 0 2em 38px;
                border: none;
                margin: 20px auto 20px;
                max-width: 800px;
                width:100%;
                display: block;
            }

            blockquote:after {
                content: "";
                display: block;
                width: 2px;
                height: 100%;
                position: absolute;
                left: 0;
                color: #66cc66;
                top: 0;
                background: -moz-linear-gradient(top,#66cc66 0%,#66cc66 60%,rgba(255,255,255,0) 100%);
                background: -webkit-linear-gradient(top,#66cc66 0%,#66cc66 60%,rgba(255,255,255,0) 100%);
                /* background: linear-gradient(to bottom,#66cc66 0%,#66cc66 60%,rgba(255,255,255,0) 100%); */
            }


            blockquote > cite,
            blockquote > p > cite {
                display: block;
                font-size: 1.1em;
                line-height: 1.3em;
                font-weight: 700;
                font-style: normal;
                margin-top: 1.1em;
                letter-spacing: 0;
                font-style:italic;
            }



        </style>
    </head>

    <body>
        <{if $margin_top}><div style="margin-top: <{$margin_top}>px;"></div><{/if}>
        <!-- logo區域 -->
        <{if $logo_img and $logo_position=="page"}>
            <div class="container-fluid" id="logo-container">
                <div class="row <{if $logo_shadow=='1' and $logo_display_type!='not_full'}>xoops_content_shadow<{/if}>">
                    <div class="col-sm"></div>
                    <div class="col-sm-<{if $logo_display_type=='all_full'}>12<{else}><{$container_width}><{/if}>">
                        <{assign var=mylogofile value=$xoops_rootpath$logo_path`$smarty.get.$logo_var`.$logo_ext}>
                        <div id="logo-container-display" class="row <{if $logo_shadow=='1' and $logo_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                            <{if $logo_auto==1 and $smarty.server.REQUEST_URI|strpos:$smarty.get.$logo_var!==false and $mylogofile|file_exists}>
                                <a href="<{$xoops_url}>/index.php?<{$logo_var}>=<{$smarty.get.$logo_var}>"><img id="website_logo" src="<{$xoops_url}><{$logo_path}><{$smarty.get.$logo_var}>.<{$logo_ext}>" style="max-width: 100%;<{if $logo_position=="slide"}>position: absolute; z-index: 5; <{$logo_place}><{else}>position: relative; z-index:10;<{/if}>" alt="<{$xoops_sitename}>" title="<{$xoops_sitename}>" class="img-fluid"></a>
                            <{else}>
                                <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/logo.tpl"}>
                            <{/if}>
                        </div>
                    </div>
                    <div class="col-sm"></div>
                </div>
            </div>
        <{/if}>

        <!-- 導覽列區域 -->
        <{if $navbar_pos=='sticky-top'}>
            <{includeq file="$xoops_rootpath/themes/school2019/tpl/nav-container.tpl"}>
        <{/if}>

        <!-- 滑動圖區域 -->
        <{if $slide_width > 0 }>
            <div class="container-fluid" id="slide-container">
                <div class="row <{if $slide_shadow=='1' and $slide_display_type!='not_full'}>xoops_content_shadow<{/if}>">
                    <div class="col-sm"></div>
                    <div class="col-sm-<{if $slide_display_type=='all_full'}>12<{else}><{$container_width}><{/if}>">
                        <div id="xoops_theme_slide" class="row  <{if $slide_shadow=='1' and $slide_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                            <div id="slide-container-display" style="width:100%;">
                                <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/slideshow_responsive.tpl"}>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm"></div>
                </div>
            </div>
        <{/if}>

        <!-- 導覽列區域 -->
        <{if $navbar_pos=='default'}>
            <{includeq file="$xoops_rootpath/themes/school2019/tpl/nav-container.tpl"}>
        <{/if}>

        <!-- 主內容區域 -->
        <div class="container-fluid" id="content-container">
            <div class="row <{if $content_shadow=='1' and $content_display_type!='not_full'}>xoops_content_shadow<{/if}>">
                <div class="col-sm"></div>
                <div class="col-sm-<{if $content_display_type=='all_full'}>12<{else}><{$container_width}><{/if}>">
                    <div id="xoops_theme_content" class="row <{if $content_shadow=='1' and $content_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                        <div id="content-container-display" style="<{$content_zone}>" class="col-sm-12">
                            <!-- 載入布局 -->
                            <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/$theme_type.tpl"}>

                            <!-- 顯示參數，開發用，開發完可刪除 -->
                            <{if $show_var=='1'}><{includeq file="$xoops_rootpath/modules/tadtools/themes_common/show_var.tpl"}><{/if}>
                        </div>
                    </div>
                </div>
                <div class="col-sm"></div>
            </div>
        </div>

        <!-- 頁尾區域 -->
        <div class="container-fluid" id="footer-container">
            <div class="row  <{if $footer_shadow=='1' and $footer_display_type!='not_full'}>xoops_content_shadow<{/if}>">
                <div class="col-sm"></div>
                <div class="col-sm-<{if $footer_display_type=='all_full'}>12<{else}><{$container_width}><{/if}>">
                    <div id="xoops_theme_footer" class="row <{if $footer_shadow=='1' and $footer_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                        <div id="footer-container-display" class="col-sm-12">
                            <{if $xoops_isadmin}><a href="<{$xoops_url}>/modules/system/admin.php?fct=preferences&op=show&confcat_id=3" class="block_config"></a><{/if}>

                            <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/footerBlock.tpl"}>

                            <{$xoops_footer}>
                        </div>
                    </div>
                </div>
                <div class="col-sm"></div>
            </div>
        </div>

        <{if $navbar_pos=='fixed-top' or $navbar_pos=='fixed-bottom'}>
            <div id="nav-container-display" style="width:100%;">
                <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/navbar.tpl"}>
            </div>
        <{/if}>

        <!-- 載入bootstrap -->
        <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/bootstrap_js.tpl"}>

        <!-- 載入自訂js -->
        <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/my_js.tpl"}>
        <{$my_code}>
        <{if $margin_bottom}><div style="margin-bottom: <{$margin_bottom}>px;"></div><{/if}>
    </body>
</html>