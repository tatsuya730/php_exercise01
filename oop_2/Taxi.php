<?php

require_once __DIR__ . '/Car.php';

class Taxi extends Car
{
    private $passenger = 0;

    public function pickUp($num)
    {
        $this->passenger += $num;
        return strval($num) . "人乗車しました" . PHP_EOL;
    }

    public function lower($num)
    {
        if ($this->passenger - $num >= 0) {
            $this->passenger -= $num;
            return strval($num) . "人降車しました" . PHP_EOL;
        } else {
            return strval($num) . "人は降車できません" . PHP_EOL;
        }
    }

    public function information()
    {
        return parent::information() . "乗車人数:" . $this->passenger . "人" . PHP_EOL;
    }
}
