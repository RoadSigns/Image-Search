<?php
declare(strict_types=1);

namespace App\Providers;

use App\Contracts\ImageRepositoryInterface;
use App\Repositories\ImgurImageRepository;
use Illuminate\Support\ServiceProvider;

class ImageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ImageRepositoryInterface::class, ImgurImageRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
    }
}
