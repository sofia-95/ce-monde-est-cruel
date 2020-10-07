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
            $mi = min($pap, $sci, $roc);
            if ( $m == $pap ) {
                if ($mi == $sci) {
                    return parent::scissorsChoice();
                }
                else {
                    return parent::paperChoice();
                }
            }
            if ( $m == $sci ) {
                if ($mi == $roc) {
                    return parent::rockChoice();
                }
                else {
                    return parent::scissorsChoice();
                }
            }
            if ($m == $roc ) {
                if ($mi == $pap){
                    return parent::paperChoice();
                }
                else {
                    return parent::rockChoice();
                }
            }
    }
};
