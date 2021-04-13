<?php


namespace App\Enum;


class OperatorsEnum
{
    const FREE = "FREE";
    const SFR = "SFR";
    const BOUY = "BOUY";
    const ORANGE = "ORANGE";

    const OPERATORS =[
        self::FREE => self::FREE,
        self::SFR => self::SFR,
        self::BOUY => self::BOUY,
        self::ORANGE => self::ORANGE,
    ];
}
