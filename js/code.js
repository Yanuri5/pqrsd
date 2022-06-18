$('#municipios').change(function(){
    
    postData={
        municipios: $('#municipios').val()
    }
    
    $.ajax({
        data: postData,
        url: '../models/veredas.php',
        type: 'post',
        beforeSend: function(){
            $('#error').empty()
            $('#veredas').empty()
        },
        success: function(response){
            veredas= JSON.parse(response)
            incluirVereda(veredas);
            console.log(response);
            
            
        }

    })


})
function incluirVereda(veredas){
    if(veredas['length']>0){
        for(let i=0; i<veredas['length']; i++){
            //console.log(municipios[i]["municipio"])
            $('#veredas').prepend(`<option value='${veredas[i]['id']}'>${veredas[i]['vereda']}</option>`)
            
        }

    }else{
        $('#error').prepend('<p>No se encontraron datos</p>')

    }
   
}

$(buscar_usuario());

function buscar_usuario(consulta){
    $.ajax({
        url: '../models/busc_user.php',
        type: 'post',
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done( function(respuesta){
        $("#existe_user").html(respuesta);
    })
    .fail(function(){
        console.log('Error');
    })
}

$(document).on('keyup', '#caja_busqueda', function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_usuario(valor);
    }
})


function buscar_entidad(consulta){
    $.ajax({
        url: '../models/busc_ent.php',
        type: 'post',
        dataType: 'html',
        data: {consulta: consulta},
    })
    .done( function(respuesta){
        $("#existe_ent").html(respuesta);
    })
    .fail(function(){
        console.log('Error');
    })
}

$(document).on('keyup', '#caja_busq', function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_entidad(valor);
    }
})