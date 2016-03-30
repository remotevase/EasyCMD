<?php
namespace EasyCMD;
use pocketmine\command\{Command, CommandSender, ConsoleCommandSender};
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
class EasyCMD extends PluginBase implements Listener {
  public function onEnable(){
        $this->getLogger()->info(C::GREEN."EasyCMD has successfully loaded!");
        $this->getLogger()->info(C::YELLOW."Type '/EH' to find commands!");
    }
  
  public function onCommand(CommandSender $s, Command $cmd, $label, array $args){
    switch(strtolower($cmd->getName())){
      case "s":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("gamemode 0 $s"));
      break;
      case "c":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("gamemode 1 $s"));
      break;
      case "a":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("gamemode 2 $s"));
      break;
      case "sp":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("gamemode 3 $s"));
      break;
      case "bl":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("banlist"));
      break;
      case "dgs":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("defaultgamemode 0"));
      break;
      case "dgc":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("defaultgamemode 1"));
      break;
      case "dga":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("defaultgamemode 2"));
      break;
      case "dgsp":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("defaultgamemode 3"));
      break;
      case "al":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("pardon $s"));
      break;
      case "alip":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("pardon-ip $s"));
      break;
      case "pl":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("plugins"));
      break;
      case "re":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("reload"));
      break;
      case "s-a":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("save-all"));
      break;
      case "sws":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("setworldspawn"));
      break;
      case "ssp":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("spawnpoint"));
      break;
      case "tmo":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("timings on"));
      break;
      case "tmn":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("timings off"));
      break;
      case "v":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("version"));
      break;
      case "wc":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("weather clear"));
      break;
      case "wr":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("weather rain"));
      break;
      case "wt":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("weather thunder"));
      break;
      case "wlo":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("whitelist on"));
      break;
      case "wln":
      $this->getServer()->dispatchCommand(new ConsoleCommandSender("whitelist off"));
      break;
      case "EH":
      $sender->sendMessage("/EH: Show the EasyCMD help page");
      $sender->sendMessage("/s: Change your gamemode to survival");
      $sender->sendMessage("/c: Change your gamemode to creative");
      $sender->sendMessage("/a: Change your gamemode to adventure");
      $sender->sendMessage("/sp: Change your gamemode to spectator");
      $sender->sendMessage("/bl: View all players banned from this server");
      $sender->sendMessage("/dgs: Set the default gamemode to survival");
      $sender->sendMessage("/dgc: Set the default gamemode to creative");
      $sender->sendMessage("/dga: Set the default gamemode to adventure");
      $sender->sendMessage("/dgsp: Set the default gamemode to spectator");
      $sender->sendMessage("/al: Allow a player back onto the server");
      $sender->sendMessage("/alip: Allow an IP back onto the server");
      $sender->sendMessage("/pl: View a list of all plugins running on the server");
      $sender->sendMessage("/re: Reload the server config and plugins");
      $sender->sendMessage("/s-a: Saves the server to disk");
      $sender->sendMessage("/sws: Sets a world's spawn point. The command sender's coordinates will be used.");
      $sender->sendMessage("/sp: Set's a player's spawn point");
      $sender->sendMessage("/tmo: Turns timings on to record server performance");
      $sender->sendMessage("/tmn: Turns timings off to stop recording server performance");
      $sender->sendMessage("/v: Gets the version of this server including any plugins in use");
      $sender->sendMessage("/wc: Changes the weather to clear");
      $sender->sendMessage("/wr: Changes the weather to rain");
      $sender->sendMessage("/wt: Changes the weather to a thunderstorm");
      $sender->sendMessage("/wlo: Turns the whitelist on");
      $sender->sendMessage("/wln: Turns the whitelist off");
      break;
    }
  }
    public function onDisable(){
        $this->getLogger()->info(C::DARK_RED."EasyCMD has successfully Disabled!");
        $this->getLogger()->info(C::YELLOW."Did the server stop?");
    }
}
