<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model as Model;

 /**
 * 这是一个抽象模型类。
 *
 * @author shsrain <shsrain@163.com>
 */
abstract class BaseModel extends Model
{
    use ModelTrait;

    /**
     * A list of methods protected from mass assignment.
     *
     * @var array
     */
    protected $guarded = ['_token', '_method', 'id'];
}
