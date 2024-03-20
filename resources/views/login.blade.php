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
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                            </svg>
                            <input type="text" class="form-control" name="username" placeholder="Username" aria-label="username" aria-describedby="basic-addon1" required>
                        </p>

                        <p class="input-group mb-3">
                            <img src="storage/image/lock.png" alt="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1"/>
                            </svg>
                            <input type="password" class="form-control" name="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" required>
                        </p>

                        <p>
                            <button class="tombol" id="/login" type="submit">Masuk</button>
                        </p>


                        

                    </form>


                </div>

            </div>


        </div>
    </div>


</body>
</html>
