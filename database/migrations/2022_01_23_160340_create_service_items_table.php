<?php
/**
 *  database/migrations/2022_01_23_160340_create_service_items_table.php
 *
 * Date-Time: 23.01.22
 * Time: 20:05
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_items', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // name of service (e.g. Bathroom,Food, ...)
            $table->string('head_title');
            $table->text('sub_text')->nullable();
            $table->mediumText('body_text_head')->nullable();
            $table->mediumText('body_text_bottom')->nullable();
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_items');
    }
}
