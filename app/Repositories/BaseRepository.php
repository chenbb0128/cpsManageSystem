<?php

namespace App\Repositories;

class BaseRepository
{
    protected $model;

    private static $instance;

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * 获取当前model
     * @return mixed
     */
    public function model()
    {
        return $this->model;
    }

    /**
     * 获取全部数据
     * @return mixed
     */
    public function getAll()
    {
        return $this->model()->all();
    }

    /**
     * 保存数据
     * @param $data
     * @return mixed
     */
    public function save($data)
    {
        return $this->model->create($data);
    }
}
