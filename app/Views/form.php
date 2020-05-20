<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Pernikahan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="<?php echo base_url('fonts/material-design-iconic-font/css/material-design-iconic-font.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('vendor/date-picker/css/datepicker.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('css/style.css') ?>" rel="stylesheet">
</head>
<body>
    
    <div class="wrapper">
        <form action="<?php echo site_url('form/insertInformation'); ?>" method="post" id="wizard">
            <!-- ---------- SECTION ---------- -->
            <h4></h4>
            <section>
                <h3>Detail Pelaksanaan Pernikahan</h3>
                <hr>

                <div class="form-row">
                    <div class="form-col">
                        <label for="hari_menikah">Pada Hari</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar-note"></i>
                            <input type="text" name="hari_menikah">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="tanggal_menikah">Tanggal</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar"></i>
                            <input type="date" name="tanggal_menikah" class="datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="lokasi_menikah">Lokasi</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-pin-drop"></i>
                            <input type="text" name="lokasi_menikah">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="kewarganegaraan">Status Kewarganegaraan</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-flag"></i>
                            <select name="kewarganegaraan">
                                <option value="indonesia" class="option">Indonesia</option>
                                <option value="asing" class="option">Asing</option>
                                <option value="tidak memiliki" class="option">Tidak Memiliki</option>
                            </select>
                        </div>
                    </div>
                </div>

            </section>

            <!-- ---------- SECTION ---------- -->
            <h4></h4>
            <section>
                <h3>Identitas Mempelai Pria</h3>
                <hr>

                <div class="form-row">
                    <div class="form-col">
                        <label for="nama_keluarga_suami">Nama Keluarga</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text"  name="nama_keluarga_suami">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="nama_kecil_suami">Nama Kecil</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account-o"></i>
                            <input type="text"  name="nama_kecil_suami">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="ttl_suami">Tempat Tanggal Lahir</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar"></i>
                            <input name="ttl_suami" type="date" class="datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="agama_suami">Agama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-face"></i>
                            <select name="agama_suami">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select><br>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="pekerjaan_suami">Pekerjaan</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-case"></i>
                            <input type="text"  name="pekerjaan_suami">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="alamat_suami">Alamat</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-pin"></i>
                            <input type="text"  name="alamat_suami">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="status_kawin_suami">Sudah / Belum Pernah Menikah</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-male-female"></i>
                            <select name="status_kawin_suami">
                                <option value="sudah" class="option">Sudah</option>
                                <option value="belum" class="option">Belum</option>
                            </select>
                            <i class="zmdi zmdi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="mantan_suami">Nama Istri terdahulu</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-female"></i>
                            <input type="text"  name="mantan_suami">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="anak_suami">Nama Anak terdahulu</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-mood"></i>
                            <input type="text"  name="anak_suami">
                        </div>
                    </div>
                </div>

            </section>

            <!-- ---------- SECTION ---------- -->
            <h4></h4>
            <section>
                <h3>Identitas Mempelai Wanita</h3>
                <hr>

                <div class="form-row">
                    <div class="form-col">
                        <label for="nama_keluarga_istri">Nama Keluarga</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text"  name="nama_keluarga_istri">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="nama_kecil_istri">Nama Kecil</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account-o"></i>
                            <input type="text"  name="nama_kecil_istri">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="ttl_istri">Tempat Tanggal Lahir</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar"></i>
                            <input name="ttl_istri" type="date" class="datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="agama_istri">Agama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-face"></i>
                            <select name="agama_istri">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select><br>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="pekerjaan_istri">Pekerjaan</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-case"></i>
                            <input type="text"  name="pekerjaan_istri">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="alamat_istri">Alamat</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-pin"></i>
                            <input type="text"  name="alamat_istri">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="status_kawin_istri">Sudah / Belum Pernah Menikah</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-male-female"></i>
                            <select name="status_kawin_istri">
                                <option value="sudah" class="option">Sudah</option>
                                <option value="belum" class="option">Belum</option>
                            </select>
                            <i class="zmdi zmdi-chevron-down"></i>
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="mantan_istri">Nama Suami terdahulu</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-male-alt"></i>
                            <input type="text"  name="mantan_istri">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="anak_istri">Nama Anak terdahulu</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-mood"></i>
                            <input type="text"  name="anak_istri">
                        </div>
                    </div>
                </div>
            </section>

            <!-- ---------- SECTION ---------- -->
            <h4></h4>
            <section>
                <h3>Identitas Orang Tua Mempelai Pria</h3>
                <hr>

                <div class="form-row">
                    <div class="form-col">
                        <h5>Identitas Bapak</h5>
                    </div>
                    <div class="form-col">
                        <h5>Identitas Ibu</h5>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <label for="nama_bapak_suami">Nama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text"  name="nama_bapak_suami">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="nama_ibu_suami">Nama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text"  name="nama_ibu_suami">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="ttl_bapak_suami">Tempat Tanggal Lahir</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar"></i>
                            <input name="ttl_bapak_suami" type="date" class="datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="ttl_ibu_suami">Tempat Tanggal Lahir</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar"></i>
                            <input name="ttl_ibu_suami" type="date" class="datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="agama_bapak_suami">Agama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-face"></i>
                            <select name="agama_bapak_suami">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select><br>
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="agama_ibu_suami">Agama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-face"></i>
                            <select name="agama_ibu_suami">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select><br>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="pekerjaan_bapak_suami">Pekerjaan</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-case"></i>
                            <input type="text"  name="pekerjaan_bapak_suami">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="pekerjaan_ibu_suami">Pekerjaan</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-case"></i>
                            <input type="text"  name="pekerjaan_ibu_suami">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="alamat_bapak_suami">Alamat</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-pin"></i>
                            <input type="text"  name="alamat_bapak_suami">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="alamat_ibu_suami">Alamat</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-pin"></i>
                            <input type="text"  name="alamat_ibu_suami">
                        </div>
                    </div>
                </div>

            </section>
            
            <!-- ---------- SECTION ---------- -->
            <h4></h4>
            <section>
                <h3>Identitas Orang Tua Mempelai Wanita</h3>
                <hr>

                <div class="form-row">
                    <div class="form-col">
                        <h5>Identitas Bapak</h5>
                    </div>
                    <div class="form-col">
                        <h5>Identitas Ibu</h5>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <label for="nama_bapak_istri">Nama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text"  name="nama_bapak_istri">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="nama_ibu_istri">Nama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text"  name="nama_ibu_istri">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="ttl_bapak_istri">Tempat Tanggal Lahir</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar"></i>
                            <input name="ttl_bapak_istri" type="date" class="datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="ttl_ibu_istri">Tempat Tanggal Lahir</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar"></i>
                            <input name="ttl_ibu_istri" type="date" class="datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="agama_bapak_istri">Agama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-face"></i>
                            <select name="agama_bapak_istri">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select><br>
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="agama_ibu_istri">Agama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-face"></i>
                            <select name="agama_ibu_istri">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select><br>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="pekerjaan_bapak_istri">Pekerjaan</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-case"></i>
                            <input type="text"  name="pekerjaan_bapak_istri">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="pekerjaan_ibu_istri">Pekerjaan</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-case"></i>
                            <input type="text"  name="pekerjaan_ibu_istri">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="alamat_bapak_istri">Alamat</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-pin"></i>
                            <input type="text"  name="alamat_bapak_istri">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="alamat_ibu_istri">Alamat</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-pin"></i>
                            <input type="text"  name="alamat_ibu_istri">
                        </div>
                    </div>
                </div>

            </section>

            <!-- ---------- SECTION ---------- -->
            <h4></h4>
            <section>
                <h3>Identitas Saksi</h3>
                <hr>

                <div class="form-row">
                    <div class="form-col">
                        <h5>Identitas Saksi 1</h5>
                    </div>
                    <div class="form-col">
                        <h5>Identitas Saksi 2</h5>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-col">
                        <label for="nama_saksi1">Nama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text" name="nama_saksi1">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="nama_saksi2">Nama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-account"></i>
                            <input type="text" name="nama_saksi2">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="ttl_saksi1">Tempat Tanggal Lahir</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar"></i>
                            <input name="ttl_saksi1" type="date" class="datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="ttl_saksi2">Tempat Tanggal Lahir</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-calendar"></i>
                            <input name="ttl_saksi2" type="date" class="datepicker-here" data-language='en' data-date-format="dd - mm - yyyy">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="agama_saksi1">Agama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-face"></i>
                            <select name="agama_saksi1">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select><br>
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="agama_saksi2">Agama</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-face"></i>
                            <select name="agama_saksi2">
                                <option value="Islam">Islam</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Khonghucu">Khonghucu</option>
                            </select><br>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="pekerjaan_saksi1">Pekerjaan</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-case"></i>
                            <input type="text" name="pekerjaan_saksi1">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="pekerjaan_saksi2">Pekerjaan</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-case"></i>
                            <input type="text" name="pekerjaan_saksi2">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-col">
                        <label for="alamat_saksi1">Alamat</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-pin"></i>
                            <input type="text" name="alamat_saksi1">
                        </div>
                    </div>
                    <div class="form-col">
                        <label for="alamat_saksi2">Alamat</label>
                        <div class="form-holder">
                            <i class="zmdi zmdi-pin"></i>
                            <input type="text" name="alamat_saksi2">
                        </div>
                    </div>
                </div>
            </section>

        </form>
    </div>
    
    <script src="<?php echo base_url('js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo base_url('js/jquery.steps.js') ?>"></script>
    <script src="<?php echo base_url('vendor/date-picker/js/datepicker.js') ?>"></script>
    <script src="<?php echo base_url('vendor/date-picker/js/datepicker.en.js') ?>"></script>
    <script src="<?php echo base_url('js/main.js') ?>"></script>
</body>
</html>