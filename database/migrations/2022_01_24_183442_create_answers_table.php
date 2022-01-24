<?php
/**
 *  database/migrations/2022_01_24_183442_create_answers_table.php
 *
 * Date-Time: 24.01.22
 * Time: 22:37
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->decimal('price')->nullable();
            $table->unsignedBigInteger('question_id')->nullable();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->unsignedBigInteger('next_question_id')->nullable();
            $table->foreign('next_question_id')->references('id')->on('questions');
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
        Schema::dropIfExists('answers');
    }
}
