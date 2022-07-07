<?php
    class Guru extends Database{

        // menampilkan data dosen ke index.php
        public function index(){

            $dataguru = mysqli_query($this->koneksi, "select * from guru");

            return $dataguru;
        }

        public function create($nip,$nama,$alamat)
        {
            mysqli_query($this->koneksi,
                        "insert into guru values (null,'$nip','$nama','$alamat')"
                    );

        }

        // memilih data dosen yang akan diubah
        public function edit($id)
        {
            $dataguru = mysqli_query($this->koneksi, 
                        "select * from guru where id='$id'"
                    );

            return $dataguru;
        }
        // merubah data dosen
        public function update($id, $nip, $nama,$alamat)
        {
            mysqli_query(
                $this->koneksi,
            "update guru set nip='$nip', nama='$nama',alamat='$alamat' where id='$id'"
            );
        }

        // menampilkan data dosen berdasarkan id
        public function show($id)
        {
            $dataguru = mysqli_query($this->koneksi, 
                        "select * from guru where id='$id'"
                    );

            return $dataguru;
        }

        // menghapus data dosen
        public function delete($id)
        {
            mysqli_query($this->koneksi, "delete from guru where id='$id'"
                    );

        }
    }
?>