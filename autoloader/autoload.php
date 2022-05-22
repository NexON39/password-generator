<?php
spl_autoload_register('autoload');
function autoload($classname)
{
    $paths = [
        'application/controller/',
        'application/model/',
        'application/view/'
    ];

    $ex = '.class.php';

    foreach ($paths as $path) {
        $full = $path . $classname . $ex;
        if (file_exists($full)) {
            require_once $full;
            return;
        }
    }
}
