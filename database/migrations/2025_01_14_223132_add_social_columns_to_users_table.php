<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('image')->nullable()->after('password');
            $table->longText('bio')->nullable()->after('image');
            $table->string('github_handle')->nullable()->after('bio');
            $table->string('twitter_handle')->nullable()->after('github_handle');
           
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['image', 'bio', 'github_handle', 'twitter_handle']);
            $table->dropSoftDeletes();
        });
    }
};