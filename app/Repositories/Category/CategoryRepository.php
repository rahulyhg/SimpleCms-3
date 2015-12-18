<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Category;

use App\Repositories\Repository as Repository;

/**
 * 这是 category 的仓储类。
 *
 * @author shsrain <shsrain@163.com>
 */
class CategoryRepository extends Repository
{

    /**
     * 通过id或者是name查询。
     *
     * @return object
     */
    public function byMark($id)
    {
        $model = $this->model;

        if (is_numeric($id)) {
            $field = 'id';
        } else {
            $field = 'name';
        }

        return $model::where($field, '=', $id);
    }
}
