@extends('layouts.dashboard')
@section('section')

    <div class="row">
                <div class="col-lg-12">
                
                @section ('pane2_panel_title', 'Input PO')
                @section ('pane2_panel_body')                    

         <div class="row-fluid">
            <div class="span6">
                {!! Form::open(array('route' =>'po.store','method'=>'POST')) !!}
        
                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('nomor', 'Nomor PO') !!}
                        {!! Form::text('nomor', null, array('placeholder' => 'Masukkan Nomor PO','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('nama_vendor', 'Nama Vendor') !!}
                        {!! Form::text('nama_vendor', null, array('placeholder' => 'Masukkan Nomor Nama Vendor','class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('tanggal_po', 'Tanggal PO') !!}
                        {!! Form::date('tanggal_po', \Carbon\Carbon::now(),array('class' => 'form-control')) !!}
                    </div>
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3">
                    <div class="form-group">
                        {!! Form::label('tanggal_kirim', 'Tanggal Kirim PO') !!}
                        {!! Form::date('tanggal_kirim', \Carbon\Carbon::now(),array('class' => 'form-control')) !!}
                    </div>
                </div>
                               
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th><center>Nama Barang</center></th>
                                <th width="100px"><center>Jumlah</center></th>
                                <th width="100px"><center>Satuan</center></th>
                                <th width="200px"><center>Harga</center></th>
                                <th width="200px"></th>
                            </tr>
                        </thead>
                        <!--elemet sebagai target append-->
                        <tbody id="itemlist">
                            <tr>
                                <td>{{ Form::text('nama[]', null, array('class'=>'form-control')) }}</td>
                                <td>{{ Form::text('jumlah[]', null, array('class'=>'form-control')) }}</td>
                                <td>{{ Form::text('satuan[]', null, array('class'=>'form-control')) }}</td>
                                <td>{{ Form::text('harga[]', null, array('class'=>'form-control')) }}</td>
                                <td></td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button class="btn btn-success" onclick="additem(); return false">TAMBAH</button>
                                    <button name="submit" class="btn btn-small btn-primary">SIMPAN</button>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                {!! Form::close() !!}
 
 
            </div>
                    <?php
                        if (isset($_POST['submit'])) {
                            $nama = $_POST['nama'];
                            $jumlah = $_POST['jumlah'];
                            $satuan = $_POST['satuan'];
                            $harga = $_POST['harga'];  
                        }
                    ?>
        </div>

              <!-- /.panel -->
   
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'pane2'))

                </div>
      </div>

@section('footer')
        <script>
            var i = 1;
            function additem() {
//                menentukan target append
                var itemlist = document.getElementById('itemlist');
                
//                membuat element
                var row = document.createElement('tr');
                var n = document.createElement('td');
                var j = document.createElement('td');
                var sa = document.createElement('td');
                var h = document.createElement('td');
                var aksi = document.createElement('td');
 
//                meng append element
                itemlist.appendChild(row);
                row.appendChild(n);
                row.appendChild(j);
                row.appendChild(sa);
                row.appendChild(h);
                row.appendChild(aksi);
 
//                membuat element input
                var nama = document.createElement('input');
                nama.setAttribute('name', 'nama[' + i + ']');
                nama.setAttribute('class', 'form-control');
 
                var jumlah = document.createElement('input');
                jumlah.setAttribute('name', 'jumlah[' + i + ']');
                jumlah.setAttribute('class', 'form-control');

                var satuan = document.createElement('input');
                satuan.setAttribute('name', 'satuan[' + i + ']');
                satuan.setAttribute('class', 'form-control');

                var harga = document.createElement('input');
                harga.setAttribute('name', 'harga[' + i + ']');
                harga.setAttribute('class', 'form-control');                

                var hapus = document.createElement('span');
 
//                meng append element input
                n.appendChild(nama);
                j.appendChild(jumlah);
                sa.appendChild(satuan);
                h.appendChild(harga);
                aksi.appendChild(hapus);
 
                hapus.innerHTML = '<button class="btn btn-danger">HAPUS</button>';
//                membuat aksi delete element
                hapus.onclick = function () {
                    row.parentNode.removeChild(row);
                    i=i-1;
                }; 
                i++;
            }
        </script>
@endsection

@stop