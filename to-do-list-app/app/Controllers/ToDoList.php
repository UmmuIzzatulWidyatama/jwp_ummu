<?php

namespace App\Controllers;
use App\Models\TodoModel;

class ToDoList extends BaseController
{
    public function index()
    {
        $model = new TodoModel();
        $data = [
            'title' => 'Task',
            'tasks' => $model->findAll()
        ];
        return view('home', $data);
    }

    public function toggleStatus($id)
    {
        $model = new \App\Models\TodoModel();
        $task = $model->find($id);

        if ($task) {
            $newStatus = $task['status'] === 'Selesai' ? 'Belum' : 'Selesai';
            $model->update($id, ['status' => $newStatus]);
        }

        return redirect()->back();
    }

}
