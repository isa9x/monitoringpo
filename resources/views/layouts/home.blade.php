@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('section')
           
            <div class="row">
                <div class="col-lg-12">
                
                @section ('pane2_panel_title', 'Responsive Timeline')
                @section ('pane2_panel_body')
                    
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))
                </div>
			</div>
@stop
