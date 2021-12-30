<?php

//about fgets https://www.php.net/manual/en/function.fgets.php
function input($info)
{
    echo "$info : ";
    $result = fgets(STDIN);
    return trim($result);
}
