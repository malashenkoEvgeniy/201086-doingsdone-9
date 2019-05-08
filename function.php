<?php

/**
 * Подключает шаблон, передает туда данные и возвращает итоговый HTML контент
 * @param string $name Путь к файлу шаблона относительно папки templates
 * @param array $data Ассоциативный массив с данными для шаблона
 * @return string Итоговый HTML
 */
function include_template($name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

/**
 * Функция подсчитывает количество часов до даты указаной в параметре
 * @param date -заданая дата
 * @return int количество часов до даты в параметре
 */
function get_hour_date($date) {
    date_default_timezone_set('Europe/Kiev');
    $str = strtotime($date);
    $t = time();
    if($str>$t){
        $k = $str-$t;
        return floor($k/3600);
        }
    return 999;
}
/**
 * Функция принимает масив категорий и айди категории
 * @param {array}
 * @return {string} Название категории
 */
function get_category_name_byid($arr, $id) {
			foreach($arr as $item) {
				if ($item['id'] == $id) {
					return $item['name'];
				}
			}
		}
/**
 * Функция принимает масив задач и проектов 
 * @param {array}
 * @return {string}  Возвращает ассоциативный массив, в котором ключами будут элементы массива, а значениями - их количество в массиве.
 */
function showTask($arr, $project){
				$rez = [];
				foreach($arr as $cause):
					array_push($rez, get_category_name_byid($project, $cause['project_id'])
					
					);
          endforeach;
				
				return array_count_values($rez);
		}
