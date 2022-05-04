<?php

namespace App\Controllers;

class Anggota extends BaseController
{
    public function index()
    {
        // $data['data_anggota'] = $this->anggotamodel->get()->getResult();
        $data['data_anggota'] = $this->db->query("SELECT * FROM tb_team INNER JOIN tb_position on tb_team.position_id=tb_position.position_id")->getResult();
        return view('admin/v_anggota_data',$data);
    }

    public function anggota_add_page(){
        $data['position'] = $this->db->query("SELECT * FROM tb_position")->getResult();
        return view('admin/v_anggota_add',$data);
    }

      // ADD DATA ANGGOTA
      public function insertProcess(){
        $nama = $this->request->getPost('nama');
        $jabatan = $this->request->getPost('jabatan');
        $jk = $this->request->getPost('radiojk');
        $nohp = $this->request->getPost('nohp');
        $foto = $this->request->getFile('foto');
        $jurusan = $this->request->getPost('jurusan');
        $session = $this->session = session();
        $addby =  $session->get('name');

        $path = "./profil/";
        $name = $foto->getRandomName();
        $moved =  $foto->move($path, $name);

        if ($moved) {
            $data = [
                'name' => $nama,
                'position_id' => $jabatan,
                'gender' => $jk,
                'phone' => $nohp,
                'major' => $jurusan,
                'added_by' => $addby,
                'picture' => $name
            ];
            $this->anggotamodel->insert($data);
            return redirect('anggota', 'refresh');
        } else {
            return die("ada yang salah saat upload gambar");
        }
    }

    public function anggota_edit_page($id){

        $data = array(
            'post' => $this->anggotamodel->find($id)
        );
        $data['position'] = $this->db->query("SELECT * FROM tb_team INNER JOIN tb_position on tb_team.position_id=tb_position.position_id")->getResult();

        return view('admin/v_anggota_edit',$data);

    }

    public function editAnggota($id){
        $nama = $this->request->getPost('nama');
        $jabatan = $this->request->getPost('jabatan');
        $jk = $this->request->getPost('radiojk');
        $nohp = $this->request->getPost('nohp');
        $foto = $this->request->getFile('foto');
        $jurusan = $this->request->getPost('jurusan');
        $session = $this->session = session();
        $addby =  $session->get('name');
        
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {
            $data = [
                'name' => $nama,
                'position_id' => $jabatan,
                'gender' => $jk,
                'phone' => $nohp,
                'major' => $jurusan,
                'added_by' => $addby,
            ];

        }else{
            $path = "./profil/";
            $name = $foto->getRandomName();
            @unlink($path.$name);
            $upload = $this->request->getFile('foto');
            $upload->move(WRITEPATH . './profil/');
                $data = [
                    'name' => $nama,
                    'position_id' => $jabatan,
                    'gender' => $jk,
                    'phone' => $nohp,
                    'major' => $jurusan,
                    'added_by' => $addby,
                    'picture' => $upload->getName()
                ];
        }
        $upd =  $this->anggotamodel->update($id, $data);
        if ($upd) {
            return redirect('anggota', 'refresh');
        } else {
            echo "Gagal Edit !";
        }
    }

      
    public function deleteAnggota($id){
        $this->anggotamodel->delete($id);
        return redirect('anggota', 'refresh');
    }



 
}
