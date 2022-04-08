<?php

namespace App\Http\Livewire\Petugas;
use Livewire\WithPagination;
use App\Models\Rak as MRak;
use Livewire\Component;
use Illuminate\Support\Str;

class Rak extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.petugas.rak',[
            'rak' => Mrak::latest()->paginate(3)
        ]);
    }
}
