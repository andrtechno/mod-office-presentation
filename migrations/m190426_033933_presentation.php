<?php

namespace panix\mod\presentation\migrations;

/**
 * Generation migrate by PIXELION CMS
 *
 * @author PIXELION CMS development team <dev@pixelion.com.ua>
 * @link http://pixelion.com.ua PIXELION CMS
 *
 * Class m190426_033933_presentation
 */

use panix\engine\db\Migration;
use panix\mod\presentation\models\Presentation;

class m190426_033933_presentation extends Migration
{

    public function up()
    {
        $this->createTable(Presentation::tableName(), [
            'id' => $this->primaryKey()->unsigned(),
            'filename' => $this->string(50)->notNull(),
            'file_category' => $this->text()->null(),
            'file_company' => $this->text()->null(),
            'file_creator' => $this->text()->null(),
            'file_description' => $this->text()->null(),
            'file_keywords' => $this->text()->null(),
            'file_last_modified' => $this->text()->null(),
            'file_created' => $this->integer()->null()->unsigned(),
            'file_modified' => $this->integer()->null()->unsigned(),
            'file_subject' => $this->text()->null(),
            'file_title' => $this->text()->null(),
            'slides' => $this->integer()->notNull(),
            'name' => $this->string(25)->notNull(),
            'height' => $this->string(10.2)->notNull(),
            'width' => $this->float(10.2)->notNull(),
            'text' => $this->text()->notNull(),
            'created_at' => $this->integer(11)->null()->unsigned(),
        ], $this->tableOptions);
    }

    public function down()
    {
        $this->dropTable(Presentation::tableName());
    }

}
