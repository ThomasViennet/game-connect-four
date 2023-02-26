<?php 

namespace App\Models\Game;

require_once('src/lib/database.php');

use App\Lib\Database\DatabaseConnection;

class Game
{
    public int $id;
    public int $status;
    public int $id_first_player;
    public int $id_second_player;
    public int $id_last_player;
    public string $grid;
    public int $id_winner;
    public string $date;
}
class GameConnectFour
{
    public DatabaseConnection $connection;

    public function getGame(int $id): ?Game
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT * FROM game WHERE id = ?"
        );
        $statement->execute([$id]);
        $data = $statement->fetch();
        if ($data === false) {
            return null;
        }

        $game = new Game();
        $game->id = $data['id'];
        $game->status = $data['status'];
        $game->id_first_player = $data['id_first_player'];
        $game->id_second_player = $data['id_second_player'];
        $game->id_last_player = $data['id_last_player'];
        $game->grid = $data['grid'];
        $game->id_winner = $data['id_winner'];
        $game->date = $data['date'];

        return $game;
    }

    public function updateGame(int $id,int $idPlayer, string $grid): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'UPDATE game SET grid = ? WHERE id = ?'
        );
        $affectedLines = $statement->execute([$grid, $id]);

        return ($affectedLines > 0);
    }
}
