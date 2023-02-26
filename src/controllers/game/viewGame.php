<?php

/**
 * This class is used to display a game grid
 */

namespace App\Controllers\Game\ViewGame;

require_once('src/lib/database.php');
require_once('src/models/game.php');
require_once('src/controllers/game/endGame.php');

use App\Controllers\Game\EndGame\EndGame;
use App\Lib\Database\DatabaseConnection;
use App\Models\Game\GameConnectFour;

class ViewGame
{
    public function execute(int $id)
    {
        $gameConnectFour = new GameConnectFour();
        $gameConnectFour->connection = new DatabaseConnection();
        $game = $gameConnectFour->getGame($id);

        $endGame = new EndGame();
        $endGame->execute($game->grid);


        if ($game === null) {
            throw new \Exception("ID's game $id doesn't exist");
        }

        require('templates/front/game.php');
    }
}
