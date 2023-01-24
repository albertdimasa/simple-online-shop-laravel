<!-- Create Modal -->
<div class="modal fade" id="deleteModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Kategori</h5>
            </div>
            <div class="modal-body">
                <form action="{{ route('kategori.destroy', $item) }}" method="post">
                    @method('delete')
                    @csrf
                    <p>Anda yakin ingin menghapus kategori <strong>{{ $item->title }}</strong>?</p>
                    @include('admin.components.button', ['submit' => 'yakin', 'close' => 'tutup'])
                </form>
            </div>
        </div>
    </div>
</div>
