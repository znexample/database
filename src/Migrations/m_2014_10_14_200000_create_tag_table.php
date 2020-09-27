<?php

namespace Migrations;

use Illuminate\Database\Schema\Blueprint;
use ZnLib\Migration\Domain\Base\BaseCreateTableMigration;
use ZnLib\Migration\Domain\Enums\ForeignActionEnum;

if ( ! class_exists(m_2014_10_14_200000_create_tag_table::class)) {

    class m_2014_10_14_200000_create_tag_table extends BaseCreateTableMigration
    {

        protected $tableName = 'article_tag';
        protected $tableComment = 'Тэги статей';

        public function tableSchema()
        {
            return function (Blueprint $table) {
                $table->integer('id')->autoIncrement();
                $table->string('title')->comment('Заголовок статьи');
            };
        }

    }

}
