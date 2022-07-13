<?php

use App\Models\Producto;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->timestamps();
            $table->string('name');
            $table->integer('precio');
            $table->string('imagen');
        });


        $v = new Producto();

        $v->name = 'Perfume naranja';
        $v->precio = 100;
        $v->imagen ='https://jumbo.vtexassets.com/arquivos/ids/168476/273564.jpg?v=636150794228500000';
        $v->save();


        $v = new Producto();

        $v->name = 'Olor a abuela';
        $v->precio = 200;
        $v->imagen ='https://jumbo.vtexassets.com/arquivos/ids/168476/273564.jpg?v=636150794228500000';
        $v->save();


        $v = new Producto();

        $v->name = 'colonia inglesa';
        $v->precio = 300;
        $v->imagen ='https://jumbo.vtexassets.com/arquivos/ids/168476/273564.jpg?v=636150794228500000';
        $v->save();



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
