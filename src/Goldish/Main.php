<?php

namespace Goldish;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerBedEnterEvent;
use pocketmine\player;

class Main extends PluginBase implements Listener{

          public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
                    $this->getLogger()->info("Enabled Plugin");
          }
          public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");
          }
          public function onJoin(PlayerJoinEvent $event){
          $player = $event->getPlayer();
          $name = $player->getName();
                    $event->setJoinMessage(TextFormat::GREEN."{$name} joined the server-name!");
          }
          public function getBed(PlayerBedEnterEvent $event){
		return $this->bed;
          $event->getPlayer()->getServer()->broadcastMessage(TextFormat::AQUA."$name is in bed!");
          }
}
