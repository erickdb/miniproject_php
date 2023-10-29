<?php
include_once '../includes/config.php';
include_once 'models/person.php';
//1. tangkap request form (dari name2 element form)
$nama = $_POST['nama']; 
$gender = $_POST['gender']; 
$tempat_lahir = $_POST['tempat_lahir']; 
$tanggal_lahir = $_POST['tanggal_lahir']; 
$alamat = $_POST['alamat']; 
$hp = $_POST['hp']; 
$email = $_POST['email']; 
$kampus = $_POST['kampus']; 
$sosmed = $_POST['sosmed']; 
$idagama = $_POST['idagama']; 
$foto = $_POST['foto']; 
$tombol = $_POST['proses']; // untuk keperluan eksekusi sebuah tombol di form
//2. simpan ke sebuah array
$data = [
    $nama, // ? 1
    $gender, // ? 2
    $tempat_lahir, // ? 3
    $tanggal_lahir, // ? 4
    $alamat, // ? 5
    $hp, // ? 6
    $email, // ? 7
    $kampus, // ? 8
    $sosmed, // ? 9
    $idagama, // ? 10
    $foto, // ? 11
];
//3. eksekusi tombol
$obj_person = new contact_person();
switch ($tombol) {
    case 'simpan': $obj_person->createPerson($data); break;
    case 'ubah': 
        $data[] = $_POST['idx']; ; // tambah array ? ke-8 dari hidden field idx
        $obj_person->updatePerson($data); break;
    case 'hapus': $obj_person->deletePerson($_POST['id']); break; //$_POST['id'] dari hidden field di tombol hapus

    default: header('location:index.php?hal=contact_person'); break;
}
//4. setelah selasai arahkan ke hal person
header('location:index.php?hal=contact_person');