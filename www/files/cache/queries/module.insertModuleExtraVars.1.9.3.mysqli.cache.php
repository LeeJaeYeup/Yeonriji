<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl51_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl51_argument'}->checkFilter('number');
${'module_srl51_argument'}->checkNotNull();
if(!${'module_srl51_argument'}->isValid()) return ${'module_srl51_argument'}->getErrorMessage();
if(${'module_srl51_argument'} !== null) ${'module_srl51_argument'}->setColumnType('number');

${'name52_argument'} = new Argument('name', $args->{'name'});
${'name52_argument'}->checkNotNull();
if(!${'name52_argument'}->isValid()) return ${'name52_argument'}->getErrorMessage();
if(${'name52_argument'} !== null) ${'name52_argument'}->setColumnType('varchar');

${'value53_argument'} = new Argument('value', $args->{'value'});
${'value53_argument'}->checkNotNull();
if(!${'value53_argument'}->isValid()) return ${'value53_argument'}->getErrorMessage();
if(${'value53_argument'} !== null) ${'value53_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl51_argument'})
,new InsertExpression('`name`', ${'name52_argument'})
,new InsertExpression('`value`', ${'value53_argument'})
));
$query->setTables(array(
new Table('`yeonriji_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>