<?php

/**
 * This class is used to check if the game is over
 */

namespace App\Controllers\Game\EndGame;

class EndGame
{
    public function execute(string $grid) //remplace by ID of the game
    {
        $grid = unserialize($grid);

        //Check each lines and each columns
        $idPlayer1 = 1;
        $idPlayer2 = 2;

        //Check each lines
        foreach ($grid as $line) {

            $lastToken = 0;
            $scorePlayer1 = 1;
            $scorePlayer2 = 1;

            for ($i = 0; $i < count($line); $i++) {

                $currentToken = $line[$i];

                if ($currentToken === $lastToken) {
                    if ($currentToken === $idPlayer1) {
                        $scorePlayer1++;
                    } elseif ($currentToken === $idPlayer2) {
                        $scorePlayer2++;
                    }

                    if ($scorePlayer1 > 3) {
                        throw new \Exception("Player 1 win"); //Use exception for tests. I will update game.status.
                        break 2;
                    } elseif ($scorePlayer2 > 3) {
                        throw new \Exception("Player 2 win"); //Use exception for tests. I will update game.status.
                        break 2;
                    }
                } else {
                    $scorePlayer1 = 1;
                    $scorePlayer2 = 1;
                }

                $lastToken = $currentToken;
            }
        }

        //check each columns
        $scorePlayer1 = 1;
        $scorePlayer2 = 1;

        for ($i = 0; $i < 6; $i++) {

            $line = array_column($grid, $i);
            $lastToken = 0;

            foreach ($line as $token) {
                $currentToken = $token;
                if ($currentToken === $lastToken) {
                    if ($currentToken === $idPlayer1) {
                        $scorePlayer1++;
                    } elseif ($currentToken === $idPlayer2) {
                        $scorePlayer2++;
                    }

                    if ($scorePlayer1 > 3) {
                        throw new \Exception("Player 1 win"); //Use exception for tests. I will update game.status.
                        break 2;
                    } elseif ($scorePlayer2 > 3) {
                        throw new \Exception("Player 2 win"); //Use exception for tests. I will update game.status.
                        break 2;
                    }
                } else {
                    $scorePlayer1 = 1;
                    $scorePlayer2 = 1;
                }
                $lastToken = $currentToken;
            }
        }
        //check diagonals (wip in test.php)
    }
}
