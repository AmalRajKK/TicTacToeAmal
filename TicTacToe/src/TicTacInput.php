<?php

namespace App;

class TicTacInput
{
    public $playerOneChoice;
    public $choice;
    public $playerTwoChoice;
    public $position;
    public $row;
    public $col;
    public $data;

    public function __constructor()
    {  $this->row = 100;
        $data = array_fill(0, 3, array_fill(0, 3, '-'));
    }

    function selectChoice()
    {

        $this->choice = readline("Enter the choice of first Player:");

        if ($this->choice == "X" || $this->choice == "x") {
            $this->playerOneChoice = "X";
            $this->playerTwoChoice = "O";
        }

        else{
            $this->playerOneChoice = "O";
            $this->playerTwoChoice = "X";
        }
    }

    public function readPosition()
    {
        $this->position = readline("enter the position");
    }
}
