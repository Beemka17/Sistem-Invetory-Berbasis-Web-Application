

<div class="container-fluid" style="background-image: linear-gradient(to bottom right, #990000, #D27F00);">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5" style="height:530px;">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="bg-image" 
                        style="background-image: url('assets/img/login.png');
                         height: 100vh">
                            <div class="p-5">
                            <br>
                            <div class="judul">
                                <center>
                                    <img width="150px" src="<?= base_url() ?>assets/img/logo.png" alt="">
                                </center>
                            </div>
                                <br>
                                <div class="spinner">
                                    <div class="double-bounce1"></div>
                                    <div class="double-bounce2"></div>
                                </div>
                                <div class="judul">
                                    <hr class="bg-white">
                                    <br>
                                    <div class="text-center">
                                        <h1 class="h2 text-warning mb-4"><b>APLIKASI</b></h1>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h3 text-warning mb-4">INVENTORY BARANG</h1>
                                    </div>
                                    <hr class="bg-white">
                                    <div class="text-center">
                                        <h1 class="h5 text-warning mb-4">CV Hamta Makmur Sejahtera</h1>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-lg-6" style="padding-left:120px;">
                            <div class="p-5">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user"
                                            id="user" name="user" aria-describedby="usernameHelp"
                                            placeholder="Username" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="pwd" name="pwd" placeholder="Password">
                                    </div>
                                    <hr>
                                    <a href="#" onclick="proses_login()" id="login"
                                        class="btn btn-danger btn-user btn-block shadow">
                                        Login
                                    </a>
                                    <div class="form-group" style="padding-top:16px;">
                                        <p style="text-align: center; font-size: 13px;">
                                            Belum punya Akun? Silahkan Hubungi 
                                            <span><button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#exampleModal">
                                            Admin Inventory
                                            </button></span>
                                        </p>
                                        
                                        
                                        
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kontak Admin Inventory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <center>
        <img width="150px" src="<?= base_url() ?>assets/img/qr.png" alt="">
        <br>
        <p>Scan Barcode Diatas Untuk Menghubungi Admin</p>
      </center>
      </div>
      
    </div>
  </div>
</div>
        </div>
        
     


<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/login.js"></script>
<?php if($this->session->flashdata('Pesan')): ?>
<?= $this->session->flashdata('Pesan'); ?>
<?php else: ?>
<script>
$(document).ready(function() {

    let timerInterval
    Swal.fire({
        title: 'Memuat...',
        timer: 1000,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
        onClose: () => {
            clearInterval(timerInterval)
        }
    }).then((result) => {
        
    })
});
</script>
<?php endif; ?>