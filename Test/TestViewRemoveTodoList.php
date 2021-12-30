<?php

require_once "Model/TodoList.php";
require_once "Views/ViewRemoveTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";


addTodoList("Muhammad");
addTodoList("Ali");
addTodoList("Albair");
addTodoList("Universitas");
addTodoList("Gunadarma");

showTodoList();

viewRemoveTodoList();

showTodoList();
