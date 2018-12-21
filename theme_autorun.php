<?php
// global $xoopsDB, $xoopsConfig, $xoopsOption, $xoopsModule;
// if ($xoopsModule) {
//     $mod_dir = $xoopsModule->dirname();
//     if ($xoopsOption['template_main']) {
//         if (!isset($_SESSION['tt_theme_kind'])) {
//             $sql    = "select `tt_use_bootstrap`, `tt_bootstrap_color`, `tt_theme_kind` from `" . $xoopsDB->prefix("tadtools_setup") . "`  where `tt_theme`='{$xoopsConfig['theme_set']}'";
//             $result = $xoopsDB->query($sql) or web_error($sql);

//             list($tt_use_bootstrap, $tt_bootstrap_color, $tt_theme_kind) = $xoopsDB->fetchRow($result);

//             $_SESSION['tt_bootstrap_color'] = $tt_bootstrap_color;
//             $_SESSION['tt_theme_kind']      = $tt_theme_kind;
//         }
//         if ($_SESSION['tt_theme_kind'] == "bootstrap4") {
//             $tail                  = "_b4";
//             $_SESSION['bootstrap'] = 4;
//         }
//         $new_tpl = str_replace(".tpl", "{$tail}.tpl", $xoopsOption['template_main']);
//         $new_tpl = str_replace(".html", "{$tail}.html", $new_tpl);

//         if (file_exists(XOOPS_ROOT_PATH . "/modules/$mod_dir/templates/$new_tpl")) {
//             $xoopsOption['template_main'] = $new_tpl;
//         }
//     }
// }

xoops_load('XoopsFormRendererBootstrap4');
XoopsFormRenderer::getInstance()->set(new XoopsFormRendererBootstrap4());
