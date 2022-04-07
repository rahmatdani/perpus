@extends('layouts/main')
@section('content')
<div class="page-header">
    <h1 class="page-title">Daftar Koleksi Buku</h1>
    <div>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Daftar Koleksi Buku</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 -->

<livewire:master-buku/>
@endsection