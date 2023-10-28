<?php
// variable ps = prepare statmen
class contact_person{
    //member1 variabel
	private $koneksi;
	//member2 konstruktor
	public function __construct(){
		global $dbh; //memanggil variabel di file lain
		$this->koneksi = $dbh;
	}
    //member3 fungsionalitas
    public function index(){  //index
        //$sql = "SELECT * FROM produk";
        $sql = "SELECT person.*, agama.nama AS agama
                FROM person INNER JOIN agama
                ON agama.id = person.idagama ORDER BY person.id DESC";
        //$resault = $this->koneksi->query($sql);
        //PDO prepare statement
		$ps = $this->koneksi->prepare($sql);
		$ps->execute();
		$resault = $ps->fetchAll();
		return $resault;
    }

    public function createPerson($data){ //simpan
        $sql = "INSERT INTO person (nama,gender,tempat_lahir,tanggal_lahir,alamat,hp,email,kampus,sosmed,idagama,foto)
                VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        //PDO prepare statement
		$ps = $this->koneksi->prepare($sql);
		$ps->execute($data);
    }

    public function readPerson(){  //index
        //$sql = "SELECT * FROM produk";
        $sql = "SELECT person.*, agama.nama AS agama
                FROM person INNER JOIN agama
                ON agama.id = person.idagama ORDER BY person.id = ?";
		$ps = $this->koneksi->prepare($sql);
		$ps->execute();
		$resault = $ps->fetchAll();
		return $resault;
    }

    public function updatePerson($data){
        $sql = "UPDATE person SET nama=?,gender=?,tempat_lahir=?,tanggal_lahir=?,alamat=?,hp=?,email=?,kampus=?,sosmed=?,idagama=?,foto=?
                WHERE id = ?";
        //PDO prepare statement
		$ps = $this->koneksi->prepare($sql);
		$ps->execute($data);
    }

    public function deletePerson($id){
        $sql = "DELETE FROM person WHERE id = ?";
        //PDO prepare statement
		$ps = $this->koneksi->prepare($sql);
		$ps->execute([$id]);
    }

}