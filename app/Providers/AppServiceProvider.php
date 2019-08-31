<?php

namespace App\Providers;
use App\Cat;
use App\Slider;
use App\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Nwidart\ForecastPhp\Forecast;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        View::composer('*', function ($view) {
            $view->with('cats', $cats = Cat::all());
        });


        View::composer('*', function ($view) {
            $view->with('posts', $posts = Post::all());
        });

        view::composer('layouts.sidebar',function($abc){
            $latest = Post::with('cat')->orderBy('id','desc')->where('status','Normal Post')->take(5)
                ->get();
            $abc->with('latest',$latest);
        });

        view::composer('layouts.slider',function($slide){
            $slider = Slider::orderBy('id','desc')

                ->take(2)

                ->get();
            $slide->with('slider',$slider);
        });


      view::composer('layouts.popularPost',function($popular){
           $poplpost = Post::with('cat')->orderBy('count','desc')->take(5)
        ->get();
          $popular->with('poplpost',$poplpost);
 });

 view::composer('frontend.index',function($weath){
            $forecast = new Forecast('6158396b756619681ed516e26fa4818d');
            $info = $forecast->get('23.8103', '90.4125');

            $temper = $info['currently'];

            $test = $temper['icon'];
            $temper = $temper['temperature'];
            $test = 5.0/9.0 * ($temper - 32) ;
            $weath->with('test',$test);
        });
 view::composer('frontend.diuindex',function($weath){
            $forecast = new Forecast('6158396b756619681ed516e26fa4818d');
            $info = $forecast->get('23.8103', '90.4125');

            $temper = $info['currently'];

            $test = $temper['icon'];
            $temper = $temper['temperature'];
            $test = 5.0/9.0 * ($temper - 32) ;
            $weath->with('test',$test);
        });
 view::composer('frontend.single',function($weath){
            $forecast = new Forecast('6158396b756619681ed516e26fa4818d');
            $info = $forecast->get('23.8103', '90.4125');

            $temper = $info['currently'];

            $test = $temper['icon'];
            $temper = $temper['temperature'];
            $test = 5.0/9.0 * ($temper - 32) ;
            $weath->with('test',$test);
        });
 view::composer('frontend.categoriesposts',function($weath){
            $forecast = new Forecast('6158396b756619681ed516e26fa4818d');
            $info = $forecast->get('23.8103', '90.4125');

            $temper = $info['currently'];

            $test = $temper['icon'];
            $temper = $temper['temperature'];
            $test = 5.0/9.0 * ($temper - 32) ;
            $weath->with('test',$test);
        });
 view::composer('frontend.login',function($weath){
            $forecast = new Forecast('6158396b756619681ed516e26fa4818d');
            $info = $forecast->get('23.8103', '90.4125');

            $temper = $info['currently'];

            $test = $temper['icon'];
            $temper = $temper['temperature'];
            $test = 5.0/9.0 * ($temper - 32) ;
            $weath->with('test',$test);
        });
 view::composer('frontend.register',function($weath){
            $forecast = new Forecast('6158396b756619681ed516e26fa4818d');
            $info = $forecast->get('23.8103', '90.4125');

            $temper = $info['currently'];

            $test = $temper['icon'];
            $temper = $temper['temperature'];
            $test = 5.0/9.0 * ($temper - 32) ;
            $weath->with('test',$test);
        });

		Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
