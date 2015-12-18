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

/**
 * 这是一个页尾展示的视图 Composer。
 *
 * @author shsrain <shsrain@163.com>
 */
class SiteFooterComposer {


    /**
     * 创建一个新的页尾展示的视图 Composer。
     *
     * @return void
     */
    public function __construct()
    {
        // 服务容器

    }

    /**
     * 数据绑定到视图。
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
		//
    }

}
