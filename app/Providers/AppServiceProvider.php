<?php

namespace App\Providers;

use App\Services\FakeNewsService;
use App\Services\ParserService;
use App\Services\SocialService;
use Illuminate\Pagination\Paginator;
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
		if ($this->app->isLocal()) {
			$this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
		}

		$this->app->bind(FakeNewsService::class, function () {
			return new FakeNewsService();
		});
		$this->app->bind(ParserService::class, function() {
			return new ParserService();
		});
		$this->app->bind(SocialService::class, function() {
			return new SocialService();
		});
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		Paginator::useBootstrap();
    }
}
