<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module13_argument'} = new Argument('module', $args->{'module'});
${'module13_argument'}->checkNotNull();
if(!${'module13_argument'}->isValid()) return ${'module13_argument'}->getErrorMessage();
if(${'module13_argument'} !== null) ${'module13_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl14_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl14_argument'}->isValid()) return ${'module_category_srl14_argument'}->getErrorMessage();
} else
${'module_category_srl14_argument'} = NULL;if(${'module_category_srl14_argument'} !== null) ${'module_category_srl14_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl15_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl15_argument'}->isValid()) return ${'layout_srl15_argument'}->getErrorMessage();
} else
${'layout_srl15_argument'} = NULL;if(${'layout_srl15_argument'} !== null) ${'layout_srl15_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin16_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin16_argument'}->isValid()) return ${'skin16_argument'}->getErrorMessage();
} else
${'skin16_argument'} = NULL;if(${'skin16_argument'} !== null) ${'skin16_argument'}->setColumnType('varchar');

${'is_skin_fix17_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix17_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix17_argument'}->isValid()) return ${'is_skin_fix17_argument'}->getErrorMessage();
if(${'is_skin_fix17_argument'} !== null) ${'is_skin_fix17_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin18_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin18_argument'}->isValid()) return ${'mskin18_argument'}->getErrorMessage();
} else
${'mskin18_argument'} = NULL;if(${'mskin18_argument'} !== null) ${'mskin18_argument'}->setColumnType('varchar');

${'is_mskin_fix19_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix19_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix19_argument'}->isValid()) return ${'is_mskin_fix19_argument'}->getErrorMessage();
if(${'is_mskin_fix19_argument'} !== null) ${'is_mskin_fix19_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl20_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl20_argument'}->checkFilter('number');
if(!${'menu_srl20_argument'}->isValid()) return ${'menu_srl20_argument'}->getErrorMessage();
} else
${'menu_srl20_argument'} = NULL;if(${'menu_srl20_argument'} !== null) ${'menu_srl20_argument'}->setColumnType('number');

${'mid21_argument'} = new Argument('mid', $args->{'mid'});
${'mid21_argument'}->checkNotNull();
if(!${'mid21_argument'}->isValid()) return ${'mid21_argument'}->getErrorMessage();
if(${'mid21_argument'} !== null) ${'mid21_argument'}->setColumnType('varchar');

${'browser_title22_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title22_argument'}->checkNotNull();
if(!${'browser_title22_argument'}->isValid()) return ${'browser_title22_argument'}->getErrorMessage();
if(${'browser_title22_argument'} !== null) ${'browser_title22_argument'}->setColumnType('varchar');

${'description23_argument'} = new Argument('description', $args->{'description'});
${'description23_argument'}->ensureDefaultValue('');
if(!${'description23_argument'}->isValid()) return ${'description23_argument'}->getErrorMessage();
if(${'description23_argument'} !== null) ${'description23_argument'}->setColumnType('text');

${'is_default24_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default24_argument'}->ensureDefaultValue('N');
${'is_default24_argument'}->checkNotNull();
if(!${'is_default24_argument'}->isValid()) return ${'is_default24_argument'}->getErrorMessage();
if(${'is_default24_argument'} !== null) ${'is_default24_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content25_argument'} = new Argument('content', $args->{'content'});
if(!${'content25_argument'}->isValid()) return ${'content25_argument'}->getErrorMessage();
} else
${'content25_argument'} = NULL;if(${'content25_argument'} !== null) ${'content25_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent26_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent26_argument'}->isValid()) return ${'mcontent26_argument'}->getErrorMessage();
} else
${'mcontent26_argument'} = NULL;if(${'mcontent26_argument'} !== null) ${'mcontent26_argument'}->setColumnType('bigtext');

${'open_rss27_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss27_argument'}->ensureDefaultValue('Y');
${'open_rss27_argument'}->checkNotNull();
if(!${'open_rss27_argument'}->isValid()) return ${'open_rss27_argument'}->getErrorMessage();
if(${'open_rss27_argument'} !== null) ${'open_rss27_argument'}->setColumnType('char');

${'header_text28_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text28_argument'}->ensureDefaultValue('');
if(!${'header_text28_argument'}->isValid()) return ${'header_text28_argument'}->getErrorMessage();
if(${'header_text28_argument'} !== null) ${'header_text28_argument'}->setColumnType('text');

${'footer_text29_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text29_argument'}->ensureDefaultValue('');
if(!${'footer_text29_argument'}->isValid()) return ${'footer_text29_argument'}->getErrorMessage();
if(${'footer_text29_argument'} !== null) ${'footer_text29_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl30_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl30_argument'}->isValid()) return ${'mlayout_srl30_argument'}->getErrorMessage();
} else
${'mlayout_srl30_argument'} = NULL;if(${'mlayout_srl30_argument'} !== null) ${'mlayout_srl30_argument'}->setColumnType('number');

${'use_mobile31_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile31_argument'}->ensureDefaultValue('N');
if(!${'use_mobile31_argument'}->isValid()) return ${'use_mobile31_argument'}->getErrorMessage();
if(${'use_mobile31_argument'} !== null) ${'use_mobile31_argument'}->setColumnType('char');

${'site_srl32_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl32_argument'}->checkFilter('number');
${'site_srl32_argument'}->ensureDefaultValue('0');
${'site_srl32_argument'}->checkNotNull();
${'site_srl32_argument'}->createConditionValue();
if(!${'site_srl32_argument'}->isValid()) return ${'site_srl32_argument'}->getErrorMessage();
if(${'site_srl32_argument'} !== null) ${'site_srl32_argument'}->setColumnType('number');

${'module_srl33_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl33_argument'}->checkFilter('number');
${'module_srl33_argument'}->checkNotNull();
${'module_srl33_argument'}->createConditionValue();
if(!${'module_srl33_argument'}->isValid()) return ${'module_srl33_argument'}->getErrorMessage();
if(${'module_srl33_argument'} !== null) ${'module_srl33_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module13_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl14_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl15_argument'})
,new UpdateExpression('`skin`', ${'skin16_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix17_argument'})
,new UpdateExpression('`mskin`', ${'mskin18_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix19_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl20_argument'})
,new UpdateExpression('`mid`', ${'mid21_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title22_argument'})
,new UpdateExpression('`description`', ${'description23_argument'})
,new UpdateExpression('`is_default`', ${'is_default24_argument'})
,new UpdateExpression('`content`', ${'content25_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent26_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss27_argument'})
,new UpdateExpression('`header_text`', ${'header_text28_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text29_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl30_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile31_argument'})
));
$query->setTables(array(
new Table('`yeonriji_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl32_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl33_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>