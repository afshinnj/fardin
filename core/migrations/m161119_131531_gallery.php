<?php

use yii\db\Migration;
use yii\db\Schema;

class m161119_131531_gallery extends Migration
{
  public function up() {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
      }

      $this->createTable('{{%gallery}}', [
          'id' => Schema::TYPE_BIGPK,
          'subject' => Schema::TYPE_STRING . ' null default null',
          'text' => Schema::TYPE_STRING . ' null default null',
          'photo' => Schema::TYPE_STRING . ' null default null',
          'video' => Schema::TYPE_STRING . ' null default null',
          'tag' => Schema::TYPE_STRING . ' not null'

              ], $tableOptions);
  }

  public function down() {
      $this->dropTable('{{%gallery}}');
  }
}
