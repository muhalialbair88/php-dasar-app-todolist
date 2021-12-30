<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Muhammad");
addTodoList("Ali");
addTodoList("Albair");

var_dump($todoList);
