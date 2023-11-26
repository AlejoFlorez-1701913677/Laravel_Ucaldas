@extends('layouts.index')
@section('content') {{-- @yield('content') --}}

<link rel="stylesheet" href="{{ asset('assets/css/Product/index.css') }}">

<div class="container-fluid">

    <br>
    <br>

    <div class="row">

        @foreach ($Products as $Product)
        
        <div class="col-lg-3 mb-4 d-flex align-items-stretch">
            <div class="card">
              <img src="https://cdn-icons-png.flaticon.com/256/4129/4129528.png" class="card-img-top" alt="Card Image">
              <div class="card-body d-flex flex-column">

                <h5 class="card-title titleProduct">{{ $Product->title }}</h5>
               
                <div class="col-12">
                  
                  <div class="price col-6 float-start">
                    <h5>$ {{ $Product->price }}</h5>
                  </div>

                  <div class="rating hidden-sm col-6 float-start">
                      <i class="price-text-color fa fa-star"></i>
                      <i class="price-text-color fa fa-star"></i>
                      <i class="price-text-color fa fa-star"></i>
                      <i class="price-text-color fa fa-star"></i>
                      <i class="price-text-color fa fa-star"></i>
                  </div>

                </div>

                <div class="col-12">
                  <p class="fw-light descriptionProduct">{{ $Product->description }}</p>
                </div>

                <div class="col-12">

                  <div class="col-3 float-start">
                    <p class="btn-add">
                      <button class="btn btn-success col-12"><i class="fa fa-shopping-cart"></i></button>
                    </p>
                  </div>
                  
                  <div class="col-3 float-start">
                    <button class="btn text-info col-12"><i class="fa fa-eye"></i></button>
                  </div>
                  
                  <div class="col-3 float-start">
                    <button class="btn text-warning col-12"><i class="fa fa-edit"></i></button>
                  </div>
                  
                  <div class="col-3 float-start">
                    <button class="btn text-danger col-12"><i class="fa fa-trash"></i></button>
                  </div>

                </div>

                <!--<a href="{{route('Product.edit', $Product)}}" class="btn btn-primary">Editar</a>
                
                <form 
                  action="{{route('Product.destroy', $Product)}}" 
                  method="post"
                  onsubmit="return confirm('¿Estás Seguro?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Eliminar <i class="fa-solid fa-trash"></i></button>
                </form>-->
                
              </div>
            </div>
          </div>

        @endforeach

    </div>

</div>

@endsection