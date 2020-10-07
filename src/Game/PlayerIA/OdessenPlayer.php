<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class OdessenPlayers
 * @package Hackathon\PlayerIA
 * @author Sofia SIGHAR
 */
class OdessenPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        /**$array = array(
            1 => parent::rockChoice(),
            2 => parent::paperChoice(),
            3 => parent::scissorsChoice(),
            );*/
            $choice = $this->result->getLastChoiceFor($this->opponentSide);
            if ( $choice == parent::rockChoice()) {
               return parent::paperChoice();
            }
            if ( $choice == parent::scissorsChoice()) {
                return parent::scissorsChoice();
            }
            else {
                return parent::paperChoice();
            }
    }
};
