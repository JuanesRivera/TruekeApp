<!-- Menú-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img src="assets/img/favicon.ico" alt="" width="40%" height="40%">
        </a>
        <button
            class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
            type="button" data-toggle="collapse" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" data-target="navBarMenu" id ='navBarMenu'>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                        href="#discover">Descubre</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" 
                        href="#offered">Ofertas</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                        href="#groups">Grupos</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                        href="#exchanges">Truekes</a></li>
            </ul>            
        </div>        
    </div>    
</nav>

<!-- Modal Acceder-->
<div class="modal" tabindex="-2" id="modalLogin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Accede</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formLogin">
                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="text" class="form-control" name="email" required="required">
                        <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico
                            con nadie más.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="password" required="required">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label text-muted" for="exampleCheck1">Mantener la sesión iniciada</label>                               
                        </div><br>        
                        <button type="submit" class="btn btn-secondary" id="" form="formLogin">Ingresar</button>                            
                    </div>                                               
                </form>
                <button type="button" class="btn btn-md btn-outline-dark"  id="rememberPassword">¿Olvidaste tu contraseña?</button>
                <button type="button" class="btn btn-md btn-outline-dark"  id="register">Regístrate</button> 
            </div>                                   
        </div>
    </div>
</div>



<!-- Modal Regístrate -->
<div class="modal" tabindex="-1" id="modalRegister">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Regístrate</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerForm">                                                                                  
                    <div class="form-group">
                        <label for="">¿Cuál es tu correo electrónico?</label>
                        <input type="email" class="form-control" name="email" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="">Ingresa una contraseña</label>
                        <input type="password" class="form-control" name="password" required="required" />
                    </div>                    
                    <div class="form-group">
                        <label for="">¿Cuáles son tus nombres?</label>
                        <input type="text" class="form-control" name="name" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="">¿Y tus apellidos? </label>
                        <input type="text" class="form-control" name="last_name" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="">¿Cuál es tu fecha de nacimiento?</label>
                        <input type="date" class="form-control" name="birth_date" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="">Eres...</label>
                        <select class="form-control" name="gender" required="required">
                            <option value="">-- Selecciona --</option>   
                            <option value="M">Mujer</option>
                            <option value="H">Hombre</option>     
                        </select>
                    </div>
                    <div class="form-group">                            
                        <label for="">¿En qué país vives?</label>
                        <select class="form-control" name="country" id="countryLOV" required="required">
                            <option value="">-- Selecciona --</option>
                            <script>    
                                fillLOV('country','select',{1:1},'countryLOV','id','name')                            
                            </script>                                                                                                                                           
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">¿Cuál departamento?</label>
                        <select class="form-control" name="state" id="stateLOV" required="required">   
                            <option value="">-- Selecciona --</option>                         
                            <script>    
                                fillLOV('state','select',{1:1},'stateLOV','id','name')                            
                            </script>                             
                        </select>
                    </div>                    
                    <div class="form-group">                        
                        <label for="">¿Y qué ciudad?</label>
                        <select class="form-control" name="city" id="cityLOV" required="required"> 
                            <option value="">-- Selecciona --</option>                                            
                        </select>
                    </div>      
                    <div class="form-group">                        
                        <input type="hidden" class="form-control" name="register_date" id="theDate" required="required" value="YYYY-MM-DD" />
                    </div>                                 
                    <label for="">Carga una imagen para tu foto de perfil</label>
                    <div class="input-group mb-3">                        
                        <div class="input-group-prepend">
                            <span class="input-group-text">Cargar</span>
                        </div>
                        <div class="custom-file">                                                      
                            <input type="file" class="custom-file-input" id="imageProfile" aria-describedby="image" required="required">
                            <label class="custom-file-label" for="image">Selecciona tu imagen</label>
                        </div>
                    </div>
                </form>
                <div class="modal-footer mt-5">
                <button type="submit" class="btn btn-secondary" form="registerForm">Crea tu usuario</button>
                </div>
            </div>                                   
        </div>
    </div>
</div>

<!-- Modal Recordar Contraseña-->
<div class="modal" tabindex="-2" id="modalRememberPassword">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Reestablece tu contraseña</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="RememberPassForm">
                    <div class="form-group">
                        <label for="">Ingresa tu usuario o correo electrónico</label>
                        <input type="text" class="form-control" name="user" required="required">
                    </div>
                </form>
            </div>
            <div class="modal-footer mb-4 mr-3">
                <button type="submit" class="btn btn-secondary" id="sendRememberPassword">Enviar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Confirmar Recordar Contraseña-->
<div class="modal" tabindex="-2" id="modalRememberPasswordConfirm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Confirmación</h2>
            </div>
            <div class="modal-body">
                <form id="confirmPassForm">
                    <div class="form-group">
                        <a>Te hemos enviado un mensaje a tu correo con los pasos para reestablecer tu contraseña</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer mb-4 mr-3">
                <button type="submit" class="btn btn-secondary" id="closeRemember">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<script>     
        
    $(function () {
        
        /* Inicio de sesión */
        $('#formLogin').on('submit', function(event){                             
    			event.preventDefault();
                let data = parseForm($(this))                            
    			sendPetition('user', 'login', data, function(resp){                    
    				window.location.href = 'index.php'
    			})
            })            
            
        $(document).ready(function() {
            var date = new Date();

            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();

            if (month < 10) month = "0" + month;
            if (day < 10) day = "0" + day;

            var today = year + "-" + month + "-" + day;       
            $("#theDate").attr("value", today);
        });

        $('#stateLOV').change(function(){
            let data = parseForm($(this))                           
            $('#cityLOV').find('option').remove().end()
            $('#cityLOV').append(`<option value="">-- Seleccione --</option>`)
            fillLOV('city','select',data,'cityLOV','id','name')
        })
        /* Ejecución de modales */

        $('#rememberPassword').on('click', function () {
            $('#modalLogin').modal('hide')
            $('#modalRememberPassword').modal('show')
        })
        $('#register').on('click', function () {
            $('#modalLogin').modal('hide')
            $('#modalRegister').modal('show')
        })
        $('#sendRememberPassword').on('click', function () {
            $('#modalRememberPassword').modal('hide')
            $('#modalRememberPasswordConfirm').modal('show')
        })
        $('#closeRemember').on('click', function () {
            $('#modalRememberPasswordConfirm').modal('hide')
        })     
        
        /* Envío de formularios*/

        $('#registerForm').on('submit', function(event){
            event.preventDefault();
            let data = parseForm($(this))                        
            sendPetition('user', 'insert', data, function(resp){                    
                $('#modalRegister').modal('hide')
            })                                
        })

        $('#imageProfile').change(function (e) {
            let externalId = 1
            let imageId = 1

            loadImage('images', externalId, imageId, 'user')               
        });             
        
    })
    
</script>