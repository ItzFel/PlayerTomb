<?php

declare(strict_types=1);

namespace tomb;

use pocketmine\plugin\PluginBase;
use pocketmine\nbt\tag\{
    CompoundTag, ListTag, DoubleTag, FloatTag, StringTag
};
use pocketmine\entity\Entity;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\entity\Skin;

class Main extends PluginBase implements Listener{
	
	public $skins = [];
	
	public function onEnable() : void{

		}
    }

}
