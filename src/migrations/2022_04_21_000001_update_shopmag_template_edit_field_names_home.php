<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class UpdateShopmagTemplateEditFieldNamesHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        if (Schema::hasTable('content_fields')) {

            $fields = DB::table('content_fields')
                ->whereIn('field', ['new-world_content'])
                ->where('rel_type', 'module')
                ->where('rel_id', '0')
                ->get();

            if ($fields) {
                foreach ($fields as $field) {
                    // move to content table
                    DB::table('content')
                        ->where('id', $field->rel_id)
                        ->limit(1)
                        ->update(['content' => $field->value]);



                    DB::table('content_fields')
                        ->where('id', $field->id)
                        ->delete();

                }
            }

        }

    }


}
