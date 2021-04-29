<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?php echo $titulo; ?></h1>
            
            <?php  if(isset($validation)){ ?>
            <div class="alert alert-danger">
            <?php echo $validation->listErrors();?>
            </div>
            <?php  } ?>

            <ol class="breadcrumb mb-4">

            </ol>
            <form method="POST" action="<?php echo base_url() ?>/usuarios/insertar" autocomplete="off">
             
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Usuario</label>
                            <input class="form-control" id="usuario" name="usuario" type="text" value=" <?php echo set_value('usuario')?>" required >

                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" value=" <?php echo set_value('nombre')?>" required type="text">

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Contraseña</label>
                            <input class="form-control" id="password" name="password" type="password" value="<?php echo set_value('password')?>" >

                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Confirma la contraseña</label>
                            <input class="form-control" id="repassword" name="repassword" value="<?php echo set_value('repassword')?>"  type="password">

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Caja</label>
                            <select class="form-control" id="id_caja" name="id_caja" aria-label="Default select example" >
                                <option selected>selecciona una caja</option>
                                <?php foreach ($cajas as $caja) {  ?>
                                    <option value="  <?php echo $caja['id']; ?> "> <?php echo $caja['nombre']; ?> </option>
                                <?php }  ?>
                            </select>

                        </div>

                        <div class="col-12 col-sm-6">
                            <label>Rol</label>
                            <select class="form-control" id="id_rol" name="id_rol" aria-label="Default select example" >
                                <option selected>selecciona un rol</option>
                                <?php foreach ($roles as $rol) {  ?>
                                    <option value="  <?php echo $rol['id']; ?> "> <?php echo $rol['nombre']; ?> </option>
                                <?php }  ?>
                            </select>

                        </div>
                    </div>
                </div>

                <a href="<?php echo base_url(); ?>/usuarios" class="btn btn-primary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </main>