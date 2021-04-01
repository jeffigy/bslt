<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('to', 100);
            $table->string('date', 100);
            $table->string('address', 100);
            $table->string('reference');
            $table->string('attention', 100);
            $table->string('area', 100);
            $table->string('project', 100);
            $table->string('salesman', 100);
            $table->string('location', 100);
            $table->string('status', 11);

            $table->string('titleA', 100)->nullable();

            $table->integer('quantity1')->nullable();
            $table->string('unit1', 100)->nullable();
            $table->string('dimension1')->nullable();
            $table->integer('price1')->nullable();
            $table->integer('total1')->nullable();
            
            $table->integer('quantity2')->nullable();
            $table->string('unit2', 100)->nullable();
            $table->string('dimension2')->nullable();
            $table->integer('price2')->nullable();
            $table->integer('total2')->nullable();

            $table->integer('quantity3')->nullable();
            $table->string('unit3', 100)->nullable();
            $table->string('dimension3')->nullable();
            $table->integer('price3')->nullable();
            $table->integer('total3')->nullable();

            $table->integer('quantity4')->nullable();
            $table->string('unit4', 100)->nullable();
            $table->string('dimension4')->nullable();
            $table->integer('price4')->nullable();
            $table->integer('total4')->nullable();

            $table->integer('quantity5')->nullable();
            $table->string('unit5', 100)->nullable();
            $table->string('dimension5')->nullable();
            $table->integer('price5')->nullable();
            $table->integer('total5')->nullable();

            $table->integer('list')->nullable();
            $table->integer('disc')->nullable();
            $table->integer('sale')->nullable();

            $table->integer('quantity6')->nullable();
            $table->string('unit6', 100)->nullable();
            $table->integer('price6')->nullable();
            $table->integer('total6')->nullable();
            
            $table->integer('quantity7')->nullable();
            $table->string('unit7', 100)->nullable();
            $table->integer('price7')->nullable();
            $table->integer('total7')->nullable();

            $table->integer('quantity8')->nullable();
            $table->string('unit8', 100)->nullable();
            $table->integer('price8')->nullable();
            $table->integer('total8')->nullable();

            $table->integer('quantity9')->nullable();
            $table->string('unit9', 100)->nullable();
            $table->integer('price9')->nullable();
            $table->integer('total9')->nullable();

            $table->integer('quantity10')->nullable();
            $table->string('unit10', 100)->nullable();
            $table->integer('price10')->nullable();
            $table->integer('total10')->nullable();

            $table->integer('list1')->nullable();
            $table->integer('del')->nullable();
            $table->integer('list2')->nullable();

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
        Schema::dropIfExists('contracts');
    }
}
