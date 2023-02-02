@extends('isi.main')

@section('content')


@include('isi.nav')

<div class="container-fluid">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px" >
            <h3 class="display-4 text-white text-uppercase" style="margin-top: 150px"></h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href=""></a></p>
                <i class=""></i>
                <p class="m-0 text-uppercase"></p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Packages Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
            <h1>Pefect Tour Packages</h1>
        </div>
        <div class="row" style="margin-top: 100px">
            @foreach ($destinate as $destination )

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="package-item bg-white mb-2">
                    <img class="img-fluid" src="{{ asset('upload/destinate/' . $destination->gambar) }}" alt="" width="250px">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <h3><small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $destination->negara }}</small></h3>
                            <h3><small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{ $destination->jumlah_hari }} days</small></h3>
                            <h3><small class="m-0"><i class="fa fa-user text-primary mr-2"></i>{{ $destination->jumlah_orang }} Person</small></h3>
                        </div>
                        <h3><a class="h5 text-decoration-none" href="">{{ $destination->nama_tempat }}</a></h3>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-between">

                                <h3 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h3>
                                <h3 class="m-0">${{ $destination->harga }}</h3>
                            </div>
                        </div>
                        <div class="about-btn">
                            <a href="{{ route('destiuse.show', $destination->id) }}" class="btn about-view packages-btn"> book now</a>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Packages End -->
@include('isi.footer')
@endsection

