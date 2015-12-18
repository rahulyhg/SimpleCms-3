<?php

/*
 * 这个文件是 SimpleCms 的一部分。
 *
 * (c) shsrain <shsrain@163.com>
 *
 * 对于全版权和许可信息，请查看分发此源代码的许可文件。
 */

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event as LaravelEvent;

/**
 * 这是一个基础模型的 trait。
 *
 * @author shsrain <shsrain@163.com>
 */
trait ModelTrait
{
    /**
     * 创建一个新模型。
     *
     * @param array $input
     *
     * @throws \Exception
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    public static function create(array $input = [])
    {
        DB::beginTransaction();

        try {
            LaravelEvent::fire(static::$name.'.creating');
            static::beforeCreate($input);
            $return = parent::create($input);
            static::afterCreate($input, $return);
            LaravelEvent::fire(static::$name.'.created');

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return $return;
    }

    /**
     * 在创建新模型之前。
     *
     * @param array $input
     *
     * @return void
     */
    public static function beforeCreate(array $input)
    {
        // 可以通过扩展类被覆盖
    }

    /**
     * 创建一个新模型后。
     *
     * @param array                               $input
     * @param \Illuminate\Database\Eloquent\Model $return
     *
     * @return void
     */
    public static function afterCreate(array $input, Model $return)
    {
        // 可以通过扩展类被覆盖
    }

    /**
     * Update an existing model.
     *
     * @param array $input
     *
     * @throws \Exception
     *
     * @return bool|int
     */
    public function update(array $input = [])
    {
        DB::beginTransaction();

        try {
            LaravelEvent::fire(static::$name.'.updating', $this);
            $this->beforeUpdate($input);
            $return = parent::update($input);
            $this->afterUpdate($input, $return);
            LaravelEvent::fire(static::$name.'.updated', $this);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return $return;
    }

    /**
     * 在更新现有的新模型之前。
     *
     * @param array $input
     *
     * @return void
     */
    public function beforeUpdate(array $input)
    {
        // 可以通过扩展类被覆盖
    }

    /**
     * 在更新一个现有的模型之后。
     *
     * @param array    $input
     * @param bool|int $return
     *
     * @return void
     */
    public function afterUpdate(array $input, $return)
    {
        // 可以通过扩展类被覆盖
    }

    /**
     * 删除现有模型。
     *
     * @throws \Exception
     *
     * @return bool
     */
    public function delete()
    {
        DB::beginTransaction();

        try {
            LaravelEvent::fire(static::$name.'.deleting', $this);
            $this->beforeDelete();
            $return = parent::delete();
            $this->afterDelete($return);
            LaravelEvent::fire(static::$name.'.deleted', $this);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return $return;
    }

    /**
     * 删除现有模型之前。
     *
     * @return void
     */
    public function beforeDelete()
    {
        // 可以通过扩展类被覆盖
    }

    /**
     * 删除现有模型后。
     *
     * @param bool $return
     *
     * @return void
     */
    public function afterDelete($return)
    {
        // 可以通过扩展类被覆盖
    }
}
