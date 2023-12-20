@extends('layout.layout')

@section('container')
<div class="container mt-5">

    @php
        $rowCount = 1;
    @endphp
    <table class="table table-striped table-primary" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
        <thead style="align-content: center">
        <tr style="align-content: center">
            <th scope="col" style="align-content: center">No.</th>
            <th scope="col" style="align-content: center">Title</th>
            <th scope="col" style="align-content: center">Isi</th>
            <th scope="col" style="align-content: center">Tanggal</th>
            @auth
                @if (Auth::user()->role == 'Admin')
                    <th scope="col">Aksi</th>
                @endif
            @endauth
        </tr>
        </thead>
        <tbody>
            @foreach ($berita as $berita)
                <tr>
                    <th scope="row">{{ $rowCount }}</th>
                    <td style="align-content: center">{{ $berita['title'] }}</td>
                    <td>{{ $berita['content'] }}</td>
                    <td>{{ $berita['created_at'] }}</td>
                    @auth
                        @if (Auth::user()->role == 'Admin')
                            <td><button class="btn btn-dark">Edit</button> <br>
                                <button class="btn btn-dark">Hapus</button></td>
                        @endif
                    @endauth
                </tr>
                @php
                    $rowCount++    
                @endphp
                
            @endforeach
        
        </tbody>
    </table>
</div>
@endsection