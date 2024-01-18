<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Customer</title>
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
              <a href="dashboard" class="nav-link link-light" aria-current="page" >
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
              <a href="/data_produk" class="nav-link link-light">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                  <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2zm3.564 1.426L5.596 5 8 5.961 14.154 3.5zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                </svg>
                Products
              </a>
            </li>
  
  
            <li>
              <a href="customer" class="nav-link link-light" style="background-color: rgb(173, 0, 0); border-radius: 5px;">
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





      <div style="margin-top: 10%; margin-left: 5%; width:70%; display: flex;">

        <div class="table-responsive table table-striped">

                

            <table class="table" style="border: 2px solid rgb(148, 148, 148);">
            
                <thead>
                    <tr class="table-active">
                    <th scope="col">No</th>
                    <th>ID</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Hp</th>
                    

                    </tr>

                </thead>

                

                    <tbody>
                                
            <?php $no=1 ?>
            
                        @foreach($tampil_pelanggan as $customer)
            
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td> {{$customer->pelanggan_id}} </td>
                                    <td>{{$customer->nama_pelanggan}}</td>
                                    <td>{{$customer->alamat}}</td>
                                    <td>{{$customer->no_telepon}}</td>
                                </tr>
            
                            
            
                                
            
                        @endforeach 
                    </tbody>
                
                            
                </table>       

           
                   

        
        

                        <br>
                        <br>
                        <br>
                        <br>

                        <p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambahkan Pelanggan</button>
                            

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Pelanggan</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">

                                    <form action="proses_customer" method="post">
                                      @method('post')
                                      @csrf

                                      <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama</label>
                                        <input type="text" class="form-control" id="recipient-name" name="nama_pelanggan" placeholder="Masukkan nama">
                                      </div>

                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Alamat</label>
                                        <input class="form-control" id="message-text" name="alamat" placeholder="Masukkan alamat">
                                      </div>

                                      <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Nomor</label>
                                        <input type="tel" class="form-control"  id="message-text" name="no_telepon" placeholder="Masukkan nomor">
                                      </div>
                                    

                                  </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
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