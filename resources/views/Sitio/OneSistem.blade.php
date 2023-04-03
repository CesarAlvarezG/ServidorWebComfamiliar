@extends('layouts.app')

@section('title','Entorno de monitoreo de calidad del aire')

@section('headspace')

    

@endsection

@section('sidebar')

@endsection

@section('userPresent')

    
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="{{asset('assets/images/users/avatar.jpg')}}" alt="John Doe"/>
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="{{asset('assets/images/users/avatar.jpg')}}" alt="John Doe"/>
            </div>
            <div class="profile-data">
                <div class="profile-data-name">INCERHC</div>
                <div class="profile-data-title">International Center Research in Health Comfamiliar</div>
            </div>
            <div class="profile-controls">
                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
            </div>
        </div>                                                                        
    </li>

@endsection



@section('content')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
                    <li><a href="#">Sistema</a></li>                    
                    <li class="active">Elemento</li>
                </ul>
                <!-- END BREADCRUMB -->                

<div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Nombre del sistema </h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                <div class="page-content-wrap">                
                
                <div class="row">
                    <div class="col-md-6">

                        <!-- START SIMPLE LINE CHART -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Particulas PM 2.5</h3>
                            </div>
                            <div class="panel-body">
                                <div id="chart-1" style="height: 300px;"><svg></svg></div>
                            </div>
                        </div>
                        <!-- END SIMPLE LINE CHART -->

                    </div>    
                    <div class="col-md-6">

                        <!-- START SIMPLE LINE CHART -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Temperatura y Humedad</h3>
                            </div>
                            <div class="panel-body">
                                <div id="chart-1" style="height: 300px;"><svg></svg></div>
                            </div>
                        </div>
                        <!-- END SIMPLE LINE CHART -->

                    </div>    
                </div>

                <div class="row">
                    <div class="col-md-6">

                        <!-- START LINE AND BAR CHART -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Intensidad de sonido</h3>

                            </div>
                            <div class="panel-body">
                                <div id="chart-7" style="height: 300px;"><svg></svg></div>
                            </div>
                        </div>
                        <!-- END LINE AND BAR CHART -->

                    </div>    
                    <div class="col-md-6">                        

                        <!-- START CUMULATIVE CHART -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Particulas de gas</h3>
                            </div>
                            <div class="panel-body">
                                <div id="chart-8" style="height: 300px;"><svg></svg></div>
                            </div>
                        </div>
                        <!-- END CUMULATIVE CHART -->

                    </div>                    
                </div>

                

                
            </div>
                   
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   
                
                <!-- PAGE CONTENT WRAPPER -->                             
@endsection


@section('footerspace')


@endsection



@section('scriptsTemplate')
    <!-- START THIS PAGE PLUGINS-->        
    <script type='text/javascript' src='{{asset('js/plugins/icheck/icheck.min.js')}}'></script>
        <script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('js/plugins/nvd3/lib/d3.v3.js')}}"></script>        
        <script type="text/javascript" src="{{asset('js/plugins/nvd3/nv.d3.min.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->        
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('js/settings.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{asset('js/actions.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/demo_charts_nvd3.js')}}"></script>

@endsection
