<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Widget Data | Bantou - Energy Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ asset('Front/images/Logo/BE/BE_Plan de travail 1.png') }}" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ asset('Back/node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Back/node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Back/node_modules/ionicons/dist/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Back/node_modules/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Back/node_modules/perfect-scrollbar/css/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('Back/node_modules/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Back/node_modules/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Back/node_modules/icon-kit/dist/css/iconkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('Back/node_modules/chartist/dist/chartist.css') }}">
        <link rel="stylesheet" href="{{ asset('Back/dist/css/theme.min.css') }}">
        <script src="{{ asset('Back/src/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
  @include('Back.layout.header')          

            <div class="page-wrap">
                @include('Back.layout.menubar')
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="ik ik-layers bg-blue"></i>
                                        <div class="d-inline">
                                            <h5>Gestion de produits</h5>
                                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="Back/index.html"><i class="ik ik-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="#">Widgets</a>
                                            </li>
                                            <li class="breadcrumb-item active" aria-current="page">Widget Data</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- product and new customar start -->
                            
                            
                            <aside style='width:100%;display:flex;justify-content:center;align-item:center;'>
                            
                                <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header"><h3>Nouveau produits</h3></div>
                                    <div class="card-body">
                                        <form class="forms-sample" method='POST' action='{{ route('form_product') }}' enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputName1">Nom du produit</label>
                                                <input type="text" class="form-control" name='nom' id="exampleInputName1" placeholder="Nom">
                                            </div>
                                            <div class="form-group">
                                                <label for="examplestock">Quantité en stock</label>
                                                <input type="text" class="form-control" name='stock' id="examplestock" placeholder="Quantité">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="price">Prix</label>
                                                        <input type="text" name='prix' class="form-control" id="price" placeholder="20.000CFA">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputName1">Nombre d'étoile</label>
                                                <input type="number" class="form-control" name='etoile' id="exampleInputName1" placeholder="[0-5]">
                                            </div>
                                            <div class="form-group">
                                                <label for="code">Code</label>
                                                <input type="text" class="form-control" name='code' id="code" placeholder="TS0-04">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for='image'>Thumbnail</label>
                                                <input type="file" name="image" id='image' class="file-upload-default">
                                                <div class="input-group col-xs-12">
                                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                                    <span class="input-group-append">
                                                    <label for='image'  class="file-upload-browse btn btn-primary h-100 d-flex justify-center align-items-lg-center" >Upload</label>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleTextarea1">Description</label>
                                                <textarea class="form-control" name='description' id="exampleTextarea1" rows="4"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Valider</button>
                                            <button class="btn btn-light">Annuler</button>
                                        </form>
                                    </div>
                                </div>
                            
                            </aside>
                            <div class="w-100">
                                <div class="card table-card" >
                                    <div class="card-header">
                                        <h3>New Products</h3>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                                <li><i class="ik ik-minus minimize-card"></i></li>
                                                <li><i class="ik ik-x close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Product Name</th>
                                                        <th>Image</th>
                                                        <th>Status</th>
                                                        <th>Etoile</th>
                                                        <th>Quantité en stock</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($produits as $product)
                                                    <tr>
                                                        <td>{{$product->nom}}</td>
                                                        <td><img src="{{ asset('storage/' . $product->image) }}" alt="{{$product->nom}}" class="img-fluid img-20"></td>
                                                        <td>
                                                            <div class="p-status bg-green"></div>
                                                        </td>
                                                        <td>{{$product->etoile}}</td>
                                                        <td>{{$product->stock}}</td>
                                                        <td>{{$product->prix}}CFA</td>
                                                        <td>
                                                            <a href="{{ route('form_product_update',$product->id) }}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                                            
                                                            <a href="/Dashboard/remove/{{ $product->id }}" style="background:transparent;border:0;"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                                            
                                                        </td>
                                                    </tr>
                                                @endforeach    
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                <footer class="footer">
                    <div class=" clearfix" style='width:100vw;'>
                        <span class="textenter text-sm-left d-md-inline-block">Copyright © 2018 ThemeKit v1.0. All Rights Reserved.</span>
                        <span class="float-none float-sm-right mt-1 mt-sm-0 textenter">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
                    </div>
                </footer>
            </div>
        </div>
        
        
        

        <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="quick-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="input-wrap">
                                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                                        <i class="ik ik-search"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="container">
                            <div class="apps-wrap">
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-mail"></i><span>Message</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-users"></i><span>Accounts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-shopping-cart"></i><span>Sales</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-briefcase"></i><span>Purchase</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-server"></i><span>Menus</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-clipboard"></i><span>Pages</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-message-square"></i><span>Chats</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-map-pin"></i><span>Contacts</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-box"></i><span>Blocks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-calendar"></i><span>Events</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-bell"></i><span>Notifications</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-pie-chart"></i><span>Reports</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-layers"></i><span>Tasks</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-edit"></i><span>Blogs</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-settings"></i><span>Settings</span></a>
                                </div>
                                <div class="app-item">
                                    <a href="#"><i class="ik ik-more-horizontal"></i><span>More</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src="Back/src/js/vendor/jquery-3.3.1.min.js"')</script>
        <script src="{{ asset('Back/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('Back/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('Back/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
        <script src="{{ asset('Back/node_modules/screenfull/dist/screenfull.js') }}"></script>
        <script src="{{ asset('Back/node_modules/owl.carousel/dist/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('Back/node_modules/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('Back/node_modules/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{ asset('Back/node_modules/flot-charts/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('Back/node_modules/flot.curvedlines/curvedLines.js') }}"></script>
        <script src="{{ asset('Back/node_modules/jquery.flot.tooltip/js/jquery.flot.tooltip.js') }}"></script>
        <script src="{{ asset('Back/dist/js/theme.min.js') }}"></script>
        <script src="{{ asset('Back/js/widget-data.js') }}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>