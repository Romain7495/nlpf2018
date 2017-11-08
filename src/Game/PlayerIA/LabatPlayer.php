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

        //$code = "JGNob2ljZSA9IHBhcmVudDo6cm9ja0Nob2ljZSgpOw0KICAgICAgICBpZiAoJHRoaXMtPnJlc3VsdC0+Z2V0TmJSb3VuZCgpKSB7DQogICAgICAgICAgICAkY2hvaWNlID0gcGFyZW50Ojpyb2NrQ2hvaWNlKCk7DQogICAgICAgIH0NCiAgICAgICAgaWYgKCR0aGlzLT5yZXN1bHQtPmdldExhc3RDaG9pY2VGb3IoJHRoaXMtPm9wcG9uZW50U2lkZSkgPT0gInNjaXNzb3JzIikgew0KICAgICAgICAgICAgLy9wcmludF9yKCR0aGlzLT5yZXN1bHQtPmdldExhc3RDaG9pY2VGb3IoJHRoaXMtPm15U2lkZSkpOw0KICAgICAgICAgICAgJGNob2ljZSA9IHBhcmVudDo6cm9ja0Nob2ljZSgpOw0KICAgICAgICB9DQogICAgICAgIGlmICgkdGhpcy0+cmVzdWx0LT5nZXRMYXN0Q2hvaWNlRm9yKCR0aGlzLT5vcHBvbmVudFNpZGUpID09ICJyb2NrIikgew0KICAgICAgICAgICAgLy9wcmludF9yKCR0aGlzLT5yZXN1bHQtPmdldExhc3RDaG9pY2VGb3IoJHRoaXMtPm15U2lkZSkpOw0KICAgICAgICAgICAgJGNob2ljZSA9IHBhcmVudDo6cGFwZXJDaG9pY2UoKTsNCiAgICAgICAgfQ0KICAgICAgICBpZiAoJHRoaXMtPnJlc3VsdC0+Z2V0TGFzdENob2ljZUZvcigkdGhpcy0+b3Bwb25lbnRTaWRlKSA9PSAicGFwZXIiKSB7DQogICAgICAgICAgICAvL3ByaW50X3IoJHRoaXMtPnJlc3VsdC0+Z2V0TGFzdENob2ljZUZvcigkdGhpcy0+bXlTaWRlKSk7DQogICAgICAgICAgICAkY2hvaWNlID0gcGFyZW50OjpzY2lzc29yc0Nob2ljZSgpOw0KICAgICAgICB9DQoNCiAgICAgICAgcmV0dXJuICRjaG9pY2U7" ;
        //eval(base64_decode($code));
        //return $choice;

        $stat = $this->result->getStatsFor($this->opponentSide);
        $name = $stat["name"];
        $scissors = $stat["scissors"];
        $paper = $stat["paper"];
        $rock = $stat["rock"];
        $score = $stat["score"];

        if ($name == "Crepin") 
            if ($this->result->getNbRound() % 2 ==0) 
                $choice = parent::paperChoice();
            else 
                $choice = parent::scissorsChoice();
        
        if ($name == "Fauchille") 
            if ($this->result->getNbRound() % 2 ==0) 
                $choice = parent::paperChoice();
            else
                $choice = parent::rockChoice();

        if ($name == "Greiner") 
            $choice = parent::rockerChoice();

        if ($name == "Garnaoui") 
            if ($this->result->getNbRound() % 2 ==0) 
                $choice = parent::scissorsChoice();
            else
                $choice = parent::rockChoice();
        

        $choice = parent::rockChoice();
        if ($this->result->getNbRound() == 0) 
            $choice = parent::rockChoice();
        if ($this->result->getLastChoiceFor($this->opponentSide) == "scissors") 
            $choice = parent::rockChoice();
        if ($this->result->getLastChoiceFor($this->opponentSide) == "rock") 
            $choice = parent::paperChoice();
        if ($this->result->getLastChoiceFor($this->opponentSide) == "paper") 
            $choice = parent::scissorsChoice();
        
        
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