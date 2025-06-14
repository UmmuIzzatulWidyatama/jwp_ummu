<?= $this->include('layout/header') ?>

<div class="mb-4">
    <h2 class="mb-3"><?= esc($title) ?></h2>

    <!-- Form Tambah Task -->
    <form action="<?= base_url('tasks/add') ?>" method="post" class="d-flex gap-2">
        <?= csrf_field() ?>
        <input type="text" name="title" class="form-control" placeholder="Masukkan tugas..." required>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

<!-- Tabel Task -->
<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th style="width: 50px;"></th>
            <th>Task</th>
            <th>Status</th>
            <th style="width: 100px;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($tasks)): ?>
            <?php foreach ($tasks as $todo): ?>
                <tr>
                    <td class="text-center">
                        <form action="<?= base_url('tasks/toggle/' . $todo['id']) ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="checkbox"
                                   name="status"
                                   onchange="this.form.submit()"
                                   <?= $todo['status'] === 'Selesai' ? 'checked' : '' ?>>
                        </form>
                    </td>
                    <td style="<?= $todo['status'] === 'Selesai' ? 'text-decoration: line-through;' : '' ?>">
                        <?= esc($todo['title']) ?>
                    </td>
                    <td><?= esc($todo['status']) ?></td>
                    <td>
                        <form action="<?= base_url('tasks/delete/' . $todo['id']) ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus?')">
                            <?= csrf_field() ?>
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">Tidak ada tugas.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->include('layout/footer') ?>
