<?php require_once('../../../private/initialize.php'); ?>

<?php
    $id = $_GET['id'] ?? '1';
    echo htmlspecialchars($id);
?>