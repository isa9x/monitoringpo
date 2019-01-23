@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('section')

            <div class="row">
                <div class="col-lg-12">
                
                @section ('pane2_panel_title', 'Monitoring PR / PO')
                @section ('pane2_panel_body')
                    
                {{-- @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif --}}
                
    				<div class="pull-right">
                        <a class="btn btn-success" href="{{URL::previous()}}">Kembali</a>
                    </div>
			
            <div class="row">
                <div class="col-lg-12">
                    @include('modal.modaldelete')
                    <table class="table table-bordered table-striped" data-form="deleteForm" data-toggle="dataTable">
                        <tr>
                            <th>No</th>
                            <th>Nomor PO</th>
                            <th>Nama Barang / Jasa</th>
                            <th>Tanggal PO</th>
                            <th>Tanggal Kirim Ke Vendor</th>
                            <th>Nama Vendor</th>
                            <th width="300px">Status</th>
                            <th>Operation</th>
                        </tr>
                    	
	                        @foreach ($barang as $value)
	                            <tr>
	                                <td>{{ ++$i }}</td>
	                                <td>{{ $value->po->nomor }}</td>
	                                <td>{{ $value->nama }}</td>
	                                <td>{{ \Carbon\Carbon::parse($value->po->tanggal_po)->format('d/m/Y') }}</td>
	                                <td>{{ \Carbon\Carbon::parse($value->po->tanggal_kirim)->format('d/m/Y') }}</td>
	                                <td>{{ $value->po->nama_vendor }}</td>
	                                <td>{{ $value->po->status }}</td>
	                                <td>
	                                    <a href="{{action('PoController@edit', $value->po_id)}}" class="btn btn-warning">Edit</a>
	                                    {!! Form::model($value, ['method' => 'delete', 'route' => ['po.destroy', $value->po_id], 'style'=>'display:inline','class'=>'hapus']) !!}
	                                   {!! Form::hidden('id', $value->po_id) !!}
	                                    {!! Form::submit(trans('Hapus'), ['class' => 'btn btn-danger delete', 'name' => 'delete_modal']) !!}
	                                    {!! Form::close() !!}

	                                </td>
	                            </tr>
	                        @endforeach                    
                    </table>
                    
                    {!! $barang->render() !!}

                @endsection

                </div>
            </div>
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))
                </div>
			</div>

<script type="text/javascript">
    $('table[data-form="deleteForm"]').on('click', '.hapus', function(e){
    e.preventDefault();
    var $form=$(this);
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .on('click', '#delete-btn', function(){
            $form.submit();
        });
    });

    $('#pr01').modal({ backdrop: 'static', keyboard: false })

    var modal = document.getElementById('pr01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>
@stop