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
            3 => parent::scissorChoice(),
            );*/
        for ($i = 0; $i <= $this->result->getNbRound(); $i++) {
            if ( $this->result->getLastScoreFor($this->opponentSide) == parent::rockChoice()) {
                return parent::rockChoice();
            }else{
                return parent::paperChoice();
            }
        }
        return parent::rockChoice();
    }
};
