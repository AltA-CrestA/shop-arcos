<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m200706_104146_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createCategoryTable();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }

    public function createCategoryTable()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'img' => $this->string(),
            'status' => $this->integer()->defaultValue(1),
        ]);

        $this->insert('category', [
            'name' => 'Пуговицы',
            'img' => '1.jpg',
        ]);

        $this->insert('category', [
            'name' => 'Наконечники',
            'img' => '2.jpg',
        ]);

        $this->insert('category', [
            'name' => 'Лента-гвозди',
            'img' => '3.jpg',
        ]);

        $this->insert('category', [
            'name' => 'Нитки',
            'img' => '4.jpg',
        ]);

        $this->insert('category', [
            'name' => 'Подпятники',
            'img' => '5.jpg',
        ]);

        $this->insert('category', [
            'name' => 'Профиль ППУ',
            'img' => '6.jpg',
        ]);

        $this->insert('category', [
            'name' => 'Кольца декоративные',
            'img' => '7.jpg',
        ]);

        $this->insert('category', [
            'name' => 'Басонные изделия',
            'img' => '8.jpg',
        ]);

        $this->insert('category', [
            'name' => 'Прочие фурнитура',
            'img' => '9.jpg',
        ]);
    }
}
