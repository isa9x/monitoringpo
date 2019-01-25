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
                
            

			
			<form method="GET" action="{{ route('api.search') }}">
            <div class="row">
				<div class="col-lg-2 pull-left">
                    <a class="btn btn-success" href="{{ route('po.create') }}">Input PO</a>
                </div>
                <div class="col-lg-4 pull-right">						
						<div class="form-group">
							{!! Form::select('kategori', array('po' => 'Berdasarkan No PO', 'barang' => 'Berdasarkan Nama Barang / Jasa'),array('class'=>'form-group')) !!}
							<button class="btn btn-success">Search</button>
						</div>
				</div>
				
				
				<div class="col-lg-6 pull-right">
						<div class="form-group">
							<input type="text" name="keyword" class="form-control" placeholder="Masukkan Keyword Pencarian">	
						</div>
				</div>
			</div> 
            </form>
            
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

{{-- Our model factory is ready, let's create some data. In your command line run: php artisan tinker and then: factory(App\Product::class, 100)->create();. You can create as many records as you want, 100 sounds perfect to me. --}}