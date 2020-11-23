<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Models\UserModel;

class Users extends BaseController{
    public function store(){
        $model = new UserModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email')
        ];
        $save = $model->insert($data);

        return redirect()->to(base_url('admin/users'));
    }
    public function index() {
        $model = new UserModel();

        //load seluruh data
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();

        return view('users_view_all', $data);
    }
    public function create(){
        return view('users_create_user');
    }
    public function edit ($id = null){
        $model = new UserModel();
        $data['users'] = $model->where('id', $id)->first();
    
        return view('users_edit_user', $data);
    }
    public function update(){

        $model = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'=> $this->request->getVar('email'),
        ];
        $save = $model->update($id, $data);
    
        return redirect()->to(base_url('admin/users'));
    }
    public function delete($id = null){
        $model = new UserModel();
        $data['users'] = $model->where('id',$id)->delete();

        return redirect()->to(base_url('admin/users'));
    }
}
?>
