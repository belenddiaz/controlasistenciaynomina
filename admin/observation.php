<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Observaciones de Inasistencias
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Observaciones</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i>¡Proceso Exitoso!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addobs" data-toggle="modal" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-plus"></i> Nueva Observación</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <th>Fecha</th>
                  <th>Empleado/s</th>
                  <th>Motivo de Inasistencia</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT `description`,`employees` ,`date` FROM `observation`";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          <td>".date('d-m-Y', strtotime($row['date']))."</td>
                          <td>".$row['employees']."</td>
                          <td>".$row['description']."</td>
                        </tr>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/observation_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
<script>
// $(function(){
//   $('.edit').click(function(e){
//     e.preventDefault();
//     $('#edit').modal('show');
//     var id = $(this).data('id');
//     getRow(id);
//   });

//   $('.delete').click(function(e){
//     e.preventDefault();
//     $('#delete').modal('show');
//     var id = $(this).data('id');
//     getRow(id);
//   });
// });

// function getRow(id){
//   $.ajax({
//     type: 'POST',
//     url: 'attendance_row.php',
//     data: {id:id},
//     dataType: 'json',
//     success: function(response){
//       $('#datepicker_edit').val(response.date);
//       $('#attendance_date').html(response.date);
//       $('#edit_time_in').val(response.time_in);
//       $('#edit_time_out').val(response.time_out);
//       $('#attid').val(response.attid);
//       $('#employee_name').html(response.firstname+' '+response.lastname);
//       $('#del_attid').val(response.attid);
//       $('#del_employee_name').html(response.firstname+' '+response.lastname);
//     }
//   });
// }
</script>
</body>
</html>
