<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl3_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl3_argument'}->ensureDefaultValue('0');
${'site_srl3_argument'}->checkNotNull();
if(!${'site_srl3_argument'}->isValid()) return ${'site_srl3_argument'}->getErrorMessage();
if(${'site_srl3_argument'} !== null) ${'site_srl3_argument'}->setColumnType('number');

${'module_srl4_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl4_argument'}->checkNotNull();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

${'module_category_srl5_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl5_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl5_argument'}->isValid()) return ${'module_category_srl5_argument'}->getErrorMessage();
if(${'module_category_srl5_argument'} !== null) ${'module_category_srl5_argument'}->setColumnType('number');

${'mid6_argument'} = new Argument('mid', $args->{'mid'});
${'mid6_argument'}->checkNotNull();
if(!${'mid6_argument'}->isValid()) return ${'mid6_argument'}->getErrorMessage();
if(${'mid6_argument'} !== null) ${'mid6_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin7_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin7_argument'}->isValid()) return ${'skin7_argument'}->getErrorMessage();
} else
${'skin7_argument'} = NULL;if(${'skin7_argument'} !== null) ${'skin7_argument'}->setColumnType('varchar');

${'is_skin_fix8_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix8_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix8_argument'}->isValid()) return ${'is_skin_fix8_argument'}->getErrorMessage();
if(${'is_skin_fix8_argument'} !== null) ${'is_skin_fix8_argument'}->setColumnType('char');

${'is_mskin_fix9_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix9_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix9_argument'}->isValid()) return ${'is_mskin_fix9_argument'}->getErrorMessage();
if(${'is_mskin_fix9_argument'} !== null) ${'is_mskin_fix9_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin10_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin10_argument'}->isValid()) return ${'mskin10_argument'}->getErrorMessage();
} else
${'mskin10_argument'} = NULL;if(${'mskin10_argument'} !== null) ${'mskin10_argument'}->setColumnType('varchar');

${'browser_title11_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title11_argument'}->checkNotNull();
if(!${'browser_title11_argument'}->isValid()) return ${'browser_title11_argument'}->getErrorMessage();
if(${'browser_title11_argument'} !== null) ${'browser_title11_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl12_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl12_argument'}->isValid()) return ${'layout_srl12_argument'}->getErrorMessage();
} else
${'layout_srl12_argument'} = NULL;if(${'layout_srl12_argument'} !== null) ${'layout_srl12_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description13_argument'} = new Argument('description', $args->{'description'});
if(!${'description13_argument'}->isValid()) return ${'description13_argument'}->getErrorMessage();
} else
${'description13_argument'} = NULL;if(${'description13_argument'} !== null) ${'description13_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content14_argument'} = new Argument('content', $args->{'content'});
if(!${'content14_argument'}->isValid()) return ${'content14_argument'}->getErrorMessage();
} else
${'content14_argument'} = NULL;if(${'content14_argument'} !== null) ${'content14_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent15_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent15_argument'}->isValid()) return ${'mcontent15_argument'}->getErrorMessage();
} else
${'mcontent15_argument'} = NULL;if(${'mcontent15_argument'} !== null) ${'mcontent15_argument'}->setColumnType('bigtext');

${'module16_argument'} = new Argument('module', $args->{'module'});
${'module16_argument'}->checkNotNull();
if(!${'module16_argument'}->isValid()) return ${'module16_argument'}->getErrorMessage();
if(${'module16_argument'} !== null) ${'module16_argument'}->setColumnType('varchar');

${'is_default17_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default17_argument'}->ensureDefaultValue('N');
${'is_default17_argument'}->checkNotNull();
if(!${'is_default17_argument'}->isValid()) return ${'is_default17_argument'}->getErrorMessage();
if(${'is_default17_argument'} !== null) ${'is_default17_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl18_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl18_argument'}->checkFilter('number');
if(!${'menu_srl18_argument'}->isValid()) return ${'menu_srl18_argument'}->getErrorMessage();
} else
${'menu_srl18_argument'} = NULL;if(${'menu_srl18_argument'} !== null) ${'menu_srl18_argument'}->setColumnType('number');

${'open_rss19_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss19_argument'}->ensureDefaultValue('Y');
${'open_rss19_argument'}->checkNotNull();
if(!${'open_rss19_argument'}->isValid()) return ${'open_rss19_argument'}->getErrorMessage();
if(${'open_rss19_argument'} !== null) ${'open_rss19_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text20_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text20_argument'}->isValid()) return ${'header_text20_argument'}->getErrorMessage();
} else
${'header_text20_argument'} = NULL;if(${'header_text20_argument'} !== null) ${'header_text20_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text21_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text21_argument'}->isValid()) return ${'footer_text21_argument'}->getErrorMessage();
} else
${'footer_text21_argument'} = NULL;if(${'footer_text21_argument'} !== null) ${'footer_text21_argument'}->setColumnType('text');

${'regdate22_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate22_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate22_argument'}->isValid()) return ${'regdate22_argument'}->getErrorMessage();
if(${'regdate22_argument'} !== null) ${'regdate22_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl23_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl23_argument'}->isValid()) return ${'mlayout_srl23_argument'}->getErrorMessage();
} else
${'mlayout_srl23_argument'} = NULL;if(${'mlayout_srl23_argument'} !== null) ${'mlayout_srl23_argument'}->setColumnType('number');

${'use_mobile24_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile24_argument'}->ensureDefaultValue('N');
if(!${'use_mobile24_argument'}->isValid()) return ${'use_mobile24_argument'}->getErrorMessage();
if(${'use_mobile24_argument'} !== null) ${'use_mobile24_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl3_argument'})
,new InsertExpression('`module_srl`', ${'module_srl4_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl5_argument'})
,new InsertExpression('`mid`', ${'mid6_argument'})
,new InsertExpression('`skin`', ${'skin7_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix8_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix9_argument'})
,new InsertExpression('`mskin`', ${'mskin10_argument'})
,new InsertExpression('`browser_title`', ${'browser_title11_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl12_argument'})
,new InsertExpression('`description`', ${'description13_argument'})
,new InsertExpression('`content`', ${'content14_argument'})
,new InsertExpression('`mcontent`', ${'mcontent15_argument'})
,new InsertExpression('`module`', ${'module16_argument'})
,new InsertExpression('`is_default`', ${'is_default17_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl18_argument'})
,new InsertExpression('`open_rss`', ${'open_rss19_argument'})
,new InsertExpression('`header_text`', ${'header_text20_argument'})
,new InsertExpression('`footer_text`', ${'footer_text21_argument'})
,new InsertExpression('`regdate`', ${'regdate22_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl23_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile24_argument'})
));
$query->setTables(array(
new Table('`yeonriji_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>