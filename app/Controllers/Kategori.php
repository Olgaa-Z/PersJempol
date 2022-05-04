<?php

namespace App\Controllers;

class Kategori extends BaseController
{

        // KATEGORI
        public function index(){
            $data['kategori'] = $this->db->query("SELECT * FROM tb_category")->getResult();
            return view('admin/v_kategori_news',$data);
        }
    
        public function add_kategori_page(){
            return view('admin/v_kategori_add');
        }

        // ADD DATA KATEGORI
      public function insertProses(){
        $kategori = $this->request->getPost('kategori');
        $aktif= $this->request->getPost('aktif');
        $session = $this->session = session();
        $addby =  $session->get('name');

        
            $data = [
                'category' => $kategori,
                'active' => $aktif,
                'added_by' => $addby
            ];

           $insert =  $this->kategorimodel->insert($data);
           if($insert){
            return redirect('kategory', 'refresh');
           }else{
            echo "Gagal Menambahkan Data";
           }
    }
    
    public function deleteCategory($id){
        $this->kategorimodel->delete($id);
        return redirect('kategory', 'refresh');
    }
        
    public function edit_kategori_page($id){
        $data = array(
            'post' => $this->kategorimodel->find($id)
        );
        return view('admin/v_kategori_edit', $data);

    }

            // EDIT DATA KATEGORI
            public function updateProses($id){
                $kategori = $this->request->getPost('kategori');
                $aktif= $this->request->getPost('aktif');
                $session = $this->session = session();
                $addby =  $session->get('name');
        
                
                    $data = [
                        'category' => $kategori,
                        'active' => $aktif,
                        'added_by' => $addby
                    ];
        
                   $update =  $this->kategorimodel->update($id,$data);
                   if($update){
                    return redirect('kategory', 'refresh');
                   }else{
                    echo "Gagal Update Data";
                   }
            }


}