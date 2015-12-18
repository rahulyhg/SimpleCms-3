<?php 

/* 
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Providers\PresentationProviders;

use Illuminate\Support\ServiceProvider;

/**
 * 这是一个Blade模板扩展服务提供者。
 *
 * @author shsrain <shsrain@163.com>
 */
class BladeServiceProvider extends ServiceProvider
{

    /**
     * 引导任何应用服务。
     *
     * @return void
     */
    public function boot()
    {
        \Blade::extend(function($view, $compiler){

			$this->app->make('phpBlade')->php($view, $compiler);
			$this->app->make('phpBlade')->endphp($view, $compiler);
			$this->app->make('phpBlade')->datetime($view, $compiler);

            return $view;
        });
    }

    /**
     * 注册的任何应用程序的服务。
     *
     * @return void
     */
    public function register()
    {
		$this->app->instance('phpBlade', new \App\Presentations\BladeExtensions\PhpBladeExtension());
    }
}