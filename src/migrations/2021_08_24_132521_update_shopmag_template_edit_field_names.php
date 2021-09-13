<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateShopmagTemplateEditFieldNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('content_fields')) {
            DB::table('content_fields')
                ->where('field', 'new-world_content')
                ->update(['field' => 'content']);


            DB::table('content_fields')
                ->where('field', 'shopmag_content')
                ->update(['field' => 'content']);
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
