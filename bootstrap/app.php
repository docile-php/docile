<?php

declare(strict_types=1);

use Docile\Foundation\Application;

$app = new Application(dirname(__DIR__));

/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| The providers listed in composer.json under extra.docile.providers are
| resolved and registered automatically by the Application. You may also
| register additional providers here before returning the instance.
|
*/
$composerJson = json_decode(
    file_get_contents(dirname(__DIR__) . '/composer.json'),
    true,
    512,
    JSON_THROW_ON_ERROR,
);

foreach ($composerJson['extra']['docile']['providers'] ?? [] as $provider) {
    $app->register($provider);
}

return $app;
