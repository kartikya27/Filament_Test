
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id('id');
            // $table->integer('state_id')->unsigned();
            $table->string('city');
            
           
            $table->timestamps();

            $table->foreignId('state_id')
                ->references('state_id')->on('states')
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('posts_state_id_foreign');
        Schema::dropIfExists('cities');
        
    }
};