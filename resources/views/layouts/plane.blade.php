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

	<script src="{{asset("js/frontend.js") }}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/popper.min.js')}}" type="text/javascript"></script>

</head>
<body>
	@yield('body')

	<script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
</body>
</html>