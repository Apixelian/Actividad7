<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

// php artisan make:controller UserController --resource

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id'); // INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('username', 50); // VARCHAR(50) NOT NULL
            $table->string('email', 100)->unique(); // VARCHAR(100) UNIQUE NOT NULL
            $table->string('password', 100); // VARCHAR(100) NOT NULL

            // Relaciones con otras tablas
            $table->integer('role_id')->unsigned(); // INT UNSIGNED
            $table->foreign('role_id')->references('role_id')->on('roles'); // FOREIGN KEY (role_id) REFERENCES roles(role_id)
            $table->integer('group_id')->unsigned()->nullable(); // INT UNSIGNED NULLABLE
            $table->foreign('group_id')->references('group_id')->on('groups'); // FOREIGN KEY (group_id) REFERENCES groups(group_id)

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

