<?php
/**
 *  database/migrations/2022_01_22_185049_create_content_images_table.php
 *
 * Date-Time: 22.01.22
 * Time: 22:50
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_images', function (Blueprint $table) {
            $table->id();
            $table->string('tag');
            $table->string('section');
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
        Schema::dropIfExists('content_images');
    }
}
