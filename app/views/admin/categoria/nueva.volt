{% extends "layouts/admin.volt" %}


{% block header %}
<style>
    .color{


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
            <form id="form" action="/compropolis/admin/categoria/salvar" method="POST" class="form-horizontal" role="form">

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
                        <input type="text" id="categoriaPadre" name="categoriaPadre" placeholder="" class="form-control" />
                    </div>
                </div>                                                                                                                
                <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Imagen: </label>

                    <div class="col-sm-9">
                        <input type="text" id="imagen" name="imagen" placeholder="Adjunta la imagen de la categoría" class="form-control" />
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
    
    // INICIALIZACIÓN DE JQUERY    
    jQuery(function($){

        $('#tree1').ace_tree({
		dataSource: dataSource2 ,
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
	


        $('#tree1')
        .on('updated', function(e, result) {
                //result.info  >> an array containing selected items
                //result.item
                //result.eventType >> (selected or unselected)
        })
        .on('selected', function(e) {
        })
        .on('unselected', function(e) {
        })
        .on('opened', function(e) {
        })
        .on('closed', function(e) {
        });




    });

    // INICIALIZACIÓN DE BOOTSTRAP
    $(function () {
        $('#guardarBtn').on('click', function () {
//            alert("guardarConceptoBtn");
            guardarCategoria();
        });
    });
    
    
    function guardarCategoria(){

        $.ajax({
                type: "POST",
                url: '{{ url("admin/categoria/salvar") }}',
                data: $('#categoriaForm').serialize(),
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

		var tree_data_2 = {
			'pictures' : {text: 'Pictures', type: 'folder', 'icon-class':'red'}	,
			'music' : {text: 'Music', type: 'folder', 'icon-class':'orange'}	,
			'video' : {text: 'Video', type: 'folder', 'icon-class':'blue'}	,
			'documents' : {text: 'Documents', type: 'folder', 'icon-class':'green'}	,
			'backup' : {text: 'Backup', type: 'folder'}	,
			'readme' : {text: '<i class="ace-icon fa fa-file-text grey"></i> ReadMe.txt', type: 'item'},
			'manual' : {text: '<i class="ace-icon fa fa-book blue"></i> Manual.html', type: 'item'}
		}
		tree_data_2['music']['additionalParameters'] = {
			'children' : [
				{text: '<i class="ace-icon fa fa-music blue"></i> song1.ogg', type: 'item'},
				{text: '<i class="ace-icon fa fa-music blue"></i> song2.ogg', type: 'item'},
				{text: '<i class="ace-icon fa fa-music blue"></i> song3.ogg', type: 'item'},
				{text: '<i class="ace-icon fa fa-music blue"></i> song4.ogg', type: 'item'},
				{text: '<i class="ace-icon fa fa-music blue"></i> song5.ogg', type: 'item'}
			]
		}
		tree_data_2['video']['additionalParameters'] = {
			'children' : [
				{text: '<i class="ace-icon fa fa-film blue"></i> movie1.avi', type: 'item'},
				{text: '<i class="ace-icon fa fa-film blue"></i> movie2.avi', type: 'item'},
				{text: '<i class="ace-icon fa fa-film blue"></i> movie3.avi', type: 'item'},
				{text: '<i class="ace-icon fa fa-film blue"></i> movie4.avi', type: 'item'},
				{text: '<i class="ace-icon fa fa-film blue"></i> movie5.avi', type: 'item'}
			]
		}
		tree_data_2['pictures']['additionalParameters'] = {
			'children' : {
				'wallpapers' : {text: 'Wallpapers', type: 'folder', 'icon-class':'pink'},
				'camera' : {text: 'Camera', type: 'folder', 'icon-class':'pink'}
			}
		}
		tree_data_2['pictures']['additionalParameters']['children']['wallpapers']['additionalParameters'] = {
			'children' : [
				{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper1.jpg', type: 'item'},
				{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper2.jpg', type: 'item'},
				{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper3.jpg', type: 'item'},
				{text: '<i class="ace-icon fa fa-picture-o green"></i> wallpaper4.jpg', type: 'item'}
			]
		}
		tree_data_2['pictures']['additionalParameters']['children']['camera']['additionalParameters'] = {
			'children' : [
				{text: '<i class="ace-icon fa fa-picture-o green"></i> photo1.jpg', type: 'item'},
				{text: '<i class="ace-icon fa fa-picture-o green"></i> photo2.jpg', type: 'item'},
				{text: '<i class="ace-icon fa fa-picture-o green"></i> photo3.jpg', type: 'item'},
				{text: '<i class="ace-icon fa fa-picture-o green"></i> photo4.jpg', type: 'item'},
				{text: '<i class="ace-icon fa fa-picture-o green"></i> photo5.jpg', type: 'item'},
				{text: '<i class="ace-icon fa fa-picture-o green"></i> photo6.jpg', type: 'item'}
			]
		}


		tree_data_2['documents']['additionalParameters'] = {
			'children' : [
				{text: '<i class="ace-icon fa fa-file-text red"></i> document1.pdf', type: 'item'},
				{text: '<i class="ace-icon fa fa-file-text grey"></i> document2.doc', type: 'item'},
				{text: '<i class="ace-icon fa fa-file-text grey"></i> document3.doc', type: 'item'},
				{text: '<i class="ace-icon fa fa-file-text red"></i> document4.pdf', type: 'item'},
				{text: '<i class="ace-icon fa fa-file-text grey"></i> document5.doc', type: 'item'}
			]
		}

		tree_data_2['backup']['additionalParameters'] = {
			'children' : [
				{text: '<i class="ace-icon fa fa-archive brown"></i> backup1.zip', type: 'item'},
				{text: '<i class="ace-icon fa fa-archive brown"></i> backup2.zip', type: 'item'},
				{text: '<i class="ace-icon fa fa-archive brown"></i> backup3.zip', type: 'item'},
				{text: '<i class="ace-icon fa fa-archive brown"></i> backup4.zip', type: 'item'}
			]
		}
		var dataSource2 = function(options, callback){
			var $data = null
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



