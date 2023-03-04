<?php

require_once('src/controllers/game/view_game.php');
require_once('src/controllers/game/add_move.php');
require_once('src/controllers/home_page.php');

use App\Controllers\Game\ViewGame\ViewGame;
use App\Controllers\Game\AddMove\AddMove;
use App\Controllers\HomePage\HomePage;

try {
    switch ($_GET['action']) {

        case 'game':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $id = $_GET['id'];
                (new ViewGame())->execute($id);
            } else {
                throw new Exception("ID's game $id doesn't exist");
            }
        break;

        case 'addMove':
            (new AddMove())->execute($_POST['id_game'], $_POST['column-select']);
        break;

        default:
            // I will develop it in next sprint
            (new HomePage())->execute();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('templates/front/error.php');
}
