<?php

namespace LunarMoon72;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
  public function onLoad(){
    $this->getLogger()->info("Plugin is LOADING");
  }
  
  public function onEnabled(){
    $this->getLogger()->info("Plugin is ENABLED");
  }
  
  public function onDisabled(){
    $this-getLogger()->info("Plugin is DISABLED");
  }
  
}
