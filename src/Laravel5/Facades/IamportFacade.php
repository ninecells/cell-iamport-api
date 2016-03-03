<?php

namespace NineCells\Iamport\Laravel5\Facades;

use Illuminate\Support\Facades\Facade;
use NineCells\Iamport\IamportApi;

class IamportFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return IamportApi::class;
    }
}
