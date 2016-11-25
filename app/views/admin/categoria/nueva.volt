{% extends "layouts/admin.volt" %}


{% block header %}
<style>
    .color{


    }
    #extencion{
        display: none;
    }

</style>
{% endblock %}


{% block actionButtons %} 

<a href="{{ url("admin/categoria") }}" class="btn btn-sm btn-warning">
    <i class="ace-icon fa fa-chevron-left align-top bigger-125"></i>    
    Regresar
</a>

<button id="guardarBtn" class="btn btn-sm btn-success">
    <i class="ace-icon fa fa-floppy-o align-top bigger-125"></i>    
    Guardar
</button>

{% endblock %}


{% block title %} Registro de Nueva Categoría {% endblock %}



{% block content %}

<div class="widget-box">
    <div class="widget-header">
        <h4 class="widget-title">Registro de Nueva Categoria</h4>
    </div>

    <div class="widget-body">
        <div class="widget-main">

                <!-- <legend>Form</legend> -->
            <form id="form" method="POST" class="form-horizontal" role="form">

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nombre </label>

                    <div class="col-sm-9">
                        <input type="text" id="categoria" name="categoria" placeholder="Captura la Categoría" class="form-control" />
                    </div>
                </div>                                                                                                                

                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Categoría Padre </label>

                    <div class="col-sm-9">
                        <div class="widget-box widget-color-blue2">
                            
                            <div class="widget-body">
                                <div class="widget-main padding-8" >
                                        <div id="tree1" class="tree" style="height: 150px;"></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="text" id="categoriaPadre" name="categoriaPadre" placeholder="" class="form-control" disabled />
                    </div>
                </div>                                                                                                                
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Imagen: </label>
                    <div class="col-sm-9">
                        <input type="text" id="extencion" name="extencion">
                        <!-- <input type="text" id="imagen" name="imagen" placeholder="Adjunta la imagen de la categoría" class="form-control" /> -->
                        <input type="file" id="imagen" name="imagen" placeholder="Adjunta la imagen de la categoría" class="form-control" accept="image/jpg, image/png, image/jpeg" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


{% endblock %}



{% block footerJS %}     

                {{ javascript_include("public/components/_mod/fuelux/tree.js") }}


<script>

    var datos_arbol;

    //Reconoce la seleccion y pone el contenido en el input CategoriaPadre
    $('#tree1').on('selected.fu.tree', function (event, data) { 
        dText = data.selected[0].text;
        console.log(data.selected[0].idCategoria);
        if(dText.indexOf("<i" == 0)){
            dtt = dText.split("</i>");
            dText = dtt[dtt.length-1];
        }
        dText = $.trim(dText)
        $("#categoriaPadre").val(data.selected[0].idCategoria);
        console.log(dText);
    });
    
    // INICIALIZACIÓN DE JQUERY    
    jQuery(function($){


        $.ajax({
            url : '{{ url("admin/categoria/arbol") }}',
            data : {},
            type : 'POST',
            dataType : 'json',
            success : function(json) {

                tree_data_2 = json;      
            $('#tree1').ace_tree({
                dataSource: dataSource2,
                loadingHTML:'<div class="tree-loading"><i class="ace-icon fa fa-refresh fa-spin blue"></i></div>',
                'open-icon' : 'ace-icon fa fa-folder-open',
                'close-icon' : 'ace-icon fa fa-folder',
                'itemSelect' : true,
                'folderSelect': true,
                'multiSelect': false,
                'selected-icon' : null,
                'unselected-icon' : null,
                'folder-open-icon' : 'ace-icon tree-plus',
                'folder-close-icon' : 'ace-icon tree-minus'
            });

            },
            error : function(xhr, status) {
                console.log('Disculpe, existió un problema');
            },
            complete : function(xhr, status) {
                console.log('Petición realizada');
            }
        });

    });

    // INICIALIZACIÓN DE BOOTSTRAP
    $(function () {
        $('#guardarBtn').on('click', function () {
            var img_paht=document.getElementById('imagen').value;
            var img=img_paht.split("\\");
            var nombre_img=img[img.length-1].split(".");
            var ext=nombre_img[nombre_img.length-1];
            document.getElementById("extencion").value=ext;
            guardarCategoria();
        });
    });

    function guardarCategoria(){
        //var formulario = document.getElementById('form');
        var datosForm = new FormData();
        var categoria = document.getElementById('categoria').value;
        var categoriaPadre = document.getElementById('categoriaPadre').value;
        var extencion = document.getElementById('extencion').value;
        var imagen = document.getElementById('imagen');
        var file = imagen.files[0];
        datosForm.append("categoria",categoria);
        datosForm.append("categoriaPadre",categoriaPadre);
        datosForm.append("extencion",extencion);
        datosForm.append("imagen",file);
        $.ajax({
            url: '{{ url("admin/categoria/salvar") }}',
            type: "post",
            dataType: "JSON",
            data: datosForm,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {                    
                console.log(data);
                limpiarForm();     
                alert(data.messages);                
                if( data.success == true ){
                    limpiarForm();                        
                    showMessages(data.messages);
                }else{
                    // ERROR
                    showMessages(data.messages);
                }
            },
            error: function (xhr, ajaxOptions, thrownError){
                alert(xhr.status);
                alert(thrownError);
            }
        }).done(function(data){
            if(data.ok){
                console.log("se subio con exito");
            }else {
                console.log(data.msg)
            }
        });
    }

    function limpiarForm(){
        $('#categoria').val("");
        $('#categoriaPadre').val("");
        $('#imagen').val("");
    }

