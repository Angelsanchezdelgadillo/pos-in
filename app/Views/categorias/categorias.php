
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?php echo $titulo; ?></h1>
                        <ol class="breadcrumb mb-4">
                           <p>
                              <a href="<?php echo base_url(); ?>/categorias/nuevo" class="btn btn-info">Agregar</a> 
                              <a href="<?php echo base_url(); ?>/categorias/eliminados" class="btn btn-danger">Elimidaos</a> 
                           </p>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabla de categorias
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                           <?php
                                           foreach($datos as $dato){?>
                                           <tr>
                                               <td><?php echo $dato['id'] ?></td>
                                               <td><?php echo $dato['nombre'] ?></td>
                                               <td align="center"><a href="<?php echo base_url().'/categorias/editar/'. $dato['id']; ?> "class="btn btn-warning"> <i class="fas fa-pencil-ruler"></i> </a> </td>
                                               <td align="center"><a href="<?php echo base_url().'/categorias/eliminar/'. $dato['id']; ?> " class="btn btn-danger " > <i class="far fa-trash-alt"></i> </a> </td>
                                              
                                               
                                           </tr>

                                          <?php } ?>
                                           
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
          