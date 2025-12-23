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
    private $footerMenu;
    private $formData;
    public function register(): void
    {
        //
        $this->primaryMenu = array(
            array(
                'url'=>'/about-us',
                'name' => "About Us",
            ),
            array(
                'url'=>'/projects',
                'name' => "Projects",
            ),
            array(
                'url'=>'/contact-us',
                'name' => "Contact Us",
            ),
        );

        $this->footerMenu = array(
            array(
                'url'=>'/about-us',
                'name' => "About Company",
            ),
            array(
                'url'=>'/projects',
                'name' => "Case Studies",
            ),
             array(
                'url'=>'/blogs',
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

        App::singleton('footerMenu', function () {
            return $this->footerMenu;
        });

        // $ip = request()->ip();

        // $location = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
        // dd($location);
        
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

            $media = Media::orderBy('created_at', 'desc')->get();
            $view->with('media', $media);
            if($loggedInUser){
                $roles = $loggedInUser
                ->roles
                ->pluck('name');
                $roles = implode(",",json_decode($roles));
                $view->with('roles', ucfirst($roles));
            }

            $view->with('primaryMenu', $this->primaryMenu);
            $view->with('footerMenu', $this->footerMenu);
        });
    }
}
