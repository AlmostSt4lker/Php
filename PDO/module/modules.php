<?php
function module_use()
{


    if (array_key_exists('v', $_GET)) {

        $module = $_GET['v'];

    } else {
        $module = '';
    }

    $content = "module/" . $module . ".php";

    if (file_exists($content)) {
        include $content;
    }



}
?>