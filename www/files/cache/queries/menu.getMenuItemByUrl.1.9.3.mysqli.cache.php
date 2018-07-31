<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url34_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url34_argument'}->checkNotNull();
${'url34_argument'}->createConditionValue();
if(!${'url34_argument'}->isValid()) return ${'url34_argument'}->getErrorMessage();
if(${'url34_argument'} !== null) ${'url34_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut35_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut35_argument'}->createConditionValue();
if(!${'is_shortcut35_argument'}->isValid()) return ${'is_shortcut35_argument'}->getErrorMessage();
} else
${'is_shortcut35_argument'} = NULL;if(${'is_shortcut35_argument'} !== null) ${'is_shortcut35_argument'}->setColumnType('char');

${'site_srl36_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl36_argument'}->checkNotNull();
${'site_srl36_argument'}->createConditionValue();
if(!${'site_srl36_argument'}->isValid()) return ${'site_srl36_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`yeonriji_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`MI`.`url`',$url34_argument,"equal")
,new ConditionWithArgument('`MI`.`is_shortcut`',$is_shortcut35_argument,"equal", 'and')
,new ConditionSubquery('`MI`.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`yeonriji_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('`M`.`site_srl`',$site_srl36_argument,"equal")))
),
array(),
array(),
null
),"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>