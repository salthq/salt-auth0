<?php

namespace Salt\Auth0\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Salt\Auth0\SaltAuth0ServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Salt\\Auth\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            SaltAuth0ServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');


        // Auth0 API testing variables
        config()->set('salt-auth0.api.audience', "https://alt-testing.eu.auth0.com/api/v2/");
        config()->set('salt-auth0.api.domain', 'alt-testing-eu-auth0.com');

        $accessTokenTable = include  __DIR__ . '/../database/migrations/create_access_tokens_table.php.stub';
        $accessTokenTable->up();

        $usersTable = include  __DIR__ . '/../database/migrations/create_users_table.php.stub';
        $usersTable->up();
    }
}
