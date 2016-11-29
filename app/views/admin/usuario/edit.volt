{% extends "layouts/admin.volt" %}


{% block header %}
<style>
    .color{


    }

</style>
{% endblock %}


{% block actionButtons %} 

<a href="{{ url("admin/usuario") }}" class="btn btn-sm btn-warning">
    <i class="ace-icon fa fa-chevron-left align-top bigger-125"></i>    
    Regresar
</a>

<button id="guardarBtn" class="btn btn-sm btn-success">
    <i class="ace-icon fa fa-floppy-o align-top bigger-125"></i>    
    Modificar
</button>

{% endblock %}


{% block title %} Modificación de Usuario {% endblock %}



{% block content %}

<div class="widget-box">
    <div class="widget-header">
        <h4 class="widget-title">Modificación de Usuario</h4>
    </div>

    <div class="widget-body">
        <div class="widget-main">

                <!-- <legend>Form</legend> -->
            <form id="form" action="/compropolis/admin/categoria/salvar" method="POST" class="form-horizontal" role="form">
                {{ hiddenField("idUsuario") }}

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="nombreUsuario"> Nombre de Usuario: </label>

                    <div class="col-sm-9">
                        
                        <input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Captura el nombre del usuario" class="form-control"
                               value="{{ usuario is defined ? usuario.getNombreUsuario() : '' }}"
                               
                               />
                    </div>
                </div>                                                                                                                

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="idRol"> Rol: </label>

                    <div class="col-sm-9">
                        
                        <select class="form-control" id="idRol" name="idRol">
                                <option value="">Selecciona una opción</option>
                                {% for rol in rolList %}
                                <option value="{{ rol.getIdRol() }}" {{ (usuario is defined and usuario.getIdRol() == rol.getIdRol()) ? 'selected="true"' : '' }}>{{ rol.getRol() }}</option>
                                {% endfor %}   
                        </select>
                    </div>
                </div>                                                                                                                
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="password"> Contraseña: </label>

                    <div class="col-sm-9">
                        <input type="password" id="password" name="password" placeholder="Captura la contraseña" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="confirmPassword"> Confirmar Contraseña: </label>

                    <div class="col-sm-9">
                        <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Captura nuevamente la contraseña" class="form-control" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


{% endblock %}



{% block footerJS %}     



<script>
    
    // INICIALIZACIÓN DE JQUERY    
    jQuery(function($){


	





    });

    // INICIALIZACIÓN DE BOOTSTRAP
    $(function () {
        $('#guardarBtn').on('click', function () {
//            alert("guardarConceptoBtn");
            
            var str = new String($('#password').val());
            var message = "";
            
            if($('#nombreUsuario').val() == ""){
                message += "El Nombre de Usuario es obligatorio.<br>";
            }
            if($('#idRol').val() == ""){
                message += "Selecciona el rol del Usuario.<br>";
            }
            if($('#password').val() == "" && $('#confirmPassword').val() == ""){
                message += "La contraseña es obligatoria.<br>";
            }
            if($('#password').val() != $('#confirmPassword').val()){
                message += "La contraseña no coincide.<br>";
            }else{
                if (str.match(/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/)) {                    
                    

                } else {
                    message += "La contraseña debe contener:<br>Al menos 1 numero (0-9).<br>Al menos 1 caracter en minúscula (a-z).<br>Al menos 1 caracter en mayúscula (A-Z).";
                }
            }
            
            if(message != ""){
                showErrorMessages(message);
            }else{
                guardarusuario();                
            }            
            
        });
    });
    
    
    function guardarusuario(){

    alert("guardarusuario");

        $.ajax({
                type: "POST",
                url: '{{ url("admin/usuario/update") }}',
                data: $('#form').serialize(),
                success: function (data) {
                    
                    alert(data);
                    
                    if( data.success == true ){
                        limpiarForm();                        
                        showMessages(data.messages);
                    }else{
                        // ERROR
                        showMessages(data.messages);
                    }
                    
                    
                },
                error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                        alert(thrownError);
                }
        });
    }
    
    
    function limpiarForm(){
        $('#categoria').val("");
        $('#categoriaPadre').val("");
        $('#imagen').val("");
        
    }

// INFORMACIÒN DEL TREE

		


</script>

{% endblock %}  



