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
        
            <nav class="navbar navbar-light  ">
                <a class="navbar-brand" href="#" >Cake-plus</a>
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="#">
                            link
                        </a>
                    </li>
                </ul>
            </nav>
        
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <a href="#" role="button" class="btn btn-primary btn-block ">LINK 1</a>
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
                <div class="col-lg-12 ">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="checkbox"  autocomplete="off">Checkbox 1(prechecked)
                        </label>
                        <label class="btn btn-primary ">
                            <input type="checkbox" autocomplete="off">Checkbox 2
                        </label>
                        <label class="btn btn-primary ">
                            <input type="checkbox" autocomplete="off">Checkbox 3
                        </label>
                    </div>
                </div>
            </div>
        
        </div>
    </body>
</html>
