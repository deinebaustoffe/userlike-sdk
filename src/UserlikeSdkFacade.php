<?php

namespace Deinebaustoffe\UserlikeSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Deinebaustoffe\UserlikeSdk\Skeleton\SkeletonClass
 */
class UserlikeSdkFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'userlike-sdk';
    }
}
