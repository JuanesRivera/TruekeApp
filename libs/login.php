<script src="./js/main.js"></script>
<script>
	$(function(){       
        sendPetition('user', 'getSesion', {1:1}, function(resp){                                
            if(resp.data.length == 0){
                $('#navBarMenu').append(`<li class="nav-item mx-0 mx-lg-1"><button type="button"
                        class="btn btn-primary py-3 px-0 px-lg-2 rounded js-scroll-trigger"
                        id="login">Accede</button></li>`)
                        
                $('#login').on('click', function () {
                    $('#modalLogin').modal('show')
                })
            }else{                                          
                $('#navBarMenu').append(`<li class="text text-right"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                        href="#profile">${resp.data.name}</br>${resp.data.last_name}</a></li>`)                             
                $('#navBarMenu').append(`<li class="nav-item mx-0 mx-lg-1 center"><button type="button"
                        class="btn btn-primary py-3 px-0 px-lg-2 rounded js-scroll-trigger"
                        id="exit">Salir</button></li>`)                                    	
            	$('#exit').on('click', function(){
            		sendPetition('user', 'destroySesion', {1:1}, function(resp){
                		window.location.href = 'index.php'
            		})  
                })     
                $('#newOfferButton').append(`<button type="button" class="btn btn-xl btn-outline-light" id="newOffer" >
                                                <i class="fas fa-star mr-2"></i>Nueva oferta</button>`)    
                $('#discoverButton').append(`<input class="form-control mr-sm-2" type="search" placeholder="Ingresa un producto o servicio"
                                                aria-label="Search" style="text-align:center;"><button type="button" class="btn btn-lg btn-outline-dark mt-2 mb-5" type="submit">Búscalo</button>`)                                                                       
                $('#groupButton').append(`<button type="button" class="btn btn-xl btn-outline-dark" id="newGroup">
                                                <i class="fas fa-star mr-2"></i>Nuevo grupo</button>`)
                init()
            }            
        })    
    })    

</script>

