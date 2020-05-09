<?php
    // biblioteca dentro do mongo que faz conexão online
    $manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017");

    $db = new \MongoDB\Driver\BulkWrite;

    $db->insert(['nome'=>'Janaina', 'idade'=>31]);

    $manager->executeBulkWrite('raiz.academicos', $db);