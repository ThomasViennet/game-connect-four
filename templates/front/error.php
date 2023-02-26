<?php $title = "Error - Connect Four"; ?>

<?php ob_start(); ?>
<h1>Connect Four</h1>
<p><?= $errorMessage ?></p>

<!-- Use this form while waiting for the next features -->
<form method="post" action="?action=addMove">
        <input type="hidden" id="id_game" name="id_game" value="1">
        <input type="radio" id="rest_game" name="rest_game" value="rest_game">
      <label for="rest_game">Rest game ?</label>
        <input type="submit" value="Submit">
    </form>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
