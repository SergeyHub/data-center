<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnowledgeBaseTranslations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knowledge_base_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('knowledge_base_id');
            $table->string('locale')->index();
            $table->string('name');
            $table->string('name_in_menu')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('content')->nullable();
            $table->text('fields')->default('{}');
            $table->unique(['knowledge_base_id', 'locale']);
            $table->timestamps();

            $table->foreign('knowledge_base_id')
                ->references('id')
                ->on('knowledge_bases')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knowledge_base_translations');
    }
}
