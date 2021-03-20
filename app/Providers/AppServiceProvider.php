<?php

namespace App\Providers;

use App\Models\Development;
use App\Models\Info;
use App\Models\Network;
use App\Models\Server;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Schema::defaultStringLength(191);
      $network = Network::find(1);
      $development = Development::find(1);
      $server = Server::find(1);
      $info = Info::find(1);
      view()->share(['network' => $network, 'development' => $development, 'server' => $server, 'info' => $info]);
    }
}
