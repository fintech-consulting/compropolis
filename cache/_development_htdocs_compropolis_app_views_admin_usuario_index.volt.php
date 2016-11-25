<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Administración de portal Compropolis</title>

		<meta name="description" content="Administración de portal Compropolis" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
                <?= $this->tag->stylesheetLink('public/assets/css/bootstrap.css') ?>                
                <?= $this->tag->stylesheetLink('public/components/font-awesome/css/font-awesome.css') ?>


		<!-- page specific plugin styles -->
                <?= $this->tag->stylesheetLink('public/components/_mod/jquery-ui.custom/jquery-ui.custom.css') ?>
                <?= $this->tag->stylesheetLink('public/components/jquery.gritter/css/jquery.gritter.css') ?>

		<!-- text fonts -->
                <?= $this->tag->stylesheetLink('public/assets/css/ace-fonts.css') ?>

		<!-- ace styles -->
                <?= $this->tag->stylesheetLink('public/assets/css/ace.css') ?>


		<!--[if lte IE 9]>
                    <?= $this->tag->stylesheetLink('public/assets/css/ace-part2.css') ?>
		<![endif]-->
                <?= $this->tag->stylesheetLink('public/assets/css/ace-skins.css') ?>
                <?= $this->tag->stylesheetLink('public/assets/css/ace-rtl.css') ?>
                

		<!--[if lte IE 9]>
                    <?= $this->tag->stylesheetLink('public/assets/css/ace-ie.css') ?>
		<![endif]-->

		<!-- inline styles related to this page -->
		<style>
			/* some elements used in demo only */
			.spinner-preview {
				width: 100px;
				height: 100px;
				text-align: center;
				margin-top: 60px;
			}
			
			.dropdown-preview {
				margin: 0 5px;
				display: inline-block;
			}
			.dropdown-preview  > .dropdown-menu {
				display: block;
				position: static;
				margin-bottom: 5px;
			}
		</style>

		<!-- ace settings handler -->
                <?= $this->tag->javascriptInclude('public/assets/js/ace-extra.js') ?>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
                    <?= $this->tag->javascriptInclude('public/components/html5shiv/dist/html5shiv.min.js') ?>
                    <?= $this->tag->javascriptInclude('public/components/respond/dest/respond.min.js') ?>
		<![endif]-->
       
            
<style>
    .color{
        
        
    }
    
</style>

 
        </head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
                
                <?php 
                $this->url->getBaseUri();
                $this->partial("layouts/admin_navbar", ["id" => 123, "user" => "Admin"] ); ?>
		<!-- /section:basics/navbar.layout -->
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
                        <?php $this->partial("layouts/admin_sidebar", ["id" => 123, "menu" => "Admin o Proveedor"] ); ?>
			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
                                            
                                            <div class="breadcrumb">
                                                 

<a href="<?= $this->url->get('admin/usuario/nueva') ?>" class="btn btn-sm btn-success">
<i class="ace-icon fa fa-pencil align-top bigger-125"></i>    
    Nuevo Usuario
</a>


                                            </div><!-- /.breadcrumb -->
                                            
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<!-- #section:settings.skins -->
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<!-- /section:settings.skins -->

									<!-- #section:settings.navbar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<!-- /section:settings.navbar -->

									<!-- #section:settings.sidebar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<!-- /section:settings.sidebar -->

									<!-- #section:settings.breadcrumbs -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<!-- /section:settings.breadcrumbs -->

									<!-- #section:settings.rtl -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<!-- /section:settings.rtl -->

									<!-- #section:settings.container -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>

									<!-- /section:settings.container -->
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<!-- #section:basics/sidebar.options -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>

									<!-- /section:basics/sidebar.options -->
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<!-- /section:settings.box -->
						<div class="page-header">
                                                    <h1>
                                                         Listado de Usuarios 
                                                    </h1>
						</div><!-- /.page-header -->
                                    
                                                <div id="alertMessages">
                                                </div>

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                                            

<div class="row">
									<div class="col-xs-12">
										

										<!-- <div class="table-responsive"> -->

										<!-- <div class="dataTables_borderWrap"> -->
										<div>
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="position-relative">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>ID</th>
														<th>Username</th>
														<th class="hidden-480">Rol</th>

														<th class="hidden-480">Status</th>

														<th>Acciones</th>
													</tr>
												</thead>

												<tbody>
<?php foreach ($usuarioList as $categoria) { ?>

                                                                                                        <tr>
														<td class="center">
															<label class="position-relative">
                                                                                                                            <input type="checkbox" class="ace" value="<?= $categoria->getIdCategoria() ?>" name="categoriaId[]" id="categoriaId" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<?= $categoria->getIdCategoria() ?>
														</td>
														<td>
															<?= $categoria->getCategoria() ?>
														</td>
														<td><?= $categoria->getPathImagen() ?></td>
														<td>Feb 12</td>

														
														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

<?php } ?>                                                                                                    

												</tbody>
											</table>
										</div>
                                                                        </div>
