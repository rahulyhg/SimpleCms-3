<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Providers\FoundationProviders;

use Illuminate\Support\ServiceProvider;
use Response;

/**
 * 这是一个基础服务服务提供者。
 *
 * @author shsrain <shsrain@163.com>
 */
class FoundationServiceProvider extends ServiceProvider {

    /**
     * 引导任何应用服务。
     *
     * @return void
     */
    public function boot()
    {
		$this->bootOperationTips();
		$this->bootThemeView();
		$this->loadHelpers('Foundations\Helpers',[
			'quick_helper',
			'captcha_helper',
			'html_helper',
			'text_helper'
		]);
    }

    /**
     * 注册的任何应用程序的服务。
     *
     * @return void
     */
    public function register()
    {
		$this->app->instance('Curl', new \App\Foundations\Libraries\Curl\Curl());
    }

    /**
     * 操作结果提示的响应宏。
     *
     * @return void
     */
	public function bootOperationTips(){

		Response::macro('success', function($jumpUrl,$message='操作成功！',$waitSecond =5)
		{
			return view(config('home.tmpl_parse_string.success'),
				[
					'message'=>$message,
					'jumpUrl'=>route($jumpUrl),
					'waitSecond'=>$waitSecond
				]);
		});

		Response::macro('error', function($jumpUrl,$message='操作失败！',$waitSecond =5)
		{
			return view(config('home.tmpl_parse_string.error'),
				[
					'message'=>$message,
					'jumpUrl'=>route($jumpUrl),
					'waitSecond'=>$waitSecond
				]);
		});
	}

    /**
     * 主题化模板的响应宏。
     *
     * @return void
     */
	public function bootThemeView(){

		Response::macro('theme', function($path,$data=[])
		{
			return view('simpleblog.'.$path,$data);
		});
	}

    /**
     * 载入帮助函数。
     *
	 * @namespace string
	 * @use array
     * @return void
     */
	public function loadHelpers( $namespace = '',$use = [] ){

		foreach($use as $helper){
			require_once app_path($namespace.'\/'.$helper.'.php');
		}
	}
}
