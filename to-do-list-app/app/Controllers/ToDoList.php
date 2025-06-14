<?php

namespace App\Controllers;
use App\Models\TodoModel;

class ToDoList extends BaseController
{
    //Function index digunakan untuk menampilkan list task
    public function index()
    {
        $model = new TodoModel();
        $data = [
            'title' => 'Task',
            'tasks' => $model->findAll()
        ];
        return view('home', $data);
    }

    /**
     * Toggle status tugas berdasarkan ID.
     * Jika status saat ini "Selesai", ubah jadi "Belum".
     * Jika status saat ini "Belum", ubah jadi "Selesai".
    */
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

    /**
     * Menghapus task berdasarkan ID.
     * Cek dulu apakah task dengan ID tersebut ada,
     * jika ada maka hapus dari database.
    */
    public function delete($id)
    {
        $model = new \App\Models\TodoModel();

        if ($model->find($id)) {
            $model->delete($id);
        }

        return redirect()->back();
    }

    /**
     * Menambahkan task baru ke dalam database.
     * Ambil input 'title' dari form POST.
     * Jika input tidak kosong, simpan sebagai task baru dengan status "Belum".
    */
    public function add()
    {
        $title = $this->request->getPost('title');

        if (!empty(trim($title))) {
            $model = new \App\Models\TodoModel();
            $model->insert([
                'title'  => $title,
                'status' => 'Belum'
            ]);
        }

        return redirect()->back();
    }

}
