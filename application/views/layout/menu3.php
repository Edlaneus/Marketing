<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('s_usuario');?></p>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Gestion de Publicaciones</span> 
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Ccalendar3"><i class="fa fa-circle-o"></i> Calendario</a></li> 
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-stats"></i> <span>Administrar Publicaciones</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>fb3"><i class="fa fa-circle-o"></i> Publicaciones</a></li>
             
          </ul>
        </li>

         

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i><span>Nuevas opciones(Desarrollo)</span>
          </a> 
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <div class="content">