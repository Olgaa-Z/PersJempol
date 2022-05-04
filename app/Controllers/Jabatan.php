<?php

namespace App\Controllers;

class Jabatan extends BaseController
{

        // JABATAN ANGGOTA

    public function index(){
        $data['position'] = $this->db->query("SELECT * FROM tb_position")->getResult();
        return view('admin/v_jabatan_data',$data);
    }

    public function jabatan_add_page(){
        return view('admin/v_jabatan_add');
    }

      // ADD DATA JABATAN
      public function insertProcess(){
        $jabatan = $this->request->getPost('jabatan');
        $session = $this->session = session();
        $addby =  $session->get('name');

        
            $data = [
                'position' => $jabatan,
                'added_by' => $addby
            ];

            $this->jabatanmodel->insert($data);
            return redirect('jabatan', 'refresh');
        
    }

    public function deleteJabatan($id){
        $this->jabatanmodel->delete($id);
        return redirect('jabatan', 'refresh');
    }

    public function edit_jabatan_page($id){
        $data = array(
            'post' => $this->jabatanmodel->find($id)
        );
        return view('admin/v_jabatan_edit', $data);

    }

    public function editJabatan($id){
        $jabatan = $this->request->getPost('jabatan');
        $session = $this->session = session();
        $addby =  $session->get('name');

        $data = [
            'position' => $jabatan,
            'added_by' => $addby
        ];

        $this->jabatanmodel->update($id,$data);
        return redirect('jabatan', 'refresh');

    }
    

}



