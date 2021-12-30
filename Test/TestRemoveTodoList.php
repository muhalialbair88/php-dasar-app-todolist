<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("Muhammad");
addTodoList("Ali");
addTodoList("Albair");
addTodoList("Cey");
addTodoList("Soka");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();
