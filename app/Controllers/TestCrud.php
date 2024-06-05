<?php namespace App\Controllers;
use App\Models\NameModel;
use CodeIgniter\Controllers;

class TestCrud extends Controller{
    public function index(){
        $NameModel = new NameModel();
        $data['user'] = $NameModel->overBy('id','DESC')->findAll();
        return view('namelist','$data');
    }

    public function create(){
        return view('addname');
    }

    public function store(){
        $NameModel = new Namemodel();
        $data = [
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'email' =>$this->request->getVar('email')
        ];
        $NameModel->insert($data);
        return $this->response->redirect(site_url('/namelsit'));
    }

    public function singleUser($id = null){
        $NameModel = new NameModel();
        $data['user_obj'] = $NameModel->where('id', $id)->first();
        return view('/editnames', $data);
    }

    public function update(){
        $NameModel = new NameMoeld();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'email' =>$this->request->getVar('email')
        ];
        $NameModel->update($id, $data);
        return $this->response->redirect(site_url('/namelist'));    
    } 

    public function delete($id = null) {
        $NameModel = new NameModel();
        $data['user'] = $NameModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/namelsit'));
    }
}