<?php

namespace refaltor\vote;

use pocketmine\plugin\PluginBase;
use refaltor\vote\command\vote;

class Main extends PluginBase
{
    private static $instance;

    public function onEnable(): void
    {
        self::$instance = $this;
        $this->saveResource('config.yml');
        $this->getServer()->getCommandMap()->register($this->getName(), new vote($this));
    }

    public static function getInstance(): self
    {
        return self::$instance;
    }
}
