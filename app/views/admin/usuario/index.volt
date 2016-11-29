{% extends "layouts/admin.volt" %}


{% block header %}
<style>
    .color{


    }

</style>
{% endblock %}



{% block actionButtons %} 

<a href="{{ url("admin/usuario/nueva") }}" class="btn btn-sm btn-success">
    <i class="ace-icon fa fa-pencil align-top bigger-125"></i>    
    Nuevo Usuario
</a>

{% endblock %}

{% block title %} Listado de Usuarios {% endblock %}



{% block content %}

<div class="row">
    <div class="col-xs-12">

        {{ form("admin/usuario/edit", "method": "post", "id": "form") }}

        {{ hiddenField("idUsuario") }}

        {{ endForm() }}

        <!-- <div class="table-responsive"> -->

        <!-- <div class="dataTables_borderWrap"> -->
        <div>
            <table id="sample-table-2" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>

                        <th>ID</th>
                        <th>Username</th>
                        <th class="hidden-480">Rol</th>

                        <th class="hidden-480">Contraseña</th>

                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    {% for usuario in usuarioList %}

                    <tr>


                        <td>
                            {{ usuario.getIdUsuario() }}
                        </td>
                        <td>
                            {{ usuario.getNombreUsuario() }}
                        </td>
                        <td>{{ usuario.getIdRol() }}</td>

                        <td>{{ usuario.getPassword() }}</td>


                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                <a class="blue" href="#" idUsuario="{{ usuario.getIdUsuario() }}" >
                                    <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                </a>

                                <a class="green editBtn" href="#" idUsuario="{{ usuario.getIdUsuario() }}" >
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                                <a class="red deleteBtn" href="#" idUsuario="{{ usuario.getIdUsuario() }}" >
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
                                            <a href="#" idUsuario="{{ usuario.getIdUsuario() }}" class="tooltip-success editBtn" data-rel="tooltip" title="Edit">
                                                <span class="green">
                                                    <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                </span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" idUsuario="{{ usuario.getIdUsuario() }}"class="tooltip-error deleteBtn" data-rel="tooltip" title="Delete">
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

                    {% endfor %}                                                                                                    

                </tbody>
            </table>
        </div>
    </div>
</div>


{% endblock %}



{% block footerJS %}     

<script type="text/javascript" >
    jQuery(function ($) {


    });

    $(function () {
        
        $('.editBtn').on('click', function () {

            $("#idUsuario","#form").val($(this).attr("idusuario"));
            $("#form").submit();

        });
    });
</script>
{% endblock %}  



