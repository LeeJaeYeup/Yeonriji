<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("chkDeniedNickName");
$query->setAction("select");
$query->setPriority("");
if(isset($args->nick_name)) {
${'nick_name1_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name1_argument'}->createConditionValue();
if(!${'nick_name1_argument'}->isValid()) return ${'nick_name1_argument'}->getErrorMessage();
} else
${'nick_name1_argument'} = NULL;if(${'nick_name1_argument'} !== null) ${'nick_name1_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`yeonriji_member_denied_nick_name`', '`member_denied_nick_name`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`nick_name`',$nick_name1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>