<?php
include '../koneksi.php';

if($_GET['aksi']=='delete'){
    $hasil = mysqli_query($db, "DELETE FROM news WHERE id='".$_GET['id']."'"); 
    header('location:dashboard.php?page=berita');
} else if($_GET['aksi']=='insert'){
    $nama = $_FILES['foto']['name'];
    $simpanfoto ="../img/".date('h-i-s').$nama;
    move_uploaded_file ($_FILES["foto"]["tmp_name"],$simpanfoto);

    $hasil = mysqli_query($db, "INSERT INTO news 
    (title,category_id,publish_at,types,author_id,content,photo,views,statuses,created_at,update_at,created_by,update_by) VALUES ('$_POST[judul]','$_POST[kategori]','$_POST[publish]','1','1','$_POST[isi]','$simpanfoto','1','1','1','1','1','1') ");
    header('location:dashboard.php?page=berita');

} else if($_GET['aksi']=='update'){
    $nama = $_FILES['foto']['name'];
    $simpanfoto ="../img/".date('h-i-s').$nama;
    move_uploaded_file ($_FILES["foto"]["tmp_name"],$simpanfoto);

    $hasil = mysqli_query($db, "UPDATE news SET 
    title = '$_POST[judul]', content = '$_POST[isi]', photo = '$simpanfoto', publish_at = '$_POST[publish]' WHERE `id` = '$_GET[id]'");
    header('location:dashboard.php?page=berita');

}
?>