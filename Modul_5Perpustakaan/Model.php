<?php
require 'Koneksi.php';

function getAllMember() {
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT * FROM member");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMemberById($id) {
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT * FROM member WHERE id_member=$id");
    return mysqli_fetch_assoc($result);
}

function insertMember($nama, $nomor, $alamat, $telepon, $tgl_daftar, $tgl_bayar) {
    global $koneksi;
    $sql = "INSERT INTO member (nama_member, nomor_member, alamat, nomor_telepon, tgl_mendaftar, tgl_terakhir_bayar) 
            VALUES ('$nama', '$nomor', '$alamat', '$telepon', '$tgl_daftar', '$tgl_bayar')";
    return mysqli_query($koneksi, $sql);
}

function updateMember($id, $nama, $nomor, $alamat, $telepon, $tgl_daftar, $tgl_bayar) {
    global $koneksi;
    $sql = "UPDATE member SET nama_member='$nama', nomor_member='$nomor', 
            alamat='$alamat', nomor_telepon='$telepon',
            tgl_mendaftar='$tgl_daftar', tgl_terakhir_bayar='$tgl_bayar' 
            WHERE id_member=$id";
    return mysqli_query($koneksi, $sql);
}

function deleteMember($id) {
    global $koneksi;
    return mysqli_query($koneksi, "DELETE FROM member WHERE id_member=$id");
}

function getAllBuku() {
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT * FROM buku");
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getBukuById($id) {
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku=$id");
    return mysqli_fetch_assoc($result);
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    global $koneksi;
    $sql = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) 
            VALUES ('$judul', '$penulis', '$penerbit', '$tahun')";
    return mysqli_query($koneksi, $sql);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    global $koneksi;
    $sql = "UPDATE buku SET judul_buku='$judul', penulis='$penulis', 
            penerbit='$penerbit', tahun_terbit='$tahun' WHERE id_buku=$id";
    return mysqli_query($koneksi, $sql);
}

function deleteBuku($id) {
    global $koneksi;
    return mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");
}

function getAllPeminjaman() {
    global $koneksi;
    $sql = "SELECT p.*, m.nama_member, b.judul_buku 
            FROM peminjaman p
            JOIN member m ON p.id_member = m.id_member
            JOIN buku b ON p.id_buku = b.id_buku";
    $result = mysqli_query($koneksi, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getPeminjamanById($id) {
    global $koneksi;
    $result = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE id_peminjaman=$id");
    return mysqli_fetch_assoc($result);
}

function insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $koneksi;
    $sql = "INSERT INTO peminjaman (id_member, id_buku, tgl_pinjam, tgl_kembali) 
            VALUES ('$id_member', '$id_buku', '$tgl_pinjam', '$tgl_kembali')";
    return mysqli_query($koneksi, $sql);
}

function updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali) {
    global $koneksi;
    $sql = "UPDATE peminjaman SET id_member='$id_member', id_buku='$id_buku', 
            tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali' 
            WHERE id_peminjaman=$id";
    return mysqli_query($koneksi, $sql);
}

function deletePeminjaman($id) {
    global $koneksi;
    return mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjaman=$id");
}
?>