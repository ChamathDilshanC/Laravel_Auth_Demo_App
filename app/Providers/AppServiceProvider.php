<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// මේක Laravel application එකේ Service Provider එකක්. මේක application එක boot වෙද්දී (start වෙද්දී) විවිධ services configure කරන්න භාවිත වෙනවා.
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
