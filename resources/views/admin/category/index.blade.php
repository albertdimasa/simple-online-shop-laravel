@extends('admin.layouts.master')
@section('title')
    Produk
@stop
@section('content')
    <div class="card p-2">
        <button type="button" class="btn btn-primary btn-sm d-block my-2 ml-auto" data-toggle="modal"
            data-target="#createModal">
            Tambah Data
        </button>
        @include('admin.category.create')
        @include('admin.components.alert')
        <table id="table" class="table table-bordered table-hover bg-white">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ $item->image }}" alt="" width="100">
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary" data-toggle="modal"
                                data-target="#editModal-{{ $item->id }}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal"
                                data-target="#deleteModal-{{ $item->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            @include('admin.category.edit')
                            @include('admin.category.delete')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
@include('admin.components.datatable')
