<div class="form-group">
					<label for="cuit" class="col-sm-2 control-label">cuit</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="cuit" name="cuit" placeholder="cuit" value="<?php echo $row['cuit']; ?>">
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="empresa" class="col-sm-2 control-label">Empresa</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" value="<?php echo $row['empresa']; ?>">
					</div>