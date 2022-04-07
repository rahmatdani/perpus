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
                  
            </div>
            <div class="modal-footer">
                <button wire:click="simpan()" type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Submit</button>
                </form>
            </div>
        {{-- </form> --}}
        </div>
    </div>
</div>