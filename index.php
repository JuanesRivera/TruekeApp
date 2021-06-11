<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Trueke App" />
    <meta name="author" content="Juan Esteban Rivera" />

    <!-- Título -->
    <title>Trueke App - ¡Suéñalo, Búscalo y Cámbialo!</title>

    <!-- Estilos -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />    
    <link href="css/styles.css" rel="stylesheet" />    

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
    <script src="js/main.js"></script>    

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.ico" />
</head>

<!-- Body -->
<body id="page-top">    

    <!-- Menú -->
    <div class="menuSection"></div>

    <!-- Header -->
    <div class="headerSection"></div>

    <!-- Sección Descubre -->
    <div class="discoverSection"></div>

    <!--Sección Ofertas-->
    <div class="offeredSection"></div>

    <!-- Sección Grupos-->
    <div class="groupsSection"></div>

    <!--Sección Truekes-->    
    <div class="exchangesSection"></div>

    <!-- Sección Perfil-->    
    <div class="profileSection"></div>
    
    <!-- Footer-->
    <div class="footer"></div>      
    
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <?php require('libs/login.php');?>

    <script>

        function init(){}
        
        /* Carga las secciones de la página */
        $(document).ready(function () {
          $('.menuSection').load('./sections/menu.php');
          $('.headerSection').load('./sections/header.php');          
          $('.discoverSection').load('./sections/discover.php');
          $('.offeredSection').load('./sections/offered.php');
          $('.groupsSection').load('./sections/groups.php');
          $('.exchangesSection').load('./sections/exchanges.php');
          $('.profileSection').load('./sections/profile.php');
          $('.footer').load('./sections/footer.php'); 
        });     

        function fillLOV(object, method, data, element, idc, attribute){            
            sendPetition(object, method, data, function(resp){               
                for (i = 0; i < resp.data.length; i++){                        
                    $("#" + element).append("<option value="+resp.data[i][idc]+">"+resp.data[i][attribute]+"</option>")
                }
            })
        }                      

        function loadImage(data){            
            $fileName = $_FILES['file']['name'];            
        }

        function getUserOffer(){            
            sendPetition('user', 'getSesion', {1:1}, function(resp){                                           
                if(resp.data.length != 0){   
                    $('#newOfferForm').append(`<div class="form-group">
                    <input type="hidden" class="form-control" name="user" required="required" value="${resp.data.id}" />
                    </div>`)                
                }            
            })      
        }        

        function getUserData(){            
            sendPetition('user', 'getSesion', {1:1}, function(resp){                                           
                if(resp.data.length != 0){   
                    $('#dataUserImg').append(`<img src="../TruekeApp/assets/img/cabin.png" class="rounded-circle float-right" width="250px" height="250px">`)                                                                                              
                    $('#dataUserName').append(`<h4 class="text-muted">Nombres</h4> 
                                            <hr/>
                                            <h2>${resp.data.name}</h2></br>    
                                            <h4 class="text-muted">Apellidos</h4> 
                                            <hr/>
                                            <h2>${resp.data.last_name}</h2>`)   
                    $('#dataUserEdit').append(`<button type="button" class="btn btn-xl btn-outline-dark" id="newGroup">Editar</button>`)

                    let gender = ''   
                    let location = ''                 

                    if (resp.data.gender == 'H'){
                        gender = 'Hombre'
                    }
                    else{
                        gender = 'Mujer'
                    }                                                                     

                    $('#dataUserGeneral').append(`<h4 class="text-muted">Correo electrónico</h4> 
                                                <hr/>
                                                <h2>${resp.data.email}</h2></br>    
                                                <h4 class="text-muted">Género</h4> 
                                                <hr/>
                                                <h2>${gender}</h2></br> 
                                                <h4 class="text-muted">Fecha de nacimiento</h4> 
                                                <hr/>
                                                <h2>${resp.data.birth_date}</h2></br> 
                                                <h4 class="text-muted">Ubicación</h4> 
                                                <hr/>`)
        
                    sendPetition('city', 'select', {'id':resp.data.city}, function(city){        
                        sendPetition('state', 'select', {'id':resp.data.state}, function(state){
                            sendPetition('country', 'select', {'id':resp.data.country}, function(country){
                                $('#dataUserGeneral').append(`<h2>${city.data['0'].name}, ${state.data['0'].name}, ${country.data['0'].name}</h2></br>
                                                              <h4 class="text-muted">Registrado desde</h4> 
                                                              <hr/>
                                                              <h2>${resp.data.register_date}</h2>`)                        
                            })
                        })
                    })                    
                }            
            })      
        }        

        $(document).ready(function(){
            $('.zoom').hover(function() {
                $(this).addClass('transition');
            }, function() {
                $(this).removeClass('transition');
                });
            });                   

    </script>

</body>

</html>