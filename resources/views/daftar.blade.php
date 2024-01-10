<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">


    <title>Document</title>
</head>

<style>
    body{
        background-color: rgb(48, 55, 80);
        text-align: center;
    }
    

    .container{
        text-align: center;
        margin-top: 5%;
        width: 60%;
        height: 75vh;
        background-color: white;
        border: none;
        border-radius: 10px;
        box-shadow: 0px 0px 10px 1px rgb(14, 17, 26);
    }

    

    .box{
        align-items: center;
        display: flex;
        border-left: 1px solid grey;
       justify-content: center;
        
    }

    .judul{
        background-color: rgb(14, 17, 26); 
        height: 13%; 
        color: white;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        
        
    }

    

    .isi{
        display: flex;
    }

    .isi img{
        width: 50%;
        
    }


    .input-group{
        width: 40%;
        border: 1px solid rgb(97, 114, 138);
        border-radius: 10px;
        justify-content: center;
        
    }

    .input-group input{
        justify-content: center;
    }
   

    .tombol{
        background-color: rgb(14, 17, 26);
        color: rgb(255, 255, 255);
        border: none;
        border-radius: 5px;
        width: 70%;
        
    }

    .tombol:hover{
        background-color: rgb(25, 34, 63) ;
    }

    .login{
        font-size: 13px;
        margin-top: 2%;
        color: black;
    }

    .login a{
        text-decoration: none;
        
    }

    .zkasir{
        font-family: agbalumo; 
        margin-bottom: 5%;
       

    }

    .zkasir1{
        color: rgb(173, 0, 0); 
        
    }
    .zkasir2{
        color: rgb(14, 17, 26); 
        
    }


</style>

<body>
    <div class="">
        <div class="container">

            <div class="judul" >

                <h3>Daftar</h3>

            </div>

            <div class="isi"> 
                <img src="storage/image/login.jpg" alt="">

                <div class="box">
                    

                    

                    <form action="/proses_daftar" method="POST">

                        @csrf

                        <div class="zkasir" style="display: flex; justify-content:center; ">
                            <h3 class="zkasir1">Z-</h3>
                            <h3 class="zkasir2">Kasir</h3>
                        </div>

                    <div style="display: flex;">
                        <div class="input-group mb-3" style="margin-left: 10%;">
                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama lengkap" aria-label="nama_lengkap" aria-describedby="basic-addon1">
                        
                        </div>
                        
                        <div class="input-group mb-3" style="margin-left: 2%;">
                            
                            <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>


                    <div style="display: flex;">
                        <div class="input-group mb-3" style="margin-left: 10%;">
                            
                            <input type="password" class="form-control" name="password"password placeholder="password" aria-label="password" aria-describedby="basic-addon1">
                           
                        </div>

                        <div class="input-group mb-3" style="margin-left: 2%;">
                            
                            <input type="tel" class="form-control" name="no_telp" placeholder="Nomor telpon" aria-label="nomor_telp" aria-describedby="basic-addon1">
                        </div>
                    </div>


                        

                        
                    <div style="display: flex; justify-content: center; margin-bottom: 5%;">
                        <select name="status">
                            <option>admin</option>
                            <option>petugas</option>
                        </select>

                    </div>

                        <button class="tombol" type="submit">Daftar</button>

                        <p class="login">Sudah punya akun? 
                            <a href="/login">Login Disini</a>
                        </p>

                    </form>

                    

                </div>

            </div>


        </div>
    </div>


</body>
</html>