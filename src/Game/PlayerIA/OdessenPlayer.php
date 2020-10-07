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
            $choice = $this->result->getStatsFor($this->opponentSide);
            $pap = $choice['paper']; 
            $sci = $choice['scissors'];
            $roc =  $choice['rock'];

            $m = max ($pap, $sci, $roc);
            if ( $m == $pap) {
               return parent::scissorsChoice();
            }
            if ( $m == $sci) {
                return parent::rockChoice();
            }
            if ($m == $roc) {
                return parent::paperChoice();
            }
    }
};
