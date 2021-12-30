<?php
require_once "Helper/Input.php";
require_once "BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batal)");
    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Berhasil menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
        }
    }
}
