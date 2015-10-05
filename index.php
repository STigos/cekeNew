<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head lang="En">
        <meta charset="UTF-8">
        <title>Тестовая страница</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="IE-edge">
        <script src="js/jquery-2.1.4.js"></script>
        <script src="dist/js/bootstrap.js"></script>
        <link rel="stylesheet" href="dist/css/bootstrap.css">        
    </head>
    <body>
        <div class="collapse" id="exCollapsingNavbar">
            <div class="bg-inverse p-a">
                <h4>Скрытый контент</h4>
                <span class="text-muted">Открывается только в NAVBAR</span> <ul class="nav navbar-nav">
                    
            </div>
        </div>
        <nav class="navbar navbar-light " style="background-color: transparent">
                <button class="navbar-toggler pull-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                    &#9776;
                 </button>
                <a class="navbar-brand" href="#" >Cake-plus</a>
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>  <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>                   
                </ul>                 
                </ul>
            </nav>
        <h1 class="text-center bor">Cake-plus</h1>
        <div class="container">
            
            <div class="row">
                
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                   
                    <form>
                        <fieldset class="form-group">
                            <label for="exampleInputEmail1">Введите ваш Email</label>
                            <input type="email" class="form-control input-sm" placeholder="Адресс вводить здесь">
                        </fieldset>    
                    </form>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <a href="#" role="button" class="btn btn-primary btn-block disabled ">LINK 2</a>
                    
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <button type="button" class="btn btn-primary btn-block">Button disabled 1</button>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <button type="button" class="btn btn-primary btn-block">Button disabled 2</button>
                </div>
                
                </div>
            </div>
        
        </div>
    </body>
</html>
