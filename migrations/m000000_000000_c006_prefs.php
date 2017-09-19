<?php

namespace c006\preferences\migrations;

use Yii;
use yii\db\Migration;

class m000000_000000_c006_prefs extends Migration
{

    /**
     *  ~ Console command ~
     *
     * php yii migrate --migrationPath=@vendor/c006/yii2-prefs/migrations
     *
     */

    /**
     *
     */
    public function up()
    {

        self::down();

        $tables = Yii::$app->db->schema->getTableNames();
        $dbType = $this->db->driverName;
        $tableOptions_mysql = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        $tableOptions_mssql = "";
        $tableOptions_pgsql = "";
        $tableOptions_sqlite = "";

        /* MYSQL */
        if (!in_array('preferences', $tables)) {
            if ($dbType == "mysql") {
                $this->createTable('{{%preferences}}', [
                    'id'       => 'INT(10) UNSIGNED NOT NULL AUTO_INCREMENT',
                    0          => 'PRIMARY KEY (`id`)',
                    'key'      => 'VARCHAR(45) NOT NULL',
                    'value'    => 'VARCHAR(100) NULL',
                    'editable' => 'TINYINT(1) NULL',
                ], $tableOptions_mysql);
            }
        }


        $this->execute('SET foreign_key_checks = 0');
        $this->insert('{{%preferences}}', ['id' => '1', 'key' => 'store_name', 'value' => 'Store', 'editable' => '1']);
        $this->insert('{{%preferences}}', ['id' => '2', 'key' => 'image_large', 'value' => '1000', 'editable' => '1']);
        $this->insert('{{%preferences}}', ['id' => '3', 'key' => 'image_med', 'value' => '400', 'editable' => '1']);
        $this->insert('{{%preferences}}', ['id' => '4', 'key' => 'image_thumb', 'value' => '100', 'editable' => '1']);
        $this->insert('{{%preferences}}', ['id' => '5', 'key' => 'sales_email', 'value' => 'jchambers.dev@gmail.com', 'editable' => '1']);
        $this->insert('{{%preferences}}', ['id' => '6', 'key' => 'support_email', 'value' => 'jchambers.dev@gmail.com', 'editable' => '1']);
        $this->insert('{{%preferences}}', ['id' => '7', 'key' => 'support_email_name', 'value' => 'Support', 'editable' => '1']);
        $this->insert('{{%preferences}}', ['id' => '8', 'key' => 'sales_email_name', 'value' => 'Sales', 'editable' => '1']);
        $this->execute('SET foreign_key_checks = 1;');

    }

    /**
     *
     */
    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        $this->execute('DROP TABLE IF EXISTS `preferences`');
        $this->execute('SET foreign_key_checks = 1;');
    }

}