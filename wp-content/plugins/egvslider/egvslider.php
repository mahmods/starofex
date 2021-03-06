<?php
    /*
    Plugin Name: EGvision Slideshow
    Plugin URI: http://www.egvision.net
    Description: Slideshow plugin
    Author: M. Sherif
    Version: 1.0
    Author URI: http://www.egvision.net
    */
    function egvslider_admin_actions() {
 	add_options_page("Sliders", "Sliders", 1, "Sliders", "egvslider_admin");
}
function egvslider_admin(){
   global $wpdb;
   $before = $wpdb->get_var("CREATE TABLE IF NOT EXISTS `wp_egvsliders` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `pic` text NOT NULL,
  `arrange` INT NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1");


if (isset($_POST['do']) and $_POST['do'] == 'add'){
$title = strip_tags($_POST['title']);
$description = strip_tags($_POST['description']);
$name = $_FILES['pic']['name'];
$size = $_FILES['pic']['size'];
$link= strip_tags($_POST['link']);
if (!$_POST){
	echo '<div id="message" class="updated notice is-dismissible">Please fill all fields</div>';
}else {
	// START
	if ($name != ""){
                 $extension = pathinfo($name,PATHINFO_EXTENSION);
    $array = array('jpg','jpeg','png','gif','JPG','JPEG','PNG','GIF');
       if (!in_array($extension,$array)){
            echo "<div class='wrong'>".$array[0]." --> (".$name.")</div>";
       }else if ($size>100000000){
            echo "<div class='wrong'>Size</div>";
       }else {
            $new_image = time().'.'.$extension;
            $file = "wp-content/uploads";
            $pic = "$file/".$new_image;
            move_uploaded_file($_FILES["pic"]["tmp_name"],"../".$pic."");
	$insert = $wpdb->insert("wp_egvsliders",array( 'description' => $description, 'link' => $link , 'pic' => $pic, 'title' => $title));
	if (isset($insert)){
	echo '<div id="message" class="updated notice is-dismissible">Inserted</div>';
	}

          }
        }

	//END
}

}
if ($_REQUEST['editmode'] == "Yes"){
  $id = intval(abs($_GET['id']));
  if (isset($_POST['do']) and $_POST['do'] == 'edit'){
$title = strip_tags($_POST['title']);
$description = strip_tags($_POST['description']);
$name = $_FILES['pic']['name'];
$size = $_FILES['pic']['size'];
$link= strip_tags($_POST['link']);
if (!$_POST){
	echo '<div id="message" class="updated notice is-dismissible">Please fill all fields</div>';
}else {
	// START
	if ($name != ""){
                 $extension = pathinfo($name,PATHINFO_EXTENSION);
    $array = array('jpg','jpeg','png','gif','JPG','JPEG','PNG','GIF');
       if (!in_array($extension,$array)){
            echo "<div class='wrong'>".$array[0]." --> (".$name.")</div>";
       }else if ($size>100000000){
            echo "<div class='wrong'>Size</div>";
       }else {
            $new_image = time().'.'.$extension;
            $file = "wp-content/uploads";
            $pic = "$file/".$new_image;
            move_uploaded_file($_FILES["pic"]["tmp_name"],"../".$pic."");
          }
        }else {
          $pic = $_POST['oldpic'];
        }

        $insert = $wpdb->query("update wp_egvsliders set title='$title', pic='$pic', description='$description', link='$link' where id='$id'");
	if (isset($insert)){
	echo '<div id="message" class="updated notice is-dismissible">Updated</div>
    <meta http-equiv="refresh" content="0; url='.$_SERVER["PHP_SELF"].'?page=Sliders" />';
	}

	//END
}

}

  $get = $wpdb->get_row("select * from wp_egvsliders where id='$id'");
  ?>
    <h2>Edit Slider</h2>
<div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=Sliders&editmode=Yes&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
<div>
	<p>Title: <input type="text" name="title" value="<?php echo $get->title; ?>"></p>
	<p>Description: <input type="text" name="description" value="<?php echo $get->description; ?>"></p>
	<p>Picture: <input type="file" name="pic"></p>
	<p>Href: <input type="text" name="link" value="<?php echo $get->link; ?>"></p>
	<p><input type="submit" value="Edit"></p>
	<input type="hidden" name="do" value="edit">
	<input type="hidden" name="oldpic" value="<?php echo $get->pic; ?>">
</div>

</form>
</div>
  <?php
}
if (!$_REQUEST['editmode']){
?>
<h2>Add New Slider</h2>
<div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?page=Sliders" method="post" enctype="multipart/form-data">
<div>
	<p>Title: <input type="text" name="title"></p>
	<p>Description: <input type="text" name="description"></p>
	<p>Picture: <input type="file" name="pic"></p>
	<p>Href: <input type="text" name="link"></p>
	<p><input type="submit" value="Add New"></p>
	<input type="hidden" name="do" value="add">
</div>

</form>
</div>
<?php }  ?>
<h2>All Slides Slider</h2>
<?php
if ($_REQUEST['do'] == 'delete'){
	$id = intval(abs($_GET["id"]));
	$del = $wpdb->query("delete from wp_egvsliders WHERE id='$id'");
	if (isset($del)){
		echo '<div id="message" class="updated notice is-dismissible">Deleted</div>';
	}
}
if (isset($_POST['do']) and $_POST['do'] == 'arrange'){
	$id = intval(abs($_POST["id"]));
    $arrange = intval(abs($_POST['arrange']));
	$ar = $wpdb->query("update wp_egvsliders set arrange='$arrange' WHERE id='$id'");
	if (isset($ar)){
		echo '<div id="message" class="updated notice is-dismissible">Updated</div>';
	}
}
?>
<table class="wp-list-table widefat fixed striped posts">
<thead>
<tr>
	<th>العنوان</th>
	<th>ترتيب</th>
	<th>خيارات</th>
</tr>
</thead>
<tbody>
<?php
$query = $wpdb->get_results("SELECT * FROM wp_egvsliders order by arrange asc", ARRAY_A);
foreach($query as $row){
	echo "<tr>
		<td>".$row['title']."</td>
		<td>
            <form action='".$_SERVER['PHP_SELF']."?page=Sliders' method='post'>
            <input type='text' name='arrange' value='".$row['arrange']."'>
            <input type='submit' value='تحديث'>
            <input type='hidden' name='do' value='arrange'>
            <input type='hidden' name='id' value='".$row['id']."'>
            </form>
        </td>
		<td>
            <a href='".$_SERVER['PHP_SELF']."?page=Sliders&do=delete&id=".$row['id']."'>حذف</a>
            <a href='".$_SERVER['PHP_SELF']."?page=Sliders&editmode=Yes&id=".$row['id']."'>تعديل</a>
        </td>
	</tr>";
}

?>

</tbody>
</table>
<?php
}

add_action('admin_menu', 'egvslider_admin_actions');


?>