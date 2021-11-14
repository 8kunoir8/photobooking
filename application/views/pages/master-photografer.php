
      <!-- page content -->
      <div class="right_col" role="main">

      <div class="row x_title">
          <div class="title">
            <h1><?php echo $title ?></h1>
          </div>
      </div>

       <div class="x_panel">
         <div class="x_content">
           <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td colspan='4' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newSupplier">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Nama Photografer</th>
                        <th>Harga</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->nama_photografer  ?></td>
                        <td><?php echo $con->harga ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id_photografer ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delPhogra').'/'.$con->id_photografer ?>">Delete</a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                    </tbody>
                  </table>
         </div>
       </div>
        <!-- footer content -->

        <!--modals-->
          <!-- New -->

          <div id="newSupplier" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New Photografer</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newPhogra') ?>" method="post">
                    <div class="form-group">
                      <label for="nama_photografer">Nama Photografer : </label>
                      <input id="nama_photografer" name="nama_photografer" type="text" class="form-control" placeholder="Nama Photografer" required="" />
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga : </label>
                      <input id="harga" name="harga" type="number" class="form-control" placeholder="Harga" required="" />
                    </div>
                    <div class="form-group">
                      <button name="submit-newSup" id="submit-newSup" type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>

          <!-- Edit -->
          <?php foreach($content->result() as $con): ?>
          <div id="<?php echo 'edit'.$con->id_photografer ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Photografer</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edPhogra').'/'.$con->id_photografer ?>" method="post">
                    <div class="form-group">
                      <label for="nama_photografer">Nama Photografer : </label>
                      <input id="nama_photografer" name="nama_photografer" type="text" class="form-control" placeholder="Nama Photografer" required="" value="<?php echo $con->nama_photografer ?>" />
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga : </label>
                      <input id="harga" name="harga" type="number" class="form-control" placeholder="Harga" required="" value="<?php echo $con->harga ?>" />
                    </div>
                    <div class="form-group">
                      <button name="submit-edSup" id="submit-edSup" type="submit" class="btn btn-default submit">Submit</button>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
        <?php endforeach ?>

        <!--modals-->


        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>  
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>
