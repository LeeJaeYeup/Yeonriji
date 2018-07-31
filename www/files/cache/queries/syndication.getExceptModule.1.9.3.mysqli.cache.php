<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getExceptModule");
$query->setAction("select");
$query->setPriority("");

${'module_srl44_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl44_argument'}->checkFilter('number');
${'module_srl44_argument'}->checkNotNull();
${'module_srl44_argument'}->createConditionValue();
if(!${'module_srl44_argument'}->isValid()) return ${'module_srl44_argument'}->getErrorMessage();
if(${'module_srl44_argument'} !== null) ${'module_srl44_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`yeonriji_syndication_except_modules`', '`syndication_except_modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl44_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>