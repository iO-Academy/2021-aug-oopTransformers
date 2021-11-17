<?php

namespace Transformers\Services;

class Search
{
    public static function searchFilterTransformers(\PDO $db, string $safeSearch, string $filter): array
    {
        $query = $db->prepare('SELECT `id`, `name`, `type`, `img_url` FROM `characters` WHERE INSTR(`name`, ?) > 0 AND FIND_IN_SET(`type`, ?)');
        $query->execute([$safeSearch, $filter]);
        return $query->fetchAll();
    }
}