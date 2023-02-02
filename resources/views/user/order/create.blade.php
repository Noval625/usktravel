@extends('isi.main')


@section('content')

@include('isi.nav')

{{-- @include('components.carousel') --}}


<div class="container-fluid" >
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<!-- Registration Start -->
<div class="container-fluid bg-registration py-5" style="margin: 90px 0; margin-top: 150px;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="mb-4">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{ $order->negara }}</h6>
                    <h1 class="text-white">{{ $order->nama_tempat }}</h1>
                </div>
                <p class="text-white">{{ $order->deskripsi }}</p>
                <p class="text-white">Harga : ${{ $order->harga }}</p>
                <ul class="list-inline text-white m-0">
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <div class="card border-0">
                    <div class="card-header bg-primary text-center p-4">
                        <h1 class="text-white m-0">Buy Now</h1>
                    </div>
                    <div class="card-body rounded-bottom bg-white p-5">
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="destination_id" value="{{ $order->id }}">
                            <input type="hidden" name="harga" value="{{ $order->harga }}">
                            <div class="form-group">
                                <input type="number" class="form-control p-4" placeholder="jumlah tiket" required="required" name="jumlah_tiket"/>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control p-4" placeholder="depart date" required="required" name="depart_date"/>
                            </div>


                            <div>
                                <button class="btn btn-primary btn-block py-3" type="submit" >Buy Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registration End -->
</div>



@include('isi.footer')

@endsection
