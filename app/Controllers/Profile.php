<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function visimisi_page()
    {
        $data['profile'] = $this->db->query("SELECT * FROM tb_profile WHERE profile_id=1 ")->getRow();
        return view('admin/v_profil_visimisi',$data);
    }
    public function logo_page()
    {
        $data['profile'] = $this->db->query("SELECT * FROM tb_profile WHERE profile_id=1 ")->getRow();
        return view('admin/v_profil_logo',$data);
    }

    public function datapers_page()
	{
        $data['profile'] = $this->db->query("SELECT * FROM tb_profile WHERE profile_id=1 ")->getRow();
		return view('admin/v_profil_datapers',$data);
	}

    public function mediasosial_page()
	{
        $data['profile'] = $this->db->query("SELECT * FROM tb_profile WHERE profile_id=1 ")->getRow();
		return view('admin/v_profil_mediasosial',$data);
	}

    public function editVisimisi($id){
        $visi = $this->request->getPost('visi');
        $misi = $this->request->getPost('misi');
        $session = $this->session = session();
        $addby =  $session->get('name');

        
            $data = [
                'vision' => $visi,
                'mision' => $misi,
                'added_by' => $addby
            ];

           $update =  $this->profilmodel->update($id,$data);
           if($update){
            return redirect('visimisi', 'refresh');
           }else{
            echo "Gagal Update Data";
           }
    }

    public function editLogo($id){
        $logo = $this->request->getFile('gambar');
        $session = $this->session = session();
        $addby =  $session->get('name');

        $path = "./profil/";
        $name = $logo->getRandomName();
        $moved =  $logo->move($path, $name);

        if ($moved) {
            $data = [
                'logo' => $logo,
                'added_by' => $addby,
                'logo' => $name
            ];

            $update =  $this->profilmodel->update($id,$data);
            if($update){
             return redirect('logo', 'refresh');
            }else{
             echo "Gagal Update Data";
            }
        }else{
            return die("ada yang salah saat upload gambar");
        }
        
            

          
    }

    public function editSocmed($id){
        $instagram = $this->request->getPost('instagram');
        $facebook = $this->request->getPost('facebook');
        $youtube = $this->request->getPost('youtube');
        $session = $this->session = session();
        $addby =  $session->get('name');

        
            $data = [
                'instagram' => $instagram,
                'facebook' => $facebook,
                'youtube' => $youtube,
                'added_by' => $addby
            ];

           $update =  $this->profilmodel->update($id,$data);
           if($update){
            return redirect('mediasosial', 'refresh');
           }else{
            echo "Gagal Update Data";
           }
    }

    public function editData($id){
        $namo = $this->request->getPost('namapers');
        $desk = $this->request->getPost('deskripsi');
        $email = $this->request->getPost('email');
        $hp = $this->request->getPost('kontakhp');
        $alamat = $this->request->getPost('alamat');
        $session = $this->session = session();
        $addby =  $session->get('username');

        
            $data = [
                'name' => $namo,
                'description' => $desk,
                'email' => $email,
                'phone' => $hp,
                'address' => $alamat,
                'added_by' => $addby
            ];

           $update =  $this->profilmodel->update($id,$data);
           if($update){
            return redirect('datapers', 'refresh');
           }else{
            echo "Gagal Update Data";
           }
    }
}
