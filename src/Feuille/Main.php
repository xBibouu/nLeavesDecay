<?php

namespace Feuille;

use pocketmine\event\block\LeavesDecayEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onLeavesDecay(LeavesDecayEvent $event) {
        $event->cancel();
    }
}