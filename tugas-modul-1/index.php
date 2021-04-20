<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Modul 1</title>
</head>

<body>
    <h1>Daftar Nama Anggota Keluarga</h1>
    <?php
    $keluarga["bapak"] = "Sugeng Hariyanto";
    $keluarga["ibu"] = "Lukita Sari";
    $keluarga["adik"] = "Athiya Ghisa Virganita";
    $keluarga["saya"] = "Muhammad Ijlal Prayoga";
    function hitung_jumlah_huruf($kata)
    {
        $kata_split = strlen($kata) - 1;
        $jml_huruf = 0;
        for ($i = 0; $i <= $kata_split; $i++) {
            if ($kata[$i] == " ") {
                $jml_huruf;
            } else {
                $jml_huruf++;
            }
        }

        echo $jml_huruf;
    }
    function hitung_vokal_konsonan($kata)
    {
        $jml_kata = strlen($kata) - 1;
        $huruf_vokal = ['a', 'i', 'u', 'e', 'o', 'A', 'I', 'U', 'E', 'O'];
        $jumlah_vokal = 0;
        $jumlah_konsonan = 0;

        for ($i = 0; $i <= $jml_kata; $i++) {
            if (in_array($kata[$i], $huruf_vokal)) {
                $jumlah_vokal++;
            } else {
                // $jumlah_konsonan++;
                if ($kata[$i] == " ") {
                    $jumlah_konsonan;
                } else {
                    $jumlah_konsonan++;
                }
            }
        }

        echo "<li>Jumlah Konsonan :" . $jumlah_konsonan . " </li>";
        echo "<li>Jumlah Vokal :" .  $jumlah_vokal . " </li>";
    }
    ?>
    <ol>
        <li>Identitas Ayah
            <ul>
                <li>Nama : <?= $keluarga['bapak']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['bapak']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['bapak']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['bapak']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["bapak"]) ?>
            </ul>
        </li>
        <li>Identitas Ibu
            <ul>
                <li>Nama : <?= $keluarga['ibu']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['ibu']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['ibu']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['ibu']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["ibu"]) ?>
            </ul>
        </li>
        <li>Identitas Adik
            <ul>
                <li>Nama : <?= $keluarga['adik']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['adik']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['adik']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['adik']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["adik"]) ?>
            </ul>
        </li>
        <li>Identitas Saya
            <ul>
                <li>Nama : <?= $keluarga['saya']; ?></li>
                <li>Jumlah Kata : <?= str_word_count($keluarga['saya']); ?></li>
                <li>Jumlah Huruf : <?= hitung_jumlah_huruf($keluarga['saya']); ?></li>
                <li>Kebalikan Nama : <?= strrev($keluarga['saya']); ?></li>
                <?php hitung_vokal_konsonan($keluarga["saya"]) ?>
            </ul>
        </li>
    </ol>
</body>

</html>