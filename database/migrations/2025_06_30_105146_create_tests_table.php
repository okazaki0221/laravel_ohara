<?php
// use文。migration,Blueprint,Schemaのクラスを使用するためにインポート
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //エロクアント。Schema::メソッドでDBに対する操作が可能
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    // downメソッド。ロールバック用の処理を記述。
    public function down(): void
    {
        // testsテーブルが存在したら削除する
        Schema::dropIfExists('tests');
    }
};
