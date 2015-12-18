<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Blog\Http\Controllers;

use App\Http\Controllers\BaseController as Controller;
use Blog\Repositories\Facades\Blog;

/**
 * 这是一个问答展示控制器。
 *
 * @author shsrain <shsrain@163.com>
 */
class IndexController extends Controller {

    /**
     * 博客首页
     *
     * @return Response
     */
    public function index()
    {
        return view('blog::simpleblog.Blog.Index.index', ['lists' => Blog::get()]);
    }

    /**
     * 博客列表
     *
     * @param  $categoryid
     * @return Response
     */
  public function lists( $categoryid ){

        return view('blog::simpleblog.Blog.Index.lists',
        [
          'category'=> Blog::currentCategory($categoryid),
          'document'=> Blog::categoryGet(),
        ] );
  }

    /**
     * 博客文章
     *
     * @param  $id
     * @return Response
     */
    public function detail( $id )
    {

    $document = Blog::moreGet($id);
    $next = Blog::nextGet($id);
    $prev = Blog::prevGet($id);

        return
      view('blog::simpleblog.Blog.Index.detail',
        [
          'document'=>$document['document'],
          'category'=>$document['category'],
          'article'=>$document['article'],
          'member'=>$document['member'],
          'next'=>$next,
          'prev'=>$prev
        ] );
    }

    /**
     * 博客文章搜索
     *
     * @return Response
     */
  public function search(){

        return view('blog::simpleblog.Blog.Index.search',
        [
          'document'=> Blog::searchGet(),
          'searchkeywords'=> Request::input('searchkeywords'),
        ] );
  }

    /**
     * 博客留言
     *
     * @return Response
     */
  public function message(){

    if (Request::isMethod('post')) {

      $data = [
        'title' => Request::input('title'),
        'detail' => Request::input('detail'),
      ];
      Mail::send(['html' => 'email'],$data, function($message)
      {
        $message->from('532838908@qq.com', 'simpleCms的网站留言')->to('shsrain@163.com')->subject(Request::input('title'));
      });
      return success('blog.index');

    }
    return view('blog::simpleblog.Blog.Index.message');
  }

  public function test(){
    echo 'hello world';
    if(true)
    {
      echo 'yes';
    }
    else
    {
      echo 'no';
    }
  }
}
