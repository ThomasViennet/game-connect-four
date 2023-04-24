<?php $title = "Connect Four"; ?>

<?php ob_start(); ?>
<h1>Welcome to Connect Four</h1>
<a href="?action=game&id=1">play</a>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
