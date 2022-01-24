<?php
/**
 *  database/migrations/2022_01_23_165133_create_question_sections_table.php
 *
 * Date-Time: 23.01.22
 * Time: 20:52
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')
                ->unsigned()
                ->nullable()
                ->constrained('question_sections')
                ->onDelete('set null');
            $table->text('body');
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
        Schema::dropIfExists('question_sections');
    }
}
