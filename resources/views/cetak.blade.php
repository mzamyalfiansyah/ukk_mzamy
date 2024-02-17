<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> 

    <title>Cetak</title>
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
    


</style>


<body>

 


    <div class="">

        <br>
    
                  <div class="" style="width: 100%; height: 100%; padding: 2%; background-color: rgb(255, 255, 255);">
                    
                   
        
                    <div style="display: flex">
                      <p style="font-family:unset; font-weight: bold; color: grey;">Detail Transaksi</p>
                    
                      <span class="zkasir" style="display: flex; margin-left: 60%;">
                        <h3 class="zkasir1">Z-</h3>
                        <h3 style="color: black">Kasir</h3>
                      </span>
                    </div>

                    <br>
                    <br>
                    
                    <p style=" font-family:monospace; border-bottom: 1px solid rgb(182, 182, 182); color: rgb(122, 122, 122);">Berikut detail dari transaksi, anda dapat mencetak atau menyimpannya.</p>
                    
        
                    {{-- <span  style="background-color: rgb(5, 137, 189); width: 50%; height: 50%;">
                      <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                      </svg>  
                    </span> --}}
                    <br>
                    <br>
                     
        
                    <img src="/storage/image/checkbox.png" style="width: 10%;">

                    <img style="width: 10%; margin-left: 50%;" src="/storage/image/barcode.png" alt="">
                    <img style="width: 10%;" src="/storage/image/barcode.png" alt="">
                    <img style="width: 10%;" src="/storage/image/barcode.png" alt="">
                   
                    <br>
                    <br>
                  
        
                    {{-- table --}}
        
                    <?php $no=1 ?>
        
            
                 
                    <br>
                    <br>  
                    <br>
        
                    <table class="table" style=" border: 1px solid rgb(179, 179, 179); text-align:center;" >
                      <thead style="height: 10%">
                        <tr style="font-family:monospace">
                          <th scope="col" >No</th>
                          <th scope="col" >Produk</th>
                          <th scope="col" >Harga Satuan</th>
                          <th scope="col" >Qty</th>
                          <th scope="col" >Subtotal</th>
        
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($detail as $detail)
                        <tr style="font-family:monospace">
                            <td> {{ $no++ }}</td>
                            <td> {{$detail->produk_id}} - {{$detail->nama_produk}}</td>
                            <td> {{$detail->harga}}</td>
                            <td> {{$detail->qty}}</td>
                            <td> {{ $detail->qty * $detail->harga}}</td>
                       
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
        
                    {{-- akhir table --}}
                    
                    <br>
                    <br>
              
        
                    <div style="display: flex">
                        @foreach ($penjualan as $penjualan)    
                          <li style="list-style: none; font-size: 120%; font-family:monospace">
                              <p>Penjualan ID : {{$penjualan->penjualan_id}}</p>
              
                              <p>Status : {{$penjualan->status}}</p>
                            
                          </li>
                        @endforeach
        
                        <li style="list-style: none;  margin-left: 40%; font-size: 120%; font-family:monospace">
                          <p>Total harga : {{$penjualan->total_harga}}</p>
                          <p> Diskon : -</p>
                          <p>Bayar : -</p>
                          <p>Kembalian : -</p>
        
                        
                         
                      </li>
        
                    </div>

                    <p style="font-size: 120%; font-family:monospace"> Tanggal Penjualan : {{$penjualan->created_at}}</p>
        
                    <br>
        
        
                    
        
                   
                
                 <br>
                    
                    
        
        <p style="text-align: center; font-family:monospace">Terima kasih sudah membeli di toko kami</p>
        <p style="text-align: center; font-family:monospace">silahkan kembali lagi</p>

        
        <hr>
        
                  <p style="text-align: center; font-family:monospace">CopyRight © Z-Kasir 2024</p>
                  
        
        
                </div>
        
        
        
              </div>




              <script type="text/javascript">
                window.print();
            
              </script>

</body>
</html>