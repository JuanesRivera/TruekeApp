<section class="page-section bg-primary text-white mb-0" id="offered">
    <div class="container">
        <!-- About Section Heading-->        
        </br></br></br></br></br>
        <h2 class="page-section-heading text-center text-uppercase text-white">Tus Ofertas</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="text-center">
            <p class="lead mt-4">Áquí podrás ofrecer tus productos y servicios para que los demás usuarios puedan
                encontrarlos</p>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4 mb-4" id="newOfferButton"></div>
        <div class="row row-cols-1 row-cols-md-3 text-center" id="offerCard"></div>
</section>

<!-- Modal Nueva Oferta-->
<div class="modal" tabindex="-2" id="modalNewOffer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Tu nueva oferta</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="newOfferForm">
                    <label for="">Carga una foto que represente tu producto o servicio</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Cargar</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imageProduct" aria-describedby="image" accept="image/*">
                            <label class="custom-file-label" for="image">Selecciona tu imagen</label>
                        </div>                                           
                    </div>
                    <script>getUserOffer()</script>
                    <div class="form-group">
                        <label for="">¿Qué vas a publicar?</label>
                        <select class="form-control" name="class" required="required" id="classLOV">
                            <option value="">-- Selecciona --</option>
                            <script>    
                                fillLOV('productClass','select',{1:1},'classLOV','id','description')                            
                            </script> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿A qué categoría pertenence?</label>
                        <select class="form-control" name="type" required="required" id="typeLOV">
                            <option value="">-- Selecciona --</option>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿Cuál será el título de tu oferta? </label>
                        <input type="text" class="form-control" name="title" required="required"/>
                    </div>
                    <div class="form-group-lg">
                        <label for="">Danos una descripción de tu producto o servicio</label>
                        <textarea class="form-control form-control-lg mb-3" type="text" rows="3" name="description" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12 col-md-3">
                                <div class="form-group">
                                    <label for="">¿Cuál es su valor representativo?</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Entre $ </span>
                                        <input name="min_value" type="number" required="required" class="form-control" min=0>
                                        <span class="input-group-text"> y $ </span>
                                        <input name="max_value" type="number" required="required" class="form-control" min=0>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">¿En qué estado se encuentra?</label>
                        <select class="form-control" name="status" required="required" id="statusLOV">
                            <option value="">-- Selecciona --</option>
                            <script>    
                                fillLOV('productStatus','select',{1:1},'statusLOV','id','description')                            
                            </script> 
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿Que tamaño tiene?</label>
                        <select class="form-control" name="size" required="required" id='sizeLOV'>
                            <option value="">-- Selecciona --</option>
                            <script>    
                                fillLOV('productSize','select',{1:1},'sizeLOV','id','description')                            
                            </script>                             
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿Cuanto pesa?</label>
                        <select class="form-control" name="weight" required="required" id='weightLOV'>
                            <option value="">-- Selecciona --</option>
                            <script>    
                                fillLOV('productWeight','select',{1:1},'weightLOV','id','description')                            
                            </script>                             
                        </select>
                    </div>                    
                </form>
            </div>
            <div class="modal-footer mb-4 mr-3">                
                <button type="submit" class="btn btn-secondary" form="newOfferForm">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ver más-->
<div class="modal" tabindex="-2" id="modalMoreInfo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="headerMore"></div>
            <div class="modal-body" id="bodyMore"></div>
            <div class="modal-footer mb-0 mr-3"></div>
        </div>
    </div>
</div>

<!-- Modal Ofertar-->
<div class="modal" tabindex="-2" id="modalChange">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Haz una oferta</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyDelete">            
            <form id="changeForm"></form>
            <div class="modal-footer mb-4 mr-3">                
                <button type="submit" class="btn btn-secondary" form="changeForm">Enviar</button>
            </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal Editar -->
<div class="modal" tabindex="-2" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Editar</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyEdit">                        
            <form id="editForm">
            </form>
            <div class="modal-footer mb-4 mr-3">                
                <button type="submit" class="btn btn-secondary" form="editForm">Enviar</button>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Grupo -->
<div class="modal" tabindex="-2" id="modalGroupEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Editar</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyGroupEdit">                        
            <form id="editGroupForm">
            </form>
            <div class="modal-footer mb-4 mr-3">                
                <button type="submit" class="btn btn-secondary" form="editGroupForm">Enviar</button>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Eliminar -->
<div class="modal" tabindex="-2" id="modalDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Eliminar oferta</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyDelete">  
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="../TruekeApp/assets/img/bin.png" width="50px" height="50px"/>
                        </div>
                        <div class="col-10">
                            <h3>¿Estás seguro que deseas eliminar esta oferta?</h3>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer mb-4 mr-3" id="footerDelete">                                    
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal Eliminar Grupo-->
<div class="modal" tabindex="-2" id="modalGroupDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Eliminar grupo</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bodyDelete">  
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="../TruekeApp/assets/img/bin.png" width="50px" height="50px"/>
                        </div>
                        <div class="col-10">
                            <h3>¿Estás seguro que deseas eliminar este grupo?</h3>  
                        </div>
                    </div>
                </div>
                <div class="modal-footer mb-4 mr-3" id="footerGroupDelete">                                    
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal Nuevo grupo -->
<div class="modal" tabindex="-2" id="modalNewGroup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Tu nuevo grupo</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="newGroupForm">
                    <label for="">Carga una foto que represente tu grupo</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" >Cargar</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="imageGroup" aria-describedby="image" accept="image/*">
                            <label class="custom-file-label" for="image">Selecciona tu imagen</label>
                        </div>                                           
                    </div>                    
                    <div class="form-group">
                        <label for="">¿Cómo se llama tu grupo?</label>
                        <input type="text" class="form-control" name="title" required="required"/>
                    </div>
                    <div class="form-group-lg">
                        <label for="">Danos una descripción de qué se hará en tu grupo</label>
                        <textarea class="form-control form-control-lg mb-3" type="text" rows="3" name="description" required="required"></textarea>
                    </div>                                        
                </form>
            </div>
            <div class="modal-footer mb-4 mr-3">                
                <button type="submit" class="btn btn-secondary" form="newGroupForm">Guardar</button>
            </div>
        </div>
    </div>
</div>

<?php require('../libs/login.php');?>

<script>    

    function init() {           
        
        /* Carga de datos */
       
        loadOffers({1:1},'load')   
        loadDiscover()  
        loadGroups({1:1},'load')           

        $('#classLOV').change(function(){
            let data = parseForm($(this))                           
            $('#typeLOV').find('option').remove().end()
            $('#typeLOV').append(`<option value="">-- Seleccione --</option>`)
            fillLOV('productType','select',data,'typeLOV','id','description')
        })     

        /* Ejecución de modales */

        $('#newOffer').on('click', function () {
            $('#modalNewOffer').modal('show')
        })       
        
        $('#newGroup').on('click', function () {
            $('#modalNewGroup').modal('show')
            sendPetition('user', 'getSesion', {1:1}, function(resp){                                  
                $('#newGroupForm').append(`<input type="hidden" value="${resp.data.id}" class="form-control" name="user" required="required"/>`)                
            })
        })  

        /* Envío de formularios*/

        $('#newOfferForm').on('submit', function(event){
            event.preventDefault();
            let data = parseForm($(this))                           
            sendPetition('offer', 'insert', data, function(resp){                    
                $('#modalNewOffer').modal('hide')
                loadOffers(data,'load')                
            })
        })   

        $('#changeForm').on('submit', function(event){
            event.preventDefault();
            let data = parseForm($(this))                           
            sendPetition('exchange', 'insert', data, function(resp){                    
                $('#modalChange').modal('hide')                
            })
        })    
        
        $('#newGroupForm').on('submit', function(event){
            event.preventDefault();                                             
            let data = parseForm($(this))              
            sendPetition('groupUser', 'insert', data, function(resp){                    
                $('#modalNewGroup').modal('hide')                
            })            
        })  

        $('#editGroupForm').on('submit', function(event){
            event.preventDefault();
            let data = parseForm($(this))                                     
            sendPetition('groupUser', 'update', data, function(resp){                    
                $('#modalEditGroup').modal('hide')                            
            })
        })         
    }         

    function loadOffers(data, action){                         
        let card = ''   
        sendPetition('user', 'getSesion', {1:1}, function(user){    
            sendPetition('offer', 'select', {user:user.data.id}, function(resp){                                        
                for(let i = 0; i < resp.data.length; i++){
                    card += `<div class="col-4 mb-4" id="offer${resp.data[i].id}">
                                <div class="card h-100">
                                    <img src="../TruekeApp/assets/img/offer.jpg" class="card-img-top" width="800px"height="350px">	  								
                                    <div class="card-body">
                                        <h5 class="card-title text-secondary">${resp.data[i].title}</h5>
                                        <p class="card-text text-secondary">${resp.data[i].description}</p>
                                        <p class="card-text text-muted">V.R. $${resp.data[i].min_value} a $${resp.data[i].max_value}</p>
                                        <button type="button" onClick="modalEdit(${resp.data[i].id})" class="btn btn-secondary" id="editCard" form="formLogin">Editar</button>
                                        <button type="button" onClick="modalDelete(${resp.data[i].id})" class="btn btn-danger" id="deleteCard" form="formLogin">Eliminar</button>
                                    </div>
                                </div>
                            </div>`
                }            
                if(action == 'load'){
                    $('#offerCard').append(card)
                }else{
                    $('#offer'+resp.data[i].id).replaceWith(card)
                }            
            })              
        })                    
    }

    function loadDiscover(){                   
        let card = ''               
        sendPetition('offer', 'select', {1:1}, function(resp){                                        
            for(let i = 0; i < resp.data.length; i++){
                card += `<div class="col-4 mb-4" id="discover${resp.data[i].id}">
                            <div class="card h-100">
                                <img src="../TruekeApp/assets/img/offer.jpg" class="card-img-top" width="800px"height="350px">	  								
	  							<div class="card-body">
	    							<h5 class="card-title text-secondary">${resp.data[i].title}</h5>
                                    <p class="card-text text-secondary">${resp.data[i].description}</p>
                                    <p class="card-text text-muted">V.R. $${resp.data[i].min_value} a $${resp.data[i].max_value}</p>
                                    <button type="button" onClick="modalMore(${resp.data[i].id})" class="btn btn-secondary" id="moreCard">Ver más</button>                                                                                               
                                    <button type="button" onClick="modalChange(${resp.data[i].id})" class="btn btn-secondary" id="changeCard">Ofertar</button></div></div></div>`                                                                                                
                                    
            }                                                        
            $('#discoverCard').append(card)          
        })       
    }    

    function loadGroups(data,action){                   
        let card = ''               
        sendPetition('groupUser', 'select', data, function(resp){                                               
            for(let i = 0; i < resp.data.length; i++){
                card += `<div class="col-4 mb-4" id="group${resp.data[i].id}">
                            <div class="card h-100">
                                <img src="../TruekeApp/assets/img/offer.jpg" class="card-img-top" width="800px"height="350px">	  								
	  							<div class="card-body">
	    							<h5 class="card-title text-secondary">${resp.data[i].title}</h5>
                                    <p class="card-text text-secondary">${resp.data[i].description}</p>
                                    <p class="card-text text-muted">Creado por ${resp.data[i].user}</p>
                                    <button type="button" onClick="modalGroupEdit(${resp.data[i].id})" class="btn btn-secondary" id="editCard" form="formLogin">Editar</button>
                                    <button type="button" onClick="modalGroupDelete(${resp.data[i].id})" class="btn btn-danger" id="deleteCard" form="formLogin">Eliminar</button></div></div></div>`                                                                                                                                                   
                if (action = 'load'){
                    $('#groupCard').append(card)    
                }
                else{
                    $('#group'+resp.data[i].id).replaceWith(card)
                }
            }     
                                                                                                 
        })       
    }        

    function modalMore(cardId){
        $('#modalMoreInfo').modal('show')
        $('#headerMore').find('h1').remove().end()
        $('#headerMore').find('button').remove().end()
        $('#bodyMore').find('h4').remove().end()
        $('#bodyMore').find('h5').remove().end()
        $('#bodyMore').find('hr').remove().end()        
        sendPetition('offer','select', {'id':cardId}, function(resp){
            $('#headerMore').append(`<h1 class="modal-title">${resp.data[0].title}</h1>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span></button>`)
            $('#bodyMore').append(`<h5 class="text-muted">descripción</h5>                                    
                                   <h4>${resp.data[0].description}</h4>   
                                   <hr/>
                                   <h5 class="text-muted">Clase</h5>`)                                                                       
            sendPetition('productClass', 'select', {'id':resp.data[0].class}, function(productClass){                
                $('#bodyMore').append(`<h4>${productClass.data[0].description}</h4>`)   
                $('#bodyMore').append(`<hr/><h5 class="text-muted">Categoría</h5>`)  
                sendPetition('productType', 'select', {'id':resp.data[0].type}, function(productType){                                                                      
                    $('#bodyMore').append(`<h4>${productType.data[0].description}</h4>`)  
                    $('#bodyMore').append(`<hr/>
                                   <h5 class="text-muted">Valor representativo</h5>                                   
                                   <h4>$ ${resp.data[0].min_value} - $ ${resp.data[0].max_value}</h4><hr/>
                                   <h5 class="text-muted">Estado</h5>`)    
                    sendPetition('productStatus', 'select', {'id':resp.data[0].status}, function(productStatus){                                   
                        $('#bodyMore').append(`<h4>${productStatus.data[0].description}</h4><hr/>
                                   <h5 class="text-muted">Tamaño</h5>`)  
                        sendPetition('productSize', 'select', {'id':resp.data[0].size}, function(productSize){                                       
                            $('#bodyMore').append(`<h4>${productSize.data[0].description}</h4><hr/>
                                   <h5 class="text-muted">Peso</h5>`) 
                            sendPetition('productWeight', 'select', {'id':resp.data[0].size}, function(productWeight){                    
                                    $('#bodyMore').append(`<h4>${productWeight.data[0].description}</h4><hr/>
                                        <h5 class="text-muted">Publicado por</h5>`)   
                                    sendPetition('user', 'select', {'id':resp.data[0].user}, function(productUser){                    
                                        $('#bodyMore').append(`<h4>${productUser.data[0].name} ${productUser.data[0].last_name}</h4><hr/>
                                        <button type="button" onClick="modalChange(${resp.data[0].id})" class="btn btn-secondary" id="changeCard">Ofertar</button>`)   
                                    })
                            })
                        })
                    })
                })
                                        
            })  
                      
        })
        
    }

    function modalChange(cardId){
        console.log(cardId)
        $('#modalMoreInfo').modal('hide')
        $('#modalChange').modal('show')
        $('#modalChange').find('label').remove().end()
        $('#modalChange').find('textarea').remove().end()

        sendPetition('offer', 'select', {'id':cardId}, function(resp){   
            sendPetition('user', 'select', {'id':resp.data[0].user}, function(productUser){ 
                sendPetition('user', 'getSesion', {1:1}, function(sesionUser){                                           
                    $('#changeForm').append(`<input type="hidden" class="form-control" name="user_offer" required="required" value="${sesionUser.data.id}" />
                                         <input type="hidden" class="form-control" name="user_accept" required="required" value="${productUser.data[0].id}" />
                                         <div class="form-group-lg">
                                         <label for="">Escríbele a <b>${productUser.data[0].name}</b> por su publicación <b>"${resp.data[0].title}"</b> y ofrécele algo a cambio:</label>
                                         <textarea class="form-control form-control-lg mb-3" type="text" rows="3" name="description" required="required"></textarea>
                                         </div>`)
                })                                                                                 
            })
        })
    }

    function modalEdit(cardId){             
        $('#modalEdit').modal('show')            
        sendPetition('offer','select',{id:cardId},function(resp){            
            $('#editForm').append(`<div class="form-group">
                        <label for="">¿Qué vas a publicar?</label>
                        <select class="form-control" name="class" required="required" id="classLOVEdit value="">
                            <option value="">-- Selecciona --</option>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿A qué categoría pertenence?</label>
                        <select class="form-control" name="type" required="required" id="typeLOVEdit">
                            <option value="">-- Selecciona --</option>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿Cuál será el título de tu oferta? </label>
                        <input type="text" class="form-control" name="title" required="required"/>                                                         
                    </div>
                    <div class="form-group-lg">
                        <label for="">Danos una descripción de tu producto o servicio</label>
                        <textarea class="form-control form-control-lg mb-3" type="text" rows="3" name="description" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-12 col-md-3">
                                <div class="form-group">
                                    <label for="">¿Cuál es su valor representativo?</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Entre $ </span>
                                        <input name="min_value" type="number" required="required" class="form-control" min=0>
                                        <span class="input-group-text"> y $ </span>
                                        <input name="max_value" type="number" required="required" class="form-control" min=0>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">¿En qué estado se encuentra?</label>
                        <select class="form-control" name="status" required="required" id="statusLOVEdit">
                            <option value="">-- Selecciona --</option>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿Que tamaño tiene?</label>
                        <select class="form-control" name="size" required="required" id='sizeLOVEdit'>
                            <option value="">-- Selecciona --</option>                                                       
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿Cuanto pesa?</label>
                        <select class="form-control" name="weight" required="required" id='weightLOVEdit'>
                            <option value="">-- Selecciona --</option>                                                       
                        </select>
                    </div>`)  
                    getUserOffer()   
        fillLOV('productClass','select',{1:1},'classLOVEdit','id','description')
        fillLOV('productWeight','select',{1:1},'weightLOVEdit','id','description')                            
        fillLOV('productSize','select',{1:1},'sizeLOVEdit','id','description')                            
        fillLOV('productStatus','select',{1:1},'statusLOVEdit','id','description')      
        })        
    }

    function modalGroupEdit(cardId){             
        $('#modalGroupEdit').modal('show')  
        $('#modalGroupEdit').find('label').remove().end()          
        $('#modalGroupEdit').find('input').remove().end()       
        $('#modalGroupEdit').find('textarea').remove().end()       
        sendPetition('groupUser','select',{id:cardId},function(resp){            
            $('#editGroupForm').append(`<div class="form-group">
                        <label for="">¿Cómo se llama tu grupo?</label>
                        <input type="text" class="form-control" name="title" required="required" value="${resp.data[0].title}"/>
                    </div>
                    <div class="form-group-lg">
                        <label for="">Danos una descripción de qué se hará en tu grupo</label>
                        <textarea class="form-control form-control-lg mb-3" type="text" rows="3" name="description" required="required" value="${resp.data[0].description}"></textarea>
                    </div>`)      
        })        
    }

    function modalDelete(cardId){
        $('#modalDelete').modal('show')
        $('#modalDelete').find('button').remove().end()
        $('#footerDelete').append(`<button type="button" onClick="deleteCard(${cardId})" class="btn btn-secondary" form="changeForm">Si</button>
                                   <button type="button" onClick="$('#modalDelete').modal('hide')"class="btn btn-secondary" form="changeForm">No</button>`)
    }

    function modalGroupDelete(cardId){
        $('#modalGroupDelete').modal('show')
        $('#modalGroupDelete').find('button').remove().end()
        $('#footerGroupDelete').append(`<button type="button" onClick="deleteGroup(${cardId})" class="btn btn-secondary" form="changeForm">Si</button>
                                   <button type="button" onClick="$('#modalGroupDelete').modal('hide')"class="btn btn-secondary" form="changeForm">No</button>`)
    }

    function deleteCard(cardId){        
        console.log(cardId)
        sendPetition('offer','delete',{'id':cardId}, function(resp){
            console.log(resp)
            $('#modalDelete').modal('hide') 
            $('#offer'+cardId).hide('slow')
            $('#discover'+cardId).hide('slow')
        })
    }

    function deleteGroup(cardId){        
        console.log(cardId)
        sendPetition('groupUser','delete',{'id':cardId}, function(resp){
            console.log(resp)
            $('#modalGroupDelete').modal('hide') 
            $('#group'+cardId).hide('slow')            
        })
    }

</script>