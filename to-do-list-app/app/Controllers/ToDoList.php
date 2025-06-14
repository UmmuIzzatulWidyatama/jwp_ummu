<?php

namespace App\Controllers;

class ToDoList extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Beranda To-Do List'
        ];

        return view('home', $data);
    }
}
