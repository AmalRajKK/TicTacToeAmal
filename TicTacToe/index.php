<?php
require_once dirname(__FILE__) . '/autoload.php';

use App\TicTacInput;
use App\TicTacOutput;
use App\Result;
use App\TicTacToe;

$objectTicTacInput = new TicTacInput();
$objectTicTacOutPut = new TicTacOutPut();

$objectTicTacInput->selectChoice();
$objectTicTacOutPut->displayPosition();
$objectTicTacInput->readPosition();

$objectResult = new Result();
$objectTicToe = new TicTacToe();
for ($i = 1; $i < 10; $i++) {
    if (($i % 2) === 0) {
        if ($objectTicToe->isfill()) {
            echo 'the location is filled';
        } else {
            $objectTicToe->moveTo($objectTicTacInput->position);
            $objectTicToe->setValue($objectTicTacInput->playerOneChoice);
            $objectTicTacOutPut->displayEachEntry($objectTicTacInput->data);
        }
    } else {
        if ($objectTicToe->isfill()) {
            echo 'the location is filled';
        } else {
            $objectTicToe->moveTo($objectTicTacInput->position);
            $objectTicToe->setValue($objectTicTacInput->playerTwoChoice);
            $objectTicTacOutPut->displayEachEntry($objectTicTacInput->data);
        }
    }

    if($i >= 5){
        $objectResult->checkResult($$objectTicTacInput->data);
    }
}



