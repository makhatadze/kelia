<?php
/**
 *  app/Providers/RepositoryServiceProvider.php
 *
 * Date-Time: 01.02.22
 * Time: 12:53
 * @author Vito Makhatadze <vitomakhatadze@gmail.com>
 */
namespace App\Providers;

use App\Models\Team;
use App\Policies\TeamPolicy;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\Eloquent\Base\EloquentRepositoryInterface;
use App\Repositories\Eloquent\FileRepository;
use App\Repositories\FileRepositoryInterface;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(FileRepositoryInterface::class,FileRepository::class);
    }
}
