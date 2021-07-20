<?php

declare(strict_types=1);

namespace tomb\entity;

use pocketmine\entity\Human;
use pocketmine\entity\Skin;
use pocketmine\level\Level;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\network\mcpe\protocol\SetActorDataPacket as SetEntityDataPacket;
use pocketmine\Player;
use tomb\Main;

class Tomb extends Human {

    public function __construct(Level $level, CompoundTag $nbt) {
        parent::__construct($level, $nbt);
        $this->getDataPropertyManager()->setFloat(self::DATA_SCALE, 2);
        $this->setScale(2);
        $this->setNameTagVisible(false);
        $this->setNameTagAlwaysVisible(false);
    }
}