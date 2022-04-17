<?php

namespace Control;

use Model\BattleModel;

class Battle
{
    private $chars;

    public function __construct($fightTitle)
    {
        $this->fightTitle = $fightTitle;
    }

    public function addChar($char)
    {
        $this->chars[] = $char;
    }

    public function startBatle()
    {
        $battle = new BattleModel("Batalha");
        return $battle->getChar();
    }
}