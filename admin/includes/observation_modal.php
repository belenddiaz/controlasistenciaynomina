<!-- Add -->
<div class="modal fade" id="addobs">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Agregar Observación</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="observation_add.php">
                <div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Fecha</label>
                  	<div class="col-sm-9">
                    	<input type="date" class="form-control" id="date" name="date" required>
                  	</div>
                </div>


				<div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Empleado/s</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="employees" name="employees" required>
                  	</div>
                </div>

				<div class="form-group">
                    <label for="datepicker_edit" class="col-sm-3 control-label">Motivo de Inasistencia</label>
                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="description" name="description" required>
                  	</div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>