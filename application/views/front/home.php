   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="<?php echo base_url()?>assets/Template/frontend/dist/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/Template/frontend/bootstrap/css/bootstrap.min.css">
        <!--datatables-->
        <link rel='stylesheet' href="<?php echo base_url()?>assets/Template/admin/plugins/datatables/jquery.dataTables.min.css">
        <title>Document</title>
   </head>
   <body>
        <div class="container-fluid">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        Monitoring
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#">Page 2</a></li> 
                        <li><a href="#">Page 3</a></li> 
                    </ul>
                </div>
            </nav>
        
            <header class="page-header">
                    <h1>Page Header</h1>
            </header>


            <div class="content-wrapper">
                <div class="content-header">
                        <h3>Header Content</h3>
                </div>

                <div class="main-content">
                    <div class="row">
                        <div class="col-md-push-2 col-md-8">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="datetime" id="inp_src">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary" id="btn_src" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-search"></span>Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="modal" id="myModal" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal">&times</button>
                                    <h4>Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                    <ul class="nav nav-tabs">
                                        <li><a data-toggle="tab" href="#grafik-modal">Grafik</a></li>
                                        <li><a data-toggle="tab" href="#tabel-modal">Tabel</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="grafik-modal"></div>
                                        <div class="tab-pane" id="tabel-modal">
                                            <table class="table table-hovered text-center">
                                                <thead>
                                                    <tr>
                                                        <td>ID</td>
                                                        <td>Suhu</td>
                                                        <td>Tinggi Air</td>
                                                        <td>Waktu</td>
                                                    </tr>
                                                </thead>
                                                <tbody id='tbody'>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row text-center">
                        <div class="col-md-3">
                            <div class="panel panel-success">
                                <div class="panel-heading">Temperature</div>
                                <div class="panel-body">
                                    <div class="box_sensor" id="temperature">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    Tinggi Air
                                </div>
                                <div class="panel-body">
                                    <div id="tinggi_air" class="box_sensor"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div id="grafik"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center" id="about">
                        <h3>About</h3>
                        <div class="col-md-4">
                            <div class="container-fluid">
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">Nisa Yuniar</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="container-fluid">
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">Mohammad Rizal Azky</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="container-fluid">
                                <div class="panel panel-default">
                                    <div class="panel-heading"></div>
                                    <div class="panel-body">Dinda Ayu Ariyanto</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

       </div>



        <script src="<?php echo base_url()?>assets/Template/admin/plugins/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/Template/frontend/dist/js/script.js"></script>
        <script src="<?php echo base_url()?>assets/Template/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!--Higchart-->
        <script type="text/javascript" src="<?php echo base_url('assets/highchart/highcharts.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/highchart/exporting.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/highchart/highcharts-3d.js')?>"></script>
        <!--datatables-->
        <script src="<?php echo base_url('assets/Template/admin/plugins/datatables/jquery.dataTables.min.js') ;?>"></script>

        <script>
            
        </script>
   </body>
   </html>