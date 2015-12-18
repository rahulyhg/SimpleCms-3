<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Blog\Presentations\Composers;

use Illuminate\Contracts\View\View;
use Blade;

/**
 * 这是一个Meta信息的视图 Composer。
 *
 * @author shsrain <shsrain@163.com>
 */
class SiteMetaComposer {

    /**
     * 数据绑定到视图。
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $view->with('meta',[
			'charset'=>'utf-8',
			'title'=>'simpleBlog 欢迎！',
			'keywords'=>'simpleBlog laravel5',
			'description'=>'simpleBlog，基于laravel5开发。'
		]);
    }
}
