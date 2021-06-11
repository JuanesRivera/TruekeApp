function sendPetition(object, method, data, callback){
    $.ajax({
        url: "./libs/frontController.php",
        type: "POST",
        dataType: "json",
        data: {
            object: object,
            method: method,
            data: data
        },        
        success: function(response){
            if(response.execute){
                callback(response)       
            }
            else{
                alert(response.errorMessage)
            }            
        }
    })
}

function parseForm(form){
    let array = form.serializeArray()
    let response = {}           
    for (let i = 0; i < array.length; i++){
        response[array[i].name] = array[i].value
    }
    return response
}

function loadImage(object, externalId, imageId, entity){    
    let file = $('#imageProfile')[0].files[0]
    let ext = file.name.split('.')    
    if(ext[1] == 'jpg' || ext[1] == 'png' || ext[1] == 'jpeg' || ext[1] == 'JPG'){
        var fd = new FormData()
        fd.append('object',object)
        fd.append('method','loadImage')
        fd.append('data[id]',imageId)
        fd.append('file',file)
        $.ajax({
            url: "./libs/frontController.php",
            type: "POST",
            dataType: "json",
            data: fd,
            contentType: false,
            processData: false,
            success: function(r){      
                if(r.execute == true){
                    sendPetition('images','insert',{id:externalId,image:imageId,entity:entity}, function(r){}
                    )
                }
                else{
                    alert(r.errorMessage)
                }
            }                        
        })
    }
    else{
        alert("Tipo de archivo no permitido")
    }

}