<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl25_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl25_argument'}->checkFilter('number');
${'menu_item_srl25_argument'}->checkNotNull();
if(!${'menu_item_srl25_argument'}->isValid()) return ${'menu_item_srl25_argument'}->getErrorMessage();
if(${'menu_item_srl25_argument'} !== null) ${'menu_item_srl25_argument'}->setColumnType('number');

${'parent_srl26_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl26_argument'}->checkFilter('number');
${'parent_srl26_argument'}->ensureDefaultValue('0');
if(!${'parent_srl26_argument'}->isValid()) return ${'parent_srl26_argument'}->getErrorMessage();
if(${'parent_srl26_argument'} !== null) ${'parent_srl26_argument'}->setColumnType('number');

${'menu_srl27_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl27_argument'}->checkFilter('number');
${'menu_srl27_argument'}->checkNotNull();
if(!${'menu_srl27_argument'}->isValid()) return ${'menu_srl27_argument'}->getErrorMessage();
if(${'menu_srl27_argument'} !== null) ${'menu_srl27_argument'}->setColumnType('number');

${'name28_argument'} = new Argument('name', $args->{'name'});
${'name28_argument'}->checkNotNull();
if(!${'name28_argument'}->isValid()) return ${'name28_argument'}->getErrorMessage();
if(${'name28_argument'} !== null) ${'name28_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc29_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc29_argument'}->isValid()) return ${'desc29_argument'}->getErrorMessage();
} else
${'desc29_argument'} = NULL;if(${'desc29_argument'} !== null) ${'desc29_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url30_argument'} = new Argument('url', $args->{'url'});
if(!${'url30_argument'}->isValid()) return ${'url30_argument'}->getErrorMessage();
} else
${'url30_argument'} = NULL;if(${'url30_argument'} !== null) ${'url30_argument'}->setColumnType('varchar');

${'is_shortcut31_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut31_argument'}->ensureDefaultValue('N');
${'is_shortcut31_argument'}->checkNotNull();
if(!${'is_shortcut31_argument'}->isValid()) return ${'is_shortcut31_argument'}->getErrorMessage();
if(${'is_shortcut31_argument'} !== null) ${'is_shortcut31_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window32_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window32_argument'}->isValid()) return ${'open_window32_argument'}->getErrorMessage();
} else
${'open_window32_argument'} = NULL;if(${'open_window32_argument'} !== null) ${'open_window32_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand33_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand33_argument'}->isValid()) return ${'expand33_argument'}->getErrorMessage();
} else
${'expand33_argument'} = NULL;if(${'expand33_argument'} !== null) ${'expand33_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn34_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn34_argument'}->isValid()) return ${'normal_btn34_argument'}->getErrorMessage();
} else
${'normal_btn34_argument'} = NULL;if(${'normal_btn34_argument'} !== null) ${'normal_btn34_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn35_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn35_argument'}->isValid()) return ${'hover_btn35_argument'}->getErrorMessage();
} else
${'hover_btn35_argument'} = NULL;if(${'hover_btn35_argument'} !== null) ${'hover_btn35_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn36_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn36_argument'}->isValid()) return ${'active_btn36_argument'}->getErrorMessage();
} else
${'active_btn36_argument'} = NULL;if(${'active_btn36_argument'} !== null) ${'active_btn36_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls37_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls37_argument'}->isValid()) return ${'group_srls37_argument'}->getErrorMessage();
} else
${'group_srls37_argument'} = NULL;if(${'group_srls37_argument'} !== null) ${'group_srls37_argument'}->setColumnType('text');

${'listorder38_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder38_argument'}->checkNotNull();
if(!${'listorder38_argument'}->isValid()) return ${'listorder38_argument'}->getErrorMessage();
if(${'listorder38_argument'} !== null) ${'listorder38_argument'}->setColumnType('number');

${'regdate39_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate39_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate39_argument'}->isValid()) return ${'regdate39_argument'}->getErrorMessage();
if(${'regdate39_argument'} !== null) ${'regdate39_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl25_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl26_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl27_argument'})
,new InsertExpression('`name`', ${'name28_argument'})
,new InsertExpression('`desc`', ${'desc29_argument'})
,new InsertExpression('`url`', ${'url30_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut31_argument'})
,new InsertExpression('`open_window`', ${'open_window32_argument'})
,new InsertExpression('`expand`', ${'expand33_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn34_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn35_argument'})
,new InsertExpression('`active_btn`', ${'active_btn36_argument'})
,new InsertExpression('`group_srls`', ${'group_srls37_argument'})
,new InsertExpression('`listorder`', ${'listorder38_argument'})
,new InsertExpression('`regdate`', ${'regdate39_argument'})
));
$query->setTables(array(
new Table('`yeonriji_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>