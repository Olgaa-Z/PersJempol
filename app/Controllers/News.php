<?php

namespace App\Controllers;

class News extends BaseController
{
    public function index()
    {
        $data['data_news'] = $this->newsmodel->get()->getResult();
        return view('admin/v_news_data',$data);
    }

   public function add_news_page(){
        $data['itemkategori'] = $this->db->query("SELECT * FROM tb_category")->getResult();
        $data['itempenulis'] = $this->db->query("SELECT * FROM tb_writer")->getResult();
        return view('admin/v_news_add',$data);
    }
    
    public function deleteNews($id){
        $this->newsmodel->delete($id);
        return redirect('news', 'refresh');
    }

    public function edit_news_page($id){
        $data = array(
            'post' => $this->newsmodel->find($id)
        );
        $data['itemkategori'] = $this->db->query("SELECT * FROM tb_category")->getResult();
        $data['itempenulis'] = $this->db->query("SELECT * FROM tb_writer")->getResult();
        return view('admin/v_news_edit',$data);
    }

    public function editNews($id){
        $judul = $this->request->getPost('judul');
        $cover = $this->request->getFile('gambar');
        $kategori = $this->request->getPost('kategori');
        $butama = $this->request->getPost('radiobutama');
        $isiberita = $this->request->getPost('isiberita');
        $penulis = $this->request->getPost('penulis');
        
        $validation = $this->validate([
            'file_upload' => 'uploaded[file_upload]|mime_in[file_upload,image/jpg,image/jpeg,image/gif,image/png]|max_size[file_upload,4096]'
        ]);

        if ($validation == FALSE) {
            $data = [
                'title' => $judul,
                'latest_news' => $butama,
                'content' => $isiberita,
                'writer_id' => $penulis,
                'title' => $judul,
                'category_id' => $kategori
            ];

        }else{
            $path = "./newsimage/";
            $name = $cover->getRandomName();
            @unlink($path.$name);
            $upload = $this->request->getFile('gambar');
            $upload->move(WRITEPATH . './newsimage/');
                $data = [
                'title' => $judul,
                'latest_news' => $butama,
                'content' => $isiberita,
                'writer_id' => $penulis,
                'title' => $judul,
                'category_id' => $kategori,
                'thumbnail' => $upload->getName()
                ];
        }
        $upd =  $this->newsmodel->update($id, $data);
        if ($upd) {
            return redirect('news', 'refresh');
        } else {
            echo "Gagal Edit !";
        }
    }

    // ADD DATA NEWS
    public function insertProcess(){
        $judul = $this->request->getPost('judul');
        $kategori = $this->request->getPost('kategori');
        $butama = $this->request->getPost('radiobutama');
        $isiberita = $this->request->getPost('isiberita');
        $img = $this->request->getFile('gambar');
        $penulis = $this->request->getPost('penulis');
        $session = $this->session = session();
        $addby =  $session->get('name');

        $path = "./newsimage/";
        $name = $img->getRandomName();
        $moved =  $img->move($path, $name);

        if ($moved) {
            $data = [
                'title' => $judul,
                'latest_news' => $butama,
                'content' => $isiberita,
                'writer_id' => $penulis,
                'title' => $judul,
                'added_by' => $addby,
                'category_id' => $kategori,
                'thumbnail' => $name
            ];
            $this->newsmodel->insert($data);
            return redirect('news', 'refresh');
        } else {
            return die("ada yang salah saat upload gambar");
        }
    }






    

}
