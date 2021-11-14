
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
                        <td colspan='7' align="center"><a class="btn btn-success col-lg-12" href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newUser">New</a></td>
                      </tr>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No HP</th>
                        <th>Password</th>
                        <th>Alamat</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($content->result() as $con): ?>
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $con->nama ?></td>
                        <td><?php echo $con->no_hp ?></td>
                        <td><?php echo $con->kata_sandi ?></td>
                        <td><?php echo $con->alamat ?></td>
                        <td align="center">
                          <a class="btn btn-warning col-lg-4" href="#" class="btn btn-warning btn-lg" data-toggle="modal" data-target="<?php echo '#edit'.$con->id_pelanggan ?>">Edit</a> 
                          <a class="btn btn-danger col-lg-4" href="<?php echo base_url('delUs').'/'.$con->id_pelanggan ?>">Delete</a>
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

          <div id="newUser" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">New Pelanggan</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('newUs') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nama">Nama : </label>
                      <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama" required="" />
                    </div>
                    <div class="form-group">
                      <label for="password">Kata Sandi : </label>
                      <input id="password" name="password" type="password" class="form-control" placeholder="Kata Sandi" required="" />
                    </div>
                    <div class="form-group">
                      <label for="no_hp">No HP : </label>
                      <input id="no_hp" name="no_hp" type="text" class="form-control" placeholder="No HP" required="" />
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat : </label>
                      <!-- <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat" required="" /> -->
                      <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Alamat"></textarea>
                    </div>
                    
                    <div class="form-group">
                      <button name="submit-newUs" id="submit-newUs" type="submit" class="btn btn-default submit">Submit</button>
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
          <div id="<?php echo 'edit'.$con->id_pelanggan ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Edit Pelanggan</h4>
                </div>
                <div class="modal-body">
                  <form role="form" action="<?php echo base_url('edUs').'/'.$con->id_pelanggan ?>" method="post">
                      <div class="form-group">
                        <label for="nama">Nama : </label>
                        <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama" required="" value="<?php echo $con->nama ?>" />
                      </div>
                      <div class="form-group">
                        <label for="password">Kata Sandi : </label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Kata Sandi" required="" value="<?php echo $con->kata_sandi ?>" />
                      </div>
                      <div class="form-group">
                        <label for="no_hp">No HP : </label>
                        <input id="no_hp" name="no_hp" type="text" class="form-control" placeholder="No HP" required="" value="<?php echo $con->no_hp ?>" />
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat : </label>
                        <!-- <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Alamat" required="" /> -->
                        <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Alamat">value="<?php echo $con->alamat ?>"</textarea>
                      </div>
                    <div class="form-group">
                      <button name="submit-edUs" id="submit-edUs" type="submit" class="btn btn-default submit">Submit</button>
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
