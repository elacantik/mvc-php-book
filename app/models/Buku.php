<?php
class Buku {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }


    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM buku ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM buku WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

   
    public function create($data) {
        $query = "INSERT INTO buku (isbn, judul, penulis, penerbit, tahun_terbit) 
                  VALUES (:isbn, :judul, :penulis, :penerbit, :tahun_terbit)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([
            ':isbn'         => $data['isbn'],
            ':judul'        => $data['judul'],
            ':penulis'      => $data['penulis'],
            ':penerbit'     => $data['penerbit'],
            ':tahun_terbit' => $data['tahun_terbit']
        ]);
    }

    
    public function update($id, $data) {
        $query = "UPDATE buku SET 
                    isbn = :isbn, 
                    judul = :judul, 
                    penulis = :penulis, 
                    penerbit = :penerbit, 
                    tahun_terbit = :tahun_terbit 
                  WHERE id = :id";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([
            ':id'           => $id,
            ':isbn'         => $data['isbn'],
            ':judul'        => $data['judul'],
            ':penulis'      => $data['penulis'],
            ':penerbit'     => $data['penerbit'],
            ':tahun_terbit' => $data['tahun_terbit']
        ]);
    }

    
    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM buku WHERE id = :id");
        return $stmt->execute([':id' => $id]);
    }
}