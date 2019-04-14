<?php namespace App;

class contact extends Controller
{

    function index()
    {
        $this->contact = get_all("SELECT * FROM contact");
    }

    function view()
    {
        $contact_id = $this->getId();
        $this->contact = get_first("SELECT * FROM contact WHERE contact_id = '{$contact_id}'");
    }

}