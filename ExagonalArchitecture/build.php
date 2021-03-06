<?php

require '../vendor/autoload.php';

use DesignPatterns\ExagonalArchitecture\ConnectionFactory;

$conn = ConnectionFactory::create();

$schemaManager = $conn->getSchemaManager();

if (!$schemaManager->tablesExist(['ideas'])) {

    $ideas = new \Doctrine\DBAL\Schema\Table('ideas');
    $ideas->addColumn('id', 'string', ['length' => 36]);
    $ideas->setPrimaryKey(array('id'));
    $ideas->addColumn('title', 'string', ['nullable' => false]);
    $ideas->addColumn('description', 'text', ['nullable' => true]);
    $ideas->addColumn('rating', 'decimal', ['unsigned' => true, 'default' => 0, 'nullable' => false, 'precision' => 15, 'scale' => 1]);
    $ideas->addColumn('votes', 'integer', ['unsigned' => true, 'default' => 0, 'nullable' => false]);
    $ideas->addColumn('author', 'string', ['nullable' => false]);

    $schemaManager->createTable($ideas);
}
