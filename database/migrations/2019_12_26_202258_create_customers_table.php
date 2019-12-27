<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /**
         * Example of data
         * type: SAS
         * name: BORIS & CO
         * address_line_1: Chemin des Prunes
         * address_line_2: ZAC du pres joli
         * zip: 73000
         * city: Chambery
         * country: France
         * contact_firstname: Philippe
         * contact_lastname: Dupont
         * contact_mail: p.dupont@miammiam.fr
         * contact_phone: 0611223344
        */

        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->string('name');
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('zip');
            $table->string('city');
            $table->string('country');
            $table->string('contact_firstname');
            $table->string('contact_lastname');
            $table->string('contact_mail');
            $table->string('contact_phone');
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
        Schema::dropIfExists('customers');
    }
}
