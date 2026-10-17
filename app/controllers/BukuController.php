<?php
class BukuController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    
    public function index() {
        $books = $this->model->getAll();
        require __DIR__ . '/../views/buku/index.php';
    }

    
    public function create() {
        require __DIR__ . '/../views/buku/create.php';
    }

    
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validasi backend: pastikan field tidak kosong
            if (empty($_POST['isbn']) || empty($_POST['judul']) || empty($_POST['penulis']) || empty($_POST['penerbit']) || empty($_POST['tahun_terbit'])) {
                exit('Semua field wajib diisi!');
            }

            $data = [
                'isbn'         => $_POST['isbn'],
                'judul'        => $_POST['judul'],
                'penulis'      => $_POST['penulis'],
                'penerbit'     => $_POST['penerbit'],
                'tahun_terbit' => $_POST['tahun_terbit']
            ];

            $this->model->create($data);
            header('Location: index.php?page=buku');
            exit;
        }
    }

    
    public function edit() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: index.php?page=buku');
            exit;
        }
        $buku = $this->model->getById($id);
        require __DIR__ . '/../views/buku/edit.php';
    }

   
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'] ?? null;
            if (!$id) {
                header('Location: index.php?page=buku');
                exit;
            }

            if (empty($_POST['isbn']) || empty($_POST['judul']) || empty($_POST['penulis']) || empty($_POST['penerbit']) || empty($_POST['tahun_terbit'])) {
                exit('Semua field wajib diisi!');
            }

            $data = [
                'isbn'         => $_POST['isbn'],
                'judul'        => $_POST['judul'],
                'penulis'      => $_POST['penulis'],
                'penerbit'     => $_POST['penerbit'],
                'tahun_terbit' => $_POST['tahun_terbit']
            ];

            $this->model->update($id, $data);
            header('Location: index.php?page=buku');
            exit;
        }
    }

   
    public function delete() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->model->delete($id);
        }
        header('Location: index.php?page=buku');
        exit;
    }
}