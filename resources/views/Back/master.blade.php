<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bantou-Energy || Admin Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('Front/images/Logo/BE/BE_Plan de travail 1.png') }}" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="Back/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="Back/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="Back/node_modules/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="Back/node_modules/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="Back/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="Back/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="Back/node_modules/jvectormap/jquery-jvectormap.css">
        <link rel="stylesheet" href="Back/node_modules/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="Back/node_modules/weather-icons/css/weather-icons.min.css">
        <link rel="stylesheet" href="Back/node_modules/c3/c3.min.css">
        <link rel="stylesheet" href="Back/node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="Back/node_modules/owl.carousel/dist/assets/owl.carousel.css">
        <link rel="stylesheet" href="Back/node_modules/owl.carousel/dist/assets/owl.theme.default.css">
        <link rel="stylesheet" href="Back/dist/css/theme.min.css">
        <script src="Back/src/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .hidden{
            display:none;
        }
    </style>
    </head>
    
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
           

            @include('Back.layout.menubarfirstpage')
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Bookmarks</h6>
                                                <h2>1,410</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-award"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">6% higher than last month</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Likes</h6>
                                                <h2>41,410</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-thumbs-up"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">61% higher than last month</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Events</h6>
                                                <h2>410</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-calendar"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">Total Events</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="state">
                                                <h6>Comments</h6>
                                                <h2>41,410</h2>
                                            </div>
                                            <div class="icon">
                                                <i class="ik ik-message-square"></i>
                                            </div>
                                        </div>
                                        <small class="text-small mt-10 d-block">Total Comments</small>
                                    </div>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-8 col-md-12">
                                                <h3 class="card-title">Visitors By Countries</h3>
                                                <div id="visitfromworld" style="width:100%; height:350px"></div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="row mb-15">
                                                    <div class="col-9">India</div>
                                                    <div class="col-3 text-right">28%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-green" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9"> UK</div>
                                                    <div class="col-3 text-right">21%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-aqua" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-15">
                                                    <div class="col-9"> USA</div>
                                                    <div class="col-3 text-right">18%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-purple" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">China</div>
                                                    <div class="col-3 text-right">12%</div>
                                                    <div class="col-12">
                                                        <div class="progress progress-sm mt-5">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card" style="min-height: 422px;">
                                    <div class="card-header"><h3>Donut chart</h3></div>
                                    <div class="card-body">
                                        <div id="c3-donut-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card">
                            <div class="card-header row">
                                <div class="col col-sm-3">
                                    <div class="dropdown d-inline-block">
                                        <a class="btn-icon checkbox-dropdown dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                        <div class="dropdown-menu" aria-labelledby="moreDropdown">
                                            <a class="dropdown-item" id="checkbox_select_all" href="javascript:void(0);">Select All</a>
                                            <a class="dropdown-item" id="checkbox_deselect_all" href="javascript:void(0);">Deselect All</a>
                                        </div>
                                    </div>
                                    <div class="card-options d-inline-block">
                                        <a href="#"><i class="ik ik-inbox"></i></a>
                                        <a href="#"><i class="ik ik-plus"></i></a>
                                        <a href="#"><i class="ik ik-rotate-cw"></i></a>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">More Action</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    <div class="card-search with-adv-search dropdown">
                                        <form action="">
                                            <input type="text" class="form-control" placeholder="Search.." required>
                                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Full Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                                <button class="btn btn-theme">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col col-sm-3">
                                    <div class="card-options text-right">
                                        <span class="mr-5">1 - 50 of 2,500</span>
                                        <a href="#"><i class="ik ik-chevron-left"></i></a>
                                        <a href="#"><i class="ik ik-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-item-wrap">
                                    <div class="list-item">
                                        <div class="item-inner">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                            <div class="list-title"><a href="javascript:void(0)">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</a></div>
                                            <div class="list-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-inbox"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </div>

                                        <div class="qickview-wrap">
                                            <div class="desc">
                                                <p>Fusce suscipit turpis a dolor posuere ornare at a ante. Quisque nec libero facilisis, egestas tortor eget, mattis dui. Curabitur viverra laoreet ligula at hendrerit. Nullam sollicitudin maximus leo, vel pulvinar orci semper id. Donec vehicula tempus enim a facilisis. Proin dignissim porttitor sem, sed pulvinar tortor gravida vitae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="item-inner">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option2">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                            <div class="list-title"><a href="javascript:void(0)">Aenean eu pharetra arcu, vitae elementum sem. Sed non ligula molestie, finibus lacus at, suscipit mi. Nunc luctus lacus vel felis blandit, eu finibus augue tincidunt.</a></div>
                                            <div class="list-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-inbox"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="qickview-wrap">
                                            <div class="desc">
                                                <p>Fusce suscipit turpis a dolor posuere ornare at a ante. Quisque nec libero facilisis, egestas tortor eget, mattis dui. Curabitur viverra laoreet ligula at hendrerit. Nullam sollicitudin maximus leo, vel pulvinar orci semper id. Donec vehicula tempus enim a facilisis. Proin dignissim porttitor sem, sed pulvinar tortor gravida vitae.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-item">
                                        <div class="item-inner">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option3">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                            <div class="list-title"><a href="javascript:void(0)">Donec lectus augue, suscipit in sodales sit amet, semper sit amet enim. Duis pretium, nisi id pretium ornare, tortor nibh sodales tellus.</a></div>
                                            <div class="list-actions">
                                                <a href="#"><i class="ik ik-eye"></i></a>
                                                <a href="#"><i class="ik ik-inbox"></i></a>
                                                <a href="#"><i class="ik ik-edit-2"></i></a>
                                                <a href="#"><i class="ik ik-trash-2"></i></a>
                                            </div>
                                        </div>
                                        <div class="qickview-wrap">
                                            <div class="desc">
                                                <p>Fusce suscipit turpis a dolor posuere ornare at a ante. Quisque nec libero facilisis, egestas tortor eget, mattis dui. Curabitur viverra laoreet ligula at hendrerit. Nullam sollicitudin maximus leo, vel pulvinar orci semper id. Donec vehicula tempus enim a facilisis. Proin dignissim porttitor sem, sed pulvinar tortor gravida vitae.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header row">
                                <div class="col col-sm-3">
                                    <div class="card-options d-inline-block">
                                        <a href="#"><i class="ik ik-inbox"></i></a>
                                        <a href="#"><i class="ik ik-plus"></i></a>
                                        <a href="#"><i class="ik ik-rotate-cw"></i></a>
                                        <div class="dropdown d-inline-block">
                                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="moreDropdown">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">More Action</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    <div class="card-search with-adv-search dropdown">
                                        <form action="">
                                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required>
                                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                            <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Name" data-column="0">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Position" data-column="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="Office" data-column="2">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col3_filter" placeholder="Age" data-column="3">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col4_filter" placeholder="Start date" data-column="4">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control column_filter" id="col5_filter" placeholder="Salary" data-column="5">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-theme">Search</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col col-sm-3">
                                    <div class="card-options text-right">
                                        <span class="mr-5" id="top">1 - 50 of 2,500</span>
                                        <a href="#"><i class="ik ik-chevron-left"></i></a>
                                        <a href="#"><i class="ik ik-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="advanced_table" class="table">
                                    <thead>
                                        <tr>
                                            <th class="nosort" width="10">
                                                <label class="custom-control custom-checkbox m-0">
                                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </th>
                                            <th class="nosort">Avatar</th>
                                            <th>Nom</th>
                                            
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Date de creation</th>
                                            
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($customers as $customer)
                                        <tr style="width:100%;">
                                            <td>
                                                <label class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
                                                    <span class="custom-control-label">&nbsp;</span>
                                                </label>
                                            </td>
                                            <td><img src="{{ asset('storage/' . $customer->avatar) }}" class="table-user-thumb" alt="{{ $customer->name }}"></td>
                                            <td>{{ $customer->name }}</td>
                                            
                                            <td>{{ $customer->email }}</td>
                                            <td class='flex-col disp'>{{ $customer->role }}
                                                <form action="{{ route('role', $customer->id) }}" method="post" id="userFormtxt" class='hidden'>
                                                    @csrf
                                                    <label for="role">Rôle:</label>
                                                    <input list="roles" id="role" name="role" required>
                                                    <datalist id="roles">
                                                        <option value="user">
                                                        <option value="responsable">
                                                        <option value="admin">
                                                    </datalist>
                                                    <br><br>
                                            
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                </form>
                                            
                                            </td>
                                            <td>{{ $customer->created_at }}</td>
                                            
                                            
                                            
                                        <td><a href="{{ route('form_user_update', $customer->id) }}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            <form action="{{ route('user.remove', $customer->id) }}" method="POST" style="display:inline;">
                                                               @csrf
                                                             @method('DELETE')
                                                                <button type="submit" style="background:transparent;border:0;"><i class="ik ik-trash-2 f-16 text-red"></i></button>
                                                            </form></td>
                                        
                                        </tr> @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="right-sidebar">
    <div class="sidebar-chat" data-plugin="chat-sidebar">
        <div class="sidebar-chat-info">
            <h6>Chat List</h6>
            <form class="mr-t-10">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search for friends ...">
                    <i class="ik ik-search"></i>
                </div>
            </form>
        </div>
        <div class="chat-list">
            <div class="list-group row">
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Gene Newman">
                    <figure class="user--online">
                        <img src="Back/img/users/1.jpg" class="rounded-circle" alt="">
                    </figure><span><span class="name">Gene Newman</span> <span class="username">@gene_newman</span>
                    </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Billy Black">
                    <figure class="user--online">
                        <img src="Back/img/users/2.jpg" class="rounded-circle" alt="">
                    </figure><span><span class="name">Billy Black</span> <span class="username">@billyblack</span>
                    </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Herbert Diaz">
                    <figure class="user--online">
                        <img src="Back/img/users/3.jpg" class="rounded-circle" alt="">
                    </figure><span><span class="name">Herbert Diaz</span> <span class="username">@herbert</span>
                    </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Sylvia Harvey">
                    <figure class="user--busy">
                        <img src="Back/img/users/4.jpg" class="rounded-circle" alt="">
                    </figure><span><span class="name">Sylvia Harvey</span> <span class="username">@sylvia</span>
                    </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item active" data-chat-user="Marsha Hoffman">
                    <figure class="user--busy">
                        <img src="Back/img/users/5.jpg" class="rounded-circle" alt="">
                    </figure><span><span class="name">Marsha Hoffman</span> <span class="username">@m_hoffman</span>
                    </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Mason Grant">
                    <figure class="user--offline">
                        <img src="Back/img/users/1.jpg" class="rounded-circle" alt="">
                    </figure><span><span class="name">Mason Grant</span> <span class="username">@masongrant</span>
                    </span>
                </a>
                <a href="javascript:void(0)" class="list-group-item" data-chat-user="Shelly Sullivan">
                    <figure class="user--offline">
                        <img src="Back/img/users/2.jpg" class="rounded-circle" alt="">
                    </figure><span><span class="name">Shelly Sullivan</span> <span
                            class="username">@shelly</span></span>
                </a>
            </div>
        </div>
    </div>
    </aside>

    <div class="chat-panel" hidden>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <a href="javascript:void(0);"><i class="ik ik-message-square text-success"></i></a>
                <span class="user-name">John Doe</span>
                <button type="button" class="close" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="card-body">
                <div class="widget-chat-activity flex-1">
                    <div class="messages">
                        <div class="message media reply">
                            <figure class="user--online">
                                <a href="#">
                                    <img src="Back/img/users/3.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Epic Cheeseburgers come in all kind of styles.</p>
                            </div>
                        </div>
                        <div class="message media">
                            <figure class="user--online">
                                <a href="#">
                                    <img src="Back/img/users/1.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Cheeseburgers make your knees weak.</p>
                            </div>
                        </div>
                        <div class="message media reply">
                            <figure class="user--offline">
                                <a href="#">
                                    <img src="Back/img/users/5.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>Cheeseburgers will never let you down.</p>
                                <p>They'll also never run around or desert you.</p>
                            </div>
                        </div>
                        <div class="message media">
                            <figure class="user--online">
                                <a href="#">
                                    <img src="Back/img/users/1.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>A great cheeseburger is a gastronomical event.</p>
                            </div>
                        </div>
                        <div class="message media reply">
                            <figure class="user--busy">
                                <a href="#">
                                    <img src="Back/img/users/5.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>There's a cheesy incarnation waiting for you no matter what you palete preferences
                                    are.</p>
                            </div>
                        </div>
                        <div class="message media">
                            <figure class="user--online">
                                <a href="#">
                                    <img src="Back/img/users/1.jpg" class="rounded-circle" alt="">
                                </a>
                            </figure>
                            <div class="message-body media-body">
                                <p>If you are a vegan, we are sorry for you loss.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="javascript:void(0)" class="card-footer" method="post">
                <div class="d-flex justify-content-end">
                    <textarea class="border-0 flex-1" rows="1" placeholder="Type your message here"></textarea>
                    <button class="btn btn-icon" type="submit"><i
                            class="ik ik-arrow-right text-success"></i></button>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer">
        <div class="w-100 clearfix">
            <span class="text-center text-sm-left d-md-inline-block">Copyright © 2018 Bantou-Energy v2.0. All Rights
                Reserved.</span>
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i
                    class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark"
                    target="_blank">Lavalite</a></span>
        </div>
    </footer>

    </div>
    </div>




    <div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog"
        aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                class="ik ik-x-circle"></i></button>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="quick-search">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <div class="input-wrap">
                                    <input type="text" id="quick-search" class="form-control"
                                        placeholder="Search..." />
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
                            <div class="app-item dropdown">
                                <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ik ik-command"></i><span>Ui</span></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
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
    <script>
        window.jQuery || document.write('<script src="Back/src/js/vendor/jquery-3.3.1.min.js"><\/script>')
    </script>
    <script src="Back/node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="Back/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="Back/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
    <script src="Back/node_modules/screenfull/dist/screenfull.js"></script>
    <script src="Back/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="Back/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="Back/node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="Back/node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="Back/node_modules/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="Back/node_modules/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
    <script src="Back/node_modules/moment/moment.js"></script>
    <script src="Back/node_modules/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="Back/node_modules/d3/dist/d3.min.js"></script>
    <script src="Back/node_modules/c3/c3.min.js"></script>
    <script src="Back/js/tables.js"></script>
    <script src="Back/js/widgets.js"></script>
    <script src="Back/js/charts.js"></script>
    <script src="Back/dist/js/theme.min.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
    <script>
        const disp = document.querySelector('.disp');
        const form = document.querySelector('#userFormtxt');
        disp.addEventListener('click', () => {
            form.classList.remove('hidden');
        });
    </script>

    </body>

</html>
