<?php
/**
 *  database/migrations/2022_01_23_150100_create_content_texts_table.php
 *
 * Date-Time: 23.01.22
 * Time: 19:02
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_texts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('text_type');
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
        Schema::dropIfExists('content_texts');
    }
}
