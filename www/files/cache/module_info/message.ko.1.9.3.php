<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = 'dispMessage';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispMessageAdminConfig';
$info->action = new stdClass;
$info->action->dispMessage = new stdClass;
$info->action->dispMessage->type='view';
$info->action->dispMessage->grant='guest';
$info->action->dispMessage->standalone='true';
$info->action->dispMessage->ruleset='';
$info->action->dispMessage->method='';
$info->action->dispMessage->check_csrf='true';
$info->action->dispMessageAdminConfig = new stdClass;
$info->action->dispMessageAdminConfig->type='view';
$info->action->dispMessageAdminConfig->grant='guest';
$info->action->dispMessageAdminConfig->standalone='true';
$info->action->dispMessageAdminConfig->ruleset='';
$info->action->dispMessageAdminConfig->method='';
$info->action->dispMessageAdminConfig->check_csrf='true';
$info->action->procMessageAdminInsertConfig = new stdClass;
$info->action->procMessageAdminInsertConfig->type='controller';
$info->action->procMessageAdminInsertConfig->grant='guest';
$info->action->procMessageAdminInsertConfig->standalone='true';
$info->action->procMessageAdminInsertConfig->ruleset='';
$info->action->procMessageAdminInsertConfig->method='';
$info->action->procMessageAdminInsertConfig->check_csrf='true';
$info->action->getMessageAdminColorset = new stdClass;
$info->action->getMessageAdminColorset->type='model';
$info->action->getMessageAdminColorset->grant='guest';
$info->action->getMessageAdminColorset->standalone='true';
$info->action->getMessageAdminColorset->ruleset='';
$info->action->getMessageAdminColorset->method='';
$info->action->getMessageAdminColorset->check_csrf='true';
return $info;