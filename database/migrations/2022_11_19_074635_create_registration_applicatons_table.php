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
        Schema::create('registration_applicatons', function (Blueprint $table) {
            $table->id();
            // branch_name
            $table->string("branch_name")->nullable();
            // user_name
            $table->string("user_name")->nullable();
            // passport_number
            $table->string("passprt_number")->nullable();
            // contact_number
            $table->string("contact_number")->nullable();
            // whatsapp_number
            $table->string("whatsapp_number")->nullable();
            // marketing_officer_name
            $table->string("marketing_officer_name")->nullable();
            // service_description_id
            $table->string("service_description_id")->nullable();
            // mou_number
            $table->string("mou_number")->nullable();
            // mail_id
            $table->string("mail_id")->nullable();
            // invoice_number
            $table->string("invoice_number")->nullable();
            // recipt_upload
            $table->text("recipt_upload")->nullable();
            // passport_upload
            $table->text("passport_upload")->nullable();
            // residential_address
            $table->string("residential_address")->nullable();
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
        Schema::dropIfExists('registration_applicatons');
    }
};
