<h1>Berita</h1>
<?php if (!isset($_GET['view'])){ ?>

<a class="btn btn-success mb-3" href="?page=berita&view=insert">Buat Berita</a>
<a class="btn btn-primary mb-3" href="print-berita.php">Print Berita</a>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 0;
    $hasil = mysqli_query($db, "SELECT * FROM news");

    while ($row = mysqli_fetch_object($hasil)) {
        $no++;
    ?>
        <tr>
            <td><?= $no ?></td>
            <td><?=
                $limitedtitle = substr($row->title, 0, 70) . '...';
                ?></td>
            <td><?= $row->category_id ?></td>
            <td><?= $row->publish_at ?></td>
            <td><a class="btn btn-warning" href="?page=berita&view=update&id=<?= $row->id ?>">Update</a>
                <a class="btn btn-danger" href="berita-proses.php?aksi=delete&id=<?= $row->id ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>

</table>
<?php } else if($_GET['view']=='insert'){ ?>

<form method="post" action="berita-proses.php?aksi=insert" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul Berita">
    </div>
    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select name="kategori" class="form-select">
            <option value="1">Pendidikan</option>
            <option value="2">Olahraga</option>
            <option value="3">Politik</option>
            <option value="4">Alam</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Isi</label>
        <textarea name="isi" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Publish</label>
        <input type="date" name="publish" class="form-control">
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Simpan Berita</button>

</form>

<?php } else if($_GET['view']=='update'){ ?>
<?php
    $hasil = mysqli_query($db, "SELECT * FROM news WHERE id='$_GET[id]'");
    while ($row = mysqli_fetch_object($hasil)){
?>
<form method="post" action="berita-proses.php?aksi=update&id=<?= $_GET['id'] ?> " enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" name="judul" value="<?= $row->title ?>" class="form-control" placeholder="Judul Berita">
    </div>
    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select name="kategori" class="form-select">
            <option value="1">Pendidikan</option>
            <option value="2">Olahraga</option>
            <option value="3">Politik</option>
            <option value="4">Alam</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Isi</label>
        <textarea name="isi" value="" class="form-control"><?= $row->content ?></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Tanggal Publish</label>
        <input type="date" name="publish" class="form-control">
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Simpan Berita</button>

</form>
<?php } } ?>

