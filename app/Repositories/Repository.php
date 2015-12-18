<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Factory;

/**
 * 这是一个抽象仓储类。
 *
 * @author shsrain <shsrain@163.com>
 */
abstract class Repository
{
    use RepositoryTrait;

    /**
     * 提供的模型。
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * 验证工厂实例。
     *
     * @var \Illuminate\Validation\Factory
     */
    protected $validator;

    /**
     * 创建一个新实例。
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param \Illuminate\Validation\Factory      $validator
     *
     * @return void
     */
    public function __construct(Model $model, Factory $validator)
    {
        $this->model = $model;
        $this->validator = $validator;
    }

    /**
     * 返回模型实例。
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * 返回验证工厂实例。
     *
     * @return \Illuminate\Validation\Factory
     */
    public function getValidator()
    {
        return $this->validator;
    }
}
