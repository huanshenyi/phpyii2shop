<?php

use yii\db\Migration;

/**
 * Handles the creation of table `brand`.
 */
class m181008_015533_create_brand_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('brand', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'intro'=>$this->string(),
            'logo'=>$this->string(),
            'sort'=>$this->integer(),
            'status'=>$this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('brand');
    }
}
