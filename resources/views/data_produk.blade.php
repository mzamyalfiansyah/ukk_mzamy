<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="/storage/image/LOGO.png">
    
    <title>Data Produk</title>
</head>
<style>
    .container-fluid img{
            width: 2%;
    }
    
    .container-fluid img:hover{
        background-color: rgb(197, 0, 0);
        border-radius: 5px;
        cursor: pointer;
    }
    
    
    nav{
        box-shadow: 0px 0px 5px 1px black;
    }
    
    .nav-link:hover{
        background-color: rgb(150, 0, 0);
    }
    
    .zkasir, .fs-4{
            font-family: agbalumo; 
            letter-spacing: 2px;
           
    
        }
    
    .zkasir1{
            color: rgb(173, 0, 0); 
           
        }
    
    .zkasir2{
            color: rgb(255, 255, 255); 
           
        }
    
    
        .form-control{
            border: 1px solid rgb(109, 109, 109);;
        }
    
    
    
        
    /* Responsive */
    
    @media screen and (max-width:768px){
    
    .container-fluid img{
        width: 3.4%;
    }
    
    }
    
    @media screen and (max-width:576px){
    
    .container-fluid img{
        width: 5%;
    }
    
    }
    
    
    
    
    
    </style>
    
    
    <body>

        {{-- navbar --}}
        <nav class="navbar navbar-dark bg-dark fixed-top">
    
            
            <div class="container-fluid">
    
                <span class="zkasir" style="display: flex; ">
                    <h3 class="zkasir1">Z-</h3>
                    <h3 class="zkasir2">Kasir</h3>
                  </span>
    
                    <!-- Offcanvas Sidebar -->
                    <div style="background-color: rgb(22, 22, 22);" class="offcanvas offcanvas-start" id="demo">
                        <div class="offcanvas-header" style="color: white;">
    
                            <h1 class="offcanvas-title">Notifikasi</h1>
                         
                        </div>
                        <div class="offcanvas-body">
                        
                        </div>
                    </div>
            
                    <!-- Button to open the offcanvas sidebar -->
                    
                        <img data-bs-toggle="offcanvas" data-bs-target="#demo" src="storage/image/ringing.png"  alt="">
                    
    
                    
                    
            </div>
        </nav>
    
    
    
    
    
    <div class="" style="display: flex; height: 100vh;">
    
    
        {{-- Sidebar --}}
    
          <div class="d-flex flex-column flex-shrink-0 p-3 fixed-left" style=" background-color:rgb(48, 55, 80); color: white; width: 250px; box-shadow: 0px 0px 5px 0px rgb(99, 99, 99); height: 100%;">
            
            <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <svg class="bi me-2" style="height: 5%; width: 40px;"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4" >
                
                <h2 style="margin-top: 50%; color: white">Welcome</h2>
                
              </span>
            </a>
    
            <hr>
    
            <ul class="nav nav-pills flex-column mb-auto">
    
              <li class="nav-item" >
                <a href="dashboard" class="nav-link link-light" aria-current="page">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                  </svg>
                  Dashboard
                </a>
              </li>
    
    
              
    
    
              <li>
                <a href="order" class="nav-link link-light">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg>
                  Orders
                </a>
              </li>
    
    
              <li>
                <a href="/data_produk" class="nav-link link-light" style="background-color: rgb(173, 0, 0); border-radius: 5px;">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                  </svg>
                  Products
                </a>
              </li>
    
    
              <li>
                <a href="customer" class="nav-link link-light">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                  </svg>
                  Customers
                </a>
              </li>


              <li>
                <a href="penjualan" class="nav-link link-light">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                  </svg>
                  Penjualan
                </a>
              </li>


              <hr style="margin-top: 70%;">

              <li>
                <a href="/logout" class="nav-link link-light" >
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                  </svg>
                  Logout
                </a>
              </li>


              
    
    
            </ul>
            
           
          </div>
        
    
    
    
    {{-- Content --}}
    
    <div style="margin-top: 5%; margin-left: 5%; width:70%; ">
        <br>
        <h2>Stok Barang</h2>
         
         
        <div class="table-responsive table table-striped" style="height: 45%; text-align: center;">
            <table class="table" style="border: 2px solid rgb(148, 148, 148);">
              
                <thead>
                    <tr class="table-active">
                      <th scope="col">No</th>
                      <th scope="col">Nama Produk</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Opsi</th>

                    </tr>

                  </thead>
                  <tbody>

                    <?php $no=1 ?>
            @foreach($tampil_produk as $produk)

                    <tr>
                      <td> {{ $no++ }} </td>
                      <td>{{$produk->nama_produk}}</td>
                      <td>Rp {{$produk->harga}}</td>
                      <td>{{$produk->stok}}</td>
                
                      {{-- HAPUS --}}
                    
                      <td>
                        <button type="submit" class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                            </svg>
                        </button>
                        
                        {{-- KONFIRMASI HAPUS --}}
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Yakin ingin menghapus?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                ini mungkin tidak dapat dikembalikan!!
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                                
                                <a  class="btn btn-danger remove" href="proses_delete/{{$produk->produk_id}}" >hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>


                        {{-- DETAIL --}}
                        <a href="/detail/{{$produk->produk_id}}" type="submit" class="btn btn-primary btn-sm" style="margin-left: 10%;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                              </svg>
                        </a>
                      </td>

                      

                      

                    </tr>

                   

                     

            @endforeach 
                  </tbody>
    
                  
            </table>
           
          
       

        <br>
        <br>
        <br>
        <br>
        


        

        </div>

        <div>
          


            <p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambahkan Produk</button>
              

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan produk</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                      <form action="/proses_barang" method="POST" >
                        @method('POST')
                        @csrf
                       
                       
                
                        
                        <div class="tambah">
                            <div class="mb-3">
                              <label for="produk">Nama Produk</label>
                              <input type="text" class="form-control" name="nama_produk" placeholder="Nama barang" aria-label="username" aria-describedby="basic-addon1">
                            </div>

                            <div class="mb-3">
                                <label for="produk">Harga</label>
                                <input   type="text" class="form-control" name="harga" placeholder="Harga" aria-label="harga" aria-describedby="basic-addon1">
                            </div>

                            <div class="mb-3">
                                <label for="produk">Stok</label>
                                <input   type="number" class="form-control" name="stok" placeholder="Stok" aria-label="stok" aria-describedby="basic-addon1">
                            </div>
                         

                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
        
                        </div>
        
                      
                        <div>
                            
                                
                              
                            
        
                        
                                
                        
                      </div>
        
                   
                
                    

                      </div>

                     
                    </form>
                  </div>
                </div>
              </div>






              
          </p>



          <p>
            <button type="button" class="btn btn-danger" style="background-color: rgb(255, 191, 191); color: red;" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Produk Dihapus
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
              </svg>
            </button>
            

            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data produk yang dihapus</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <div class="table-responsive table table-striped" style="height: 45%; text-align: center;">
                      <table class="table" style="border: 2px solid rgb(148, 148, 148);">
                        
                          <thead>
                              <tr class="table-active">
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">ID_Produk</th>
                                <th scope="col">Stok</th>
                                <th scope="col"></th>
          
                              </tr>
          
                            </thead>
                            <tbody>
          
                              <?php $no=1 ?>
                      @foreach($produk_dihapus as $produk_dihapus)
          
                              <tr>
                                <td> {{ $no++ }} </td>
                                <td>{{$produk_dihapus->nama_produk}}</td>
                                <td>{{$produk_dihapus->produk_id}}</td>
                                <td>-</td>
                                <td>
                                  <svg style="color: rgb(177, 2, 2);" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                  </svg>
                                </td>
                          
                              
                            @endforeach
                              </tbody>

                    
      
                      </div>
      
                    
                      <div>
                          
                              
                            
                          
      
                      
                              
                      
                    </div>
      
                 
              
                  

                    </div>

                   
                  </form>
                </div>
              </div>
            </div>






            
        </p>






           
        </div>




      </div>
    </body>
</html>