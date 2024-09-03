<?php

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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title', 200)->nullable();
            $table->string('blog_img', 255)->nullable();
            $table->mediumText('content');
            $table->unsignedBigInteger('views')->default(0);  // Track views
            $table->timestamps();
        });
    
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id');  // Foreign key to blogs table
            $table->unsignedBigInteger('user_id')->nullable();  // Optional user ID
            $table->string('user_name')->nullable();  // Name of the commenter
            $table->text('comment');  // Comment content
            $table->timestamps();
            
            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade');  // Cascade delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
