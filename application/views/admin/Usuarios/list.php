<!-- START Main section-->
<section>
   <!-- START Page content-->
   <section class="main-content">
      <button type="button" class="btn btn-labeled btn-primary pull-right">
         <span class="btn-label"><i class="fa fa-plus-circle"></i>
         </span>Agregar Usuario</button>
      <h3>Usuarios
         <br>
         <small>Lista</small>
      </h3>

      <!-- START DATATABLE 3-->
      <div class="row">
         <div class="col-lg-12">
            <div class="panel panel-default">
               <div class="panel-heading">Lista de usuarios |
                  <small>Column Visibility</small>
               </div>
               <div class="panel-body">
                  <table id="datatable3" class="table table-striped table-hover">
                     <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>nombre de Usuario</th>
                          <th class="sort-numeric">Engine version</th>
                          <th class="sort-alpha"></th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php  if(!empty($usuarios)):?>
                         <?php $cont = 1; ?>
                         <?php foreach ($usuarios as $usuario): ?>
                               <tr class="gradeX">
                                  <td><?php echo $cont; ?></td>
                                  <td><?php echo $usuario->nombres; ?></td>
                                  <td><?php echo $usuario->apellidos; ?></td>
                                  <td><?php echo $usuario->email; ?></td>
                                  <td><?php echo $usuario->username; ?></td>

                                  <td>
                                    <div class="btn-group">
                                      <a href="#" class="btn btn-oval btn-primary"> <span class="fa fa-eye"></span> </a>
                                      <a href="#" class="btn btn-warning"> <span class="fa fa-pencil"></span> </a>
                                      <a href="#" class="btn btn-oval btn-danger"> <span class="fa fa-trash-o"></span> </a>
                                    </div>
                                  </td>
                              </tr>
                              <?php $cont++; ?>
                        <?php endforeach; ?>
                      <?php endif; ?>
                        <tfoot>
                           <tr>
                             <th>#</th>
                             <th>Nombre</th>
                             <th>Apellido</th>
                             <th>E-mail</th>
                             <th>nombre de Usuario</th>
                           </tr>
                        </tfoot>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
      <!-- END DATATABLE 3-->

   </section>
   <!-- END Page content-->
</section>
<!-- END Main section-->


</section>
<!-- END Main wrapper-->
