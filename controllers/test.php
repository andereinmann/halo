<?php namespace App;

class test extends Controller
{

    function index()
    {
        $this->test = get_all("SELECT * FROM test");
    }

    function view()
    {
        $test_id = $this->getId();
        $this->test = get_first("SELECT * FROM test WHERE test_id = '{$test_id}'");
    }

}