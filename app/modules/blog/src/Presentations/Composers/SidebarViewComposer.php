<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Blog\Presentations\Composers;

use Blog\Repositories\Facades\Blog;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;

/**
 * 这是一个侧边展示的视图 Composer。
 *
 * @author shsrain <shsrain@163.com>
 */
class SidebarViewComposer
{

    /**
     * 数据绑定到视图。
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
		$this->followComposer($view);
		$this->photoComposer($view);
		$this->commentComposer($view);
		$this->randDocumentget($view);
    }

    /**
     * 求关注。
     *
     * @param  View  $view
     * @return Response
     */
	public function followComposer($view){

		$view->with('follow',[
			'content'=>'在工作中，我们可能会用到各种交互效果。而这些效果在平常翻看文章的时候碰到很多，但是一时半会又想不起来在哪，所以养成只是整理的习惯是很有必要的。这篇文章收集了10个在网站开发中很有用的 CSS3 效果，记得收藏。',
		]);
	}

    /**
     * 图片。
     *
     * @param  View  $view
     * @return Response
     */
	public function photoComposer($view){

		$view->with('photo',[
			'title'=>'总是能在旅行中发现一切奇葩事。',
			'img'=>'http://pic4.nipic.com/20090803/2618170_095921092_2.jpg',
			'url'=>'index'
		]);
	}

    /**
     * 评论。
     *
     * @param  View  $view
     * @return Response
     */
	public function commentComposer($view){

		$view->with('comment',[
			'title'=>'MMO发表在《laravel进阶指南。',
			'url'=>'index'
		]);
	}

    /**
     * 随机文章。
     *
     * @param  View  $view
     * @return Response
     */
	public function randDocumentget($view,$limit=5){
		$view->with('randlists', Blog::randGet($limit));
	}
}
