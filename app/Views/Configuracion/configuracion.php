<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?php echo $titulo; ?></h1>

            <?php if (isset($validation)) { ?>
                <div class="alert alert-danger">
                    <?php echo $validation->listErrors(); ?>
                </div>
            <?php  } ?>

            <ol class="breadcrumb mb-4">
            </ol>

            <form method="POST" action="<?php echo base_url() ?>/configuracion/actualizar" autocomplete="off">
                <?php csrf_field();  ?>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre de la tienda</label>
                            <input class="form-control" id="tienda_nombre" name="tienda_nombre" type="text" value=" <?php echo $nombre['valor']; ?>" required autofocus>

                        </div>
                        <div class="col-12 col-sm-6">
                            <label>RFC</label>
                            <input class="form-control" id="tienda_rfc" name="tienda_rfc" value=" <?php echo $rfc['valor']; ?>" required type="text">

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Telefono</label>
                            <input class="form-control" id="tienda_telefono" name="tienda_telefono" type="text" value=" <?php echo $telefono['valor']; ?>" required autofocus>

                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Correo Electronico</label>
                            <input class="form-control" id="tienda_email" name="tienda_email" value=" <?php echo $email['valor']; ?>" required type="text">

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Direccion</label>
                            <textarea class="form-control" name="tienda_direccion" id="tienda_direccion" type="text">  <?php echo $direccion['valor']; ?></textarea>

                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Leyenda ticket</label>
                            <textarea class="form-control" name="ticket_leyenda" id="ticket_leyenda" type="text"> <?php echo $ticket['valor']; ?> </textarea>

                        </div>
                    </div>
                </div>
                <br>
            <br>
            <ol class="breadcrumb mb-4">
            </ol>

                <a href="<?php echo base_url(); ?>/configuracion" class="btn btn-primary">Regresar</a>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>

            

        </div>
    </main>