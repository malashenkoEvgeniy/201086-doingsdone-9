<?php
function showCountTask($arr, $project){
    $count = 0;
    foreach($arr as $elem){
        if ($elem['projects']==$project) {
            $count++;
        }
    }
    return $count;
}
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

//echo get_hour_date('07.05.2019');
echo get_hour_date('08.05.2019');
