<!-- Edit Modal -->
<div class="modal fade" id="detailModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Pesanan</h5>
            </div>
            <div class="modal-body">
                <table id="table" class="table table-bordered table-hover bg-white">
                    <thead>
                        <tr>
                            <th>Nama Product</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail as $d)
                            @if ($d->pesanan_id == $item->id)
                                <tr>
                                    <td>{{ $d->product_name }}</td>
                                    <td>@money($d->harga)</td>
                                </tr>
                            @endif
                        @endforeach
                        <tr class="text-bold">
                            <td>TOTAL: </td>
                            <td>Rp @money($item->total)</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
