<?php
require_once "config.php";
require_once "function.php";

    $query = "SELECT `id`, `name` FROM project WHERE user_id = 1";
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );
		for ($project = []; $row = mysqli_fetch_assoc($result); $project[] = $row);

    $query = "SELECT `dt_end`, `status`, `name`, `project_id` FROM task WHERE id > 0";
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );
		for ($doings = []; $row = mysqli_fetch_assoc($result); $doings[] = $row);


$content = include_template('index.php', ['doings' => $doings]);

$layout_content = include_template('layout.php', [ 'project' => $project,
                                                  'content' => $content,
                                                  'doings' => $doings,
                                                  'title' => $title
                                                ]);
print($layout_content);

