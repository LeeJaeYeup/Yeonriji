<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItemListorder");
$query->setAction("update");
$query->setPriority("");

${'listorder2_argument'} = new Argument('listorder', NULL);
${'listorder2_argument'}->setColumnOperation('-');
${'listorder2_argument'}->ensureDefaultValue(1);
if(!${'listorder2_argument'}->isValid()) return ${'listorder2_argument'}->getErrorMessage();
if(${'listorder2_argument'} !== null) ${'listorder2_argument'}->setColumnType('number');

${'menu_srl3_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl3_argument'}->checkFilter('number');
${'menu_srl3_argument'}->checkNotNull();
${'menu_srl3_argument'}->createConditionValue();
if(!${'menu_srl3_argument'}->isValid()) return ${'menu_srl3_argument'}->getErrorMessage();
if(${'menu_srl3_argument'} !== null) ${'menu_srl3_argument'}->setColumnType('number');

${'parent_srl4_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl4_argument'}->checkFilter('number');
${'parent_srl4_argument'}->checkNotNull();
${'parent_srl4_argument'}->createConditionValue();
if(!${'parent_srl4_argument'}->isValid()) return ${'parent_srl4_argument'}->getErrorMessage();
if(${'parent_srl4_argument'} !== null) ${'parent_srl4_argument'}->setColumnType('number');

${'listorder5_argument'} = new ConditionArgument('listorder', $args->listorder, 'less');
${'listorder5_argument'}->checkFilter('number');
${'listorder5_argument'}->checkNotNull();
${'listorder5_argument'}->createConditionValue();
if(!${'listorder5_argument'}->isValid()) return ${'listorder5_argument'}->getErrorMessage();
if(${'listorder5_argument'} !== null) ${'listorder5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`listorder`', ${'listorder2_argument'})
));
$query->setTables(array(
new Table('`yeonriji_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl3_argument,"equal")
,new ConditionWithArgument('`parent_srl`',$parent_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`listorder`',$listorder5_argument,"less", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>