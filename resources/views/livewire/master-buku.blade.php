<div>
    {{-- In work, do what you enjoy. --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#largemodal">Tambah</button>
                    <div wire:ignore.self class="modal fade" id="largemodal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambahkan Data Buku</h5>
                                    <button wire:click="clear()" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="ISBN" class="form-label">ISBN</label>
                                                    <input wire:model="isbn" type="text" class="form-control" name="isbn">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Nomor Punggung" class="form-label">Nomor Punggung</label>
                                                    <input wire:model="nomorpunggung" type="text" class="form-control" name="nomorpunggung">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Penerbit</label>
                                                    <select wire:model="penerbit" class="form-select  mb-3" aria-label="Default select example">
                                                        <option value=""> Pilih Penerbit Buku </option>
                                                        <option value="SMK">SMK</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Tahun Terbit" class="form-label">Tahun Terbit</label>
                                                    <input wire:model="tahunterbit" type="text" class="form-control" name="tahunterbit">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Jenjang</label>
                                                    <select wire:model="jenjang" class="form-select  mb-3" aria-label="Default select example">
                                                        <option value=""> Pilih Jenjang </option>
                                                        <option value="SMK">SMK</option>
                                                        <option value="SMP">SMP</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Tipe Buku</label>
                                                    <select wire:model="tipebuku" class="form-select  mb-3" aria-label="Default select example">
                                                        <option value=""> Pilih Tipe Buku </option>
                                                        <option value="SMK">SMK</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Kategori</label>
                                                    <select wire:model="kategori" class="form-select  mb-3" aria-label="Default select example">
                                                        <option value=""> Pilih Tipe Buku </option>
                                                        <option value="SMK">SMK</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-3">
                                                    <label for="Judul Buku" class="form-label">Judul Buku</label>
                                                    <input wire:model="judulbuku" type="text" class="form-control" name="judulbuku">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Kode Buku Penerbit" class="form-label">Kode Buku Penerbit</label>
                                                    <input wire:model="kdbukupenerbit" type="text" class="form-control" name="kdbukupenerbit">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Penulis" class="form-label">Penulis</label>
                                                    <input wire:model="penulis" type="text" class="form-control" name="penulis">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="Jumlah Halaman" class="form-label">Jumlah Halaman</label>
                                                    <input wire:model="jumlahhalaman" type="text" class="form-control" name="jumlahhalaman">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Jenis Koleksi</label>
                                                    <select wire:model="jeniskoleksi" class="form-select  mb-3" aria-label="Default select example">
                                                        <option value=""> Pilih Jenis Koleksi </option>
                                                        <option value="SMK">SMK</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Fiksi / Non Fiksi</label>
                                                    <select wire:model="fiksinonfiksi" class="form-select  mb-3" aria-label="Default select example">
                                                        <option value=""> Pilih Tipe Isi </option>
                                                        <option value="SMK">SMK</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3">
                                                <label for="URL Gambar Sampul Buku" class="form-label">URL Gambar Sampul Buku</label>
                                                <input wire:model="gambar" type="text" class="form-control" name="gambar">
                                            </div>
                                        </div>
                                       
                                </div>
                                <div class="modal-footer">
                                    <button wire:click="simpan()" type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div wire:ignore.self class="modal fade" id="viewdata" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg " role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">tampilkan Data Buku</h5>
                                </div>
                                <div class="modal-body">
                                    {{-- @foreach ($buku as $viewbuku) --}}
                                    {{-- @if (empty($buku_id->id))

                                    @else --}}

                                    {{--  --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="{{ $gambar }}"  class="mb-5" style="height: 180px; max-width: 120%; display: block; margin: auto" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col">Kode ISBN</div>
                                                <div class="col">: {{ $isbn }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Kode Buku Penerbit</div>
                                                <div class="col">: {{ $kdbukupenerbit }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Judul Buku</div>
                                                <div class="col">: {{ $judulbuku }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Nomor Punggung</div>
                                                <div class="col">: {{ $nomorpunggung }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Penulis</div>
                                                <div class="col">: {{ $penulis }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Tahun Terbit</div>
                                                <div class="col">: {{ $tahunterbit }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Jumlah Halaman</div>
                                                <div class="col">: {{ $jumlahhalaman }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Jenjang</div>
                                                <div class="col">: {{ $jenjang }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Jenis Koleksi</div>
                                                <div class="col">: {{ $jeniskoleksi }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Tipe Buku</div>
                                                <div class="col">: {{ $tipebuku }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Fiksi/Non Fiksi</div>
                                                <div class="col">: {{ $fiksinonfiksi }}</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Kategori</div>
                                                <div class="col">: {{ $kategori }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- @endforeach                            --}}
                                    {{-- @endif --}}
                                </div>
                                <div class="modal-footer">
                                    <button wire:click="clear()" type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Close</button>
                                    {{-- <button wire:click="simpan()" type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Submit</button> --}}
                                </div>
                            {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                    {{-- @if ($upload === 3)
                        @include('livewire.foto')
                    @endif --}}
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode ISBN</th>
                                    <th>Judul Buku</th>
                                    <th>Nomor Punggung</th>
                                    <th>Jenis Koleksi</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1;?>
                                @foreach ($buku as $bk)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $bk->isbn }}</td>
                                        <td>{{ $bk->judulbuku }}</td>
                                        <td>{{ $bk->nomorpunggung }}</td>
                                        <td>{{ $bk->jeniskoleksi }}</td>
                                        <td>{{ $bk->kategori }}</td>
                                        <td>
                                            <a wire:click="view('{{ $bk->id }}')" href="javascript:;" data-bs-toggle="modal" data-bs-target="#viewdata" class="btn text-success btn-sm" ><span class="fe fe-info fs-14"></span></a>
                                            {{-- <a  wire:click="hapus('{{ $bk->id }}')" href="javascript:;" class="btn-sm btn-danger">Hapus</a> --}}
                                            <a wire:click="hapus('{{ $bk->id }}')" href="javascript:;" class="btn text-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><span class="fe fe-trash-2 fs-14"></span></a>
                                            {{-- <a wire:click="edit('{{ $bk->id }}')" href="javascript:;" data-bs-toggle="modal" data-bs-target="#largemodal" class="btn-sm btn-success">Edit</a> --}}
                                            <a wire:click="edit('{{ $bk->id }}')" href="javascript:;" data-bs-target="#largemodal" class="btn text-primary btn-sm" data-bs-toggle="modal" data-bs-original-title="Edit"><span class="fe fe-edit fs-14"></span></a>
                                        </td>
                                    </tr>
                                    <?php $no++ ;?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
