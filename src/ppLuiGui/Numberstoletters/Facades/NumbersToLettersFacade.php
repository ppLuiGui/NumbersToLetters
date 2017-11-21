<?php
/**
 * Created by PhpStorm.
 * User: ppluigui
 * Date: 11/21/17
 * Time: 1:10 PM
 */

namespace ppLuiGui\Numberstoletters\Facades;

use Illuminate\Support\Facades\Facade;

class NumbersToLettersFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'numberstoletters';
    }

}