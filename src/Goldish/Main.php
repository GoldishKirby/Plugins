<?php

namespace Goldish\Main;

use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\event\player\PlayerBedEnterEvent;

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
                    $this->getServer()->broadcastMessage(TextFormat::GREEN."$name joined the server-name!");
          }
          public function __construct(Player $player, Block $bed){
		      $this->player = $player;
		      $this->bed = $bed;
		                $this->getServer()->broadcastMessage(TextFormat::GREEN."$player is now in $bed!");
		      }
}
		      
          
   
