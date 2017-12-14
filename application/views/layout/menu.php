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
            <li><a href="<?php echo base_url();?>Ccalendar"><i class="fa fa-circle-o"></i> Calendario</a></li>
             <li><a href="<?php echo base_url();?>cagregar"><i class="fa fa-circle-o"></i> Agregar publicación</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="glyphicon glyphicon-stats"></i> <span>Administrar Publicaciones</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>fb"><i class="fa fa-circle-o"></i> Publicaciones</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Generacion de reportes KPI's</a>
            <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>like"><i class="fa fa-circle-o"></i>Reporte de Likes</a></li>
            <li><a href="<?php echo base_url();?>comen"><i class="fa fa-circle-o"></i>Reporte de Comentarios</a></li>
            <li><a href="<?php echo base_url();?>shares"><i class="fa fa-circle-o"></i>Reporte de Compartidos</a></li>
          </ul>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Administrar Usuarios</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>registro"><i class="fa fa-circle-o"></i>Agregar Usuario</a></li>
            <li><a href="<?php echo base_url();?>verusr/listauser"><i class="fa fa-circle-o"></i>Ver Usuarios</a>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i><span>Nuevas opciones(Desarrollo)</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>publicar"><i class="fa fa-circle-o"></i>Publicacion</a></li>
            <!-- <li><a href="<?php echo base_url();?>page"><i class="fa fa-circle-o"></i>Paginas Feed</a></li> -->
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <div class="content">