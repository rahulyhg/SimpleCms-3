<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Providers\EntitylProviders;

use App\Repositories\UcenterMember\UcenterMemberRepository;
use App\Repositories\Document\DocumentRepository;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Member\MemberRepository;
use App\Repositories\Users\UsersRepository;
use App\Repositories\Page\PageRepository;
use Illuminate\Support\ServiceProvider;

/**
 * 这是一个仓储服务提供者。
 *
 * @author shsrain <shsrain@163.com>
 */
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * 引导任何应用服务。
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * 注册的任何应用程序的服务。
     *
     * @return void
     */
    public function register()
    {
		$this->registerDocumentRepository();
		$this->registerCategoryRepository();
		$this->registerMemberRepository();
		$this->registerUcenterMemberRepository();
		$this->registerUsersRepository();

    }

    /**
     * 注册 DocumentRepository 类
     *
     * @return void
     */
    protected function registerDocumentRepository()
    {
        $this->app->singleton('documentrepository', function ($app) {
            $model = 'App\Repositories\Document\Models\DocumentModel';
            $document = new $model();

            $validator = $app['validator'];

            return new DocumentRepository($document, $validator);
        });

		// facade绑定
        $this->app->alias('documentrepository', 'App\Repositories\Document\DocumentRepository');
    }

    /**
     * 注册 CategoryRepository 类
     *
     * @return void
     */
    protected function registerCategoryRepository()
    {
        $this->app->singleton('categoryrepository', function ($app) {
            $model = 'App\Repositories\Category\Models\CategoryModel';
            $category = new $model();

            $validator = $app['validator'];

            return new CategoryRepository($category, $validator);
        });

		// facade绑定
        $this->app->alias('categoryrepository', 'App\Repositories\Category\CategoryRepository');
    }

    /**
     * 注册 MemberRepository 类
     *
     * @return void
     */
    protected function registerMemberRepository()
    {
        $this->app->singleton('memberrepository', function ($app) {
            $model = 'App\Repositories\Member\Models\MemberModel';
            $member = new $model();

            $validator = $app['validator'];

            return new MemberRepository($member, $validator);
        });

		// facade绑定
        $this->app->alias('memberrepository', 'App\Repositories\Member\MemberRepository');
    }

    /**
     * 注册 UcenterMemberRepository 类
     *
     * @return void
     */
    protected function registerUcenterMemberRepository()
    {
        $this->app->singleton('ucentermemberrepository', function ($app) {
            $model = 'App\Repositories\UcenterMember\Models\UcenterMemberModel';
            $ucentermember = new $model();

            $validator = $app['validator'];

            return new UcenterMemberRepository($ucentermember, $validator);
        });

		// facade绑定
        $this->app->alias('ucentermemberrepository', 'App\Repositories\UcenterMember\UcenterMemberRepository');
    }

    /**
     * 注册 PageRepository 类
     *
     * @return void
     */
    protected function registerPageRepository()
    {
        $this->app->singleton('pagerepository', function ($app) {
            $model = 'App\Repositories\Page\Models\PageModel';
            $page = new $model();

            $validator = $app['validator'];

            return new PageRepository($page, $validator);
        });

		// facade绑定
        $this->app->alias('pagerepository', 'App\Repositories\Page\PageRepository');
    }

    /**
     * 注册 UsersRepository 类
     *
     * @return void
     */
    protected function registerUsersRepository()
    {
        $this->app->singleton('usersrepository', function ($app) {
            $model = 'App\Repositories\Users\Models\UsersModel';
            $users = new $model();

            $validator = $app['validator'];

            return new UsersRepository($users, $validator);
        });

		// facade绑定
        $this->app->alias('usersrepository', 'App\Repositories\Users\UsersRepository');
    }
}
