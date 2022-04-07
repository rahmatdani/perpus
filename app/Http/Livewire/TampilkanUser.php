<?php

namespace App\Http\Livewire;
use App\Models\upload;
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use File;


class TampilkanUser extends Component
{
    use WithFileUploads;
    public $name, $email, $password, $role_id, $user_id, $gambar, $upload_id;
    public $status = false;
    public $upload = 1;
    public function render()
    {
        return view('livewire.tampilkan-user',[
            'users' => User::with('upload')->latest()->get()
        ]);
        
    }

    public function upload($id)
    {
        $this->upload = 3;
        $this->user_id = $id;
    }

    public function proses_upload()
    {
        $this->photo = $this->gambar->store('profile','public');
        $cekUpload = upload::where('user_id', $this->user_id)->first();
        if(!empty($cekUpload->id)){
            File::delete('storage/'.$cekUpload->gambar);
            $this->upload_id = $cekUpload->id;
        }
        upload::updateOrCreate([
            'id' => $this->upload_id
        ],[
            'gambar' => $this->photo,
            'user_id' => $this->user_id
        ]);
        $this->upload = 1;
    }

    public function simpan()
    {
        User::updateOrCreate([
            'id' => $this->user_id
        ],[
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'role_id' => $this->role_id
        ]);

        $this->reset_tulisan();
    }

    private function reset_tulisan()
    {
        $this->name='';
        $this->email='';
        $this->role_id='';
        $this->password='';
    }

    public function edit($id)
    {

        $this->status=true;
        $edit=User::where('id',$id)->first();
        $this->name=$edit->name;
        $this->role_id=$edit->role_id;
        $this->email=$edit->email;
        $this->user_id=$edit->id;
    }

    public function hapus($id)
    {
        if($id){
            $hapus_data=User::find($id);
            $hapus_data->delete();
        }
    }

    public function clear()
    {
        $status = false;
        $this->reset_tulisan();
    }
}
