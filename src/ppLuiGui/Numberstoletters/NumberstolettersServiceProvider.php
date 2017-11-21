<?php
/**
 * Created by PhpStorm.
 * User: ppluigui
 * Date: 11/21/17
 * Time: 1:13 PM
 */

namespace ppLuiGui\Numberstoletters;

use Illuminate\Support\ServiceProvider;

class NumberstolettersServiceProvider extends ServiceProvider {


    protected $defer = false;


    public function register()
    {
        $this->app->bindShared('numberstoletters', function () {
            return new NumbersToLetters();
        });
    }

    public function provides()
    {
        return array();
    }

}