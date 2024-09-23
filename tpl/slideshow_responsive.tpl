<{if $use_slide }>
    <{if $logo_img and $logo_position=="slide"}>
        <{assign var="mylogofile" value="$xoops_rootpath$logo_path`$smarty.get.$logo_var`.$logo_ext"}>
        <{assign var="mytarget" value="`$logo_var`=`$smarty.get.$logo_var`"}>
        <div style="position:relative; width:100%;">
            <{if $logo_auto==1 and strpos($smarty.server.QUERY_STRING, $mytarget)!==false and $mylogofile|file_exists}>
                <a href="<{$xoops_url}>/index.php?<{$logo_var|default:''}>=<{$smarty.get.$logo_var}>"><img id="website_logo" src="<{$xoops_url}><{$logo_path|default:''}><{$smarty.get.$logo_var}>.<{$logo_ext|default:''}>" style="max-width: 100%;<{if $logo_position=="slide"}>position: absolute; z-index: 5; <{$logo_place|default:''}><{else}>position: relative; z-index:10;<{/if}>" alt="<{$xoops_sitename|default:''}>" title="<{$xoops_sitename|default:''}>" class="img-fluid"></a>
            <{else}>
                <{include file="$xoops_rootpath/modules/tadtools/themes4_tpl/logo.tpl"}>
            <{/if}>
            <{include file="$xoops_rootpath/modules/tadtools/themes_common/slider/responsive_slide.tpl"}>
        </div>
    <{else}>
        <{include file="$xoops_rootpath/modules/tadtools/themes_common/slider/responsive_slide.tpl"}>
    <{/if}>
<{/if}>