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
