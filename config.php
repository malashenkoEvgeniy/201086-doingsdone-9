<?php
	define("DB_HOST", "localhost");
	define("DB_LOGIN", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME",  "doingsdone");

	$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
  $title = 'Дела в порядке!!!!';
 $show_complete_tasks = 0;
