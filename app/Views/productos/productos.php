
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?php echo $titulo; ?></h1>
                        <ol class="breadcrumb mb-4">
                           <p>
                              <a href="<?php echo base_url(); ?>/productos/nuevo" class="btn btn-info">Agregar</a> 
                              <a href="<?php echo base_url(); ?>/productos/eliminados" class="btn btn-danger">Elimidaos</a> 
                           </p>
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabla de Productos
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Codigo</th>
                                                <th>Nombre</th>
                                                <th>precio</th>
                                                <th>Stock</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                           <?php
                                           foreach($datos as $dato){?>
                                           <tr>
                                               <td><?php echo $dato['id'] ?></td>
                                               <td><?php echo $dato['codigo'] ?></td>
                                               <td><?php echo $dato['nombre'] ?></td>
                                               <td><?php echo $dato['precio_venta'] ?></td>
                                               <td><?php echo $dato['existencia'] ?></td>
                                               <td align="center"><a href="<?php echo base_url().'/productos/editar/'. $dato['id']; ?> "class="btn btn-warning"> <i class="fas fa-pencil-ruler"></i> </a> </td>
                                               <td align="center"><a href="<?php echo base_url().'/productos/eliminar/'. $dato['id']; ?> " class="btn btn-danger " > <i class="far fa-trash-alt"></i> </a> </td>
                                              
                                               
                                           </tr>

                                          <?php } ?>
                                           
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
          