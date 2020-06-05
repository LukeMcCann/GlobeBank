<?php require_once('../../../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>
<?php $page_title = 'Pages Menu'; ?>

<div class="content">
    <div id="main-menu">
        <a href="<? echo url_for('/staff/pages')?>"><< Back to List</a><br />
        <?php
            $id = $_GET['id'] ?? '1';
            echo 'Page ID: ' . htmlspecialchars($id);
        ?>
    </div>
</div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>