<?php

session_start();

include_once("../middleware/adminMiddleware.php");




class Database
{

    public $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "softwarebyte_backup2");
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error($this->conn));
        }
    }
    public function insert($tablename, $data)
    {
        $insert_query = "INSERT INTO " . $tablename . " (";
        $insert_query .= implode(",", array_keys($data)) . ') VALUES (';
        $insert_query .= "'"  . implode("','", array_values($data)) . "')";
        $insert_query_run = mysqli_query($this->conn, $insert_query);
        if ($insert_query_run) {
            return true;
        } else {
            return false;
        }
    }
    public function update($tablename, $data, $id)
    {
        $update_query = "UPDATE $tablename set ";
        foreach ($data as $i => $item) {
            $update_query .= $i . " = " . "'$item'" . ", ";
        }
        $update_query = substr($update_query, 0, strlen($update_query) - 2);
        $update_query .= " where id = '$id'";

        $update_query_run = mysqli_query($this->conn, $update_query);
        if ($update_query_run) {
            return true;
        } else {
            return false;
        }
    }
    public function delete($tablename, $id)
    {
        $delete_query = "DELETE from $tablename where id = '$id'";
        $delete_query_run = mysqli_query($this->conn, $delete_query);
        if ($delete_query_run) {
            return true;
        } else {
            return false;
        }
    }
}

$database = new Database();

