<?php 
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
    redirect_to(url_for('/staff/pages/index.php'));
}
$id = $_GET['id'];
$menu_name = '';
$position = '';
$visible = '';

if(request_is_post()) {
    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form parameters<br />";
    echo "Menu name: " . $menu_name . "<br />";
    echo "Position: " . $position . "<br />";
    echo "Visible: " . $visible . "<br />";
} else {
    // Display page
}
?>

<?php include(SHARED_PATH . '/staff_header.php');?>
<?php $page_title = 'Edit Page'; ?>
<div id="content">

<a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

<div class="page new">
  <h1>Edit Page</h1>

  <form action="<?php echo url_for('/staff/pages/edit.php?id=' . htmlspecialchars(urlencode($id)));?>" method="post">
    <dl>
      <dt>Menu Name</dt>
      <dd><input type="text" name="menu_name" value="<? echo htmlspecialchars($menu_name) ?>" /></dd>
    </dl>
    <dl>
      <dt>Position</dt>
      <dd>
        <select name="position">
          <option value="1" <? if($position == "1") { echo " selected"; } ?>>1</option>
        </select>
      </dd>
    </dl>
    <dl>
      <dt>Visible</dt>
      <dd>
      <!-- Once the form is submitted the data sent would be no value whatsoever if visible is
           not checked. By placing a hidden value it will take presidence if the visible is not
           checked sending a 0 value, as the checkbox comes later it takes presedence when checked-->
        <input type="hidden" name="visible" value="0" />
        <input type="checkbox" name="visible" value="1" <?php if($visible == "1") { echo " checked"; } ?>/>
      </dd>
    </dl>
    <div id="operations">
      <input type="submit" value="Edit Page" />
    </div>
  </form>
</div>
</div>
<?php include(SHARED_PATH . '/staff_footer.php');?>