<?php

namespace HosseinYT\BadPacketFilter;

use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\DataPacket;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {
    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info("§aBadPacketFilter Enabled!");
    }
    public function onDisable(): void {
        $this->getLogger()->info("§aBadPacketFilter Disabled!");
    }
    public function onPacketReceive(DataPacketReceiveEvent $event): void {
        $packet = $event->getPacket();
        if ($this->isBadPacket($packet)) {
            $event->cancel();
            $this->getLogger()->warning("§8BadPacketFilter >> §cBadPacketFilter Has Been Cancelled!");
        }
    }
    private function isBadPacket(DataPacket $packet): bool {
        if ($packet->pid !== 0x64) {
            return true;
        }
        return false;
    }
}
