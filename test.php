<?php

// $array = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
// $comma_separated  = implode(",", array($array));
// echo $comma_separated; // banana,strawberry,apple

// $values = array_map('array_pop', $array);
// $imploded = implode(',', $values);

$p = array("id" => "blar", "class" => "myclass", "onclick" => "myJavascriptFunc()");

// Join Params

// $a = (id = "blar", class = "myclass", "onclick" = "myJavascriptFunc()");
$str = "";

// foreach ($p as $i => $item) {
//     $str .= $i . " = " . "'$item'" . ", ";
// }
// echo substr($str, 0, strlen($str) - 2);

// $txt = "Akshit Loves GeeksForGeeks";
// echo "Last character of String is : "
//     . substr($txt, 0, strlen($txt) - 1);

// $a = array("item1" => "object1", "item2" => "object2");
// echo http_build_query($a, '', ', ');

// array_walk($p, create_function('&$i,$k', '$i=" $k=\"$i\"";'));
// $p_string = implode($p, "");


$tablename = 'abc';
$data = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
$id = 1;

// $insert_query = "INSERT INTO " . $tablename . " (";
// $insert_query .= implode(",", array_keys($data)) . ') VALUES (';
// $insert_query .= "'"  . implode("','", array_values($data)) . "')";


// $update_query = "UPDATE $tablename set ";
// foreach ($data as $i => $item) {
//     $update_query .= $i . " = " . "'$item'" . ", ";
// }
// $update_query = substr($update_query, 0, strlen($update_query) - 2);
// $update_query .= " where id = '$id'";

// echo $update_query;

// $string = "UPDATE $tablename set ";
// foreach ($data as $i => $item) {
//     $string .= $i . " = " . "'$item'" . ", ";
// }
// $string = substr($string, 0, strlen($string) - 2);
// $string .= " where id = '$id'";

// echo $string;


$path = parse_url('http://domainname/rootfolder/filename.php', PHP_URL_PATH);

// echo $path;
// echo substr($_SERVER["SCRIPT_NAME"], strpos($_SERVER['SCRIPT_NAME'], "/", "1") + 1);
$path_parts  = pathinfo($_SERVER['SCRIPT_NAME']);

// echo $path_parts['filename'];
// echo $path_parts['filename'] . "." . $path_parts['extension'];
// echo basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

// echo $_SERVER['QUERY_STRING'];

echo basename($_SERVER['REQUEST_URI']);
