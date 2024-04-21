            
            <!-- Page header -->
            <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-sync-alt fa-fw"></i> &nbsp; ACTUALIZAR ORDEN DE COMPRA
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quod harum vitae, fugit quo soluta. Molestias officiis voluptatum delectus doloribus at tempore, iste optio quam recusandae numquam non inventore dolor.
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a href="ord-new"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVA ORDEN DE COMPRA</a>
                    </li>
                    <li>
                        <a href="inbod-list"><i class="far fa-calendar-alt"></i> &nbsp; INGRESO A BODEGA</a>
                    </li>
                    <li>
                        <a href="salidas"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; SALIDA DE BODEGA</a>
                    </li>
                    <li>
                        <a href="devoluciones"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; DEVOLUCIONES</a>
                    </li>
                    <li>
                        <a href="ord-search"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR POR FECHA</a>
                    </li>
                </ul>
            </div>

            <div class="container-fluid">

                <div class="container-fluid form-neon">
                    <div class="container-fluid">
                        <br><br><br>
                        <div class="table-responsive">
                            <table class="table table-dark table-sm">
                                <thead>
                                    <tr class="text-center roboto-medium">
                                        <th>PRODUCTO</th>
                                        <th>CANTIDAD</th>
                                        <th>PRECIO UNIDAD</th>
                                        <th>TOTAL A PAGAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center" >
                                        <td>Silla plastica</td>
                                        <td>7</td>
                                        <td>$5.00</td>
                                        <td>$35.00</td>
                                    </tr>
                                    <tr class="text-center" >
                                        <td>Silla metalica</td>
                                        <td>9</td>
                                        <td>$5.00</td>
                                        <td>$45.00</td>
                                    </tr>
                                    <tr class="text-center" >
                                        <td>Mesa plastica</td>
                                        <td>5</td>
                                        <td>$10.00</td>
                                        <td>$50.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><br><br>
                    <form action="" autocomplete="off">
                        <fieldset>
                        <legend><i class="fas fa-cubes"></i> &nbsp; Informacion a Actualizar </legend>
                            <div class="container-fluid">
                                <div class="row">
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
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="container-fluid">
                                <div class="row">
                                <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="prestamo_total" class="bmd-label-floating">Precio Unidad $</label>
                                            <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" value="100.00" id="prestamo_total" maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <div class="form-group">
                                            <label for="prestamo_total" class="bmd-label-floating">Total a Pagar $</label>
                                            <input type="text" pattern="[0-9.]{1,10}" class="form-control" readonly="" value="100.00" id="prestamo_total" maxlength="10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <br><br><br>
                        <p class="text-center" style="margin-top: 40px;">
                            <button type="submit" class="btn btn-raised btn-success btn-sm"><i class="fas fa-sync-alt"></i> &nbsp; ACTUALIZAR</button>
                        </p>
                    </form>
                </div>

                <!-- MODAL PAGOS -->
                <div class="modal fade" id="ModalPago" tabindex="-1" role="dialog" aria-labelledby="ModalPago" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalPago">Agregar pago</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive" >
                                    <table class="table table-hover table-bordered table-sm">
                                        <thead>
                                            <tr class="text-center bg-dark">
                                                <th>FECHA</th>
                                                <th>MONTO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>Fecha</td>
                                                <td>Monto</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="container-fluid">
                                    <input type="hidden" name="pago_codigo_reg">
                                    <div class="form-group">
                                        <label for="pago_monto_reg" class="bmd-label-floating">Monto en $</label>
                                        <input type="text" pattern="[0-9.]{1,10}" class="form-control" name="pago_monto_reg" id="pago_monto_reg" maxlength="10" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-raised btn-info btn-sm" >Agregar pago</button> &nbsp;&nbsp; 
                                <button type="button" class="btn btn-raised btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="alert alert-danger text-center" role="alert">
                    <p><i class="fas fa-exclamation-triangle fa-5x"></i></p>
                    <h4 class="alert-heading">¡Ocurrió un error inesperado!</h4>
                    <p class="mb-0">Lo sentimos, no podemos mostrar la información solicitada debido a un error.</p>
                </div>
    
            </div>
