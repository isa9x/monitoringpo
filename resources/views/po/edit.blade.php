@extends('layouts.dashboard')
@section('section')

    <div class="row">
                <div class="col-lg-12">
                
                @section ('pane2_panel_title', 'Input PO')
                @section ('pane2_panel_body')                    

         <div class="row-fluid">
            <a href="{{action('PoController@editBarang', $po->id)}}" class="btn btn-warning">Edit Barang PO {{ $po->nomor }}</a>
           
            <div class="span6">
                {{-- <form method="post" action="{{action('PoController@update', $id)}}">
     --}}
            {!! Form::model($po, ['method'=>'PATCH', 'route' => ['po.update', $po->id]]) !!}
            {{csrf_field()}}
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('nomor', 'Nomor PO') !!}
                        {!! Form::text('nomor', $po->nomor, array('placeholder' => 'Masukkan Nomor PO','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        {!! Form::label('nama_vendor', 'Nama Vendor') !!}
                        {!! Form::text('nama_vendor', $po->nama_vendor, array('placeholder' => 'Masukkan Nomor Nama Vendor','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        {!! Form::label('tanggal_po', 'Tanggal PO') !!}
                        {!! Form::date('tanggal_po', \Carbon\Carbon::parse($po->tanggal_po),array('class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        {!! Form::label('tanggal_kirim', 'Tanggal Kirim PO') !!}
                        {!! Form::date('tanggal_kirim', \Carbon\Carbon::parse($po->tanggal_kirim),array('class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('status', 'Status PO') !!}
                        {!! Form::text('status', $po->status, array('placeholder' => 'Masukkan Status PO','class' => 'form-control')) !!}
                    </div>
                </div>
            
                <button name="submit" class="btn btn-small btn-primary">Update data PO</button>
                
                {!! Form::close() !!}

            </div>
        </div>

              <!-- /.panel -->
   
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))

                </div>
      </div>
@stop