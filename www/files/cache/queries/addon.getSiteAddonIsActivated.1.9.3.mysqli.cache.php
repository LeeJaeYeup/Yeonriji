<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl18_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl18_argument'}->checkNotNull();
${'site_srl18_argument'}->createConditionValue();
if(!${'site_srl18_argument'}->isValid()) return ${'site_srl18_argument'}->getErrorMessage();
if(${'site_srl18_argument'} !== null) ${'site_srl18_argument'}->setColumnType('number');

${'addon19_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon19_argument'}->checkNotNull();
${'addon19_argument'}->createConditionValue();
if(!${'addon19_argument'}->isValid()) return ${'addon19_argument'}->getErrorMessage();
if(${'addon19_argument'} !== null) ${'addon19_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`yeonriji_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl18_argument,"equal")
,new ConditionWithArgument('`addon`',$addon19_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>