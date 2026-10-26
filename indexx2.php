<?php include 'includes/visitor/meta.php'; ?>
<?php include 'includes/visitor/header.php'; ?>

<section>

    <?php
    $nama = "Mahasiswa S1";
    $jurusan = "Sistem Informasi";
    $hobi = ["Membaca", "Desain", "Coding"];
    ?>

    <p>
        Nama: <?php echo $nama; ?><br>
        Jurusan: <?php echo $jurusan; ?><br>
        Hobi:
    </p>

    <ul>
        <?php foreach ($hobi as $key => $value): ?>
            <li><?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>

</section>

<?php include 'includes/visitor/footer.php'; ?>