<?php

namespace App;

class Result
{
    function rowCheck($data): bool
    {

        for ($i = 0; $i < 3; $i++) {
            if ($data[0][$i] == $data[1][$i] && $data[1][$i] == $data[2][$i]) {
                return true;
            }
        }
    }

    function colCheck($data): bool
    {
        for ($i = 0; $i < 3; $i++) {
            if ($data[$i][0] == $data[$i][0] && $data[$i][0] == $data[$i][0]) {
                return true;
            }
        }
    }

    function diagonalCheck($data): bool
    {
        for ($i = 0; $i < 3; $i++) {
            if ($data[0][0] == $data[1][1] && $data[1][1] == $data[2][2] || $data[0][2] == $data[1][1] && $data[1][1] == $data[2][0]) {
                return true;
            }
        }
    }

    function checkResult($data): void
    {
        $this->rowCheck($data);
        $this->colCheck($data);
        $this->diagonalCheck($data);
    }
}
