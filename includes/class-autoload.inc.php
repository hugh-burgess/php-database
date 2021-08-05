<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
    $folders = ['Repository', 'Controller', 'View', 'classes', 'Model'];
    $ext = '.class.php';

    foreach ($folders as $folder) {
        $url = $folder . '/' . $className . $ext;
        if (file_exists($url)) {
            require_once $url;
        }
    }
}