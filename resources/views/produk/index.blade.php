@extends('layouts.app')


<!DOCTYPE html>
<html>

 <body>

 
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 20px;">
<div class="container">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Batik Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Produk</a>
        <a class="nav-link active" aria-current="page" href="#">Manage</a>
      </div>
    </div>
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif

        
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <form method="POST" action="{{ route('logout') }}" style="margin-left:50px;">
        @csrf
        <button class="btn btn-info" type="submit">Logout</button>
      </form>
  </div>
  </div>
</nav>
 
 

 <div class="container">
 <div class="row" style="margin-top:15px;">
 @foreach($data_produk as $produk)
    
      <div class="col-md-4">
        <div class="card h-100 shadow p-3 bg-white rounded">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$produk->nama}}</h5>
            <p class="card-text">Size {{$produk->size}}</p>
            <div class="card-footer">
            <small class="text-muted">Rp {{$produk->harga}}</small>
            </div>
          </div>
        </div>
      </div>
       @endforeach
    </div>
 
</div>


 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" cross
origin="anonymous"></script>
 </body>

</html>