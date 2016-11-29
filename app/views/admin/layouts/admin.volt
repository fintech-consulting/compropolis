<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Administración de portal Compropolis</title>

		<meta name="description" content="Administración de portal Compropolis" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
                {{ stylesheet_link("public/assets/css/bootstrap.css") }}                
                {{ stylesheet_link("public/components/font-awesome/css/font-awesome.css") }}


		<!-- page specific plugin styles -->
                {{ stylesheet_link("public/components/_mod/jquery-ui.custom/jquery-ui.custom.css") }}
                {{ stylesheet_link("public/components/jquery.gritter/css/jquery.gritter.css") }}

		<!-- text fonts -->
                {{ stylesheet_link("public/assets/css/ace-fonts.css") }}

		<!-- ace styles -->
                {{ stylesheet_link("public/assets/css/ace.css") }}


		<!--[if lte IE 9]>
                    {{ stylesheet_link("public/assets/css/ace-part2.css") }}
		<![endif]-->
                {{ stylesheet_link("public/assets/css/ace-skins.css") }}
                {{ stylesheet_link("public/assets/css/ace-rtl.css") }}
                

		<!--[if lte IE 9]>
                    {{ stylesheet_link("public/assets/css/ace-ie.css") }}
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
                {{ javascript_include("public/assets/js/ace-extra.js") }}

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
                    {{ javascript_include("public/components/html5shiv/dist/html5shiv.min.js") }}
                    {{ javascript_include("public/components/respond/dest/respond.min.js") }}
		<![endif]-->
       
            {% block header %}
            {% endblock %}
 
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
                                                {% block actionButtons %}        
                                                botones
                                                {% endblock %}
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
                                                        {% block title %}
                                                            Dashboard
                                                        {% endblock %}
                                                    </h1>
						</div><!-- /.page-header -->
                                    
                                                <div id="alertMessages">
                                                </div>

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                                                            {% block content %}        
                                                            {% endblock %}

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
                {{ javascript_include("public/components/jquery/dist/jquery.js") }}
		<!-- <![endif]-->

		<!--[if IE]>
                    {{ javascript_include("public/components/jquery.1x/dist/jquery.js") }}                
                <![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='{{ url("public/components/_mod/jquery.mobile.custom/jquery.mobile.custom.js") }}'>"+"<"+"/script>");
		</script>
                {{ javascript_include("public/components/bootstrap/dist/js/bootstrap.js") }}

		<!-- page specific plugin scripts -->
                {% block footerJS %}
                {% endblock %}

		<!--[if lte IE 8]>
                    {{ javascript_include("public/components/ExplorerCanvas/excanvas.js") }}
		  <script src="../"></script>
		<![endif]-->
                {{ javascript_include("public/components/_mod/jquery-ui.custom/jquery-ui.custom.js") }}
                {{ javascript_include("public/components/jqueryui-touch-punch/jquery.ui.touch-punch.js") }}
                {{ javascript_include("public/components/bootbox.js/bootbox.js") }}
                {{ javascript_include("public/components/_mod/easypiechart/jquery.easypiechart.js") }}
                {{ javascript_include("public/components/jquery.gritter/js/jquery.gritter.js") }}
                {{ javascript_include("public/components/spin.js/spin.js") }}
                
		<!-- ace scripts -->
                {{ javascript_include("public/assets/js/src/elements.scroller.js") }}
                {{ javascript_include("public/assets/js/src/elements.colorpicker.js") }}
                {{ javascript_include("public/assets/js/src/elements.fileinput.js") }}
                {{ javascript_include("public/assets/js/src/elements.typeahead.js") }}
                {{ javascript_include("public/assets/js/src/elements.wysiwyg.js") }}
                {{ javascript_include("public/assets/js/src/elements.spinner.js") }}
                {{ javascript_include("public/assets/js/src/elements.treeview.js") }}
                {{ javascript_include("public/assets/js/src/elements.wizard.js") }}
                {{ javascript_include("public/assets/js/src/elements.aside.js") }}
                {{ javascript_include("public/assets/js/src/ace.js") }}
                {{ javascript_include("public/assets/js/src/ace.basics.js") }}
                {{ javascript_include("public/assets/js/src/ace.scrolltop.js") }}
                {{ javascript_include("public/assets/js/src/ace.ajax-content.js") }}
                {{ javascript_include("public/assets/js/src/ace.touch-drag.js") }}
                {{ javascript_include("public/assets/js/src/ace.sidebar.js") }}
                
                {{ javascript_include("public/assets/js/src/ace.sidebar-scroll-1.js") }}
                {{ javascript_include("public/assets/js/src/ace.submenu-hover.js") }}
                {{ javascript_include("public/assets/js/src/ace.widget-box.js") }}
                {{ javascript_include("public/assets/js/src/ace.settings.js") }}
                {{ javascript_include("public/assets/js/src/ace.settings-rtl.js") }}
                {{ javascript_include("public/assets/js/src/ace.settings-skin.js") }}
                {{ javascript_include("public/assets/js/src/ace.widget-on-reload.js") }}
                {{ javascript_include("public/assets/js/src/ace.searchbox-autocomplete.js") }}
                



		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {

                        

			
			})
                        
                        function _addMessages(message , type){
                            $('#alertMessages').html( "" );
                            htmlMessage =  ' <div id="successMessages" class="hide alert '+type+'"> '+
                                    ' <button type="button" class="close" data-dismiss="alert"> '+
                                    '        <i class="ace-icon fa fa-times"></i> '+
                                    ' </button> '+
                                    '  '+ message + '  '+
                                    ' <br> '+
                                    ' </div>';


                            $('#alertMessages').append( htmlMessage );
                            $('#alertMessages div:last-child').removeClass("hide").fadeOut( 0 ).fadeIn( 400 );//.delay( 2000 ).slideUp( 1000 );
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
