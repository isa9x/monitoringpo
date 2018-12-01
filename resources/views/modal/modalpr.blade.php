{{-- <style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 10px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style> --}}

<div id="pr01" class="modal">
  
   <div class="container">

    {!! Form::open(array('route' =>'storepr','method'=>'POST','class'=>'modal-content animate')) !!}
    
    <div class="modal-header">
      INPUT NOMOR PO
      <span onclick="document.getElementById('pr01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('nomor', 'Nomor PR') !!}<br>
        {!! Form::text('nomor', null, array('placeholder' => 'Masukkan Nomor PR','class' => 'form-control')) !!}
    </div>

     <div class="form-group">
        {!! Form::label('tanggal', 'Tanggal TTD Manager') !!}
        {!! Form::date('tanggal_ttd_manager', \Carbon\Carbon::now(),array('class' => 'form-control')) !!}
     </div>

     <div class="form-group">
        {!! Form::label('tanggal', 'Tanggal TTD Dirops') !!}
        {!! Form::date('tanggal_ttd_dirops', \Carbon\Carbon::now(),array('class' => 'form-control')) !!}
     </div>

     <button type="button" onclick="document.getElementById('pr01').style.display='none'" class="btn btn-danger">Batal</button>
     <button type="submit" class="btn btn-success">Simpan</button>

    {!! Form::close() !!}

  </div>
  {{-- <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form> --}}

</div>
