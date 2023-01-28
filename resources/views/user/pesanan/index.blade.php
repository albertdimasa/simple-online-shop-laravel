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
                        <td>{{ $item->invoice }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>@money($item->total)</td>
                        {{-- <td>
                            <button class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#detailModal-{{ $item->id }}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal"
                                data-target="#deleteModal-{{ $item->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            @include('admin.product.edit')
                            @include('admin.product.delete')
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
@include('admin.components.datatable')