if (isset($_POST['add_btn'])) {
    $tablename = $_POST["type"];
    $section = $_POST['section'] . "s";
    $image =  $_FILES['image']["name"];
    $icon = $_FILES['icon']['name'];
    $icon_ext = pathinfo($icon, PATHINFO_EXTENSION);
    $icon = time() . '.' . $icon_ext;
    $path = "../uploads";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;
    $slug = generate_slug($_POST['title'], $tablename);


    $data = array(
        "category_id" => $_POST['category_id'],
        "title" => $_POST['title'],
        "meta_title" => $_POST['meta_title'],
        "icon" => $icon,
        "number" => $_POST['number'],
        "meta_description" => $_POST['meta_description'],
        "alt_text" => $_POST['alt_text'],
        "image" => $filename,
        "content" => $_POST['content'],
        "slug" => $slug
    );
    $database->insert($tablename, $data);
    if ($database) {
        move_uploaded_file($_FILES['icon']['tmp_name'], $path . '/' . $icon);
        move_uploaded_file($_FILES['image']['tmp_name'], $path . '/' . $filename);
        redirect("view_$section.php", "Item Added Successfully.");
    } else {
        redirect("view_$section.php", "Something Went Wrong");
    }
} else if (isset($_POST['edit_btn'])) {
    $tablename = $_POST["type"];
    $id = $_POST["id"];
    $section = $_POST["section"];
    $new_icon = $_FILES['icon']['name'];
    $old_icon = $_POST['old_icon'];
    $new_image =  $_FILES['image']["name"];
    $old_image =  $_POST['old_image'];
    $slug = generate_slug($_POST['title'], $tablename);
    if ($new_icon == "") {
        $icon = $old_icon;
    } else {
        $icon_ext = pathinfo($new_icon, PATHINFO_EXTENSION);
        $icon = time() . '.' . $icon_ext;
    }

    if ($new_image == "") {
        $filename = $old_image;
    } else {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_ext;
    }

    $path = "../uploads";

    $data = array(
        "category_id" => $_POST['category_id'],
        "title" => $_POST['title'],
        "meta_title" => $_POST['meta_title'],
        "icon" => $icon,
        "number" => $_POST['number'],

        "meta_description" => $_POST['meta_description'],
        "alt_text" => $_POST['alt_text'],
        "image" => $filename,
        "content" => $_POST['content'],
        "slug" => $slug
    );
    $database->update($tablename, $data, $id);
    if ($database) {
        if ($new_icon != "") {
            move_uploaded_file($_FILES['icon']['tmp_name'], '../uploads/' . $icon);
            if (file_exists('../uploads/' . $old_icon)) {
                unlink('../uploads/' . $old_icon);
            }
        }
        if ($new_image != "") {

            move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . $filename);

            if (file_exists('../uploads/' . $old_image)) {
                unlink('../uploads/' . $old_image);
            }
        }
        redirect("edit_$section.php?id=$id&section=$section", "Item Updated Successfully.");
    } else {
        redirect("edit_$section.phpid=$id&section=$section", "Something Went Wrong");
    }
} else if (isset($_POST['delete_btn'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $tablename = $_POST['type'];
    if ($tablename == 'projects' or $tablename == 'services' or $tablename == 'blogs') {
        $tag_table = substr($tablename, 0, -1) . "_tags";
        $delete_tags = "delete from $tag_table where section_id = '$id'";
        $delete_tags_run = mysqli_query($conn, $delete_tags);
    }
    $database->delete($tablename, $id);
    if ($database) {

        redirect("view_$tablename.php", "Item Deleted Successfully.");
    } else {
        redirect("view_$tablename.php", "Something Went Wrong.");
    }
} else if (isset($_POST['add_testimonial_btn'])) {
    $tablename = $_POST["type"];
    $image =  $_FILES['image']["name"];
    $filename = addImage($image);
    $data = array(
        "client_name" => $_POST['client_name'],
        "review" => $_POST['review'],
        "client_designation" => $_POST['client_designation'],
        "rating" => $_POST['rating'],
        "alt_text" => $_POST['alt_text'],
        "image" => $filename,
    );
    $database->insert($tablename, $data);
    if ($database) {
        linkImage($_FILES['name']['tmp_name'], $filename);
        redirect("add_testimonial.php", "Item Added Successfully.");
    } else {
        redirect("add_testimonial.php", "Something Went Wrong");
    }
} else if (isset($_POST['edit_testimonial_btn'])) {
    $tablename = $_POST["type"];
    $id = $_POST["id"];
    $new_image =  $_FILES['image']["name"];
    $old_image =  $_POST['old_image'];
    $filename = editImage($new_image, $old_image);

    $data = array(
        "client_name" => $_POST['client_name'],
        "review" => $_POST['review'],
        "client_designation" => $_POST['client_designation'],
        "rating" => $_POST['rating'],

        "alt_text" => $_POST['alt_text'],
        "image" => $filename,
    );
    $database->update($tablename, $data, $id);
    if ($database) {
        unlinkImage($_FILES['image']['tmp_name'], $old_image, $filename);

        redirect("edit_testimonial.php?id=$id", "Item Updated Successfully.");
    } else {
        redirect("edit_testimonial.phpid=$id", "Something Went Wrong");
    }
} else if (isset($_POST['add_tier_btn'])) {
    $tablename = $_POST["type"];
    $data = array(
        "name" => $_POST['name'],
        "small_title" => $_POST['small_title'],
        "price" => $_POST['price'],
        "category_id" => $_POST['category_id'],
        "content" => $_POST['content']
    );
    $database->insert($tablename, $data);
    if ($database) {
        redirect("add_tier.php", "Tier Added Successfully.");
    } else {
        redirect("add_tier.php", "Something Went Wrong");
    }
} else if (isset($_POST['edit_tier_btn'])) {
    $id = $_POST['id'];
    $tablename = $_POST["type"];
    $data = array(
        "name" => $_POST['name'],
        "small_title" => $_POST['small_title'],
        "price" => $_POST['price'],
        "content" => $_POST['content']
    );

    $database->update($tablename, $data, $id);

    if ($database) {

        redirect("edit_tier.php?id=$id", "Tier Updated Successfully.");
    } else {
        redirect("edit_tier.php?id=$id", "Something Went Wrong");
    }
} else if (isset($_POST['add_pricing_plan_btn'])) {
    $tablename = $_POST["type"];
    $data = array(
        "category_id" => $_POST['category_id'],
        "tier_id" => $_POST['tier_id']

    );
    $database->insert($tablename, $data);
    if ($database) {
        redirect("add_pricing_plan.php", "Pricing Plan Added Successfully.");
    } else {
        redirect("add_pricing_plan.php", "Something Went Wrong");
    }
} else if (isset($_POST['edit_pricing_plan_btn'])) {
    $id = $_POST['id'];
    $tablename = $_POST["type"];
    $data = array(
        "category_id" => $_POST['category_id'],
        "tier_id" => $_POST['tier_id']
    );

    $database->update($tablename, $data, $id);

    if ($database) {

        redirect("edit_pricing_plan.php?id=$id", "Pricing Plan Updated Successfully.");
    } else {
        redirect("edit_pricing_plan.php?id=$id", "Something Went Wrong");
    }
} else if (isset($_POST['add_category_btn'])) {
    $tablename = "categories";
    $image =  $_FILES['image']["name"];
    $filename = addImage($image);
    $data = array(
        "name" => $_POST['name'],
        "image" => $filename,
        "section" => $_POST['section'],
        "description" => $_POST['description'],
    );
    $database->insert($tablename, $data);
    if ($database) {
        linkImage($_FILES['image']['tmp_name'], $filename);
        redirect("add_category.php", "Category Added Successfully.");
    } else {
        redirect("add_category.php", "Something Went Wrong");
    }
} else if (isset($_POST['edit_categories_btn'])) {
    $id = $_POST['id'];
    $tablename = "categories";
    $new_image =  $_FILES['image']["name"];
    $old_image =  $_POST['old_image'];
    $filename = editImage($new_image, $old_image);
    $data = array(
        "name" => $_POST['name'],
        "image" => $filename,
        "section" => $_POST['section_id'],
        "description" => $_POST['description'],
    );


    $database->update($tablename, $data, $id);
    if ($database) {
        unlinkImage($_FILES['image']['tmp_name'], $old_image, $filename);
        redirect("edit_category.php?id=$id", "Category Updated Successfully.");
    } else {
        redirect("edit_category.php?id=$id", "Something Went Wrong");
    }
} else if (isset($_POST['delete_category_btn'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $section = $_POST['section'];
    $tablename = "categories";
    $database->delete($tablename, $id);
    if ($database) {

        redirect("view_categories.php?section=$section", "Category Deleted Successfully.");
    } else {
        redirect("view_categories.php?section=$section", "Something Went Wrong.");
    }
} else if (isset($_POST['add_tags'])) {
    $column_name = "id";

    $tag_id = $_POST['tag_id'];
    $filename = $_POST['url'];
    $section = $_POST['section'];
    $tags_table = $_POST['tags_table'];
    $id = maxColumn($section . "s", $column_name);
    $id = mysqli_fetch_assoc($id);
    $id = $id["max($column_name)"];
    $id = $id + 1;
    $check = "select * from $tags_table where section_id='$id' and tag_id='$tag_id'";
    $check_run = mysqli_query($conn, $check);
    if (mysqli_num_rows($check_run) > 0) {
        redirect("$filename?section=$section&id=$id", "Tag Already Added.");
    }

    $data = array(
        "tag_id" => $_POST['tag_id'],
        "section_id" => $id,

    );
    $database->insert($tags_table, $data);
    if ($database) {

        redirect("$filename?section=$section&id=$id", "Tag Added Successfully.");
    } else {
        redirect("$filename?section=$section", "Something Went Wrong");
    }
} else if (isset($_POST['edit_tags'])) {
    $id = $_POST['id'];
    $filename = $_POST['url'];
    $tag_id = $_POST['tag_id'];
    $tags_table = $_POST['tags_table'];
    $section = $_POST['section'];
    $check = "select * from $tags_table where section_id='$id' and tag_id='$tag_id'";
    $check_run = mysqli_query($conn, $check);
    if (mysqli_num_rows($check_run) > 0) {
        redirect("$filename?section=$section&id=$id", "Tag Already Added.");
    }

    $data = array(
        "tag_id" => $_POST['tag_id'],
        "section_id" => $id,

    );
    $database->insert($tags_table, $data);
    if ($database) {

        redirect("$filename?section=$section&id=$id", "Tag Added Successfully.");
    } else {
        redirect("$filename?section=$section", "Something Went Wrong");
    }
} else if (isset($_POST['delete_tags'])) {
    $filename = $_POST['url'];
    $tags_table = $_POST['tags_table'];
    $section = $_POST['section'];
    $id = $_POST['id'];
    $tag_id = $_POST['tag_id'];
    $delete_query = "delete from $tags_table where section_id= '$id' and tag_id='$tag_id'";
    $delete_query_run = mysqli_query($conn, $delete_query);
    if ($delete_query_run) {
        redirect("$filename?section=$section&id=$id", "Tag Removed Successfully.");
    } else {
        redirect("$filename?section=$section&id=$id", "Something Went Wrong");
    }
} else if (isset($_POST['add_tag_btn'])) {
    $tablename = "tags";
    $data = array(
        "name" => $_POST['name'],
        "section" => $_POST['section'],
        "description" => $_POST['description']
    );
    $database->insert($tablename, $data);
    if ($database) {
        redirect("add_tag.php", "Tag Added Successfully.");
    } else {
        redirect("add_tag.php", "Something Went Wrong");
    }
} else if (isset($_POST['edit_tag_btn'])) {
    $id = $_POST['id'];
    $tablename = "tags";
    $data = array(
        "name" => $_POST['name'],
        "section" => $_POST['section'],
        "description" => $_POST['description']
    );

    $database->update($tablename, $data, $id);

    if ($database) {



        redirect("edit_tag.php?id=$id", "Tag Updated Successfully.");
    } else {
        redirect("edit_tag.php?id=$id", "Something Went Wrong");
    }
} else if (isset($_POST['delete_tag_btn'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $section = $_POST['section'];
    $tablename = "tags";
    $database->delete($tablename, $id);
    if ($database) {

        redirect("view_tags.php?section=$section", "Tag Deleted Successfully.");
    } else {
        redirect("view_tags.php?section=$section", "Something Went Wrong.");
    }
}
