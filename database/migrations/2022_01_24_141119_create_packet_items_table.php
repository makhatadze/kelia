<?php
/**
 *  database/migrations/2022_01_24_141119_create_packet_items_table.php
 *
 * Date-Time: 24.01.22
 * Time: 18:20
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacketItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packet_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('packet_id');
            $table->foreign('packet_id')->references('id')->on('packets')->onDelete('cascade');
            $table->string('text');
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
        Schema::dropIfExists('packet_items');
    }
}
