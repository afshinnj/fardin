<?php

use yii\db\Migration;
use yii\db\Schema;

class m161127_145204_subject extends Migration
{
  public function up() {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
      }

      $this->createTable('{{%subject}}', [
          'id' => Schema::TYPE_BIGPK,
          'text' => Schema::TYPE_STRING . ' null default null',
              ], $tableOptions);
  }

  public function down() {
      $this->dropTable('{{%subject}}');
  }


}
