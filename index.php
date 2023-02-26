<?php

require_once('src/controllers/game/viewGame.php');
require_once('src/controllers/game/addMove.php');

use App\Controllers\Game\ViewGame\ViewGame;
use App\Controllers\Game\AddMove\AddMove;

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
            // Develop in next sprint
            // (new Homepage())->execute();
    }
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    require('templates/front/error.php');
}
