<?php

namespace Transformers\DB;

use Transformers\Entities\Transformer;

class Hydrator
{
    public static function populateIndex(\PDO $db): array
    {
        $query = $db->prepare('SELECT `id`, `name`, `type`, `img_url` FROM `characters`');
        $query->execute();
        return $query->fetchAll();
    }

    public static function populateDetails(\PDO $db, int $id): Transformer
    {
        $query = $db->prepare('SELECT `id`, 
            `name`, 
            `size` , 
            `speed`, 
            `power`, 
            `disguise`, 
            `top_trumps_rating`, 
            `type`,
            `img_url` 
            FROM `characters` 
            WHERE `id` = ?');
        $query->execute([$id]);
        $query->setFetchMode(\PDO::FETCH_CLASS, Transformer::class);
        return $query->fetch();
    }
}