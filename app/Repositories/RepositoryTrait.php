<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories;

/**
 * 这是一个基础仓储库的 trait。
 *
 * @author shsrain <shsrain@163.com>
 */
trait RepositoryTrait
{
    /**
     * 创建一个新模型。
     *
     * @param array $input
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function create(array $input)
    {
        $model = $this->model;

        return $model::create($input);
    }

    /**
     * 查找现有模型。
     *
     * @param int      $id
     * @param string[] $columns
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id, array $columns = ['*'])
    {
        $model = $this->model;

        return $model::find($id, $columns);
    }

    /**
     * 查找所有模型。
     *
     * @param string[] $columns
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all(array $columns = ['*'])
    {
        $model = $this->model;

        return $model::all($columns);
    }

    /**
     * 得到一个模型列表。
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        $model = $this->model;

        if (property_exists($model, 'order')) {
            return $model::orderBy($model::$order, $model::$sort)->get($model::$index);
        }

        return $model::get($model::$index);
    }

    /**
     * 获得行数。
     *
     * @return int
     */
    public function count()
    {
        $model = $this->model;

        return $model::where('id', '>=', 1)->count();
    }

    /**
     * 注册一个观察者。
     *
     * @param object $observer
     *
     * @return $this
     */
    public function observe($observer)
    {
        $model = $this->model;
        $model::observe($observer);

        return $this;
    }

    /**
     * 返回规则。
     *
     * @param string|string[] $query
     *
     * @return string[]
     */
    public function rules($query = null)
    {
        $model = $this->model;

        // 从模型中获取规则
        if (isset($model::$rules)) {
            $rules = $model::$rules;
        } else {
            $rules = [];
        }

        // 如果没有规则
        if (!is_array($rules) || !$rules) {
            // 返回一个空数组
            return [];
        }

        // 如果查询是空的
        if (!$query) {
            // 返回所有的规则
            return array_filter($rules);
        }

        // 返回相关规则
        return array_filter(array_only($rules, $query));
    }

    /**
     * 验证数据。
     *
     * @param array           $data
     * @param string|string[] $rules
     * @param bool            $custom
     *
     * @return \Illuminate\Validation\Validator
     */
    public function validate(array $data, $rules = null, $custom = false)
    {
        if (!$custom) {
            $rules = $this->rules($rules);
        }

        return $this->validator->make($data, $rules);
    }


    /**
     * 条件查询。
     *
     */
    public function where($a, $b, $c)
    {
        $model = $this->model;

        return $model::where($a, $b, $c);
    }

    /**
     * 关联查询。
     *
     */
    public function with($a)
    {
        $model = $this->model;

        return $model::with($a);
    }

}
