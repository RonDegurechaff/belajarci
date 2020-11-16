      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

<?php
  
    foreach($DataSiswa2 as $ReadDS)
    {
  ?>

        <li><a href="<?php echo site_url('Welcome/DataSiswa'); ?>"><i class="fa fa-book"></i> <span>Data Siswa</span></a></li>
        <li><a href="<?php echo site_url('Welcome/DataPetugas'); ?>"><i class="fa fa-book"></i> <span>Data Petugas</span></a></li>
        <li><a href="<?php echo site_url('Welcome/DataKelas'); ?>"><i class="fa fa-book"></i> <span>Data Kelas</span></a></li>
        <li><a href="<?php echo site_url('Welcome/DataSPP'); ?>"><i class="fa fa-book"></i> <span>Data SPP</span></a></li> 

<?php   
    }
  
  ?>


        <li class="header">LABELS</li>
        <li><a href="<?php echo site_url('Welcome/Logout'); ?>"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li> 
      
      </ul>