@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-info"  >Kategori Galeri</div>
                <div class="card-body">
                <div class="col text-center">
                <table class="table table-bordered">
                    <thead class ="bg-success">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">User_id</th>

                            </tr>
                    </thead>
                    <tbody>
                        @foreach ($KategoriGaleri as $item)
                            <tr>
                               
                                <td>{!! $item->id!!}</td>
                                <td>{!! $item->nama!!}</td>
                                <td>{!! $item->users_id!!}</td>
                            </tr>
                            @endforeach
                    </tbody>
                    </table>
                    </div>
</div>
</div>
</div>
</div>
@endsection