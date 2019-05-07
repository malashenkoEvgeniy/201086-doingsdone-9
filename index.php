<?php
require_once "data.php";
require_once "function.php";

$content = include_template('index.php', ['doings' => $doings]);

$layout_content = include_template('layout.php', [
																															'content' => $content,
																															'doings' => $doings,
																															'title' => $title
																														]);
print($layout_content);

