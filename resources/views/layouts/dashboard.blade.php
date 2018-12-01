<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Monitoring PR / PO</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link rel="stylesheet" href="{{ asset("css/styles.css") }}"  rel="stylesheet"/>
    <link href="{{asset('css/bootstrap-datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery.dataTables.min.css')}}" rel="stylesheet">

    <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" type="text/javascript"></script>

    <script src="{{asset("js/frontend.js") }}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>

</head>

<body>
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('') }}">PT. KIRANA MUSI PERSADA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       {{--  <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li> --}}
                        {{-- <li><a href="{{ url ('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li> --}}

                        {{-- pakai yang bawah --}}
       {{--  <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> --}}
                    </ul>
                </li>
            </ul>
        </nav>
            
        <div class="col-lg-12">

                {{-- <div class="col-lg-12">
                    <h2 class="page-header">@yield('page_heading')</h2>
                </div> --}}
                <!-- /.col-lg-12 -->
    
			<div class="row">  
                <div class="col-lg-12">
				@yield('section')
                </div>
            </div>
        </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
</body>
<script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>

    @yield('footer')
</html>

