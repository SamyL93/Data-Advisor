<?php


namespace App\Enum;


class TypeBoxInternetEnum
{
    const FIBRE = "FIBRE";
    const ADSL = "ADSL";
    const I4G = "4G";

    const TYPE = [
        self::FIBRE => self::FIBRE,
        self::ADSL => self::ADSL,
        self::I4G => self::I4G
    ];
}