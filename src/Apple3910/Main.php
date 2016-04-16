<?php

namespace Apple3910/RankCommand;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;

class Main extends PluginBase{
	
	public function onEnable()
	  @mkdir($this->getDataFolder(), 0777, true);
$this->config=new Config($this->getDataFolder() . "config.yml", Config::YAML, array());
	    {
		$this->getLogger()->info("vip loaded");
	}
	public function onCommand(CommandSender $sender, Command $command, $label, array $args){
   if(strtolower($command->getName()) === "vip"){
      $sender->sendMessage("[====================]");
      $sender->sendMessage("Text1");
      $sender->sendMessage("Text2");
      $sender->sendMessage("Text3");
      $sender->sendMessage("Text4");
      $sender->sendMessage("Text5");
      $sender->sendMessage("Text6");
      $sender->sendMessage("[====================]");
       return true;
   }

}
}
