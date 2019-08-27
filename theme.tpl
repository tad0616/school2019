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

            <{if $logo_bg}>
            #logo-container{
                <{if $logo_display_type!='not_full'}>
                background-image: url('<{$logo_bg}>');
                background-position: <{$logo_bg_position}>;
                background-repeat: <{$logo_bg_repeat}>;
                <{else}>
                background-image: none;
                <{/if}>
            }

            #logo-container-display{
                <{if $logo_display_type=='not_full'}>
                background-image: url('<{$logo_bg}>');
                background-position: <{$logo_bg_position}>;
                background-repeat: <{$logo_bg_repeat}>;
                <{else}>
                background-image: none;
                <{/if}>
            }
            <{/if}>
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
                        <div id="logo-container-display" class="row <{if $logo_shadow=='1' and $logo_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                            <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/logo.tpl"}>
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
        <{if $xoops_footer}>

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
        <{/if}>

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