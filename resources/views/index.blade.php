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
                
          {{--   <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('monitoring.create') }}">Tambah Memo Baru</a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    @include('modal.modaldelete')
                    <table class="table table-bordered table-striped" data-form="deleteForm" data-toggle="dataTable">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th width="200px">Spesifikasi</th>
                            <th>Nomor Memo</th>
                            <th>Nomor PR</th>
                            <th>Nomor PO</th>
                            <th width="150px">Status</th>
                            <th>Operation</th>
                        </tr>
                    
                        @foreach ($barang as $value)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $value->nama }}</td>
                                <td>{{ $value->spesifikasi }}</td>
                                <td>{{ $value->memo->nomor }}</td>
                                <td>
                                    @isset($value->pr->nomor)
                                       {{ $value->pr->nomor }}
                                    @endisset
                                </td>
                                <td>
                                    @isset($value->po->nomor)
                                       {{ $value->po->nomor }}
                                    @endisset
                                </td>
                                <td>{{ $value->status }}</td>
                                <td>

                                    @empty($value->pr->nomor)
                                   <a class="btn btn-success" href="{{ route('inputpr',$value->id)}}">Input PR</a>
                                    @endempty
                                    @empty($value->po->nomor)
                                       <a class="btn btn-primary" href="{{ route('inputpo',$value->id)}}">Input PO</a>
                                    @endempty

                                    {!! Form::model($value, ['method' => 'delete', 'route' => ['monitoring.destroy', $value->id], 'style'=>'display:inline','class'=>'hapus']) !!}
                                    {!! Form::hidden('id', $value->id) !!}
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
@stop --}}
