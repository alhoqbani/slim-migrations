<?php

namespace App\Database\Migrations;

use Phinx\Migration\AbstractMigration;
use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class Migration
 *
 * @package App\Database\Migrations
 */
class Migration extends AbstractMigration
{
    
    /**
     * @var \Illuminate\Database\Schema\MySqlBuilder
     */
    protected $schema;
    
    protected function init()
    {
        $this->schema = (new Capsule)->schema();
    }
    
}