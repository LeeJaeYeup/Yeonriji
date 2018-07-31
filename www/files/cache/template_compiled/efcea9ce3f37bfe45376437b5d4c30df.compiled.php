<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5_2','__setting.html') ?>
<div><?php echo $__Context->module_info->header_text ?></div>
<div id="bd" class="bd">
	<div class="bd_hd clear">
		
		<?php if(!$__Context->mi->breadcrumb || $__Context->act=='dispBoardWrite'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/sketchbook5_2','_breadcrumb.html');
} ?>
	</div>