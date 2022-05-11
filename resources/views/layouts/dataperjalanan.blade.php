@extends('layouts.master')

@section('title', 'Data Perjalanan')

@section('content')
@php
  $no=1
@endphp

<div class="card-body">
    <div class="section-title mt-0">Data Perjalanan</div>
    <table class="table table-hover" id="">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">
                <div class="row justify-content-around">
                    <div class="col align-self-center">Tanggal</div>
                    <form action="/order" method="GET">
                        @csrf
                        <button class="col btn" name="tanggalDesc" value="Desc" href="/order" title="Terbaru"><i class="fas fa-angle-up"></i></button>
                        <button class="col btn" name="tanggalAsc" value="Asc" href="/order" title="Terlama"><i class="fas fa-angle-down"></i></button>
                    </form>
                </div>
              </th>
                <th scope="col">
                  <div class="row justify-content-around">
                      <div class="col align-self-center">Jam</div>
                      <form action="/order" method="GET">
                          @csrf
                          <button class="col btn" name="jamDesc" value="Desc" href="/order" title="Terbaru"><i class="fas fa-angle-up"></i></button>
                          <button class="col btn" name="jamAsc" value="Asc" href="/order" title="Terlama"><i class="fas fa-angle-down"></i></button>
                      </form>
                  </div>
                </th>
              <th scope="col">Lokasi</th>
                <th scope="col">
                  <div class="row justify-content-around">
                      <div class="col align-self-center">Suhu</div>
                      <form action="/order" method="GET">
                          @csrf
                          <button class="col btn" name="suhuDesc" value="Desc" href="/order" title="Tertinggi"><i class="fas fa-angle-up"></i></button>
                          <button class="col btn" name="suhuAsc" value="Asc" href="/order" title="Terendah"><i class="fas fa-angle-down"></i></button>
                      </form>
                  </div>
                </th>
                <th>Delete</th>
              </th>
            </tr>
            @foreach ($data as $item)    
            <tr>
              <th scope="row">{{ ($data->currentPage()-1) * $data->perPage() + $loop->iteration }}</th>
              <td>{{ $item->tanggal }}</td>
              <td>{{ $item->jam }}</td>
              <td>{{ $item->lokasi }}</td>
              <td>{{ $item->suhu }}</td>
              <td>
                <form method="POST" action="/deletePerjalanan" class="needs-validation">
                  {{ csrf_field() }}
                  <button name="delete" id="delete" class="btn btn-danger align-center" type="submit" value="{{ $item->id }}" style="color:#fff; :75px; height:35px;">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
        </table>

        <a href="/inputperjalanan"><button class="btn btn-primary mr-1">Tambah Data</button></a>

        {{ $data->links() }}
      </div>
    </div>
    
@endsection