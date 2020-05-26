<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Hyn\Tenancy\Events\Database\ConfigurationLoaded;

class TenantDBConnectionListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ConfigurationLoaded  $event
     * @return void
     */
    public function handle(ConfigurationLoaded $event)
    {
        $event->configuration["username"] = config("database.connections.system.username");
        $event->configuration["password"] = config("database.connections.system.password");
    }
}
