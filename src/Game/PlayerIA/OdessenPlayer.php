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
        $rounds = $this->result->getNbRound();
        for ($i = 0; $i <= $rounds; $i++) {
            $choice = $this->result->getLastScoreFor($this->opponentSide);
            if ( $choice == parent::rockChoice()) {
                return parent::scissorsChoice();
            }
            if ( $choice == parent::paperChoice()) {
                return parent::rockChoice();
            }
            else {
                return parent::paperChoice();
            }
        }
        return parent::rockChoice();
    }
};