</div>




								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-120">
							Compropolis
							&copy; 2016
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
							</a>
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
                <?= $this->tag->javascriptInclude('public/components/jquery/dist/jquery.js') ?>
		<!-- <![endif]-->

		<!--[if IE]>
                    <?= $this->tag->javascriptInclude('public/components/jquery.1x/dist/jquery.js') ?>                
                <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?= $this->url->get('public/components/_mod/jquery.mobile.custom/jquery.mobile.custom.js') ?>'>"+"<"+"/script>");
		</script>
                <?= $this->tag->javascriptInclude('public/components/bootstrap/dist/js/bootstrap.js') ?>

		<!-- page specific plugin scripts -->
                     

                <script type="text/javascript" > 
			jQuery(function($) {
				var oTable1 = 
				$('#sample-table-2')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.dataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			    } );
				/**
				var tableTools = new $.fn.dataTable.TableTools( oTable1, {
					"sSwfPath": "../../copy_csv_xls_pdf.swf",
			        "buttons": [
			            "copy",
			            "csv",
			            "xls",
						"pdf",
			            "print"
			        ]
			    } );
			    $( tableTools.fnContainer() ).insertBefore('#sample-table-2');
				*/
			
			
				$(document).on('click', 'th input:checkbox' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			})
		</script>


		<!--[if lte IE 8]>
                    <?= $this->tag->javascriptInclude('public/components/ExplorerCanvas/excanvas.js') ?>
		  <script src="../"></script>
		<![endif]-->
                <?= $this->tag->javascriptInclude('public/components/_mod/jquery-ui.custom/jquery-ui.custom.js') ?>
                <?= $this->tag->javascriptInclude('public/components/jqueryui-touch-punch/jquery.ui.touch-punch.js') ?>
                <?= $this->tag->javascriptInclude('public/components/bootbox.js/bootbox.js') ?>
                <?= $this->tag->javascriptInclude('public/components/_mod/easypiechart/jquery.easypiechart.js') ?>
                <?= $this->tag->javascriptInclude('public/components/jquery.gritter/js/jquery.gritter.js') ?>
                <?= $this->tag->javascriptInclude('public/components/spin.js/spin.js') ?>
                
		<!-- ace scripts -->
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.scroller.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.colorpicker.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.fileinput.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.typeahead.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.wysiwyg.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.spinner.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.treeview.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.wizard.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/elements.aside.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.basics.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.scrolltop.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.ajax-content.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.touch-drag.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.sidebar.js') ?>
                
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.sidebar-scroll-1.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.submenu-hover.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.widget-box.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.settings.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.settings-rtl.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.settings-skin.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.widget-on-reload.js') ?>
                <?= $this->tag->javascriptInclude('public/assets/js/src/ace.searchbox-autocomplete.js') ?>
                



		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {

                        

			
			})
                        
                        function _addMessages(message , type){
                            htmlMessage =  ' <div id="successMessages" class="hide alert '+type+'"> '+
                                    ' <button type="button" class="close" data-dismiss="alert"> '+
                                    '        <i class="ace-icon fa fa-times"></i> '+
                                    ' </button> '+
                                    '  '+ message + '  '+
                                    ' <br> '+
                                    ' </div>';


                            $('#alertMessages').append( htmlMessage );
                            $('#alertMessages div:last-child').removeClass("hide").fadeOut( 0 ).fadeIn( 400 ).delay( 2000 ).slideUp( 1000 );
                        }
                        
                        function showSuccessMessages(message){
                            _addMessages(message,"alert-success");

                        }
                        function showErrorMessages(message){
                            _addMessages("<b>Ocurrio un error al realizar esta operación:</b> <br>" + message,"alert-danger");
                        }
                        function showNoticeMessages(message){
                            _addMessages(message,"alert-info");
                        }
                        function showWarningMessages(message){
                            _addMessages(message,"alert-warning");
                        }
                        
                        function showMessages(messages){

                            if(messages.errors != undefined) {
                                showErrorMessages(messages.errors.join("<br>"));
                            }                            
                            if(messages.success != undefined) {
                                showSuccessMessages(messages.success);
                            }
                            if(messages.notices != undefined) {
                                showNoticeMessages(messages.notices);
                            }
                            if(messages.warnings != undefined) {
                                showWarningMessages(messages.warnings);
                            }
                            
                        }
		</script>
		<!-- the following scripts are used in demo only for onpage help and you don't need them -->
		
	</body>
</html>
