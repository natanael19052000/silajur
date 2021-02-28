<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('_partials/_head'); ?>
  <title> <?php echo $title; ?> </title>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">
                      Selamat Datang
                    </h1>
                    <p>
                      Silahkan Isikan data Berikut untuk Login
                    </p>
                  </div>
                  <form class="user" action="<?= base_url('login/aksi_login'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="nip" aria-describedby="emailHelp" placeholder="Masukkan Nomor Induk Pegawai">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php $this->load->view('_partials/_js'); ?>
</body>

</html>