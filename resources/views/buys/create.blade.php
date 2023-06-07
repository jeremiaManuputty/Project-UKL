@extends('template.default')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('buys.shop') }}" class="" method="post">
            @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
    <input type="text" name="Nama" class="form-control
    @error('Nama')
        is-invalid
    @enderror bg-light border-0 small"
    placeholder="Masukan Nama kamu..." value="{{ old('Nama') }}" aria-label="Search" aria-describedby="basic-addon2">
    @error('Nama')
        <span class="invalid-feedback">{{ $message }}</span>
    @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Produk</label>
    <input type="text" name="Nama_Produk" class="form-control
    @error('Nama_Produk')
    is-invalid
    @enderror bg-light border-0 small"
    placeholder="Ingin berbelanja apa?..." value="{{ old('Nama_Produk') }}" aria-label="Search" aria-describedby="basic-addon2">
    @error('Nama_Produk')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah</label>
    <input type="text" name="Jumlah_Produk" class="form-control
    @error('Jumlah_Produk')
    is-invalid
    @enderror bg-light border-0 small"
    placeholder="Jumlah barang kamu..." value="{{ old('Jumlah_Produk') }}" aria-label="Search" aria-describedby="basic-addon2">
    @error('Jumlah_Produk')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Alamat</label>
    <input type="text" name="Alamat" class="form-control
    @error('Alamat')
    is-invalid
    @enderror bg-light border-0 small"
    placeholder="Alamat Lengkap Jangan lupa...." value="{{ old('Alamat') }}" aria-label="Search" aria-describedby="basic-addon2">
    @error('Alamat')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nomer Handphone</label>
    <input type="text" name="Nomer_Handphone" class="form-control
    @error('Nomer_Handphone')
    is-invalid
    @enderror bg-light border-0 small"
    placeholder="Nomer kamu..." value="{{ old('Nomer_Handphone') }}" aria-label="Search" aria-describedby="basic-addon2">
    @error('Nomer_Handphone')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
        </div>

        <div class="mb-3">
            <input type="submit" value="Check Out" class="btn btn-primary">

        </div>
    </form>
</div>

@endsection
