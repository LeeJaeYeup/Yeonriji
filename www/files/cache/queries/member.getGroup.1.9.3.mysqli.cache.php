<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroup");
$query->setAction("select");
$query->setPriority("");

${'group_srl13_argument'} = new ConditionArgument('group_srl', $args->group_srl, 'equal');
${'group_srl13_argument'}->checkFilter('number');
${'group_srl13_argument'}->checkNotNull();
${'group_srl13_argument'}->createConditionValue();
if(!${'group_srl13_argument'}->isValid()) return ${'group_srl13_argument'}->getErrorMessage();
if(${'group_srl13_argument'} !== null) ${'group_srl13_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`yeonriji_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`group_srl`',$group_srl13_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>