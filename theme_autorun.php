<?php
if (file_exists(XOOPS_ROOT_PATH . "/class/xoopsform/renderer/XoopsFormRendererBootstrap4.php")) {
    xoops_load('XoopsFormRendererBootstrap4');
    XoopsFormRenderer::getInstance()->set(new XoopsFormRendererBootstrap4());
}
