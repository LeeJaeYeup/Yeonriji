<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGrantedModule");
$query->setAction("select");
$query->setPriority("");

${'module_srl45_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl45_argument'}->checkFilter('number');
${'module_srl45_argument'}->checkNotNull();
${'module_srl45_argument'}->createConditionValue();
if(!${'module_srl45_argument'}->isValid()) return ${'module_srl45_argument'}->getErrorMessage();
if(${'module_srl45_argument'} !== null) ${'module_srl45_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`yeonriji_module_grants`', '`module_grants`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl45_argument,"equal")
,new ConditionWithoutArgument('`name`',"'access','view','list'","in", 'and')))
,new ConditionGroup(array(
new ConditionWithoutArgument('`group_srl`','1',"more")
,new ConditionWithoutArgument('`group_srl`','-1',"equal", 'or')
,new ConditionWithoutArgument('`group_srl`','-2',"equal", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>