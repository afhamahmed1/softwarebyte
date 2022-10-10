<?php


// $valid = true;
// $not_valid = !$valid;
// while ($not_valid) {
//     echo "1";
// }

// echo dirname(__FILE__);

function getHtmlRootFolder(string $root = '/var/www/')
{

    // -- try to use DOCUMENT_ROOT first --
    $ret = str_replace(' ', '', $_SERVER['DOCUMENT_ROOT']);
    $ret = rtrim($ret, '/') . '/';

    // -- if doesn't contain root path, find using this file's loc. path --
    if (!preg_match("#" . $root . "#", $ret)) {
        $root = rtrim($root, '/') . '/';
        $root_arr = explode("/", $root);
        $pwd_arr = explode("/", getcwd());
        $ret = $root . $pwd_arr[count($root_arr) - 1];
    }

    return (preg_match("#" . $root . "#", $ret)) ? rtrim($ret, '/') . '/' : null;
}

print_r("/functions");
