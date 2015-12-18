<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Category\Models;

use App\Repositories\Document\Relations\HasManyDocumentRelationTrait;
use App\Repositories\Models\BaseModel as Model;

/**
 * 这是一个分类模型类。
 *
 * @author shsrain <shsrain@163.com>
 */
class CategoryModel extends Model
{
	use HasManyDocumentRelationTrait;

	//  配置定义

    /** 存储的数据表名称
     * The table the posts are stored in.
     *
     * @var string
     */
    protected $table = 'category';

    /** 模型名称
     * The model name.
     *
     * @var string
     */
    public static $name = 'category';

    /** 对那些日期模型的属性
     * The properties on the model that are dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The revisionable columns.
     *
     * @var array
     */
    protected $keepRevisionOf = [];

    /** 该列显示索引时选择。
     * The columns to select when displaying an index.
     *
     * @var array
     */
    public static $index = ['id'];

    /**
     * 分页每页显示最大条数
     *
     * @var int
     */
    public static $paginate = 10;

    /**
     * 列表索引排序字段
     *
     * @var string
     */
    public static $order = 'id';

    /**
     * 列表索引排序
     *
     * @var string
     */
    public static $sort = 'desc';

    /** 验证规则
     * The post validation rules.
     *
     * @var array
     */
    public static $rules = [
        'content'   => 'required',
    ];



    /**
     * 删除一个模型实例前的操作
     *
     * @return void
     */
    public function beforeDelete()
    {

    }

}
