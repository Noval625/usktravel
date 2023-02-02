@extends('admin.master')


@section('main')
@include('admin.header')
@include('admin.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Destination</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Destination</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="{{ route('destinate.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">nama tempat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_tempat">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">nama negara</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="negara">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">jumlah orang</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="jumlah_orang">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">jumlah hari</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="jumlah_hari">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">harga</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="harga">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">gambar</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="gambar">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">deskripsi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px" name="deskripsi"></textarea>
                  </div>
                </div>


                <div class="row mb-3">
                  <div class="col-sm-10 ">
                    <button type="submit" class="btn btn-primary mx-auto ">create</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>

  </main><!-- End #main -->

@endsection
