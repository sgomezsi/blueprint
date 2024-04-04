<?php

namespace App\Providers;

use Blueprint\Contracts\Model;
use Blueprint\Models\Model as ModelsModel;
use Illuminate\Contracts\Database\ModelIdentifier;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Support\ServiceProvider;
use PhpParser\Node\Expr\AssignOp\Mod;

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
