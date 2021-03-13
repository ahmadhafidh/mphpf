<?php


namespace controller;


use m\Application;
use m\Controller;

use model\DosenModel;

class DosenController extends Controller
{
    private $_mDosen;

    public function __construct(Application $application)
    {
        parent::__construct($application);

        $this->_mDosen = new DosenModel();
    }

    public function index()
    {
        $dosens = $this->_mDosen->findAll();

        $data = array(
            'all_dosens' => $dosens
        );

        $this->view->setData($data);

        $this->view->setContentTemplate('/dosen/index_template.php');
        $this->view->render();
    }

    public function addDosen()
    {
        if(isset($_POST['submit']))
        {
            // Berarti user sudah mengisi data, tinggal simpan
            $this->saveDosenData();

            // Redirect ke halaman awal
            $this->redirect('/dosen'); 
            // perlu diganti bagian ini fidh
        }

        $this->view->setContentTemplate('/dosen/add_dosen_template.php');
        $this->view->render();
    }

    private function saveDosenData()
    {
        $nip         = $_POST['nip'];
        $nama        = $_POST['nama'];
        $alamat      = $_POST['alamat'];
        $prodi       = $_POST['prodi'];
        $jurusan     = $_POST['jurusan'];
        $no_telepon  = $_POST['no_telepon'];

        $this->_mDosen->addNew($nip, $nama, $alamat, $prodi, $jurusan, $no_telepon);
    }
}


// http://github.com/yunhasnawa/mphpf