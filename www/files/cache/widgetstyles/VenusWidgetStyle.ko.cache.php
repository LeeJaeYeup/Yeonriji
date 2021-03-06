<?php if(!defined("__XE__")) exit();
$widgetStyle_info = new stdClass();
$widgetStyle_info->widgetStyle = "VenusWidgetStyle";
$widgetStyle_info->path = "./widgetstyles/VenusWidgetStyle/";
$widgetStyle_info->title = "Venus Widget Style";
$widgetStyle_info->description = "비너스 위젯스타일";
$widgetStyle_info->version = "1.0";
$widgetStyle_info->date = "20150715";
$widgetStyle_info->homepage = "";
$widgetStyle_info->license = "";
$widgetStyle_info->license_link = "";
$widgetStyle_info->preview = "./widgetstyles/VenusWidgetStyle/prv.png";
$widgetStyle_info->author[0] = new stdClass();
$widgetStyle_info->author[0]->name = "inJin";
$widgetStyle_info->author[0]->email_address = "happybohm@gmail.com";
$widgetStyle_info->author[0]->homepage = "http://happybohm.cafe24.com";
$widgetStyle_info->extra_var = new stdClass();
$widgetStyle_info->extra_var->ws_title_display = new stdClass();
$widgetStyle_info->extra_var->ws_title_display->group = "";
$widgetStyle_info->extra_var->ws_title_display->name = "위젯 타이틀 사용여부";
$widgetStyle_info->extra_var->ws_title_display->type = "select";
$widgetStyle_info->extra_var->ws_title_display->value = $vars->ws_title_display;
$widgetStyle_info->extra_var->ws_title_display->description = "위젯 타이틀을 사용여부를 설정해주세요";
$widgetStyle_info->extra_var->ws_title_display->options["Y"] = "사용";
$widgetStyle_info->extra_var->ws_title_display->options["N"] = "사용안함";
$widgetStyle_info->extra_var->ws_title = new stdClass();
$widgetStyle_info->extra_var->ws_title->group = "";
$widgetStyle_info->extra_var->ws_title->name = "제목";
$widgetStyle_info->extra_var->ws_title->type = "text";
$widgetStyle_info->extra_var->ws_title->value = $vars->ws_title;
$widgetStyle_info->extra_var->ws_title->description = "제목 텍스트";
$widgetStyle_info->extra_var->ws_more = new stdClass();
$widgetStyle_info->extra_var->ws_more->group = "";
$widgetStyle_info->extra_var->ws_more->name = "더보기 사용여부";
$widgetStyle_info->extra_var->ws_more->type = "select";
$widgetStyle_info->extra_var->ws_more->value = $vars->ws_more;
$widgetStyle_info->extra_var->ws_more->description = "더보기 기능의 사용여부를 설정해주세요";
$widgetStyle_info->extra_var->ws_more->options["Y"] = "사용";
$widgetStyle_info->extra_var->ws_more->options["N"] = "사용안함";
$widgetStyle_info->extra_var->ws_more_url = new stdClass();
$widgetStyle_info->extra_var->ws_more_url->group = "";
$widgetStyle_info->extra_var->ws_more_url->name = "더보기 URL";
$widgetStyle_info->extra_var->ws_more_url->type = "text";
$widgetStyle_info->extra_var->ws_more_url->value = $vars->ws_more_url;
$widgetStyle_info->extra_var->ws_more_url->description = "http://을 포함한 URL을 지정해주세요";
$widgetStyle_info->extra_var_count = 4;