<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Ace Admin</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Bootstrap Core CSS -->
    {{ stylesheet_link("public/assets/css/bootstrap.css") }}                
        <!-- Custom CSS -->
    {{ stylesheet_link("public/css/shop-homepage.css") }}

    {{ stylesheet_link("public/components/font-awesome/css/font-awesome.css") }}                
    {{ stylesheet_link("public/assets/css/ace-fonts.css") }}
    {{ stylesheet_link("public/assets/css/ace.css") }}
    

    <!--[if lte IE 9]>
            {{ stylesheet_link("public/assets/css/ace-part2.css") }}
    <![endif]-->
    {{ stylesheet_link("public/assets/css/ace-rtl.css") }}

    <!--[if lte IE 9]>
        {{ stylesheet_link("public/assets/css/ace-ie.css") }}
    <![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    {{ stylesheet_link("public/components/html5shiv/dist/html5shiv.min.js") }}    
    {{ stylesheet_link("public/components/respond/dest/respond.min.js") }}    
    <![endif]-->
    

            {% block header %}
            {% endblock %}

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url("") }}">Compropolis</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                    <li>
                        <?PHP
                         // Check whether the "auth" variable exists in session to define the active role
                        $auth = $this->session->get("auth");
                        
                        if ($auth) {
                            ?>
                            <a href="{{ url("/account/myAccount") }}">Hola {{auth["name"]}}</a>
                            <?PHP
                        } else {
                            ?>
                            <a href="{{ url("/account/login") }}">Iniciar Sesión</a>
                            <?PHP
                        }
                        ?>
                        
                        
                    </li>
                    <li class="active open" id="bag"><!-- START- Fabricas_De_Francia - Site level static assets changes -->
                    <!-- END- Fabricas_De_Francia - Site level static assets changes -->
                    <a id="bag" class="dropdown-toggle mini-bags" data-toggle="dropdown" href="javascript:void(0)"><img src="//assets.liverpool.com.mx/assets/web/logos/bag.jpg" alt="shop" height="46" width="37"><span id="cart-count">(0)</span></a>
                    <ul class="dropdown-menu bag_01 hide" role="menu">

                    <input id="cartCurrentCount" value="0" type="hidden">
                    <li id="emptyMiniBag">
                    <div id="msg_bolsa_vacia">
                    <img src="//assets.liverpool.com.mx/assets/images/iconos/empty_bag.gif">
                    <p>
                    No tienes productos
                    <br>
                    en tu bolsa
                    </p>
                    </div>
                    </li>

                    </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

                                                <div id="alertMessages">
                                                </div>

    <!-- Page Content -->
    
                                                            {% block content %}        
                                                            {% endblock %}

    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
<!--        
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
-->

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    {{ javascript_include("public/components/jquery/dist/jquery.js") }}

		<script type="text/javascript">
                    
			if('ontouchstart' in document.documentElement) document.write("<script src='{{ url("public/components/_mod/jquery.mobile.custom/jquery.mobile.custom.js") }}'>"+"<"+"/script>");
		</script>
    
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
    
    <!-- page specific plugin scripts -->
    {% block footerJS %}
    {% endblock %}
    
</body>

</html>
