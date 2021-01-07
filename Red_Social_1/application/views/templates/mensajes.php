<div class="container mt-3">
    <div class="container-notificaciones-usuario">
        <h6>Mensajeria privada</h6>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <p>Enviar nuevo mensaje...</p>
                <form action="Mensajes/mensaje" method="POST">
                    <input type="hidden" name="usuarioMando" value="<?php print_r($this->session->session_id)?>">
                    <div class="form - group">
                        <label for="usuarios_idusuario">Para:</label>
                        <select name="usuarios_idusuario" id="usuarios_idusuario" class="form - control" required>
                            <option value="">Seleccionar un destinatario</option>
                            <?php foreach ($consulta->result() as $allUsuarios): ?>
                                <option value=" <?php echo $allUsuarios->idusuario ?>"><?php echo $allUsuarios->usuario ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contenido">Mensaje:</label>
                        <textarea name="contenido" id="contenido" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <button class="btn-purple btn-block">Enviar mensaje</button>
                </form>
            </div>
            <div class="col-md-6">
                <p>Mensajes recibidos</p>
                <hr>

                    <div class="container-contenido-comentarios">
                        <img src="" alt="" class="image-border mr-2">
                        <div class="contenido-comentario-usuario">

                            <a href=""><i class="far fa-trash-alt"></i></a>

                            <a href="" class="big mr-2"></a>

                            <p></p>

                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>