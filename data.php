<?php
require_once "function.php";
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);
$projects = [
    'Входящие',
    'Учеба',
    'Работа',
    'Домашние дела',
    'Авто'
];
$doings = [
    [
        'task' => 'Собеседование в IT компании',
        'date' => '01.12.2018',
        'projects' => $projects[2],
        'status' => 'Нет'
    ],
    [
        'task' => 'Выполнить тестовое задание',
        'date' => '25.12.2018',
        'projects' => $projects[2],
        'status' => 'Нет'
    ],
    [
        'task' => 'Встреча с другом',
        'date' => '22.12.2018',
        'projects' => $projects[0],
        'status' => 'Нет'
    ],
    [
        'task' => 'Сделать задание первого раздела',
        'date' => '21.12.2018',
        'projects' => $projects[1],
        'status' => 'Да'
    ],
    [
        'task' => 'Купить корм для кота',
        'date' => 'Нет',
        'projects' => $projects[3],
        'status' => 'Нет'
    ],
    [
        'task' => 'Заказать пиццу',
        'date' => 'Нет',
        'projects' => $projects[3],
        'status' => 'Нет'
    ]
];
