@extends('layouts.dashboard')
@section('section')

    <div class="row">
                <div class="col-lg-12">
                
                @section ('pane2_panel_title', 'Edit Barang')
                @section ('pane2_panel_body')                    

         <div class="row-fluid">
            <div class="span6">
                {!! Form::model($items, ['method'=>'PUT', 'route' => ['po.updateBarang', $id]]) !!}
                {{csrf_field()}}
             
                <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th><center>Nama Barang</center></th>
                                <th width="100px"><center>Jumlah</center></th>
                                <th width="100px"><center>Satuan</center></th>
                                <th width="200px"><center>Harga</center></th>
                            </tr>
                       </thead>
                        @foreach($items as $value)
                            <tr>
                                {{ Form::hidden('idbarang[]', $value->id) }}
                                <td>{{ Form::text('nama[]', $value->nama, array('class'=>'form-control')) }}</td>
                                <td>{{ Form::text('jumlah[]', $value->jumlah, array('class'=>'form-control')) }}</td>
                                <td>{{ Form::text('satuan[]', $value->satuan, array('class'=>'form-control')) }}</td>
                                <td>{{ Form::text('harga[]', $value->harga, array('class'=>'form-control')) }}</td>
                            </tr>
                        @endforeach
                    </table>
 
                    <button name="submit" class="btn btn-small btn-primary">Update Barang PO</button>
                
                {!! Form::close() !!}
            </div>
        </div>

              <!-- /.panel -->
   
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))

                </div>
      </div>
@stop