<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#largemodal">Tambah</button>
                    {{-- <button id="table2-new-row-button" class="btn btn-primary mb-4"> Add New Row</button> --}}
                    <div wire:ignore.self class="modal fade" id="largemodal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambahkan User</h5>
                                    <button wire:click="clear()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        {{-- {{ csrf_field() }} --}}
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Name</label>
                                          <input wire:model="name" type="text" class="form-control" name="name">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                                          <input wire:model="email"  type="email" class="form-control" name="email">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Password</label>
                                          <input wire:model="password"  type="password" class="form-control" name="password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Role Id</label>
                                            <input wire:model="role_id"  type="text" class="form-control" name="role_id">
                                          </div>
                                      
                                </div>
                                <div class="modal-footer">
                                    <button wire:click="simpan()" type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Submit</button>
                                    </form>
                                </div>
                            {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                    @if ($upload === 3)
                        @include('livewire.foto')
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                            <thead>
                                <tr>
                                    <th>foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Role ID</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $us)
                                    <tr>
                                        <td>
                                            @if (empty($us->upload->gambar))
                                                <img src="{{ asset('assets/images/foto.jpg') }}" class="rounded" width="100" height="100" alt="">                                          
                                            @else
                                                <img src="{{ asset('storage/'.$us->upload->gambar) }}" class="rounded" width="100" height="100" alt="">
                                            @endif
                                        </td>
                                      <td>
                                          {{ $us->name }}
                                      </td>
                                      <td>
                                        {{ $us->email }}
                                    </td>
                                    <td>
                                        {{ $us->role_id }}
                                    </td>
                                    <td>
                                        @if (empty($us->upload->gambar))
                                                <a wire:click="upload('{{ $us->id }}')" href="javascript:;" class="btn-sm btn-info" >upload</a>                                         
                                            @else
                                            {{-- <a wire:click="upload('{{ $us->id }}')" href="javascript:;" class="btn-sm btn-info" >upload</a>  --}}
                                            @endif
                                        {{-- <a wire:click="upload('{{ $us->id }}')" href="javascript:;" class="btn-sm btn-info" >upload</a> --}}
                                        <a  wire:click="hapus('{{ $us->id }}')" href="javascript:;" class="btn-sm btn-danger">Hapus</a>
                                        <a wire:click="edit('{{ $us->id }}')" href="javascript:;" data-bs-toggle="modal" data-bs-target="#largemodal" class="btn-sm btn-success">Edit</a>
                                    </td>
                                  </tr>
                                  @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
