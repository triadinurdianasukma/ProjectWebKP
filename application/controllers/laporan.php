<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class laporan extends CI_Controller
{
	
	function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('kelola_model');
        $this->load->library('export');
    }

    function index()
    {
        $this->load->view('laporan_view');
    }
    function eksportexcels()
    {
        $this->load->model('kelola_model');
        $sql = $this->kelola_model->getall();
        $this->export->to_excel($sql,'Rekap Inventaris Komputer');
    }

    function eksportexcelsoft()
    {
        $this->load->model('kelola_model');
        $sql = $this->kelola_model->getsoft();
        $this->export->to_excel($sql,'Rekap Inventaris Software Komputer');
    }
    function eksportexcelhard()
    {
        $this->load->model('kelola_model');
        $sql = $this->kelola_model->gethard();
        $this->export->to_excel($sql,'Rekap Inventaris Hardware Komputer');
    }

    /*function eksportpdfhard()
    {
        $data = $this->kelola_model->read();
        $parameters = array(
            'paper'=>'A4',
            'orientation'=>'portrait',
            );

           $this->load->library('Pdf', $parameters);

            // pastikan path font benar
            $this->pdf->selectFont(APPPATH.'/third_party/pdf-php/fonts/Helvetica.afm');

            // judul rekap
            $this->pdf->ezText("Data Laporan Inventaris", 20, array('justification'=> 'centre'));

            // spasi judul dengan tabel
            $this->pdf->ezSetDy(-15);

            $query = $this->rekap->rekap($id_kelas, $id_semester);

            // persiapkan data (array) untuk tabel pdf
            $no = 0;
            $i = 0;
            $data_rekap=array();
            foreach ($query->result_array() as $key => $value) {
                // jangan ganti urutan 3 baris ini, atau nomor tidak tampil
                $data_rekap[$key] = $value;
                $data_rekap[$i]['no']= ++$no;
                $i++;
            }

            // header tabel pdf
            $column_header=array(
                'id_computer' => 'Id Computer',
                'username_computer'=>'username_computer',
                'no_computer'=>'No_computer',
                'os'=>'OS',
                'keadaan'=>'Keadaan',
                'nama_owner'=>'nama_owner',
                'lokasi'=>'lokasi',
            );

            // buat tabel pdf
            $this->pdf->ezTable($data_rekap, $column_header);

            $nama_file = 'REKAP_ABSEN_KELAS_' . $kelas . '_SEMESTER_' . $id_semester . '.pdf';

            // force download, nama file sesuai dengan $nama_file
            $this->pdf->ezStream(array('Content-Disposition'=>$nama_file));

    }
    function eksportpdfhard()
    {
        $data = $this->kelola_model->read();
        $parameters = array(
            'paper'=>'A4',
            'orientation'=>'portrait',
            );

           $this->load->library('Pdf', $parameters);

            // pastikan path font benar
            $this->pdf->selectFont(APPPATH.'/third_party/pdf-php/fonts/Helvetica.afm');

            // judul rekap
            $this->pdf->ezText("Data Laporan Inventaris", 20, array('justification'=> 'centre'));

            // spasi judul dengan tabel
            $this->pdf->ezSetDy(-15);

            $query = $this->rekap->rekap($id_kelas, $id_semester);

            // persiapkan data (array) untuk tabel pdf
            $no = 0;
            $i = 0;
            $data_rekap=array();
            foreach ($query->result_array() as $key => $value) {
                // jangan ganti urutan 3 baris ini, atau nomor tidak tampil
                $data_rekap[$key] = $value;
                $data_rekap[$i]['no']= ++$no;
                $i++;
            }

            // header tabel pdf
            $column_header=array(
                'id_computer' => 'Id Computer',
                'username_computer'=>'username_computer',
                'no_computer'=>'No_computer',
                'os'=>'OS',
                'keadaan'=>'Keadaan',
                'nama_owner'=>'nama_owner',
                'lokasi'=>'lokasi',
            );

            // buat tabel pdf
            $this->pdf->ezTable($data_rekap, $column_header);

            $nama_file = 'REKAP_ABSEN_KELAS_' . $kelas . '_SEMESTER_' . $id_semester . '.pdf';

            // force download, nama file sesuai dengan $nama_file
            $this->pdf->ezStream(array('Content-Disposition'=>$nama_file));

    }*/
}