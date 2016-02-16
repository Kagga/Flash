<?php
/**
 * Created by PhpStorm.
 * User: jokamjohn
 * Date: 2/16/2016
 * Time: 2:56 PM
 */

namespace Kagga\Flash\Facade;


use Illuminate\Support\Facades\Facade;

class Flash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'flash';
    }

}