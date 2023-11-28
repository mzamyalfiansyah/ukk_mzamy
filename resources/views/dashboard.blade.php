<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Dashboard</title>
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

                <a class="navbar-brand" href="#" style="color:rgb(243, 243, 243)">Z-Kasir</a>

                <!-- Offcanvas Sidebar -->
                <div style="background-color: rgb(22, 22, 22);" class="offcanvas offcanvas-start" id="demo">
                    <div class="offcanvas-header" style="color: white;">

                        <h1 class="offcanvas-title">Notifikasi</h1>
                     
                    </div>
                    <div class="offcanvas-body">
                    
                    </div>
                </div>
        
                <!-- Button to open the offcanvas sidebar -->
                
                    <img class="class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo" src="storage/image/ringing.png"  alt="">
                

                
                
        </div>
    </nav>


    
</body>
</html>