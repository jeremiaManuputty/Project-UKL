@extends('template.default')


@php
    $title="Data Keranjang";
    $pretitle="Data Belanjan"
@endphp

@push('page-action')
    <a href="{{ route('buys.create')}}" class="btn btn-primary">Tambah Isi Keranjang</a>
@endpush


@section('content')
<div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Produk</th>
            <th>Jumlah </th>
            <th>Alamat</th>
            <th>Phone</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($buys as $buy)
          <tr>
            <td>{{ $buy->Nama }}</td>
            <td>{{ $buy->Nama_Produk }}</td>
            <td>{{ $buy->Jumlah_Produk }}</td>
            <td>{{ $buy->Alamat }}</td>
            <td>{{ $buy->Nomer_Handphone }}</td>
            <td>
            <a href="{{ route('buys.edit', $buy->id) }}" class="btn btn-secondry btn-sm">Edit</a>

            <form action="{{ route('buys.destroy', $buy->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
            </form>
            </td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
