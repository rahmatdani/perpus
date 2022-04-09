<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="row">
        <div class="col-lg-12">
            @if (session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('sukses')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            @if (session('edit'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{session('edit')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#kategori">Tambah</button>
                    {{-- start modal tambahkan data --}}
                    <div wire:ignore.self class="modal fade" id="kategori" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambahkan Kategori</h5>
                                    <button wire:click="clear()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        {{-- {{ csrf_field() }} --}}
                                        <div class="mb-3">
                                          <label class="form-label">Nama Kategori</label>
                                          <input wire:model="nama" type="text" class="form-control" placeholder="Masukkan Nama Kategori" id="nama" name="nama">
                                          @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                      
                                </div>
                                <div class="modal-footer">
                                    <button wire:click="store()" type="button" class="btn btn-primary" aria-label="Close">Submit</button>
                                    </form>
                                </div>
                            {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                    {{-- end modal tambahkan data --}}


                    {{-- start modal edit data --}}

                    <div wire:ignore.self class="modal fade" id="kategori1" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Kategori</h5>
                                    <button wire:click="clear()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        {{-- {{ csrf_field() }} --}}
                                        <div class="mb-3">
                                          <label class="form-label">Nama Kategori</label>
                                          <input wire:model="nama" type="text" class="form-control" placeholder="Masukkan Nama Kategori" id="nama" name="nama">
                                          @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                      
                                </div>
                                <div class="modal-footer">
                                    <button wire:click="update({{$kategori_id}})" type="button" class="btn btn-primary" aria-label="Close">Submit</button>
                                    </form>
                                </div>
                            {{-- </form> --}}
                            </div>
                        </div>
                    </div>

                    {{-- end modal edit data --}}
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Kategori</th>
                                    <th style="width: 15px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $kt)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $kt->nama }}
                                    </td>
                                    <td>
                                        
                                        {{-- <a wire:click="upload('{{ $kt->id }}')" href="javascript:;" class="btn-sm btn-info" >upload</a> --}}
                                        <a  wire:click="hapus('{{ $kt->id }}')" href="javascript:;" class="btn-sm btn-danger">Hapus</a>
                                        <a wire:click="edit('{{ $kt->id }}')" href="javascript:;" data-bs-toggle="modal" data-bs-target="#kategori1" class="btn-sm btn-success">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><br>
                    <div class="dataTables_paginate paging_simple_numbers">
                        {{ $kategori->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
