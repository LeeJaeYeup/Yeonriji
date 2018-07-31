<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsSiteDomain");
$query->setAction("select");
$query->setPriority("");

${'domain2_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain2_argument'}->checkNotNull();
${'domain2_argument'}->createConditionValue();
if(!${'domain2_argument'}->isValid()) return ${'domain2_argument'}->getErrorMessage();
if(${'domain2_argument'} !== null) ${'domain2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`yeonriji_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`domain`',$domain2_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>