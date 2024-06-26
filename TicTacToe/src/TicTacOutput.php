<?php

namespace App;

class TicTacOutput
{
    function displayPosition(): void
    {
        $count = 1;
        for ($i = 0; $i < 3; $i++) {
            echo "\n";
            for ($j = 0; $j < 3; $j++) {
                echo $count, "\t";
                $count++;
            }
        }
    }

    function displayEachEntry($data): void
    {
        for ($i = 0; $i < 3; $i++) {
            echo "\n";
            for ($j = 0; $j < 3; $j++) {
                echo $data[$i][$j], "\t";
            }
        }
    }
}
