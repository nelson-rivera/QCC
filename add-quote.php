<!DOCTYPE html>
<html lang="en">

<head>
        <?php
        include_once './includes/layout.php';
        include_once './includes/libraries.php';
        ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.png">

	<title>QCC - Agregar Cotización</title>
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
            <?= lytTopBarMenu() ?>

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
                    <?= lytSideMenu(8) ?>
                  </div>
                </div>
                
                <div class="text-right collapse-button" style="padding:7px 9px;">
                  <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
                </div>
            </div>
	</div>
	
	<div class="container-fluid" id="pcont">
            <div class="page-head">
                <h2>Agregar Cotización</h2>
            </div>
            <div class="cl-mcont">
                
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-flat">
                            <div class="header">
                                <h3>Datos generales</h3>
                            </div>
                            <div class="content">
                                <form id="frm-quote-info" class="form-horizontal" style="border-radius: 0px;" action="#">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Vendedor</label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" required value="Nelson Rivera" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cliente</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" required>
                                                <option>ACAVISA</option>
                                                <option>Claro</option>
                                                <option>UCA</option>
                                                <option>Tigo</option>
                                                <option>Digicel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Departamento</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" required>
                                                <option>San Salvador</option>
                                                <option>Morazán</option>
                                                <option>Ahuachapan</option>
                                                <option>Santa Ana</option>
                                                <option>Sonsonate</option>
                                                <option>Chalatenango</option>
                                                <option>Cuscatlan</option>
                                                <option>La Libertad</option>
                                                <option>La Paz</option>
                                                <option>San Vicente</option>
                                                <option>Usulutan</option>
                                                <option>San Miguel</option>
                                                <option>Cabañas</option>
                                                <option>La Union</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Municipio</label>
                                        <div class="col-sm-6">
                                            <input id="input-city" class="form-control" type="text" placeholder="San Salvador" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nombre contacto</label>
                                        <div class="col-sm-6">
                                            <select id="input-contact" class="form-control" required>
                                                <option value="1">José Perez</option>
                                                <option value="2">Ernesto Monterrosa</option>
                                                <option value="3">Ivana Chavarria</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Teléfono Contacto</label>
                                        <div class="col-sm-6">
                                            <input id="input-phone" class="form-control" type="text" value="2249-2034" required readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Correo Contacto</label>
                                        <div class="col-sm-6">
                                            <input id="input-email" class="form-control" type="email" value="jperez@email.com" required readonly="readonly">
                                        </div>
                                    </div>
                                </form>
                                <div class="header">
                                    <h3>Items</h3>
                                </div>
                                
                                <form id="frm-quote-items">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <select id="input-iva" class="form-control">
                                                    <option value="1" selected="selected">Con IVA desglosado</option>
                                                    <option value="0">Sin IVA desglosado</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    <table id="table-items" class="no-strip" data-nitems="1">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 10%">
                                                    Eliminar
                                                </th>
                                                <th class="text-center" style="width: 10%">
                                                    Item
                                                </th>
                                                <th class="text-center" style="width: 10%">
                                                    Cantidad
                                                </th>
                                                <th class="text-center" style="width: 10%">
                                                    Rubro
                                                </th>
                                                <th class="text-center" style="width: 30%">
                                                    Descripción
                                                </th>
                                                <th class="text-center" style="width: 15%">
                                                    Precio Unitario
                                                </th>
                                                <th class="text-center" style="width: 15%">
                                                    Precio Total
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="item">
                                                <td class="text-center">
                                                    <button class="btn btn-danger btn-xs btn-delete-item" type="button"><i class="fa fa-times"></i></button>
                                                </td>
                                                <td class="text-center">
                                                    1
                                                </td>
                                                <td>
                                                    <input class="input-amount form-control" type="text" required=""/>
                                                </td>
                                                <td>
                                                    <select class="input-rubro form-control" required="">
                                                        <option>UPS</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <textarea class="input-description form-control"required></textarea>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">$</span><input class="input-unit-price form-control" type="text" required/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">$</span><input class="input-total-price form-control" type="text" required readonly="readonly"/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr id="row-add-item">
                                                <td colspan="7">
                                                    <button type="button" id="btn-add-item" class="btn btn-primary btn-block">Agregar item</button>
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td colspan="5"></td>
                                                <td class="primary-emphasis-dark">Sumas</td>
                                                <td id="td-sub-total">$0.00</td>
                                            </tr>
                                            <tr id="tr-iva" class="text-center">
                                                <td colspan="5"></td>
                                                <td class="primary-emphasis-dark">13% IVA</td>
                                                <td id="td-iva">$0.00</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td colspan="5"></td>
                                                <td class="primary-emphasis-dark">TOTAL</td>
                                                <td id="td-total">$0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                                
                                <div class="header">
                                    <h3>Condiciones</h3>
                                </div>
                                <form id="frm-conditions" class="form-horizontal" style="border-radius: 0px;" action="#">
                                    <div class="form-group" id="div_condicion1" style="display: none;" >
                                        <label class="col-sm-2 control-label">Precios</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" required>
                                                <option>No incluyen IVA</option>
                                                <option>Incluyen IVA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Valides de la oferta</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" required>
                                                <option>30 días</option>
                                                <option>15 días</option>
                                                <option>7 días</option>
                                                <option>60 días</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Forma de pago</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" required>
                                                <option>Contado</option>
                                                <option>Crédito</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Garantía</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" required>
                                                <option>3 Meses</option>
                                                <option>6 Meses</option>
                                                <option>12 Meses</option>
                                                <option>24 Meses</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="container-btn-add">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <button id="btn-add-condition" type="button" class="btn btn-info btn-block">Agregar Condición</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
  <?= js_jquery_parsley() ?>
  <?= js_i18n_es() ?>
  <?= js_general() ?>
     
	

    <script type="text/javascript">
        $(document).ready(function(){
            //initialize the javascript
            App.init();
            window.ParsleyValidator.setLocale('es');
            $("#frm-quote-items").parsley().subscribe('parsley:form:validate', function (formInstance) {
                formInstance.submitEvent.preventDefault();
                if(formInstance.isValid('', true)){
                    
                }
                return;
            });
            $("#input-contact").change(function(){
               if($(this).val()==1){
                   $("#input-phone").val('2249-2034');
                   $("#input-email").val('jperez@email.com');
               }
               else if($(this).val()==2){
                    $("#input-phone").val('2249-2023');
                    $("#input-email").val('emonterrosa@email.com');
               }
               else if($(this).val()==3){
                   $("#input-phone").val('2249-2010');
                   $("#input-email").val('ichavarria@email.com');
               }
            });
            $("#input-iva").change(function(){
                var ivaflag=parseInt($(this).val(),10);
                if(ivaflag===1){
                    $("#tr-iva").show();
                    $("#div_condicion1").hide();
                }
                else{
                    $("#tr-iva").hide();
                    $("#div_condicion1").show();
                }
                totalize();
            });
            $("#table-items").on('click', '.btn-delete-item',function(){
                $(this).closest('tr.item').remove();
            });
            $("#table-items").on('change','.input-amount', function(){
                var amount=$(this).val();
                var unitPrice=$(this).closest('tr.item').find('.input-unit-price').val();
                var totalPrice=amount*unitPrice;
                $(this).closest('tr.item').find('.input-total-price').val(totalPrice.formatMoney(2));
                totalize();
            });
            $("#table-items").on('change','.input-unit-price',function(){
                var unitPrice=$(this).val();
                var amount=$(this).closest('tr.item').find('.input-amount').val();
                var totalPrice=amount*unitPrice;
                $(this).closest('tr.item').find('.input-total-price').val(totalPrice.formatMoney(2));
                totalize();
            });
            $("#btn-add-item").click(function(){
                var nItems=$("#table-items").attr('data-nitems');
                nItems++;
                $("#table-items").attr('data-nitems',nItems);
                $("#row-add-item").before('<tr class="item">'
                                                    +'<td class="text-center">'
                                                        +'<button class="btn btn-danger btn-xs btn-delete-item" type="button"><i class="fa fa-times"></i></button>'
                                                    +'</td>'
                                                    +'<td class="text-center">'
                                                        +nItems
                                                    +'</td>'
                                                    +'<td>'
                                                        +'<input class="input-amount form-control" type="text" required=""/>'
                                                    +'</td>'
                                                    +'<td>'
                                                        +'<select class="input-rubro form-control" required="">'
                                                            +'<option>UPS</option>'
                                                        +'</select>'
                                                    +'</td>'
                                                    +'<td>'
                                                        +'<textarea class="input-description form-control"required></textarea>'
                                                    +'</td>'
                                                    +'<td>'
                                                        +'<div class="input-group">'
                                                            +'<span class="input-group-addon">$</span><input class="input-unit-price form-control" type="text" required/>'
                                                        +'</div>'
                                                    +'</td>'
                                                    +'<td>'
                                                        +'<div class="input-group">'
                                                            +'<span class="input-group-addon">$</span><input class="input-total-price form-control" type="text" required readonly="readonly"/>'
                                                        +'</div>'
                                                    +'</td>'
                                                +'</tr>');
            });
            $("#container-btn-add").click(function(){
                $("#container-btn-add").before('<div class="form-group">'
                    +'<div class="col-sm-2">'
                        +'<input type="text" class="input-condition form-control" placerholder="condición" />'
                    +'</div>'
                    +'<div class="col-sm-3">'
                        +'<input type="text" class="form-control" placerholder="valor de condición" />'
                    +'</div>'
                    +'<div class="col-sm-1 container-btn-delete-condition">'
                        +'<button class="btn btn-danger btn-xs btn-delete-condition" type="button"><i class="fa fa-times"></i></button> '
                    +'</div>');
            });
            $("#frm-conditions").on('click','.btn-delete-condition',function(){
               $(this).parents('.form-group').remove(); 
            });
        });
        function totalize(){
            var subTotal=0;
            var iva=0;
            var total=0;
            var ivaFlag=parseInt($("#input-iva").val(),10);
            $(".input-total-price").each(function(){
               subTotal+=parseFloat($(this).val().replace(/,/g,''),10); 
            });
            $("#td-sub-total").html('$'+subTotal.formatMoney(2));
            
            if(ivaFlag===1){
                iva=subTotal*0.13;
            }
            $("#td-iva").html('$'+iva.formatMoney(2));
            total=parseFloat(subTotal+iva,10);
            $("#td-total").html('$'+total.formatMoney(2));
            
            
        }
        Number.prototype.formatMoney = function(c, d, t){
            var n = this, 
            c = isNaN(c = Math.abs(c)) ? 2 : c, 
            d = d == undefined ? "." : d, 
            t = t == undefined ? "," : t, 
            s = n < 0 ? "-" : "", 
            i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
            j = (j = i.length) > 3 ? j % 3 : 0;
            return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
        };
    </script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
  <?= js_bootstrap() ?>
</body>

<!-- Mirrored from foxypixel.net/cleanzone/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Nov 2014 04:57:43 GMT -->
</html>