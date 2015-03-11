<?php

use System;
use System\Windows\Forms;
use System\Windows\Forms\Application;

use BengkelPokokEmas\Form1;

class Program
{
	static function Main()
	{
		Application::EnableVisualStyles();
		Application::Run(new Form1());
	}
}
?>