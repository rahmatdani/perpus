<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="row">
        <div class="col-lg-12">
            {{-- @if (session('sukses'))
              <div class="alert alert-success" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> {{session('sukses')}}
            </div>
            @endif
            @if (session('edit'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> {{session('edit')}}
            </div>
            @endif --}}
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#rak"><i class="fe fe-plus me-2"></i>Tambah</button>
                    {{-- start modal tambahkan data --}}
                    <div wire:ignore.self class="modal fade" id="rak" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambahkan Rak</h5>
                                    <button wire:click="format()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        {{-- {{ csrf_field() }} --}}
                                        <div class="mb-3">
                                          <label class="form-label">Rak</label>
                                          <input wire:model="rak" type="text" class="form-control" placeholder="Masukkan rak" id="rak" name="rak">
                                          @error('rak') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Baris</label>
                                            <input wire:model="baris" type="text" class="form-control" placeholder="Masukkan baris" id="baris" name="baris">
                                            @error('baris') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        {{-- @if ($create) --}}
                                        <div class="mb-3">
                                            <label class="form-label">Kategori</label>
                                            <select wire:model="kategori_id" class="form-control" id="kategori">
                                                <option selected value="">Pilih Kategori</option>
                                                @foreach ($kate as $item)
                                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input wire:model="nama" type="text" class="form-control" placeholder="Masukkan Nama Kategori" id="nama" name="nama"> --}}
                                            @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        {{-- @endif --}}

                                      
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

                    <div wire:ignore.self class="modal fade" id="rak1" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambahkan Rak</h5>
                                    <button wire:click="format()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        {{-- {{ csrf_field() }} --}}
                                        <div class="mb-3">
                                          <label class="form-label">Rak</label>
                                          <input wire:model="rak" type="text" class="form-control" placeholder="Masukkan rak" id="rak" name="rak">
                                          @error('rak') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Baris</label>
                                            <input wire:model="baris" type="text" class="form-control" placeholder="Masukkan baris" id="baris" name="baris">
                                            @error('baris') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        {{-- @if ($create) --}}
                                        <div class="mb-3">
                                            <label class="form-label">Kategori</label>
                                            <select wire:model="kategori_id" class="form-control" id="kategori">
                                                <option selected value="">Pilih Kategori</option>
                                                @foreach ($kate as $item)
                                                    <option value="{{$item->id}}">{{$item->nama}}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input wire:model="nama" type="text" class="form-control" placeholder="Masukkan Nama Kategori" id="nama" name="nama"> --}}
                                            @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                                        </div>
                                        {{-- @endif --}}

                                      
                                </div>
                                <div class="modal-footer">
                                    <button wire:click="store()" type="button" class="btn btn-primary" aria-label="Close">Submit</button>
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
                                    <th>Rak</th>
                                    <th>Baris</th>
                                    <th>Kategori</th>
                                    <th style="width: 15px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($raks as $kt)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $kt->rak }}
                                    </td>
                                    <td>
                                        {{ $kt->baris }}
                                    </td>
                                    <td>
                                        {{ $kt->kategori->nama }}
                                    </td>
                                    <td>
                                        
                                        {{-- <a wire:click="upload('{{ $kt->id }}')" href="javascript:;" class="btn-sm btn-info" >upload</a> --}}
                                        <a  wire:click="hapus('{{ $kt->id }}')" href="javascript:;" class="btn-sm btn-danger"><i class="fe fe-trash"></i> Hapus</a>
                                        <a wire:click="edit('{{ $kt->id }}')" href="javascript:;" data-bs-toggle="modal" data-bs-target="#kategori1" class="btn-sm btn-success"><i class="fe fe-activity"></i> Ubah</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><br>
                    <div class="pagination justify-content-center">
                        {{ $raks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
