<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = "";
$layout_info->layout = "firstkenta";
$layout_info->type = "";
$layout_info->path = "./layouts/firstkenta/";
$layout_info->title = "Kenta Layout - First";
$layout_info->description = "Kenta가 배포한 첫번째 레이아웃입니다";
$layout_info->version = "1.1";
$layout_info->date = "20140504";
$layout_info->homepage = "";
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->license = "";
$layout_info->license_link = "";
$layout_info->layout_type = "P";
$layout_info->author = array();
$layout_info->author[0] = new stdClass;
$layout_info->author[0]->name = "Kenta";
$layout_info->author[0]->email_address = "lansys05@migix.jp";
$layout_info->author[0]->homepage = "http://kenta.migix.jp";
$layout_info->extra_var = new stdClass;
$layout_info->extra_var->type = new stdClass;
$layout_info->extra_var->type->group = "";
$layout_info->extra_var->type->title = "레이아웃 유형";
$layout_info->extra_var->type->type = "select";
$layout_info->extra_var->type->value = $vars->type;
$layout_info->extra_var->type->description = "";
$layout_info->extra_var->type->options = array();
$layout_info->extra_var->type->options["main"] = new stdClass;
$layout_info->extra_var->type->options["main"]->val = "메인 레이아웃";
$layout_info->extra_var->url_logo = new stdClass;
$layout_info->extra_var->url_logo->group = "";
$layout_info->extra_var->url_logo->title = "로고 URL";
$layout_info->extra_var->url_logo->type = "text";
$layout_info->extra_var->url_logo->value = $vars->url_logo;
$layout_info->extra_var->url_logo->description = "";
$layout_info->extra_var->text_logo = new stdClass;
$layout_info->extra_var->text_logo->group = "";
$layout_info->extra_var->text_logo->title = "로고 텍스트";
$layout_info->extra_var->text_logo->type = "text";
$layout_info->extra_var->text_logo->value = $vars->text_logo;
$layout_info->extra_var->text_logo->description = "";
$layout_info->extra_var->copyright = new stdClass;
$layout_info->extra_var->copyright->group = "";
$layout_info->extra_var->copyright->title = "카피라이트";
$layout_info->extra_var->copyright->type = "textarea";
$layout_info->extra_var->copyright->value = $vars->copyright;
$layout_info->extra_var->copyright->description = "";
$layout_info->extra_var_count = "4";
$layout_info->menu_count = "1";
$layout_info->menu = new stdClass;
$layout_info->default_menu = "main_menu";
$layout_info->menu->main_menu = new stdClass;
$layout_info->menu->main_menu->name = "main_menu";
$layout_info->menu->main_menu->title = "메인 메뉴";
$layout_info->menu->main_menu->maxdepth = "2";
$layout_info->menu->main_menu->menu_srl = $vars->main_menu;
$layout_info->menu->main_menu->xml_file = "./files/cache/menu/".$vars->main_menu.".xml.php";
$layout_info->menu->main_menu->php_file = "./files/cache/menu/".$vars->main_menu.".php";