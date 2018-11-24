<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        var_dump(Db::name('teacher')->find());
    }
}
