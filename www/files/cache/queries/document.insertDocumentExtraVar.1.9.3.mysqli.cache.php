<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocumentExtraVar");
$query->setAction("insert");
$query->setPriority("");

${'module_srl33_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl33_argument'}->checkFilter('number');
${'module_srl33_argument'}->checkNotNull();
if(!${'module_srl33_argument'}->isValid()) return ${'module_srl33_argument'}->getErrorMessage();
if(${'module_srl33_argument'} !== null) ${'module_srl33_argument'}->setColumnType('number');

${'document_srl34_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl34_argument'}->checkFilter('number');
${'document_srl34_argument'}->checkNotNull();
if(!${'document_srl34_argument'}->isValid()) return ${'document_srl34_argument'}->getErrorMessage();
if(${'document_srl34_argument'} !== null) ${'document_srl34_argument'}->setColumnType('number');

${'var_idx35_argument'} = new Argument('var_idx', $args->{'var_idx'});
${'var_idx35_argument'}->checkFilter('number');
${'var_idx35_argument'}->checkNotNull();
if(!${'var_idx35_argument'}->isValid()) return ${'var_idx35_argument'}->getErrorMessage();
if(${'var_idx35_argument'} !== null) ${'var_idx35_argument'}->setColumnType('number');

${'value36_argument'} = new Argument('value', $args->{'value'});
${'value36_argument'}->checkNotNull();
if(!${'value36_argument'}->isValid()) return ${'value36_argument'}->getErrorMessage();
if(${'value36_argument'} !== null) ${'value36_argument'}->setColumnType('bigtext');
if(isset($args->lang_code)) {
${'lang_code37_argument'} = new Argument('lang_code', $args->{'lang_code'});
if(!${'lang_code37_argument'}->isValid()) return ${'lang_code37_argument'}->getErrorMessage();
} else
${'lang_code37_argument'} = NULL;if(${'lang_code37_argument'} !== null) ${'lang_code37_argument'}->setColumnType('varchar');

${'eid38_argument'} = new Argument('eid', $args->{'eid'});
${'eid38_argument'}->checkNotNull();
if(!${'eid38_argument'}->isValid()) return ${'eid38_argument'}->getErrorMessage();
if(${'eid38_argument'} !== null) ${'eid38_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl33_argument'})
,new InsertExpression('`document_srl`', ${'document_srl34_argument'})
,new InsertExpression('`var_idx`', ${'var_idx35_argument'})
,new InsertExpression('`value`', ${'value36_argument'})
,new InsertExpression('`lang_code`', ${'lang_code37_argument'})
,new InsertExpression('`eid`', ${'eid38_argument'})
));
$query->setTables(array(
new Table('`yeonriji_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>