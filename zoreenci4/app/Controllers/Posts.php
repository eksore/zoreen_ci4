<?php namespace App\Controllers;

use App\Models\CustomModel;
class Posts extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->all();
        echo '<pre>';
        print_r($result);
        echo '<pre>';
    }

    public function where()
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->where();
        print_r($result);
        echo '<pre>';
    }
    public function join()
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->join();
        print_r($result);
        echo '<pre>';
    }

    public function like()
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->like();
        print_r($result);
        echo '<pre>';
    }
     public function groupings()
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->groupings();
        print_r($result);
        echo '<pre>';
    }
    public function wherein()
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->wherein();
        print_r($result);
        echo '<pre>';
    }
}
