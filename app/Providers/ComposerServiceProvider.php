<?php namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use View, Form;
use \App\Category;
use App\Student;
use App\Http\ViewComposer\Active;


class ComposerServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.master', function ($view) {
            $categories = \App\Category::all();
            $view->with('students', \App\Student::all());
            $view->with('menus', $categories);
            //student::current()->get());
        });


        Form::macro('date', function ($name, $value = '', $options = []) {

            $attr = '';
            foreach ($options as $n => $v) $attr = "\"$n\"=\"$v\" ";

            $value = $value ? Carbon::parse($value)->format('Y-m-d') : Carbon::now()->format('Y-m-d');
            return "<input type=\"date\" value=\"$value\" name=\"$name\" $attr>";

        });


    }



    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('active', function($app){

             return new Active($app['request']);

        });


    }

}
