<?php

/**
 * Menghapus todo di list
 */
function removeTodoList($number)
{
    global $todoList;

    if ($number > sizeof($todoList)) {
        return false;
    }
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }
    unset($todoList[sizeof($todoList)]);

    return true;
    //1. Muhammad
    //2. Ali
    //3. Albair

    //1.Muhammad
    //2.$todolist[2+1];
    //3.$todoList[3+1];
}
