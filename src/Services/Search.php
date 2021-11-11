<?php

namespace Transformers\Services;

class Search
{
    public static function searchTransformers(\PDO $db, string $search): array
    {
        $query = $db->prepare('SELECT `id`, `name`, `type`, `img_url` FROM `characters` WHERE INSTR(`name`, ?) > 0');
        $query->execute([$search]);
        return $query->fetchAll();
    }
}