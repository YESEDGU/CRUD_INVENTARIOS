
            <!-- Page header -->
            <div class="full-box page-header">
			    <h3 class="text-left">
			        <i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR ORDENES DE COMPRA POR FECHA
			    </h3>
			    <p class="text-justify">
			        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia fugiat est ducimus inventore, repellendus deserunt cum aliquam dignissimos, consequuntur molestiae perferendis quae, impedit doloribus harum necessitatibus magnam voluptatem voluptatum alias!
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
			            <a class="active" href="ord-search"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR POR FECHA</a>
			        </li>
			    </ul>
			</div>

			<div class="container-fluid">
				<form class="form-neon" action="">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="busqueda_inicio_prestamo" >Fecha inicial (día/mes/año)</label>
									<input type="date" class="form-control" name="busqueda_inicio_prestamo" id="busqueda_inicio_prestamo" maxlength="30">
								</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="form-group">
									<label for="busqueda_final_prestamo" >Fecha final (día/mes/año)</label>
									<input type="date" class="form-control" name="busqueda_final_prestamo" id="busqueda_final_prestamo" maxlength="30">
								</div>
							</div>
							<div class="col-12">
								<p class="text-center" style="margin-top: 40px;">
									<button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>


			<div class="container-fluid">
				<form action="">
					<input type="hidden" name="eliminar_busqueda_prestamo" value="eliminar">
					<div class="container-fluid">
						<div class="row justify-content-md-center">
							<div class="col-12 col-md-6">
								<p class="text-center" style="font-size: 20px;">
									Fecha de busqueda: <strong>01/01/2020 &nbsp; a &nbsp; 01/01/2020</strong>
								</p>
							</div>
							<div class="col-12">
								<p class="text-center" style="margin-top: 20px;">
									<button type="submit" class="btn btn-raised btn-danger"><i class="far fa-trash-alt"></i> &nbsp; ELIMINAR BÚSQUEDA</button>
								</p>
							</div>
						</div>
					</div>
				</form>
			</div>


			<div class="container-fluid">
                <div class="table-responsive">
                    <table class="table table-dark table-sm">
                        <thead>
                            <tr class="text-center roboto-medium">
                                <th>#</th>
                                <th>FECHA DE COMPRA</th>
                                <th>PRODUCTO</th>
                                <th>CANTIDAD</th>
                                <th>PROVEEDOR</th>
                                <th>ACTUALIZAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center" >
                                <td>1</td>
                                <td>2017/10/8</td>
                                <td>PRODUCTO</td>
                                <td>300</td>
                                <td>PROVEEDOR</td>
                                <td>
                                    <a href="ord-update" class="btn btn-success">
                                            <i class="fas fa-sync-alt"></i> 
                                    </a>
                                </td>
                                <td>
                                    <form action="">
                                        <button type="button" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="text-center" >
                                <td>2</td>
                                <td>2017/10/8</td>
                                <td>PRODUCTO</td>
                                <td>500</td>
                                <td>PROVEEDOR</td>
                                <td>
                                    <a href="ord-update" class="btn btn-success">
                                            <i class="fas fa-sync-alt"></i> 
                                    </a>
                                </td>
                                <td>
                                    <form action="">
                                        <button type="button" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="text-center" >
                                <td>3</td>
                                <td>2017/10/8</td>
                                <td>PRODUCTO</td>
                                <td>850</td>
                                <td>PROVEEDOR</td>
                                <td>
                                    <a href="ord-update" class="btn btn-success">
                                            <i class="fas fa-sync-alt"></i> 
                                    </a>
                                </td>
                                <td>
                                    <form action="">
                                        <button type="button" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <tr class="text-center" >
                                <td>4</td>
                                <td>2017/10/8</td>
                                <td>PRODUCTO</td>
                                <td>980</td>
                                <td>PROVEEDOR</td>
                                <td>
                                    <a href="ord-update" class="btn btn-success">
                                            <i class="fas fa-sync-alt"></i> 
                                    </a>
                                </td>
                                <td>
                                    <form action="">
                                        <button type="button" class="btn btn-warning">
                                                <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>