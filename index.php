<?php
$db = new PDO("mysql:host=localhost;dbname=sekolah",'root','');
$query = $db->query('select*from siswa');
?>

<a href="insert_form.php">tambah</a>

<?php
while ($data = $query->fetch()) :?>
    <p>
        <a href="edit.php?id=<?= $data['id']; ?> "><?= $data['nama']?>
        </a>
        <a href="delete.php?id= <?= $data['id']; ?>" style="color:white;background:blue;padding:2px;border-radius:3px">
         hapus
    </a>
   </p>

<?php endwhile ?>