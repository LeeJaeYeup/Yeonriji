<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid42_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid42_argument'}->ensureDefaultValue('Y');
${'isvalid42_argument'}->checkNotNull();
if(!${'isvalid42_argument'}->isValid()) return ${'isvalid42_argument'}->getErrorMessage();
if(${'isvalid42_argument'} !== null) ${'isvalid42_argument'}->setColumnType('char');

${'upload_target_srl43_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl43_argument'}->checkFilter('number');
${'upload_target_srl43_argument'}->checkNotNull();
${'upload_target_srl43_argument'}->createConditionValue();
if(!${'upload_target_srl43_argument'}->isValid()) return ${'upload_target_srl43_argument'}->getErrorMessage();
if(${'upload_target_srl43_argument'} !== null) ${'upload_target_srl43_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid42_argument'})
));
$query->setTables(array(
new Table('`yeonriji_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl43_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>