<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/Views/ViewShowTodoList.php";
require_once __DIR__ . "/Views/ViewAddTodoList.php";
require_once __DIR__ . "/Views/ViewRemoveTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi TodoList" . PHP_EOL;

viewShowTodoList();
