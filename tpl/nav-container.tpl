<div id="nav-container" style="<{if $nav_margin!=''}>margin: <{$nav_margin}>;<{/if}>margin-left:auto; margin-right:auto;">
    <div class="container" style="max-width: <{if $nav_display_type=='all_full'}>100%<{else}><{$container_width}><{/if}>;">
        <div id="xoops_theme_nav" class="row">
            <div id="nav-container-display" style="width:100%;">
                <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/navbar.tpl"}>
            </div>
        </div>
    </div>
</div>