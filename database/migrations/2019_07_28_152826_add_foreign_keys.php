<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('segment_id')->references('id')->on('segments');
         });

        Schema::table('value_additional_fields', function (Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('events');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('event_type_id')->references('id')->on('event_types');
        });
        Schema::table('event_type_additional_fields', function (Blueprint $table) {
            $table->foreign('type_event_id')->references('id')->on('event_types');
            $table->foreign('additional_field_id')->references('id')->on('additional_fields');
        });


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
