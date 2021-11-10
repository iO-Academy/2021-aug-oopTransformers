<?php

namespace Transformers\services;

class Filter
{
    public static function filterInsecticons(\PDO $db): array
    {
        $query = $db->prepare("SELECT `id`, `name`, `type`, `img_url` FROM `characters` WHERE `type`='Insecticon'");
        $query->execute();
        return $query->fetchAll();
    }

    public static function filterAutobots(\PDO $db): array
    {
        $query = $db->prepare("SELECT `id`, `name`, `type`, `img_url` FROM `characters` WHERE `type`='Autobot'");
        $query->execute();
        return $query->fetchAll();
    }
}