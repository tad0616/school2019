<!DOCTYPE html>
<html lang="<{$xoops_langcode|default:''}>">
    <head>
        <{assign var="bootstrap" value=$smarty.session.bootstrap|default:$session.bootstrap}>
        <!--目前$_SESSION['bootstrap']="<{$bootstrap|default:''}>"; -->
        <!--將目前的資料夾名稱，設定為樣板標籤變數 theme_name-->
        <{assign var="theme_name" value=$xoTheme->folderName}>




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
        </style>
    </head>

    <body <{$prism_setup|default:''}>>
        <!-- logo區域 -->
        <{if $logo_img and $logo_position=="page"}>
            <div id="logo-container">
                <div class="container" id="logo-container" style="max-width: <{if $logo_display_type!='all_full'}><{$container_width|default:''}><{else}>100%<{/if}>;">
                    <div id="logo-container-display" class="row <{if $logo_shadow=='1' and $logo_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                        <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/logo.tpl"}>
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
            <div class="container" id="slide-container" style="max-width: <{if $slide_display_type!='all_full'}><{$container_width|default:''}><{else}>100%<{/if}>;">
                <div id="xoops_theme_slide" class="row  <{if $slide_shadow=='1' and $slide_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                    <div id="slide-container-display" style="width:100%; position:relative; z-index:1;">
                        <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/slideshow_responsive.tpl"}>
                    </div>
                </div>
            </div>
        <{/if}>

        <!-- 導覽列區域 -->
        <{if $navbar_pos=='default'}>
            <{include file="$xoops_rootpath/themes/school2019/tpl/nav-container.tpl"}>
        <{/if}>



        <!-- 主內容區域 -->
        <div class="container" id="content-container" style="max-width: <{if $content_display_type!='all_full'}><{$container_width|default:''}><{else}>100%<{/if}>;">
            <div id="xoops_theme_content" class="row <{if $content_shadow=='1' and $content_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                <div id="content-container-display" style="<{$content_zone|default:''}>" class="col-sm-12">
                    <!-- 載入布局 -->
                    <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/siteclosed_login.tpl"}>

                    <!-- 顯示參數，開發用，開發完可刪除 -->
                    <{if $show_var=='1'}><{include file="$xoops_rootpath/modules/tadtools/themes_common/show_var.tpl"}><{/if}>
                </div>
            </div>
        </div>

        <!-- 頁尾區域 -->
        <{if $xoops_footer|default:false}>

        <div class="container" id="footer-container" style="max-width: <{if $footer_display_type!='all_full'}><{$container_width|default:''}><{else}>100%<{/if}>;">
            <div id="xoops_theme_footer" class="row <{if $footer_shadow=='1' and $footer_display_type=='not_full'}>xoops_content_shadow<{/if}>">
                <div id="footer-container-display" class="col-sm-12">
                    <{if $xoops_isadmin|default:false}><a href="<{$xoops_url}>/modules/system/admin.php?fct=preferences&op=show&confcat_id=3" class="block_config"></a><{/if}>

                    <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/footerBlock.tpl"}>

                    <{$xoops_footer|default:''}>
                </div>
            </div>
        </div>
        <{/if}>

        <!-- 載入bootstrap -->
        <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/bootstrap_js.tpl"}>

        <!-- 載入自訂js -->
        <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/my_js.tpl"}>
        <{$my_code|default:''}>
    </body>
</html>