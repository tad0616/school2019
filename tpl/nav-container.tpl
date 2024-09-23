<div id="nav-container" style="<{if $nav_margin!=''}>margin: <{$nav_margin|default:''}>;<{/if}>margin-left:auto; margin-right:auto;">
    <div class="container" style="max-width: <{if $nav_display_type=='all_full'}>100%<{else}><{$container_width|default:''}><{/if}>;">
        <div id="xoops_theme_nav" class="row">
            <div id="nav-container-display" style="width:100%;">
                <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/navbar.tpl"}>
            </div>
        </div>
    </div>
</div>