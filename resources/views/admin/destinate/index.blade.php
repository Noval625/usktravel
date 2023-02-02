@extends('admin.master')

@section('main')

@include('admin.header')
@include('admin.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Destination Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Destination</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">


        <div class="col-lg-12   ">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>
              <a href="{{ route('destinate.create') }}" class="btn btn-primary mb-4">Create</a>
              <a href="" class="btn btn-primary mb-4">cetak</a>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama tempat</th>
                    <th scope="col">asal negara</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">jumlah orang</th>
                    <th scope="col">jumlah hari</th>
                    <th scope="col">harga</th>
                    <th scope="col">gambar</th>
                    <th scope="col">action</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($destinations as $destination )
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $destination->nama_tempat }}</td>
                    <td>{{ $destination->negara }}</td>
                    <td>{{ $destination->deskripsi }}</td>
                    <td>{{ $destination->jumlah_orang }}</td>
                    <td>{{ $destination->jumlah_hari }}</td>
                    <td>$ {{ $destination->harga }}.00</td>
                    <td><img src="{{ asset('upload/destinate/'. $destination->gambar) }}" style="width: 50px; height: 50px" alt=""></td>
                    <td class="d-flex ">
                        <a href="{{ route('destinate.edit', $destination->id) }}" class="btn btn-warning me-2">edit</a>
                        <form action="{{ route('destinate.destroy', $destination->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>



        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection

