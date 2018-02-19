<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsgDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allimtalks', function (Blueprint $table) {
            $table->integer     ('userdata')->nullable();
            $table->increments  ('msg_data');
            $table->integer     ('user_part')->nullable();
            $table->string      ('user_id', 20)->nullable();
            $table->integer     ('work_seq')->nullable();
            $table->integer     ('center_seq')->nullable();
            $table->integer     ('cur_state');
            $table->datetime    ('sent_date')->nullable();
            $table->datetime    ('rslt_date')->nullable();
            $table->datetime    ('req_date')->nullable();
            $table->char        ('pay_code', 3)->nullable();
            $table->integer     ('pay_fee')->nullable();
            $table->integer     ('rslt_code')->nullable();
            $table->char        ('rslt_code2', 1)->nullable();
            $table->char        ('rslt_net', 3)->nullable();
            $table->string      ('call_to', 15)->nullable();
            $table->string      ('call_from', 15)->nullable();
            $table->string      ('remote_addr', 256)->nullable();
            $table->string      ('sms_txt', 200)->nullable();
            $table->integer     ('msg_type');
            $table->integer     ('cont_seq')->nullable();
            $table->integer     ('boxseq')->nullable();
            $table->char        ('endflag', 1)->nullable();
            $table->string      ('msg_id', 100)->nullable();
            $table->string      ('saeallseq', 30)->nullable();
            $table->char        ('deletedyn', 1)->default('N');
            $table->char        ('push_code', 4)->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allimtalks');
    }
}
