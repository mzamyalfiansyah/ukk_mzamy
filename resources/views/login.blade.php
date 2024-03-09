<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <link rel="icon" href="/storage/image/LOGO.png">


    <title>Login-Kasir</title>
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
        text-align: center;
        
    }

    .judul{
        background-color: rgb(14, 17, 26); 
        height: 13%; 
        color: white;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        
        
    }

    .zkasir{
        font-family: agbalumo; 
        
       

    }

    .zkasir1{
        color: rgb(173, 0, 0); 
        
    }
    .zkasir2{
        color: rgb(14, 17, 26); 
        
    }

    

    .isi{
        display: flex;
    }

    .isi img{
        width: 50%;
        
    }


    .input-group{
        width: 70%;
        border: 1px solid rgb(97, 114, 138);
        border-radius: 10px;
        justify-content: center;
        margin-left: 15%
    }

    .input-group input{

    }
    .input-group img{
        width: 10%;
        height: 10%;
        margin: 2%;
       
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


</style>

<body>
    <div class="">

        @if(session()->has('error'))

            <div class="alert alert-danger">
                {{session()->get('error') }}
            </div>
                            
            @endif
       
        <div class="container">

           
            

            <div class="judul" >

                <h3>Login</h3>

            </div>


            


            <div class="isi"> 
                <img src="storage/image/login.jpg" alt="">

                <div class="box" >
                    
                    

                    <form action="/proses_login" method="POST" >

                    
                    


                        @method('POST')
                        @csrf
                        <div class="zkasir" style="display: flex; justify-content:center; ">
                            <h3 class="zkasir1">Z-</h3>
                            <h3 class="zkasir2">Kasir</h3>
                        </div>

                        <p class="input-group mb-3">
                            <img src="storage/image/user.png" alt="">
                            <input type="text" class="form-control" name="username" placeholder="Username" aria-label="username" aria-describedby="basic-addon1" required>
                        </p>
                        
                        <p class="input-group mb-3">
                            <img src="storage/image/lock.png" alt="">
                            <input type="password" class="form-control" name="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" required>
                        </p>

                        <p>
                            <button class="tombol" id="/login" type="submit">Masuk</button>
                        </p>

                        
                        <p>belum punya akun? <a href="/daftar">daftar disini!</a>  </p>

                    </form>


                </div>

            </div>


        </div>
    </div>


</body>
</html>