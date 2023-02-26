<?php
$tokenPlayed = 1;

function generateDiagTopLeft($grid)
{
    //check each diagonals
    $line = 0;
    $column = 0;
    $nbDiagonals = 12;
    $diagonals = [];
    $diagonal = [];

    //create diagonals
    for ($i = 0; $i < $nbDiagonals; $i++) {
        $line = 0;
        for ($i2 = 0; $i2 <= $i; $i2++) {
            $column = $i - $i2;
            array_push($diagonal, $grid[$line][$column]);
            $line++;
        }
        array_push($diagonals, $diagonal);
        $diagonal = [];
    }
    return $diagonals;
}

function generateDiagBottompLeft($grid)
{
    //check each diagonals
    $line = 0;
    $column = 0;
    $nbDiagonals = 12;
    $diagonals = [];
    $diagonal = [];

    //create diagonals
    for ($i = 0; $i < $nbDiagonals; $i++) {
        $line = 5;
        for ($i2 = 0; $i2 <= $i; $i2++) {
            $column = $i - $i2;
            array_push($diagonal, $grid[$line][$column]);
            $line--;
        }
        array_push($diagonals, $diagonal);
        $diagonal = [];
    }
    return $diagonals;
}

$grid = [
    [0, 0, 0, 0, 0, 0, 0],
    [0, 0, 1, 0, 0, 0, 0],
    [2, 0, 0, 1, 0, 0, 0],
    [2, 0, 0, 0, 1, 0, 0],
    [2, 0, 0, 0, 0, 0, 0],
    [2, 1, 1, 1, 1, 0, 0]
];

var_dump(generateDiagBottompLeft($grid));