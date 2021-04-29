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

            <form method="POST" action="<?php echo base_url() ?>/unidades/actualizar" autocomplete="off">

             <?php  csrf_field();  ?>

            <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" >
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input class="form-control" id="nombre" name="nombre" type="text" value="<?php echo $datos['nombre']; ?>" required autofocus >

                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Nombre Corto</label>
                            <input class="form-control" id="nombre_corto" name="nombre_corto" type="text" required value="<?php echo $datos['nombre_corto']; ?>" >

                        </div>
                    </div>
                </div>
                <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </main>