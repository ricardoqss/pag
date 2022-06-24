<!doctype html>
<html lang="pt-br">
    <head>
        <!-- META SECTION -->
        <title>QSS NET</title>
        <meta name="title" content="SS NET">
        <meta name="description" content="QSS NET"> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->

        <!-- Bootstrap Css -->
        <link href="./css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

        <!-- Icons Css -->
        <link href="./css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App Css-->
        <link href="./css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Noty CSS -->
        <link rel="stylesheet" href="../../cdn.jsdelivr.net/gh/needim/noty%4077268c46/lib/noty.html">
        <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.html">

        <!-- SCRIPT -->
        <script>button.onclick = verifica;</script> 
    </head>

    <body data-layout="horizontal" data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">


            <div class="main-content mt-5">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                     
                        <div class="row">
                            <div class="col-md-3 col-xl-12">
                                <div class="card">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-xl-3 border-right">
                                            <div class="text-center p-sm-4 pt-4 mt-2">
                                                <div class="avatar-md mx-auto border border-soft-primary p-1 rounded-circle mb-2" style="height: 6rem;width: 6rem;">

                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary h3">

                                                        <img class="square" width="160" height="160" src="img/E.png">

                                                    </span>

                                                </div>
                                            </div>
                                        </div>


                                      
                                        <div class="col-xl-3 border-left">
                                            <div class="text-center p-sm-4 pt-4">
                                                <div class="mx-auto p-1 mb-2">
                                                    <a onclick="initDownload('href')" type="button" class="btn btn-primary btn-lg waves-effect waves-light" href="./apk/QSSNET.apk"><i class="uil-google-play mr-2"></i>BAIXAR APP</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

        </div>

        <!-- JAVASCRIPT -->
        <script type="text/javascript">

            function initDownload() 

                location.href = lnk;
                button.onclick = verifica;

                new Noty({

                    type: 'success',
                    layout: 'bottomCenter',
                    theme: 'metroui',
                    timeout: 3000,
                    animation: {
                        open: 'animated fadeInUp',
                        close: 'animated fadeOutDown'
                    },

                    text: 'Iniciando o download do aplicativo...'

                }).show();
        </script>
        <!-- FIM JAVASCRIPT -->

    </body>
</html>





