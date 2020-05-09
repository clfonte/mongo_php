<?php
    $manager = new \MongoDB\Driver\Manager("mongodb://localhost:27017");

    $update = new \MongoDB\Driver\BulkWrite;

    // $update->update(['nome'=>'Camila'], ['nome'=>'Camila Lima', 'idade'=> 19]);
    $update->update(['nome' => 'Camila'], ['$set'=>['nome' =>' Camila Lima']]);

    $manager->executeBulkWrite('raiz.academicos',$update);