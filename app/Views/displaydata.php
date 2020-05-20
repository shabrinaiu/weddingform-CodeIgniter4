<!DOCTYPE html>
<html>
<head>
    <title>FormPernikahan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
</head>

<body>

    <div class="wrappersection">
        <h6>Data Pengisian Form Pernikahan</h6>
        <h4>Informasi Pernikahan</h4>
        <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Status Kewarganegaraan</th>
                    <th scope="col">Tanggal Pernikahan</th>
                    <th scope="col">Hari Pernikahan</th>
                    <th scope="col">Lokasi Pernikahan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($weddingsInformation as $row):?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['kewarganegaraan'] ?></td>
                    <td><?= $row['tanggal_menikah'] ?></td>
                    <td><?= $row['hari_menikah'] ?></td>
                    <td><?= $row['lokasi_menikah'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        <!-- ------------------------------------------------------ -->
        <h4>Identitas Mempelai Pria</h4>
        <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Keluarga</th>
                    <th scope="col">Nama Kecil</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status Kawin</th>
                    <th scope="col">Nama Mantan S/I</th>
                    <th scope="col">Nama Anak</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($suamiInformation as $row):?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['nama_keluarga_suami'] ?></td>
                    <td><?= $row['nama_kecil_suami'] ?></td>
                    <td><?= $row['ttl_suami'] ?></td>
                    <td><?= $row['agama_suami'] ?></td>
                    <td><?= $row['pekerjaan_suami'] ?></td>
                    <td><?= $row['alamat_suami'] ?></td>
                    <td><?= $row['status_kawin_suami'] ?></td>
                    <td><?= $row['mantan_suami'] ?></td>
                    <td><?= $row['anak_suami'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        <!-- ------------------------------------------------------ -->
        <h4>Identitas Mempelai Wanita</h4>
        <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Keluarga</th>
                    <th scope="col">Nama Kecil</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status Kawin</th>
                    <th scope="col">Nama Mantan S/I</th>
                    <th scope="col">Nama Anak</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($istriInformation as $row):?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['nama_keluarga_istri'] ?></td>
                    <td><?= $row['nama_kecil_istri'] ?></td>
                    <td><?= $row['ttl_istri'] ?></td>
                    <td><?= $row['agama_istri'] ?></td>
                    <td><?= $row['pekerjaan_istri'] ?></td>
                    <td><?= $row['alamat_istri'] ?></td>
                    <td><?= $row['status_kawin_istri'] ?></td>
                    <td><?= $row['mantan_istri'] ?></td>
                    <td><?= $row['anak_istri'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        <!-- ------------------------------------------------------ -->
        <h4>Identitas Bapak Mempelai Pria</h4>
        <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bapakSuamiInformation as $row):?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['nama_bapak_suami'] ?></td>
                    <td><?= $row['ttl_bapak_suami'] ?></td>
                    <td><?= $row['agama_bapak_suami'] ?></td>
                    <td><?= $row['pekerjaan_bapak_suami'] ?></td>
                    <td><?= $row['alamat_bapak_suami'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        <!-- ------------------------------------------------------ -->
        <h4>Identitas Ibu Mempelai Pria</h4>
        <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ibuSuamiInformation as $row):?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['nama_ibu_suami'] ?></td>
                    <td><?= $row['ttl_ibu_suami'] ?></td>
                    <td><?= $row['agama_ibu_suami'] ?></td>
                    <td><?= $row['pekerjaan_ibu_suami'] ?></td>
                    <td><?= $row['alamat_ibu_suami'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        <!-- ------------------------------------------------------ -->
        <h4>Identitas Bapak Mempelai Wanita</h4>
        <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bapakIstriInformation as $row):?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['nama_bapak_istri'] ?></td>
                    <td><?= $row['ttl_bapak_istri'] ?></td>
                    <td><?= $row['agama_bapak_istri'] ?></td>
                    <td><?= $row['pekerjaan_bapak_istri'] ?></td>
                    <td><?= $row['alamat_bapak_istri'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        <!-- ------------------------------------------------------ -->
        <h4>Identitas Ibu Mempelai Wanita</h4>
        <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ibuIstriInformation as $row):?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['nama_ibu_istri'] ?></td>
                    <td><?= $row['ttl_ibu_istri'] ?></td>
                    <td><?= $row['agama_ibu_istri'] ?></td>
                    <td><?= $row['pekerjaan_ibu_istri'] ?></td>
                    <td><?= $row['alamat_ibu_istri'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        <!-- ------------------------------------------------------ -->
        <h4>Identitas Saksi1</h4>
        <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($saksi1Information as $row):?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['nama_saksi1'] ?></td>
                    <td><?= $row['ttl_saksi1'] ?></td>
                    <td><?= $row['agama_saksi1'] ?></td>
                    <td><?= $row['pekerjaan_saksi1'] ?></td>
                    <td><?= $row['alamat_saksi1'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
        <!-- ------------------------------------------------------ -->
        <h4>Identitas Saksi2</h4>
        <div class="table-wrapper">
            <table class="fl-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($saksi2Information as $row):?>
                <tr>
                    <th scope="row"><?= $row['id'] ?></th>
                    <td><?= $row['nama_saksi2'] ?></td>
                    <td><?= $row['ttl_saksi2'] ?></td>
                    <td><?= $row['agama_saksi2'] ?></td>
                    <td><?= $row['pekerjaan_saksi2'] ?></td>
                    <td><?= $row['alamat_saksi2'] ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            </table>
        </div>
    </div>

</body>
</html>