// INFORMACIÒN DEL TREE
    var tree_data_2={};//{"uno":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> uno","type":"item","icon-class":"red"},"cuatro":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> cuatro","type":"item","icon-class":"red"},"cinco":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> cinco","type":"item","icon-class":"red"},"seis":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> seis","type":"item","icon-class":"red"},"df":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> df","type":"item","icon-class":"red"},"nueva final":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> nueva final","type":"item","icon-class":"red"},"asdfasdf":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> asdfasdf","type":"item","icon-class":"red"},"LASDFSDF":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> LASDFSDF","type":"item","icon-class":"red"},"UNO":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> UNO","type":"item","icon-class":"red"},"NUEVO 2":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> NUEVO 2","type":"item","icon-class":"red"},"_":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> _","type":"item","icon-class":"red"},"test":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> test","type":"item","icon-class":"red"},"Intento1":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Intento1","type":"item","icon-class":"red"},"Primera":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Primera","type":"item","icon-class":"red"},"Guapa":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Guapa","type":"item","icon-class":"red"},"Hermosa":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Hermosa","type":"item","icon-class":"red"},"Abi":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Abi","type":"item","icon-class":"red"},";)":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> ;)","type":"item","icon-class":"red"},"guapa":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> guapa","type":"item","icon-class":"red"},"Aabigail":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Aabigail","type":"item","icon-class":"red"},"Categor\u00eda 1":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Categor\u00eda 1","type":"item","icon-class":"red"},"Categor\u00eda prueba":{"text":"<i class='glyphicon glyphicon-tag red'><\/i> Categor\u00eda prueba","type":"item","icon-class":"red"}}

	tree_data_2X = {
		'pictures' : {text: 'Pictures', type: 'folder', 'icon-class':'red'}	,
		'music' : {text: 'Music', type: 'folder', 'icon-class':'orange'}	,
		'video' : {text: 'Video', type: 'folder', 'icon-class':'blue'}	,
		'documents' : {text: 'Documents', type: 'folder', 'icon-class':'green'}	,
		'backup' : {text: 'Backup', type: 'folder'}	,
		'readme' : {text: '<i class="ace-icon fa fa-file-text grey"></i> ReadMe.txt', type: 'item'},
		'manual' : {text: '<i class="ace-icon fa fa-book blue"></i> Manual.html', type: 'item'}
	}
	tree_data_2X['music']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-music blue"></i> song1.ogg', type: 'item'},
			{text: '<i class="ace-icon fa fa-music blue"></i> song2.ogg', type: 'item'},
			{text: '<i class="ace-icon fa fa-music blue"></i> song3.ogg', type: 'item'},
			{text: '<i class="ace-icon fa fa-music blue"></i> song4.ogg', type: 'item'},
			{text: '<i class="ace-icon fa fa-music blue"></i> song5.ogg', type: 'item'}
		]
	}
	tree_data_2X['video']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-film blue"></i> movie1.avi', type: 'item'},
			{text: '<i class="ace-icon fa fa-film blue"></i> movie2.avi', type: 'item'},
			{text: '<i class="ace-icon fa fa-film blue"></i> movie3.avi', type: 'item'},
			{text: '<i class="ace-icon fa fa-film blue"></i> movie4.avi', type: 'item'},
			{text: '<i class="ace-icon fa fa-film blue"></i> movie5.avi', type: 'item'}
		]
	}
	tree_data_2X['pictures']['additionalParameters'] = {
		'children' : {
			'wallpapers' : {text: 'Wallpapers', type: 'folder', 'icon-class':'pink'},
			'camera' : {text: 'Camera', type: 'folder', 'icon-class':'pink'}
		}
	}
	tree_data_2X['pictures']['additionalParameters']['children']['wallpapers']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper1.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper2.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper3.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper4.jpg', type: 'item'}
		]
	}
	tree_data_2X['pictures']['additionalParameters']['children']['camera']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo1.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo2.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo3.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo4.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo5.jpg', type: 'item'},
			{text: '<i class="ace-icon fa fa-picture-o green"></i> photo6.jpg', type: 'item'}
		]
	}

	tree_data_2X['documents']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-file-text red"></i> document1.pdf', type: 'item'},
			{text: '<i class="ace-icon fa fa-file-text grey"></i> document2.doc', type: 'item'},
			{text: '<i class="ace-icon fa fa-file-text grey"></i> document3.doc', type: 'item'},
			{text: '<i class="ace-icon fa fa-file-text red"></i> document4.pdf', type: 'item'},
			{text: '<i class="ace-icon fa fa-file-text grey"></i> document5.doc', type: 'item'}
		]
	}

	tree_data_2X['backup']['additionalParameters'] = {
		'children' : [
			{text: '<i class="ace-icon fa fa-archive brown"></i> backup1.zip', type: 'item'},
			{text: '<i class="ace-icon fa fa-archive brown"></i> backup2.zip', type: 'item'},
			{text: '<i class="ace-icon fa fa-archive brown"></i> backup3.zip', type: 'item'},
			{text: '<i class="ace-icon fa fa-archive brown"></i> backup4.zip', type: 'item'}
		]
	}
	var dataSource2 = function(options, callback){
       var $data = null;
        if(!("text" in options) && !("type" in options)){
            $data = tree_data_2;//the root tree
            callback({ data: $data });
            return;
        }
        else if("type" in options && options.type == "folder") {
            if("additionalParameters" in options && "children" in options.additionalParameters)
                $data = options.additionalParameters.children || {};
            else $data = {}//no data
        }
        
        if($data != null)//this setTimeout is only for mimicking some random delay
            setTimeout(function(){callback({ data: $data });} , parseInt(Math.random() * 500) + 200);
        //we have used static data here
        //but you can retrieve your data dynamically from a server using ajax call
        //checkout examples/treeview.html and examples/treeview.js for more info
    }
</script>

{% endblock %}  



