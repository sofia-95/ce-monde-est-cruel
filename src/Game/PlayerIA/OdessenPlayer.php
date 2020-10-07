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
            $choice = $this->result->getStatsFor($this->opponentSide);
            $pap = $choice['paper']; 
            $sci = $choice['scissors'];
            $roc =  $choice['rock'];

            $m = max ($pap, $sci, $roc);
            if ( $m == $roc ) {
                return parent::paperChoice();
            }
            if ( $m == $pap ) {
                return parent::scissorsChoice();
            }
            if ($m == $sci ) {
                return parent::rockChoice();
            }
    }
};
