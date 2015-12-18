<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace Blog\Repositories\Traits;

use App\Repositories\Document\Facades\DocumentRepository;
use App\Repositories\Category\Facades\CategoryRepository;
use Request;
use Route;

/**
 * 这是一个Blog Module trait.
 *
 * @author shsrain <shsrain@163.com>
 */
trait BlogTrait
{
    /**
     * 按分类获取
     *
     * @return Array
     */
	public function categoryGet(){

        return DocumentRepository::with('article')
					->with('byMember')
					->whereHas('category',
								function($query){
									$id = Route::input('categoryid');
									if (is_numeric($id)) {
										$field = 'id';
									} else {
										$field = 'name';
									}
									$query->where($field, '=', $id);
								})
					->where('model_id','=',2)
					->paginate(10);
	}

    /**
     * 搜索获取
     *
     * @return Array
     */
	public function searchGet(){

		return DocumentRepository::with('article')
					->with('byMember')
					->with('category')
					->where(function($query){
						$query->where('title', 'like', '%'.Request::input('searchkeywords').'%')
							  ->where('model_id','=',2);
					})
					->paginate(5);
	}

    /**
     * 详细获取
     *
     * @return Array
     */
	public function moreGet( $id ){

	    $document = DocumentRepository::byMark($id)->first();

		return [
			'document' => $document,
			'category' => $document->category()->first(),
			'article' => $document->article()->first(),
			'member' => $document->byMember()->first()
		];
	}

    /**
     * 当前分类获取
     *
     * @return Array
     */
	public function currentCategory($categoryid){

		return CategoryRepository::byMark($categoryid)->first();;
	}

    /**
     * 上一篇
     *
     * @return Array
     */
	public function prevGet( $id ){

		$current = DocumentRepository::byMark($id)->first();
		$prev =  $current->where('id','<',$current['id'])
					->where('category_id','=',$current['category_id'])
					->orderBy('id', 'desc')->first();
		if($prev){
			return $prev;
		}
		return false;
	}

    /**
     * 下一篇
     *
     * @return Array
     */
	public function nextGet( $id ){

		$current = DocumentRepository::byMark($id)->first();
		$next = $current->where('id','>',$current['id'])
					->where('category_id','=',$current['category_id'])
					->orderBy('id', 'asc')->first();
		if($next){
			return $next;
		}
		return false;
	}

    /**
     * 随机获取。
     *
     * @return Array
     */
	public function randGet($limit =  5){
		return \DB::select(\DB::raw('SELECT * FROM laravel_document A JOIN (SELECT CEIL(MAX(id)*RAND()) AS ID FROM laravel_document) AS B ON A.id >= B.id WHERE model_id=2 LIMIT '.$limit.';'));
	}



    /**
     * 浏览
     *
     * @return Array
     */
	public function views(){

	}

    /**
     * 关注
     *
     * @return Array
     */
	public function focus(){

	}

    /**
     * 推荐
     *
     * @return Array
     */
	public function recommend(){

	}

    /**
     * 回复
     *
     * @return Array
     */
	public function replyAmount(){

	}

}
