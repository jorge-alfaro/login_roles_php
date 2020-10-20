<h1>Registrar un usuario 🦹‍♂️</h1>



 <!-- // MODIFICADO -->

<div class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">
                <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'Complete'):?>
    <strong class="Datos_correctos">Registro Completado</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'Failed'):?>
    <strong class="fallido">Registro Fallido, introduce bien los datos</strong>
<?php endif; ?>
<?php Utils::deleteSession('register');?>
                </p>
            
                <form action="<?=base_url?>user/save" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="User">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                   

                    <div class="input-group mb-3">
                        <select name="rol" id="">
                            <option value="usuario">Usuario</option>
                            <option value="profesor">Profesor</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>

                    <div class="row">
                     
                        <div class="col-10">
                            <button type="submit" class="btn btn-dark btn-block btn-flat">Registrar</button>
                        </div>
                    
                    </div>
                </form>

            </div>
           
        </div>
    </div>

</div>