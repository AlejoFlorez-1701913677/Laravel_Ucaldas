@extends('layout.index')
@section('content') {{-- @yield('content') --}}

<link rel="stylesheet" href="{{ asset('assets/css/ProductCategory/index.css') }}">

<div class="container">

    <br>
    <br>    

    <div class="row">
        @foreach ($ProductCategory as $productCategory)
        
        <div class="col-4 mb-4 d-flex align-items-stretch">
            <div class="card">
              <img src="https://cdn-icons-png.flaticon.com/512/7183/7183999.png" class="card-img-top" alt="Card Image">
              <div class="card-body d-flex flex-column">
                <h3 class="card-title">{{ $productCategory->title }}</h3>
                <p class="card-text fw-light descriptionProductCategory">{{ $productCategory->description }}</p>
                
              </div>

              <div class="col-12 btnsContainer">
                  
                  <div class="col-4 float-start">
                    <button class="btn text-info col-12"><i class="fa fa-eye"></i></button>
                  </div>
                  
                  <div class="col-4 float-start">
                    <button class="btn text-warning col-12"><i class="fa fa-edit"></i></button>
                  </div>
                  
                  <div class="col-4 float-start">
                    <button class="btn text-danger col-12"><i class="fa fa-trash"></i></button>
                  </div>

              </div>
            </div>
          </div>

        @endforeach

    </div>

</div>

@endsection