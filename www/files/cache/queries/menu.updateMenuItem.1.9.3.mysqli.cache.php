<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl37_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl37_argument'}->isValid()) return ${'menu_srl37_argument'}->getErrorMessage();
} else
${'menu_srl37_argument'} = NULL;if(${'menu_srl37_argument'} !== null) ${'menu_srl37_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl38_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl38_argument'}->isValid()) return ${'parent_srl38_argument'}->getErrorMessage();
} else
${'parent_srl38_argument'} = NULL;if(${'parent_srl38_argument'} !== null) ${'parent_srl38_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name39_argument'} = new Argument('name', $args->{'name'});
if(!${'name39_argument'}->isValid()) return ${'name39_argument'}->getErrorMessage();
} else
${'name39_argument'} = NULL;if(${'name39_argument'} !== null) ${'name39_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc40_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc40_argument'}->isValid()) return ${'desc40_argument'}->getErrorMessage();
} else
${'desc40_argument'} = NULL;if(${'desc40_argument'} !== null) ${'desc40_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url41_argument'} = new Argument('url', $args->{'url'});
if(!${'url41_argument'}->isValid()) return ${'url41_argument'}->getErrorMessage();
} else
${'url41_argument'} = NULL;if(${'url41_argument'} !== null) ${'url41_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut42_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut42_argument'}->isValid()) return ${'is_shortcut42_argument'}->getErrorMessage();
} else
${'is_shortcut42_argument'} = NULL;if(${'is_shortcut42_argument'} !== null) ${'is_shortcut42_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window43_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window43_argument'}->isValid()) return ${'open_window43_argument'}->getErrorMessage();
} else
${'open_window43_argument'} = NULL;if(${'open_window43_argument'} !== null) ${'open_window43_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand44_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand44_argument'}->isValid()) return ${'expand44_argument'}->getErrorMessage();
} else
${'expand44_argument'} = NULL;if(${'expand44_argument'} !== null) ${'expand44_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn45_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn45_argument'}->isValid()) return ${'normal_btn45_argument'}->getErrorMessage();
} else
${'normal_btn45_argument'} = NULL;if(${'normal_btn45_argument'} !== null) ${'normal_btn45_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn46_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn46_argument'}->isValid()) return ${'hover_btn46_argument'}->getErrorMessage();
} else
${'hover_btn46_argument'} = NULL;if(${'hover_btn46_argument'} !== null) ${'hover_btn46_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn47_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn47_argument'}->isValid()) return ${'active_btn47_argument'}->getErrorMessage();
} else
${'active_btn47_argument'} = NULL;if(${'active_btn47_argument'} !== null) ${'active_btn47_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls48_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls48_argument'}->isValid()) return ${'group_srls48_argument'}->getErrorMessage();
} else
${'group_srls48_argument'} = NULL;if(${'group_srls48_argument'} !== null) ${'group_srls48_argument'}->setColumnType('text');

${'menu_item_srl49_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl49_argument'}->checkFilter('number');
${'menu_item_srl49_argument'}->checkNotNull();
${'menu_item_srl49_argument'}->createConditionValue();
if(!${'menu_item_srl49_argument'}->isValid()) return ${'menu_item_srl49_argument'}->getErrorMessage();
if(${'menu_item_srl49_argument'} !== null) ${'menu_item_srl49_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl37_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl38_argument'})
,new UpdateExpression('`name`', ${'name39_argument'})
,new UpdateExpression('`desc`', ${'desc40_argument'})
,new UpdateExpression('`url`', ${'url41_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut42_argument'})
,new UpdateExpression('`open_window`', ${'open_window43_argument'})
,new UpdateExpression('`expand`', ${'expand44_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn45_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn46_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn47_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls48_argument'})
));
$query->setTables(array(
new Table('`yeonriji_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl49_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>