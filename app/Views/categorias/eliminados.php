
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?php echo $titulo; ?></h1>
                        <ol class="breadcrumb mb-4">
                           <p>
                             
                              <a href="<?php echo base_url(); ?>/categorias" class="btn btn-danger">Categorias</a> 
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
                                                <th>Opcion</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                           <?php
                                           foreach($datos as $dato){?>
                                           <tr>
                                               <td><?php echo $dato['id'] ?></td>
                                               <td><?php echo $dato['nombre'] ?></td>
                                               
                                               <td align="center"><a href="<?php echo base_url().'/categorias/reingresar/'. $dato['id']; ?> "class="btn btn-success"> <i class="fas fa-retweet"></i> </a> </td>
                                          
                                           </tr>

                                          <?php } ?>
                                           
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               
          