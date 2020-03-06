<div class="container-fluid" id="nav-container">
    <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm-<{if $nav_display_type=='all_full'}>12<{else}><{$container_width}><{/if}>">
            <div id="xoops_theme_nav" class="row">
                <div id="nav-container-display" style="width:100%;">
                    <{includeq file="$xoops_rootpath/modules/tadtools/themes4_tpl/navbar.tpl"}>
                </div>
            </div>
        </div>
        <div class="col-sm"></div>
    </div>
</div>