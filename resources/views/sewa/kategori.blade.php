@extends('layout')
@section('judul','Kostum - '.$kategori->nama_sewa)
@section('konten')

<section class="hero is-success">
    <div class="hero-body">
        <p class="title">Kostum Cosplayer</p>
        <p class="subtitle">Detail Kostum: {{ $kategori->nama_sewa }}</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <table class="table is-fullwidth is-striped is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
			<th>Id Kostum</th>
                    <th>Nama Penyewa</th>
                    
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $item)
    <tr>
        <td>{{ $index + 1 }}</td>
	<td>{{ $item->id_barang }}</td>
        <td>{{ $item->nama_sewa }}</td>
  
        <td>
            <a href="/sewa/{{ $item->id }}" class="button is-small is-info">
                <span class="icon"><i class="fas fa-info-circle"></i></span>
                <span>Selengkapnya</span>
            </a>
        </td>
    </tr>
@endforeach

            </tbody>
        </table>
    </div>
</section>

@endsection
