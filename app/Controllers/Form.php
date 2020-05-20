<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Form extends Controller
{
  protected $db;
  protected $request;

  public function __construct()
    {
      $this->db = \Config\Database::connect();
      $this->request = \Config\Services::request();
    }

	public function insertInformation()
	{
		$this->data = [
      'id' => 'ID',
      'created_at' => 'Created At',
      'updated_at' => 'Updated At',
      'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
      'tanggal_menikah' => $this->request->getVar('tanggal_menikah'),
      'hari_menikah' => $this->request->getVar('hari_menikah'),
      'lokasi_menikah' => $this->request->getVar('lokasi_menikah'),
      'nama_keluarga_suami' => $this->request->getVar('nama_keluarga_suami'),
      'nama_kecil_suami' => $this->request->getVar('nama_kecil_suami'),
      'ttl_suami' => $this->request->getVar('ttl_suami'),
      'agama_suami' => $this->request->getVar('agama_suami'),
      'pekerjaan_suami' => $this->request->getVar('pekerjaan_suami'),
      'alamat_suami' => $this->request->getVar('alamat_suami'),
      'status_kawin_suami' => $this->request->getVar('status_kawin_suami'),
      'mantan_suami' => $this->request->getVar('mantan_suami'),
      'anak_suami' => $this->request->getVar('anak_suami'),
      'nama_keluarga_istri' => $this->request->getVar('nama_keluarga_istri'),
      'nama_kecil_istri' => $this->request->getVar('nama_kecil_istri'),
      'ttl_istri' => $this->request->getVar('ttl_istri'),
      'agama_istri' => $this->request->getVar('agama_istri'),
      'pekerjaan_istri' => $this->request->getVar('pekerjaan_istri'),
      'alamat_istri' => $this->request->getVar('alamat_istri'),
      'status_kawin_istri' => $this->request->getVar('status_kawin_istri'),
      'mantan_istri' => $this->request->getVar('mantan_istri'),
      'anak_istri' => $this->request->getVar('anak_istri'),
      'nama_bapak_suami' => $this->request->getVar('nama_bapak_suami'),
      'ttl_bapak_suami' => $this->request->getVar('ttl_bapak_suami'),
      'agama_bapak_suami' => $this->request->getVar('agama_bapak_suami'),
      'pekerjaan_bapak_suami' => $this->request->getVar('pekerjaan_bapak_suami'),
      'alamat_bapak_suami' => $this->request->getVar('alamat_bapak_suami'),
      'nama_ibu_suami' => $this->request->getVar('nama_ibu_suami'),
      'ttl_ibu_suami' => $this->request->getVar('ttl_ibu_suami'),
      'agama_ibu_suami' => $this->request->getVar('agama_ibu_suami'),
      'pekerjaan_ibu_suami' => $this->request->getVar('pekerjaan_ibu_suami'),
      'alamat_ibu_suami' => $this->request->getVar('alamat_ibu_suami'),
      'nama_bapak_istri' => $this->request->getVar('nama_bapak_istri'),
      'ttl_bapak_istri' => $this->request->getVar('ttl_bapak_istri'),
      'agama_bapak_istri' => $this->request->getVar('agama_bapak_istri'),
      'pekerjaan_bapak_istri' => $this->request->getVar('pekerjaan_bapak_istri'),
      'alamat_bapak_istri' => $this->request->getVar('alamat_bapak_istri'),
      'nama_ibu_istri' => $this->request->getVar('nama_ibu_istri'),
      'ttl_ibu_istri' => $this->request->getVar('ttl_ibu_istri'),
      'agama_ibu_istri' => $this->request->getVar('agama_ibu_istri'),
      'pekerjaan_ibu_istri' => $this->request->getVar('pekerjaan_ibu_istri'),
      'alamat_ibu_istri' => $this->request->getVar('alamat_ibu_istri'),
      'nama_saksi1' => $this->request->getVar('nama_saksi1'),
      'ttl_saksi1' => $this->request->getVar('ttl_saksi1'),
      'agama_saksi1' => $this->request->getVar('agama_saksi1'),
      'pekerjaan_saksi1' => $this->request->getVar('pekerjaan_saksi1'),
      'alamat_saksi1' => $this->request->getVar('alamat_saksi1'),
      'nama_saksi2' => $this->request->getVar('nama_saksi2'),
      'ttl_saksi2' => $this->request->getVar('ttl_saksi2'),
      'agama_saksi2' => $this->request->getVar('agama_saksi2'),
      'pekerjaan_saksi2' => $this->request->getVar('pekerjaan_saksi2'),
      'alamat_saksi2' => $this->request->getVar('alamat_saksi2'),
		];

    $this->db->table('weddings')->insert($this->data);
    echo view('landingpage');
  }

  public function displayInformation(){
    $table = new \CodeIgniter\View\Table();

    $query1 = $this->db->query('SELECT id,
      kewarganegaraan,
      tanggal_menikah,
      hari_menikah,
      lokasi_menikah 
      FROM weddings');
    $weddings1 = $query1->getResultArray();

    $query2 = $this->db->query('SELECT id,
      nama_keluarga_suami,
      nama_kecil_suami,
      ttl_suami,
      agama_suami,
      pekerjaan_suami,
      alamat_suami,
      status_kawin_suami,
      mantan_suami,
      anak_suami
      FROM weddings');
    $weddings2 = $query2->getResultArray();

    $query3 = $this->db->query('SELECT id,
      nama_keluarga_istri,
      nama_kecil_istri,
      ttl_istri,
      agama_istri,
      pekerjaan_istri,
      alamat_istri,
      status_kawin_istri,
      mantan_istri,
      anak_istri
      FROM weddings');
    $weddings3 = $query3->getResultArray();

    $query4 = $this->db->query('SELECT id,
      nama_bapak_suami,
      ttl_bapak_suami,
      agama_bapak_suami,
      pekerjaan_bapak_suami,
      alamat_bapak_suami
      FROM weddings');
    $weddings4 = $query4->getResultArray();

    $query5 = $this->db->query('SELECT id,
      nama_ibu_suami,
      ttl_ibu_suami,
      agama_ibu_suami,
      pekerjaan_ibu_suami,
      alamat_ibu_suami
      FROM weddings');
    $weddings5 = $query5->getResultArray();

    $query6 = $this->db->query('SELECT id,
      nama_bapak_istri,
      ttl_bapak_istri,
      agama_bapak_istri,
      pekerjaan_bapak_istri,
      alamat_bapak_istri
      FROM weddings');
    $weddings6 = $query6->getResultArray();

    $query7 = $this->db->query('SELECT id,
      nama_ibu_istri,
      ttl_ibu_istri,
      agama_ibu_istri,
      pekerjaan_ibu_istri,
      alamat_ibu_istri
      FROM weddings');
    $weddings7 = $query7->getResultArray();

    $query8 = $this->db->query('SELECT id,
      nama_saksi1,
      ttl_saksi1,
      agama_saksi1,
      pekerjaan_saksi1,
      alamat_saksi1
      FROM weddings');
    $weddings8 = $query8->getResultArray();

    $query9 = $this->db->query('SELECT id,
      nama_saksi2,
      ttl_saksi2,
      agama_saksi2,
      pekerjaan_saksi2,
      alamat_saksi2
      FROM weddings');
    $weddings9 = $query9->getResultArray();

    $data = [
      'weddingsInformation' => $weddings1,
      'suamiInformation' => $weddings2,
      'istriInformation' => $weddings3,
      'bapakSuamiInformation' => $weddings4,
      'ibuSuamiInformation' => $weddings5,
      'bapakIstriInformation' => $weddings6,
      'ibuIstriInformation' => $weddings7,
      'saksi1Information' => $weddings8,
      'saksi2Information' => $weddings9,
    ];

    echo view('displaydata', $data);
  }

}