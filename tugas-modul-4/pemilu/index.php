<html>

<head>

</head>

<body>
    <form method="post">
        <select name="pilihan">
            <option value="1">1. Joko</option>
            <option value="2">2. Arif</option>
            <option value="3">3. Lukman</option>
            <option value="4">4. Halim</option>
            <option value="5">5. Pradana</option>
        </select>
        <label>id pemilih</label>
        <input type="number" name="id_pemilih" />
        <button name="kirim" type="submit">kirim</button>
        <form>
            <?php
            require './koneksi.php';
            if (isset($_POST["kirim"])) {
                // menangkap data yang di kirim dari form
                $pilihan = $_POST['pilihan'];
                $id_pemilih = $_POST['id_pemilih'];

                $cek_data_pemilih = mysqli_query($koneksi, "select * from suara where id_pemilih='$id_pemilih'");

                // menghitung jumlah data yang ditemukan
                $cek = mysqli_num_rows($cek_data_pemilih);
                echo $cek;
                if ($cek <= 0) {

                    $data = mysqli_query($koneksi, "INSERT INTO `suara` (`id_suara`, `id_pemilih`, `pilihan`, `waktu`) VALUES ('', '$id_pemilih', '$pilihan', CURRENT_TIME())");

                    if ($data) {
            ?>
                        <script language="javascript">
                            alert("Data Berhasil Ditambah");
                        </script>
                    <?php

                    }
                } else if ($cek >= 0) {
                    ?>
                    <script language="javascript">
                        alert("Maaf Id sudah digunakan ");
                    </script>
            <?php

                }
            }
            ?>
            <h1>Skor Sementara</h1>
            <?php
            $jumlahsuara = $koneksi->query("SELECT calon.nama_calon as nama, count(*) as jumlah from suara inner join calon on suara.pilihan = calon.id GROUP by pilihan");
            // $calon = ["Joko", "Arif", "Lukman"];
            ?>
            <table border="1">
                <tr>
                    <td>Nama Calon</td>
                    <td>Jumlah Suara</td>
                </tr>
                <?php
                while ($row = $jumlahsuara->fetch_array()) {

                ?>
                    <tr>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['jumlah']; ?></td>

                    </tr>
                <?php } ?>
            </table>
</body>

</html>