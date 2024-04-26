<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 8</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        table{
            width: 100%;
            text-align: center;
            border: 1px solid black;
        }
        .judul{
            background-color: black;
            color: white;
            text-align: center;
        }
        tr{
            border: 1px solid black;
        }
        tr th, tr td{
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 3px;
        }
        tr td.nomor{
            text-align: center;
            width: 100px;
        }
        tr td.prodi{
            width: 200px;
        }
        .smes{
            text-align: center;
        }
    </style>
</head>

<body>
    <table>
        <tr style="background-color: black; color:white;" class="judul">
            <th>No</th>
            <!-- <th>Konsentrasi</th> -->
            <th>Program Studi</th>
            <th>Visi</th>
        </tr>
        <tr>
            <?php
                include "tugas8.php";
                $query = mysqli_query($koneksi,"Select * From prodi");
                while ($data = mysqli_fetch_array($query)){
            ?>
            <td class="nomor"><?php echo $data['id'];?></td>
            <td class="prodi"><?php echo $data['nama_prodi'];?></td>
            <td><?php echo $data['visi'];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>