<?php

namespace EnchantedRealms;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;

class Listener implements Listener {

    public function onDeath(PlayerDeathEvent $event) {
        $cause = $event->getEntity()->getLastDamageCause()->getCause();
        if($cause instanceof EntityDamageByEntityEvent) {
            $event->setDrops([Item::get(Item::GOLDEN_APPLE, 0, 1), Item::get(Item::ENCHANTING_BOTTLE, 0, 10)]);
        }
        
    }
    
}
