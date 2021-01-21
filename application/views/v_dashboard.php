<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Divisi IT</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/material-icon.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/DataTables/dataTables.bootstrap4.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/divisi.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/divisi/divIT.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Divisi <b>IT</b></h3>
            </div>

            <ul class="list-unstyled components">
                <section class="p-3"></section>
                <li class="active">
                    <a href="#homeSubmenu">Home</a>
                </li>
                <li>
                    <a href="#">Menu1</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Menu2</a>
                </li>
                <li>
                    <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
                </li>
            </ul>
            </ul>
        </nav>
<!--table-->
<div class="container-xl pt-3">
    <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fa fa-align-left"></i>
            <span>Menu</span>
    </button>
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-1">
                        <img class="logo-pic-sm" src="<?php echo base_url('assets/images/sandbox.png')?>">
                    </div>
                    <div class="col-sm-6">
                    <h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
                    </div>
                    <div class="col-sm-5">
                        <a class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>						
                    </div>
                </div>
            </div>
            <table class="table table-borderless table-hover" id="example">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama</th>				
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#">Natanul</a></td>
                        
                        <td>Admin</td>
                        <td><div class="btn-acc text-center col-sm-5">Active</td></div>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons" data-toggle="modal" data-target="#exampleModal">&#xE8B8;</i></a>
                            <a href="#" class="delete"  data-toggle="tooltip" onclick="deleteRow(this)"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#">Sasuke</a></td>
                                               
                        <td>Publisher</td>
                        <td><div class="btn-acc text-center col-sm-5">Active</td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete"  data-toggle="tooltip" onclick="deleteRow(this)"><i class="material-icons">&#xE5C9;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#">Itachi</a></td>
                        
                        <td>Publisher</td>
                        <td><div class="btn-canc text-center col-sm-5">Suspended</td>                        
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete"  data-toggle="tooltip" onclick="deleteRow(this)"><i class="material-icons">&#xE5C9;</i></a>
                        </td>                        
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
<!--New User-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="container">
        <input type="text" id="NIP" class="form-control pl-4 pr-4" placeholder="NIP" required="">
        <br>
        <input type="text" id="name" class="form-control pl-4 pr-4" placeholder="Nama" required="">
        <br>
        <select class="form-select" id="role">
            <option value="">Role</option>
            <option>Divisi Umum</option>
            <option>Direksi</option>
            <option>Divisi Keuangan</option>
        </select>
        <br>
        <select class="form-select" id="status">
            <option value="">Status</option>
            <option>Active</option>
            <option>Inactive</option>
            <option>Suspended</option>
        </select>
      </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary pl-4 pr-4" onclick="addRow(this)">Save changes</button>
      </div>
    </div>
  </div>
</div>

 <script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/jquery-3.2.1.slim.min.js')?>"></script>
 <script type="text/javascript" src="<?php echo base_url('assets/vendor/DataTables/jquery.dataTables.js')?>"></script>
 <script type="text/javascript" src="<?php echo base_url('assets/vendor/DataTables/dataTables.bootstrap4.js')?>"></script>
 <script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js')?>"></script>
 <script type="text/javascript" src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.js')?>"></script>
 <script type="text/javascript" src="<?php echo base_url('assets/Js/divIT.js')?>"></script>

</body>
</html>