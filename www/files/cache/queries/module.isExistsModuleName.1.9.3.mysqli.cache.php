<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");

${'site_srl10_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl10_argument'}->ensureDefaultValue('0');
${'site_srl10_argument'}->checkNotNull();
${'site_srl10_argument'}->createConditionValue();
if(!${'site_srl10_argument'}->isValid()) return ${'site_srl10_argument'}->getErrorMessage();
if(${'site_srl10_argument'} !== null) ${'site_srl10_argument'}->setColumnType('number');

${'mid11_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid11_argument'}->checkNotNull();
${'mid11_argument'}->createConditionValue();
if(!${'mid11_argument'}->isValid()) return ${'mid11_argument'}->getErrorMessage();
if(${'mid11_argument'} !== null) ${'mid11_argument'}->setColumnType('varchar');

${'module_srl12_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl12_argument'}->ensureDefaultValue('0');
${'module_srl12_argument'}->checkNotNull();
${'module_srl12_argument'}->createConditionValue();
if(!${'module_srl12_argument'}->isValid()) return ${'module_srl12_argument'}->getErrorMessage();
if(${'module_srl12_argument'} !== null) ${'module_srl12_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`yeonriji_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl10_argument,"equal")
,new ConditionWithArgument('`mid`',$mid11_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl12_argument,"notequal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>