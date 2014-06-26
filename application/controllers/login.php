<?php

class Login extends Controller
{
	function index()
	{
		$content = $this->loadView("login/index" , true);
		$header = $this->loadView("include/header" , true);
		$footer = $this->loadView("include/footer" , true);
		$menu = $this->loadView("include/menu" , true);
		$sidebar = $this->loadView("include/sidebar" , true);

		$template = $this->loadview("template");
		$template->set("header" , $header);
		$template->set("content" , $content);
		$template->set("footer" , $footer);
		$template->set("menu" , $menu);
		$template->set("sidebar" , $sidebar);
		$template->render();

		if(isset($_POST[""]))
		{
			
		}
	}
}