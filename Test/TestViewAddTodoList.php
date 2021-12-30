<?php

require_once "Views/ViewAddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Muhammad");
addTodoList("Ali");
addTodoList("Albair");

ViewAddTodoList();

showTodoList();

ViewAddTodoList();

showTodoList();
