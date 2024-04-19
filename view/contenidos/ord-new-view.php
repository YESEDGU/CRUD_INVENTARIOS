
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA ORDEN DE COMPRA
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quod harum vitae, fugit quo soluta. Molestias officiis voluptatum delectus doloribus at tempore, iste optio quam recusandae numquam non inventore dolor.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="reservation-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA ORDEN DE COMPRA</a>
                    </li>
                    <li>
                        <a href="inbod-list"><i class="far fa-calendar-alt"></i> &nbsp; INGRESO A BODEGA</a>
                    </li>
                    <li>
                        <a href="reservation-pending.html"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; SALIDA DE BODEGA</a>
                    </li>
                    <li>
                        <a href="reservation-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; DEVOLUCIONES</a>
                    </li>
                    <li>
                        <a href="reservation-search.html"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR POR FECHA</a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid">
							<div class="row">
                                <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="prestamo_fecha_inicio">Fecha Compra</label>
                                            <input type="date" class="form-control" name="prestamo_fecha_inicio_reg" id="prestamo_fecha_inicio">
                                        </div>
                                    </div>
								<div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">Numero Factura</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre_reg" id="item_nombre" maxlength="140">
									</div>
								</div>
                                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="item_nombre" class="bmd-label-floating">Nombre Proveedor</label>
										<input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre_reg" id="item_nombre" maxlength="140">
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="form-group">
										<label for="item_detalle" class="bmd-label-floating">Producto</label>
										<input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}" class="form-control" name="item_detalle_reg" id="item_detalle" maxlength="190">
									</div>
								</div>
                                <div class="col-12 col-md-4">
									<div class="form-group">
										<label for="usuario_dni" class="bmd-label-floating">Cantidad</label>
										<input type="text" pattern="[0-9-]{1,20}" class="form-control" name="usuario_dni_reg" id="usuario_dni" maxlength="20">
									</div>
								</div>
                                <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="prestamo_total" class="bmd-label-floating">Precio Unidad $</label>
                                            <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" value="100.00" id="prestamo_total" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="prestamo_total" class="bmd-label-floating">Total a pagar $</label>
                                            <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" value="100.00" id="prestamo_total" maxlength="10">
                                        </div>
                                    </div>
							</div>
						</div>
                        <div class="table-responsive">
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr class="text-center roboto-medium">
                                        <th>PRODUCTO</th>
                                        <th>CANTIDAD</th>
                                        <th>PRECIO UNIDAD</th>
                                        <th>TOTAL A PAGAR</th>
                                        <th>ELIMINAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" >
                                        <td>Silla plastica</td>
                                        <td>7</td>
                                        <td>$5.00</td>
                                        <td>$35.00</td>
                                        <!--<td>
                                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del item" data-content="Detalle completo del item">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </td> -->
                                        <td>
                                            <form action="">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center" >
                                        <td>Silla metalica</td>
                                        <td>9</td>
                                        <td>$5.00</td>
                                        <td>$45.00</td>
                                        <!--<td>
                                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del item" data-content="Detalle completo del item">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </td>-->
                                        <td>
                                            <form action="">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center" >
                                        <td>Mesa plastica</td>
                                        <td>5</td>
                                        <td>$10.00</td>
                                        <td>$50.00</td>
                                        <!--<td>
                                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del item" data-content="Detalle completo del item">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </td>-->
                                        <td>
                                            <form action="">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr class="text-center bg-light">
                                        <td><strong>TOTAL</strong></td>
                                        <td><strong>21 items</strong></td>
                                        <td colspan="1"></td>
                                        <td><strong>$130.00</strong></td>
                                        <td colspan="2"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <form action="" autocomplete="off">
                        <br><br><br>
                        <p class="text-center" style="margin-top: 40px;">
                            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                            &nbsp; &nbsp;
                            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                        </p>
                    </form>
                </div>
            </div>
