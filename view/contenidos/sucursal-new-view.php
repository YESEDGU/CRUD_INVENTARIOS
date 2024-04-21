         <!-- Page header -->
         <div class="full-box page-header">
                <h3 class="text-left">
                    <i class="fas fa-building fa-fw"></i> &nbsp; AGREGAR SUCURSAL
                </h3>
                <p class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero nam eaque nostrum, voluptates, rerum quo. Consequuntur ut, maxime? Quibusdam ipsum maxime non veritatis dignissimos qui reiciendis, amet eum nihil! Et!
                </p>
            </div>

            <div class="container-fluid">
                <ul class="full-box list-unstyled page-nav-tabs">
                    <li>
                        <a class="active" href="sucursal-new"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR SUCURSAL</a>
                    </li>
                    <li>
                        <a href="sucursal-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE SUCURSALES</a>
                    </li>
                </ul>
            </div>

            <!--CONTENT-->
            <div class="container-fluid">
                <form action="" class="form-neon" autocomplete="off">
                    <fieldset>
                        <legend><i class="far fa-building"></i> &nbsp; Información de la Sucursal</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_nombre" class="bmd-label-floating">Nombre de la Sucursal</label>
                                        <input type="text" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ. ]{1,70}" class="form-control" name="empresa_nombre_reg" id="empresa_nombre" maxlength="70">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_email" class="bmd-label-floating">Correo</label>
                                        <input type="email" class="form-control" name="empresa_email_reg" id="empresa_email" maxlength="70">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_telefono" class="bmd-label-floating">Telefono</label>
                                        <input type="text" pattern="[0-9()+]{8,20}" class="form-control" name="empresa_telefono_reg" id="empresa_telefono" maxlength="20">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label for="empresa_direccion" class="bmd-label-floating">Dirección</label>
                                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}" class="form-control" name="empresa_direccion_reg" id="empresa_direccion" maxlength="190">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br><br><br>
                    <p class="text-center" style="margin-top: 40px;">
                        <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                        &nbsp; &nbsp;
                        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p>
                </form>
            </div>