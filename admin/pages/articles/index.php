<?php 

  include_once('../authen.php');
  $sql = "SELECT * from `articles`";
  $result = $conn->query($sql);



?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Articles Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="../../../assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="../../../assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../../../assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="../../../assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Style -->
  <link rel="stylesheet" href="../../dist/css/style.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- Bootstrap-toggle -->
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar & Main Sidebar Container -->
  <?php include_once('../includes/sidebar.php') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Articles Management</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active">Articles Management</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title d-inline-block">Contents List</h3>
          <a href="form-create.php" class="btn btn-primary float-right ">Add Articles +</a href="">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Image</th>
              <th>Subject</th>
              <th>Subtitle</th>
              <th>Writer</th>
              <th>Status</th>
              <th>Updated</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php 
              $num = 0;
              while($row = $result->fetch_assoc()) { 
                //print_r($row);
                $num++;
            ?>
              <tr>
                <td><?php echo $num; ?></td>
                <td><img class="img-fluid d-block mx-auto" src="<?php echo '../../../assets/images/blog/'.$row['image'] ?>" width="150px" alt=""></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['sub_title']; ?></td>
                <td><?php echo $row['writer']; ?></td>
                <td><input type="checkbox" class="toggle-event" data-id="<?php echo $row['id']; ?>" name="status" type="checkbox" <?php echo $row['status'] == 'true' ? 'checked': ''; ?>  data-toggle="toggle" data-on="Active" data-off="Block" data-style="ios"></td>
                <td><?php echo date_format(new DateTime($row['updated_at']),"j F Y | H:i") ; ?></td>
                <td>
                  <a href="form-edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning text-white">
                    <i class="fas fa-edit"></i>
                  </a> 
                  <a href="#" onclick="deleteItem(<?php echo $row['id']; ?>);" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i>
                  </a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- footer -->
  <?php include_once('../includes/footer.php') ?>
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- DataTables -->
<script src="https://adminlte.io/themes/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Bootstrap-toggle -->
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });

  function deleteItem (id) { 
    if( confirm('Are you sure, you want to delete this item?') == true){
      window.location=`delete.php?id=${id}`;
      // window.location='delete.php?id='+id;
    }
  };

  function deleteItem (id) { 
    if( confirm('Are you sure, you want to delete this item?') == true){
      window.location=`delete.php?id=${id}`;
      // window.location='delete.php?id='+id;
    }
  };

  $('.toggle-event').change(function(){
    $.ajax({
      method: "POST",
      url: "active.php",
      data: { 
        id: $(this).data('id'), 
        value: $(this).is(':checked') 
      }
    })
    .done(function( resp, status, xhr) {
      setTimeout(() => {
        alert(status)
      }, 300);
    })
    .fail(function ( xhr, status, error) { 
      alert(status +' '+ error)
    })
  })

</script>

</body>
</html>
