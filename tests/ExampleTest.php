<?php

namespace Deinebaustoffe\UserlikeSdk\Tests;

use Orchestra\Testbench\TestCase;
use Deinebaustoffe\UserlikeSdk\UserlikeSdkServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [UserlikeSdkServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
