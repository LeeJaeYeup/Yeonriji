<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutList");
$query->setAction("select");
$query->setPriority("");

${'site_srl7_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl7_argument'}->checkFilter('number');
${'site_srl7_argument'}->ensureDefaultValue('0');
${'site_srl7_argument'}->checkNotNull();
${'site_srl7_argument'}->createConditionValue();
if(!${'site_srl7_argument'}->isValid()) return ${'site_srl7_argument'}->getErrorMessage();
if(${'site_srl7_argument'} !== null) ${'site_srl7_argument'}->setColumnType('number');

${'layout_type8_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type8_argument'}->ensureDefaultValue('P');
${'layout_type8_argument'}->createConditionValue();
if(!${'layout_type8_argument'}->isValid()) return ${'layout_type8_argument'}->getErrorMessage();
if(${'layout_type8_argument'} !== null) ${'layout_type8_argument'}->setColumnType('char');
if(isset($args->layout)) {
${'layout9_argument'} = new ConditionArgument('layout', $args->layout, 'equal');
${'layout9_argument'}->createConditionValue();
if(!${'layout9_argument'}->isValid()) return ${'layout9_argument'}->getErrorMessage();
} else
${'layout9_argument'} = NULL;if(${'layout9_argument'} !== null) ${'layout9_argument'}->setColumnType('varchar');

${'sort_index10_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index10_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index10_argument'}->isValid()) return ${'sort_index10_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`yeonriji_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl7_argument,"equal")
,new ConditionWithArgument('`layout_type`',$layout_type8_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout9_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index10_argument'}, "desc")
));
$query->setLimit();
return $query; ?>