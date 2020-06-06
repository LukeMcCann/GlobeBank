<?php require_once('../../../private/initialize.php'); ?>

<?php 
#stand-in for database records
    $subjects = [
        ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
        ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
        ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
        ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
    ];
?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    <div class="subjects listing">
        <h1>Subjects</h1>

        <div class="actions">
            <a class="action" href="<?php echo url_for('/staff/subjects/new.php'); ?>">Create New Subject</a>
        </div>

        <table class="list">
            <tr>
                <th>ID</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
  	            <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <!-- Populate table

                Rawurlencode converts spaces to '%20'
                urlencode converts spaces to '+'

                Rawurlencode is used on the path (everything before '?')

                urlencode is used on the query string (after the '?' (the url parameters))

                these are followed by deconde options in the same manner.

                Decode methods are rarely needed to be manually envoked as PHP 
                automatically calls these when it receives a URL.

                Encoding is not necessary on form parameters before
                they are sent. HTML takes care of reserve values in this case.
             -->
            
            <?php foreach($subjects as $subject) { ?>
                <tr>
                    <td><?php echo $subject['id']; ?></td>
                    <td><?php echo $subject['position']; ?></td>
                    <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo $subject['menu_name']; ?></td>
                    <!--Adds id as a URL parameter -->
                    <td><a class="action" href="<?php echo url_for('/staff/subjects/show.php?id=' . htmlspecialchars(urlencode($subject['id'])));?>">View</a></td>
                    <td><a class="action" href="<?php echo url_for('/staff/subjects/edit.php?id=' . htmlspecialchars(urlencode($subject['id']))); ?>">Edit</a></td>
                    <td><a class="action" href="">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
