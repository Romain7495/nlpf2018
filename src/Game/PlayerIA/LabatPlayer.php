<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class LabatPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class LabatPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {

        $choice = parent::rockChoice();
        if ($this->result->getNbRound()) {
            $choice = parent::rockChoice();
        }
        if ($this->result->getLastChoiceFor($this->opponentSide) == "scissors") {
            //print_r($this->result->getLastChoiceFor($this->mySide));
            $choice = parent::rockChoice();
        }
        if ($this->result->getLastChoiceFor($this->opponentSide) == "rock") {
            //print_r($this->result->getLastChoiceFor($this->mySide));
            $choice = parent::paperChoice();
        }
        if ($this->result->getLastChoiceFor($this->opponentSide) == "paper") {
            //print_r($this->result->getLastChoiceFor($this->mySide));
            $choice = parent::scissorsChoice();
        }
        
        
        return $choice;


        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------

        //$choice = parent::scissorsChoice();


        
      
    }
};