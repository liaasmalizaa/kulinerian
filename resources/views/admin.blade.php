@extends('layout/layout')

@section('title', 'Halaman Admin')

@section('content')

<div class="container" id="search-container">
	<h1><i class="fas fa-user"></i> Selamat datang Admin!</h1>
	<hr class="mb-4 hrhr">
	    <div class="row" >
    		@foreach($kuliners as $kuliner)
    		<div class="col-md-3 col-sm-6 mb-3">
		        <div class="card border-0 shadow produk">
		          <img src="{{asset('img/item1.jpg')}}" alt="" class="card-img-top">
		          <div class="card-body">

		          	<!-- Mengambil data kategori dari DB -->
		            <?php $kategori = explode(';', $kuliner->kategori) ; ?>
		            @foreach($kategori  as $item)
		            
		            <span class="badge badge-primary">{{$item}}</span>
		            @endforeach
		           <h5 class="card-title m-1">{{$kuliner->nama}}</h5>
		            <p class="m-1 mb-2" id="deskripsi-kuliner">
		             {{$kuliner->deskripsi}}
		            </p>
		           <div class="nasvigasi-admin">
			           	 <a href="{{url('/kuliner/'.$kuliner->id)}}"	class="btn btn-warning text-white">Lihat</a>
			            <a href="{{url('/edit/'.$kuliner->id)}}"	class="btn btn-primary text-white">Edit</a>
			            <form action="/admin" method="post" class="d-inline">
			            	@method('delete')
			            	@csrf
			            	<button type="submit" class="btn btn-danger">Hapus</button>
			            </form>
		           </div>
		          </div>
		        </div>
		    </div>
		    @endforeach
    	</div>
</div>
@endsection