<?php

namespace App\Providers;
use View;
use App\Task;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->share('layout', 'Hello world');

        $tasks = Task::all();
        View::share('tasks', $tasks);
    }
}
