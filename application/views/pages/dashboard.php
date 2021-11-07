
      <!-- page content -->
      <div class="right_col" role="main">

      <div class="row x_title">
          <div class="title">
            <h1>Dashboard</h1>
          </div>
      </div>

       <div class="x_panel">
         <div class="x_content">
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-6">
                <span class="fa fa-square"></span> Jumlah Jenis Dinamo : 
              </div>
              <div class="col-lg-6">
                <?php echo $this->db->get('jenis')->num_rows() ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-6">
                <span class="fa fa-square"></span> Jumlah Customer : 
              </div>
              <div class="col-lg-6">
                <?php echo $this->db->get('user')->num_rows() ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-6">
                <span class="fa fa-square"></span> Jumlah Pengajuan Analisa Kerusakan : 
              </div>
              <div class="col-lg-6">
                <?php echo $this->db->get('consul')->num_rows() ?>
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-6">
                <span class="fa fa-square"></span> Jumlah Pengajuan Analisa Kerusakan yang Belum di Analisa : 
              </div>
              <div class="col-lg-6">
                <?php echo $this->db->get_where('consul',array('analisa'=>NULL))->num_rows() ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-6">
                <span class="fa fa-square"></span> Jumlah Pengajuan Perbaikan : 
              </div>
              <div class="col-lg-6">
                <?php echo $this->db->get('perbaikan')->num_rows() ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="col-lg-6">
                <span class="fa fa-square"></span> Jumlah Pengajuan Perbaikan yang Belum Diterima: 
              </div>
              <div class="col-lg-6">
                <?php echo $this->db->get_where('perbaikan',array('status'=>NULL))->num_rows() ?>
              </div>
            </div>
          </div>

         </div>
       </div>
        <!-- footer content -->

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
