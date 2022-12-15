<?php
$mahasiswa = [
    [
        'no' => '1',
        'nama' => 'Anggia Cantik ',
        'nim'  => '20200040158',
        'jurusan' => 'Teknik Informatika',
        'email' => 'anggia.wulan_ti20@nusaputra.ac.id',
        'nilai' => 100
    ],
    [
        'no' => '2',
        'nama' => 'Diana Maulida ',
        'nim'  => '20200040100',
        'jurusan' => 'Teknik Informatika',
        'email' => 'diana.maullla_ti20@nusaputra.ac.id',
        'nilai' => 80
    ],
    [
        'no' => '3',
        'nama' => 'yulpita tiana ',
        'nim'  => '20200040159',
        'jurusan' => 'Teknik Informatika',
        'email' => 'yulpita_ti20@nusaputra.ac.id',
        'nilai' => 20
    ],
    [
        'no' => '4',
        'nama' => 'Vita Yundriana',
        'nim'  => '20200040121',
        'jurusan' => 'Teknik Informatika',
        'email' => 'vita.yundri_ti20@nusaputra.ac.id',
        'nilai' => 30
    ],
];?>
<table border="1">
<thead>
<tr><th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Email</th><th>Nilai</th><th>Status</th></tr>
</thead>
<tbody>
<?php foreach ($mahasiswa as $data):?>
    <tr>
        <td><?=$data["no"]?></td>
        <td><?php echo $data["nama"]?></td>
        <td><?php echo $data["nim"]?></td>
        <td><?php echo $data["jurusan"]?></td>
        <td><?php echo $data["email"]?></td>
        <td><?php echo $data["nilai"]?></td>
        <td><?php 
        $nilai = $data["nilai"];
        
        if($nilai > 70 ){
            echo 'Lulus';
        }else{
            echo 'Tidak Lulus';
        }

         ?></td>
    </tr>
<?php endforeach ?>
</tbody>
</table>