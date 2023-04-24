<?php $title = "Game - Connect Four"; ?>

<?php ob_start(); ?>
<h1>Connect Four</h1>

<section>
    <?php
    foreach (unserialize($game->grid) as $row) {
        echo '<div class="line">';
        foreach ($row as $token) {
            if ($token == 1) {
                echo '<span class="token">🔴</span>';
            } elseif ($token == 2) {
                echo '<span class="token">🟡</span>';
            } else {
                echo '<span class="token">⚪</span>';
            }
        }
        echo '</div>';
    }
    ?>

    <div class="line">
        <span class="token">1</span>
        <span class="token">2</span>
        <span class="token">3</span>
        <span class="token">4</span>
        <span class="token">5</span>
        <span class="token">6</span>
        <span class="token">7</span>
    </div>

    <form method="post" action="?action=addMove">
        <input type="hidden" id="id_game" name="id_game" value="1">
        <input type="hidden" id="grid" name="grid" value="<?= $game->grid ?>">
        <label for="column-select">Choose a column:</label>
        <br>
        <br>
        <select name="column-select" id="column-select">
            <option value="">Please choose a column</option>
            <option value="0">1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="4">5</option>
            <option value="5">6</option>
            <option value="6">7</option>
        </select>
        <br>
        <br>

        <label for="player-select">Choose a player:</label>
        <br>
        <br>
        <input type="radio" id="id-player-1" name="id-player" value="1" checked><label for="id-player-1">Player 1</label>
        <input type="radio" id="id-player-2" name="id-player" value="2"><label for="id-player-2">Player 2</label>
        <br>
        <br>
        <!-- Use this radio to restart a new game while waiting for the next features -->
        <input type="radio" id="rest_game" name="rest_game" value="rest_game">
        <label for="rest_game">Rest game ?</label>
        <input type="submit" value="Submit">
    </form>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>