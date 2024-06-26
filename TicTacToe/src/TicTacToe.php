<?php

namespace App;

class TicTacToe
{
    private TicTacInput $tic;

    function moveTo($position): void
    {
        $this->tic->position = $position;
        switch ($this->tic->position) {
            case 1:echo $this->tic->row;
                $this->tic->row = 0;
                $this->tic->col = 0;
                break;
            case 2:
                $this->tic->row = 0;
                $this->tic->col = 1;
                break;
            case 3:
                $this->tic->row = 0;
                $this->tic->col = 2;
                break;
            case 4:
                $this->tic->row = 1;
                $this->tic->col = 0;
                break;
            case 5:
                $this->tic->row = 1;
                $this->tic->col = 1;
                break;
            case 6:
                $this->tic->row = 1;
                $this->tic->col = 2;
                break;
            case 7:
                $this->tic->row = 2;
                $this->tic->col = 0;
                break;
            case 8:
                $this->tic->row = 2;
                $this->tic->col = 1;
                break;
            case 9:
                $this->tic->row = 2;
                $this->tic->col = 2;
                break;
            default:
                echo "enter valid location";
        }
    }

    function isfill(): bool
    {
        if ($this->tic->data[$this->tic->row][$this->tic->col] == '-') {
            return false;
        }
    }
    function setValue($playerData): void
    {
        $this->tic->data[$this->tic->row][$this->tic->col] = $playerData;
    }
}
