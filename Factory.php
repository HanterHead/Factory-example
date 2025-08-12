<?php


class HomeFactory
{
    private static $home;

    /**
     * @return mixed
     */
    public static function getName(): string
    {
        return self::$home;
    }

    /**
     * @param mixed $home
     */
    public static function setName(string $home): void
    {
        self::$home = $home;
    }
}

/**
 * Один класс создаёт другой класс
 */
class Home
{
    public static function make(): HomeFactory
    {
        return new HomeFactory();
    }
}

$worker = Home::make();
$worker->setName('Иван');

var_dump($worker->getName());