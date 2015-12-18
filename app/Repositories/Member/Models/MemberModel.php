<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Member\Models;

use App\Repositories\Models\BaseModel as Model;

/**
 * 这是一个 member 模型类。
 *
 * @author shsrain <shsrain@163.com>
 */
class MemberModel extends Model
{


    /**
     * 存储的数据表名称。
     *
     * @var string
     */
    protected $table = 'member';

    /**
     * 模型名称。
     *
     * @var string
     */
    public static $name = 'member';

    /**
     * 对那些日期模型的属性。
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

    /**
     * 该列显示索引时选择。
     *
     * @var array
     */
    public static $index = ['uid'];

    /**
     * 分页每页显示最大条数。
     *
     * @var int
     */
    public static $paginate = 10;

    /**
     * 列表索引排序字段。
     *
     * @var string
     */
    public static $order = 'uid';

    /**
     * 列表索引排序。
     *
     * @var string
     */
    public static $sort = 'desc';

    /**
     * 验证规则。
     *
     * @var array
     */
    public static $rules = [
        'nickname'   => 'required',
    ];



    /**
     * 删除一个模型实例前的操作。
     *
     * @return void
     */
    public function beforeDelete()
    {

    }

}
