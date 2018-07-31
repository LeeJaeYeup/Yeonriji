<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl50_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl50_argument'}->checkFilter('number');
${'module_srl50_argument'}->checkNotNull();
${'module_srl50_argument'}->createConditionValue();
if(!${'module_srl50_argument'}->isValid()) return ${'module_srl50_argument'}->getErrorMessage();
if(${'module_srl50_argument'} !== null) ${'module_srl50_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`yeonriji_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl50_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>