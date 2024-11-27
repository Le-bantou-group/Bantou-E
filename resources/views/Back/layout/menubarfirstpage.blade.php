<div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="{{ route('admin') }}">
                            <div class="logo-img">
                              <img src="{{ asset('Front/images/Logo/BE/BE_Plan de travail 1.png') }}"  alt="lavalite" style='width:100%;'> 
                            </div>
                            <span class="text">Bantou-Energy</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded" class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>
                    
                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <div class="nav-item active">
                                    <a href="{{ route('admin') }}"><i class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="{{ route('real_view') }}" class="menu-item">Nos Réalisation</a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="{{ route('product_view') }}" class="menu-item">Produits</a>
                                </div>
                                
                                <div class="nav-lavel">Pages</div>

                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-lock"></i><span>Authentication</span></a>
                                    <div class="submenu-content">
                                        <a href="{{ route('login') }}" class="menu-item">Login</a>
                                        <a href="{{ route('register') }}" class="menu-item">Register</a>
                                        <a href="{{ route('reset') }}" class="menu-item">Forgot Password</a>
                                    </div>
                                </div>
                                <div class="nav-item">
                                    <a href="{{ route('realisation') }}"><i class="ik ik-layout"></i><span>BE-store</span><span class="badge badge-success">New</span></a>
                                </div>
                                <div class="nav-item has-sub">
                                    <a href="#"><i class="ik ik-file-text"></i><span>Prestation des services</span></a>
                                    <div class="submenu-content">
                                        <a href="{{ route('audits') }}" class="menu-item">Audits</a>
                                        <a href="{{ route('modelisation') }}" class="menu-item">Modelisation</a>
                                        <a href="{{ route('conception') }}" class="menu-item">Conception</a>
                                        <a href="{{ route('solution') }}" class="menu-item">Solutoins</a>
                                        <a href="{{ route('vente') }}" class="menu-item">Vente de KEA</a>
                                    </div>
                                </div>
                                
                                <div class="nav-item">
                                    <a href="{{ route('store') }}"><i class="ik ik-layout"></i><span>BE-store</span><span class="badge badge-success">New</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="{{ route('contact') }}"><i class="ik ik-layout"></i><span>Contact</span><span class="badge badge-success">New</span></a>
                                </div>
                                <div class="nav-lavel">Support</div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-monitor"></i><span>Documentation</span></a>
                                </div>
                                <div class="nav-item">
                                    <a href="javascript:void(0)"><i class="ik ik-help-circle"></i><span>Submit Issue</span></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>