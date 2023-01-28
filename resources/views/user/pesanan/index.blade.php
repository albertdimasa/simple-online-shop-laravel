@extends('admin.layouts.master')
@section('title')
    Produk
@stop
@section('content')
    <div class="card p-2">
        {{-- <button type="button" class="btn btn-primary btn-sm d-block my-2 ml-auto" data-toggle="modal"
            data-target="#createModal">
            Tambah Data
        </button> --}}
        {{-- @include('admin.product.create') --}}
        {{-- @include('admin.components.alert') --}}
        <table id="table" class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th>Nomor Pesanan</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        @if ($item->invoice == 0)
                            <td class="bg-danger"></td>
                        @else
                            <td>{{ $item->invoice }}</td>
                        @endif
                        <td>{{ $item->created_at->format('d F Y') }}</td>
                        <td>@money($item->total)</td>
                        <td>
                            <button class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#detailModal-{{ $item->id }}">
                                <i class="fas fa-eye"></i>
                            </button>
                            @include('user.pesanan.show')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
@include('admin.components.datatable')
