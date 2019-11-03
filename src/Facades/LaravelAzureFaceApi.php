<?php
namespace SmartDog23\LaravelAzureFaceApi\Facades;

use Illuminate\Support\Facades\Facade;
use SmartDog23\AzureFaceApi\AzureFaceApi;

class LaravelAzureFaceApi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return AzureFaceApi::class;
    }
}