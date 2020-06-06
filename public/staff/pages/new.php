<?php require_once('../../../private/initialize.php');?>

<?php include(SHARED_PATH . '/staff_header.php');?>
<?php $page_title = 'Create Page'; ?>
<div id="content">

<a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>

<div class="page new">
  <h1>Create Page</h1>

  <form action="<?php echo url_for('/staff/pages/create.php');?>" method="post">
    <dl>
      <dt>Menu Name</dt>
      <dd><input type="text" name="menu_name" value="" /></dd>
    </dl>
    <dl>
      <dt>Position</dt>
      <dd>
        <select name="position">
          <option value="1">1</option>
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
        <input type="checkbox" name="visible" value="1" />
      </dd>
    </dl>
    <div id="operations">
      <input type="submit" value="Create Page" />
    </div>
  </form>
</div>
</div>
<?php include(SHARED_PATH . '/staff_footer.php');?>