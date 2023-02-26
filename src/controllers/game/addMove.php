<?php

/**
 * This class is used to add a token to the grid
 */

namespace App\Controllers\Game\AddMove;

require_once('src/lib/database.php');
require_once('src/models/game.php');

use App\Lib\Database\DatabaseConnection;
use App\Models\Game\GameConnectFour;


class AddMove
{
    public function execute(int $id)
    {
        $gameConnectFour = new GameConnectFour();
        $gameConnectFour->connection = new DatabaseConnection();
        $game = $gameConnectFour->getGame($id);
        $grid = unserialize($game->grid);

        $tokenPlayed = $_POST['column-select'];
        $idPlayer = (int)$_POST['id-player'];
        $rest_game = $_POST['rest_game'];
        

        if (!$rest_game) {//For test
            //Add a token where there is a free space
            for (end($grid); key($grid) !== null; prev($grid)) {
                if (current($grid)[$tokenPlayed] === 0) {
                    $grid[key($grid)][$tokenPlayed] = $idPlayer;
                    $played = 1; //to confirm that the token is placed
                    break;
                }
            }
        } else {
            $grid = [
                [0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0],
                [0, 0, 0, 0, 0, 0, 0]
            ];
            $played = 1;
            $idPlayer = 0;
        }

        $grid = serialize($grid);

        if (!isset($played)) {
            throw new \Exception("This column has no more free space");
        }

        $game = $gameConnectFour->updateGame($id, $idPlayer,$grid);

        if (!$game) {
            throw new \Exception("Error during update");
        } else {
            header('Location: ?action=game&id=' . $id);
        }
    }
}
