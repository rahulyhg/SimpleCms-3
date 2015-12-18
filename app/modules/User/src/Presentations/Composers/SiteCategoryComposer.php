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
use App\Repositories\Category\Facades\CategoryRepository;
use App\Repositories\Document\Facades\DocumentRepository;

/**
 * 这是一个分类展示的视图 Composer。
 *
 * @author shsrain <shsrain@163.com>
 */
class SiteCategoryComposer {

    /**
     * 分类仓储的实例。
     *
     * @var CategoryRepository
     */
    protected $category;

    /**
     * 创建一个新的分类展示的视图 Composer。
     *
     * @param  CategoryRepository  $category
     * @return void
     */
    public function __construct()
    {
        // 服务容器。

    }

    /**
     * 数据绑定到视图。
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
		$category = CategoryRepository::where('model', '=', '2')->get();
		$about = DocumentRepository::byIdOrNameMark('about')->first();
		$contact = DocumentRepository::byIdOrNameMark('contact')->first();
		$config = config('home');
		$view->with([
			'homeconfig'=>$config,
			'Categories'=>$category,
			'about'=>$about,
			'contact'=>$contact
		]);
    }

}
