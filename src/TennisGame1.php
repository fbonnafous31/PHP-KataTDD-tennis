<?php

namespace TennisGame;

class TennisGame1 implements TennisGame
{
    private $m_score1 = 0;
    private $m_score2 = 0;

    public function __construct($player1Name, $player2Name) {
        $this->player1Name = $player1Name;
        $this->player2Name = $player2Name;
    }

    public function wonPoint($playerName) {
        if ('player1' == $playerName) $this->m_score1++;
        else $this->m_score2++;
    }

    public function getScore()
    {
        // Egalités
        if ($this->m_score1 == $this->m_score2) return $this->egality($this->m_score1);

        // Avantages et jeu
        if ($this->m_score1 >= 4 || $this->m_score2 >= 4) return $this->leadGame($this->m_score1 - $this->m_score2);

        // Score courant
        return $this->score($this->m_score1) . "-" . $this->score($this->m_score2); 
    }

    private function egality($score): string {
        switch ($score) {
            case 0:  return "Love-All";
            case 1:  return "Fifteen-All";
            case 2:  return "Thirty-All";
            default: return "Deuce";
        }
    }

    private function leadGame($ecart): string {
        switch($ecart) {
            case -1 : return "Advantage player2";
            case 1  : return "Advantage player1";
            case 2  : return "Win for player1";
            case 3  : return "Win for player1";
            case 4  : return "Win for player1";
            default : return "Win for player2";
        }
    }

    private function score($score): string {
        switch ($score) {
            case 0: return "Love";
            case 1: return "Fifteen";
            case 2: return "Thirty";
            case 3: return "Forty";
        }

    }
}
