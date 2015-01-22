<!DOCTYPE html>
<html lang="en">
<head>
        <?php
        session_start();
        include_once './includes/file_const.php';
        include_once './includes/connection.php';
        include_once './includes/sql.php';
        include_once './includes/lang/text.es.php';
        include_once './includes/layout.php';
        include_once './includes/libraries.php';
        include_once './includes/functions.php';
        include_once './includes/class/Helper.php';
        Helper::helpSession();
        
        $connection = openConnection();
        $query=$connection->prepare(sql_select_contactos_proveedores_bydIdproveedor());
        $query->bindParam(':idproveedor', decryptString($_GET['sup']),PDO::PARAM_INT);
        $query->execute();
        if($query->rowCount()>0){}

        ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.png">

	<title>QCC - Listar de Contactos de Proveedores</title>
	<?= css_fonts() ?>

	<!-- Bootstrap core CSS -->
	<?= css_bootstrap() ?>
        <?= css_font_awesome() ?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="../../assets/js/html5shiv.js"></script>
	  <script src="../../assets/js/respond.min.js"></script>
	<![endif]-->
	<?= css_nanoscroller() ?>
	<?= css_datatable() ?>
	<?= css_style() ?>

</head>

<body>

    <!-- Fixed navbar -->
    <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="fa fa-gear"></span>
          </button>
          <a class="navbar-brand" href="#"><span>QCC</span></a>
        </div>
        <div class="navbar-collapse collapse">
            <?= lytTopBarMenu(5) ?>		

        </div><!--/.nav-collapse -->
      </div>
    </div>
	
    <div id="cl-wrapper">
        <div class="cl-sidebar">
            <div class="cl-toggle"><i class="fa fa-bars"></i></div>
            <div class="cl-navblock">
                <div class="menu-space">
                  <div class="content">
                    <div class="side-user">
                      <div class="avatar"><img src="images/avatar1_50.jpg" alt="Avatar" /></div>
                      <div class="info">
                        <a href="#">José Perez</a>
                        <img src="images/state_online.png" alt="Status" /> <span>Online</span>
                      </div>
                    </div>
                    <?= lytSideMenu(5) ?>
                  </div>
                </div>
                
                <div class="text-right collapse-button" style="padding:7px 9px;">
                  <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
                </div>
            </div>
	</div>
	
	<div class="container-fluid" id="pcont">
            <div class="page-head">
                <h2>Contactos de <a href="edit-supplier.php">{NombreEmpresa}</a></h2>
            </div>
            <div class="cl-mcont">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-flat">
                            <table class="table table-bordered" id="datatable-icons" >
                                <thead>
                                        <tr>
                                            <th>Cotacto</th>
                                            <th>Cargo</th>
                                            <th>Teléfono 1</th>
                                            <th>Teléfono 2</th>
                                            <th>Teléfono 3</th>
                                            <th>Correo 1</th>
                                            <th>Correo 2</th>
                                            <th>Acciones</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            
                                            $contactos_proveedores=$query->fetchAll();
                                            $num=1;
                                            foreach ($contactos_proveedores as $value) {
                                            ?>
                                                <tr class="odd gradeA">
                                                    <td id="user_<?= $num ?>" ><a href="mailto:<?= $value['email_1'] ?>" title="Click para enviar correo" ><?= $value['nombre_contacto'] ?></a></td>
                                                    <td><?= $value['cargo'] ?></td>
                                                    <td class="center"><?= $value['telefono_1'] ?></td>
                                                    <td class="center"><?= $value['telefono_2'] ?></td>
                                                    <td class="center"><?= $value['telefono_3'] ?></td>
                                                    <td class="center"><a href="mailto:<?= $value['email_1'] ?>" title="Click para enviar correo" ><?= $value['email_1'] ?></a></td>
                                                    <td class="center"><a href="mailto:<?= $value['email_2'] ?>" title="Click para enviar correo" ><?= $value['email_2'] ?></a></td>
                                                    <td class="center">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-original-title="Edit" href="edit-contact-supplier.php?us=<?= encryptString($value['idcontacto_proveedor']) ?>">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a class="btn btn-danger md-trigger btn-xs btn-eliminar-us" data-toggle="tooltip" data-original-title="Eliminar contacto" data-modal="mod-delete" data-user="<?= encryptString($value['idcontacto_proveedor']) ?>"  data-num="<?= $num ?>" >
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php $num++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
	</div> 
    </div>
   <?= js_jquery() ?>
  <?= js_jquery_ui() ?>
  <?= js_bootstrap_datetimepicker() ?>
  <?= js_jquery_nanoscroller() ?>
  <?= js_jquery_nestable() ?>
  <?= js_bootstrap_switch() ?>
  <?= js_select2() ?>
  <?= js_bootstrap_slider() ?>
  <?= js_jquery_datatable() ?>
  <?= js_jquery_datatable_adapter() ?>
  <?= js_general() ?>
     
	

    <script type="text/javascript">
      $(document).ready(function(){
        App.init();
        $('#datatable-icons').dataTable();
       
        //Search input style
        $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
        $('.dataTables_length select').addClass('form-control');
        $('<a href="add-contact-supplier.php?sup=<?= encryptString(decryptString($_GET['sup'])) ?>" class="btn btn-info" type="button" ><i class="fa fa-user"></i> Agrega contacto</a><span>&nbsp;</span>').appendTo('div.dataTables_filter');
      });
    </script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <?= js_bootstrap() ?>
</body>

</html>