<?php

use App\Models\EventsTranslation;
use App\Models\KnowledgeBaseTranslation;
use App\Models\NewsHabrTranslation;
use App\Models\NewsSmiTranslation;
use App\Models\NewsTranslation;
use App\Models\ServiceTranslation;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSearchable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $models = [NewsSmiTranslation::class, NewsTranslation::class,
            NewsHabrTranslation::class, ServiceTranslation::class,
            EventsTranslation::class, KnowledgeBaseTranslation::class
        ];

        foreach ($models as $model) {
            $table = $model::getTableName();
            \DB::statement("ALTER TABLE $table ADD IF NOT EXISTS searchable tsvector NULL");
            \DB::statement("CREATE INDEX IF NOT EXISTS {$table}_searchable_index ON $table USING GIN (searchable)");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
