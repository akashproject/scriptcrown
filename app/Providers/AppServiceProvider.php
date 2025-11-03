<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Media;
use App\Models\CourseType;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    private $primaryMenu;
    public function register(): void
    {
        //
        $this->primaryMenu = array(
            array(
                'url'=>'/about-us',
                'name' => "About Us",
            ),
            array(
                'url'=>'/blog',
                'name' => "Read & Learn",
            ),
            array(
                'url'=>'/contact-us',
                'name' => "Contact Us",
            ),
        );

        App::singleton('primaryMenu', function () {
            return $this->primaryMenu;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        View::composer('*', function($view)
        {
            $loggedInUser = Auth::user();
            $view->with('loggedInUser', $loggedInUser);

            if($loggedInUser){
                $roles = $loggedInUser
                ->roles
                ->pluck('name');
                $roles = implode(",",json_decode($roles));
                $view->with('roles', ucfirst($roles));
            }

            $view->with('primaryMenu', $this->primaryMenu);
        });
    }
}
