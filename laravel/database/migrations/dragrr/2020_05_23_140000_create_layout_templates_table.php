<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('layout_templates');

        Schema::create('layout_templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('handle', 32);
            $table->char('type', 32)->default('');
            $table->char('name', 32)->nullable();
            $table->char('label', 64)->default('No Label');
            $table->integer('responsive')->default(12);
            $table->longText('media')->nullable();
            $table->longText('draw')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('layout_templates', function (Blueprint $table) {
            $table->unique(['name', 'deleted_at']);
        });

        Artisan::call('dragrr:config:layouts');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layout_templates');
    }
}
