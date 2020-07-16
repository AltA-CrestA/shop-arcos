<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m200716_074300_create_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime(),
            'qty' => $this->integer()->notNull(),
            'sum' => $this->decimal(10,2)->notNull(),
            'status' => $this->tinyInteger()->defaultValue(0),
            'surname' => $this->string()->notNull(),
            'name' => $this->string()->notNull(),
            'city' => $this->string()->notNull(),
            'phone' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'text' => $this->text(),
            'payment' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%order}}');
    }
}
