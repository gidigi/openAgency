<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FileToCaseMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'fileToCase';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('fileId');
            $table->unsignedBigInteger('caseId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fileId')->references('id')->on('files');
            $table->foreign('caseId')->references('id')->on('cases');
              $table->bigIncrements('id')->unsigned();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('case_migration', function (Blueprint $table) {
            //
        });
    }
}
