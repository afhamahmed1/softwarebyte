<?php
require_once("config.php");

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: ' . $url);
    exit();
}

function getAll($tablename)
{
    global $conn;
    $view_query = "select * from $tablename";
    return mysqli_query($conn, $view_query);
}

function getBySection($tablename, $section_name)
{
    global $conn;
    $view_query = "select * from $tablename where section = '$section_name'";
    return mysqli_query($conn, $view_query);
}

function getByLimit($tablename, $limit)
{
    global $conn;
    $view_query = "select * from $tablename  LIMIT $limit";
    return mysqli_query($conn, $view_query);
}

function getByColumn($tablename, $column_name, $column)
{
    global $conn;
    $view_query = "select * from $tablename where $column_name = '$column'";
    return mysqli_query($conn, $view_query);
}

function getById($tablename, $id)
{
    global $conn;
    $view_query = "select * from $tablename where id = $id";
    return (mysqli_query($conn, $view_query));
}
function getBySlug($tablename, $slug)
{
    global $conn;
    $view_query = "select * from $tablename where slug = '$slug'";
    return (mysqli_query($conn, $view_query));
}

function section_name($tablename1, $tablename2, $item_id, $id)
{
    global $conn;
    $view_query = "select c.name from $tablename1 as s inner join $tablename2 as c on s.$item_id = c.id where s.$item_id = $id";
    return mysqli_query($conn, $view_query);
}

function recentposts()
{
    global $conn;
    $recent_post = "SELECT * FROM blogs ORDER BY created_at desc limit 3";
    return mysqli_query($conn, $recent_post);
}

function getAllUnique($tablename, $column_name)
{
    global $conn;
    $all_unique = "SELECT DISTINCT($column_name) from $tablename";
    return mysqli_query($conn, $all_unique);
}

function addImage($image)
{
    $filename = "";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;
    return $filename;
}
function linkImage($image, $filename, $path = "../uploads/")
{
    move_uploaded_file($image, $path . $filename);
}

function editImage($new_image, $old_image)
{
    $filename = "";
    if ($new_image == "") {
        $filename = $old_image;
    } else {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;
    }
    return $filename;
}

function unlinkImage($new_image, $old_image, $filename, $path = "../uploads/")
{
    if ($new_image != "") {
        move_uploaded_file($new_image, $path . $filename);
        if (file_exists($path . $old_image)) {
            unlink($path . $old_image);
        }
    }
}
function maxColumn($tablename, $column_name = "id")
{
    global $conn;
    $query = "select max($column_name) from $tablename";
    return mysqli_query($conn, $query);
}

function validSlug($slug, $tablename)
{
    global $conn;
    $check = "select * from $tablename where slug='$slug'";
    $check_run = mysqli_fetch_all(mysqli_query($conn, $check));
    $slugs_present = count($check_run);

    if ($slugs_present == 0) {
        return true;
    } else {
        return false;
    }
}

function generate_slug($text, $tablename, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    $not_valid = true;
    $count = 1;
    $slug = $text;
    while ($not_valid) {

        $not_valid = !validSlug($slug, $tablename);
        if ($not_valid) {
            $slug = $text . $count;
            $count++;
        }
    }

    if (empty($slug)) {
        return 'n-a';
    }

    return $slug;
}
