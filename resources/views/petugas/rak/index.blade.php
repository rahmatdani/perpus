@extends('layouts/main')
@section('content')
<div class="page-header">
    <h1 class="page-title">Rak Buku</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rak Buku</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 -->

<livewire:petugas.rak/>
@endsection
@section('validasikategori')

    <script>
        window.livewire.on('kategori', () => {
            $('#kategori').modal('hide');
            $('#kategori1').modal('hide');
        });

    </script>
@endsection
{{-- @section('validasikategoriedit')

    <script>
        window.livewire.on('insertkategori', () => {
            $('#kategori1').modal('hide');
        });

    </script>
@endsection --}}
@section('deletekategori')
<script>
    window.livewire.on('tutup', ()=> {
    $('#exampleModal').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
})

document.addEventListener('livewire:load', () => {
    Livewire.on('swal', (message, type) => {
        Swal.fire({
            icon: type,
            text: message,
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: 'Ya, dihapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                livewire.emit('delete');
            }
        })
    })
})


</script>
    
@endsection