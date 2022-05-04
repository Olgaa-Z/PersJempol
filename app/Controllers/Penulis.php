<?php

namespace App\Controllers;

class Penulis extends BaseController{

    function index(){

        $data['writer'] = $this->db->query("SELECT * FROM tb_writer")->getResult();
        return view('admin/v_penulis_data',$data);

    }

    public function penulis_add_page(){
        return view('admin/v_penulis_add');
    }

        // ADD DATA PENULIS
        public function insertProses(){
            $penulis = $this->request->getPost('penulis');
            $session = $this->session = session();
            $addby =  $session->get('name');
    
            
                $data = [
                    'writer' => $penulis,
                    'added_by' => $addby
                ];
    
               $insert =  $this->penulismodel->insert($data);
               if($insert){
                return redirect('penulis', 'refresh');
               }else{
                echo "Gagal Menambahkan Data";
               }
        }

        public function deletePenulis($id){
            $this->penulismodel->delete($id);
            return redirect('penulis', 'refresh');
        }

        public function edit_penulis_page($id){
            $data = array(
                'post' => $this->penulismodel->find($id)
            );
            return view('admin/v_penulis_edit', $data);
    
        }

            // EDIT DATA KATEGORI
            public function updateProses($id){
                $penulis = $this->request->getPost('penulis');
                $session = $this->session = session();
                $addby =  $session->get('username');
        
                
                    $data = [
                        'writer' => $penulis,
                        'added_by' => $addby
                    ];
        
                   $update =  $this->penulismodel->update($id,$data);
                   if($update){
                    return redirect('penulis', 'refresh');
                   }else{
                    echo "Gagal Update Data";
                   }
            }



}
