<div class="container mt-3">
    <div class="container-notificaciones-usuario">
        <h6>Mensajeria privada</h6>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <p>Enviar nuevo mensaje</p>
                <form action="Mensajes/mensaje" method="POST">
                    <input type="hidden" name="usuarioMando" value="<?php print_r($this->session->idusuario)?>">
                    <div class="form - group">
                        <label for="usuarios_idusuario">Para:</label>
                        <select name="usuarios_idusuario" id="usuarios_idusuario" class="form - control" required>
                            <option value="">Seleccionar un destinatario</option>
                            <?php foreach ($usuarios as $usuario): ?>
                                <option value=" <?php echo $usuario->idusuario ?>"><?php echo $usuario->usuario ?></option>
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

                    <ul class="collapsible" data-collapsible='accordion'>
                        <li>
                            <div class="collapsible-header teal white-text">Mensajes Entrada</div>
                            <div class="collapsible-body">
                                <ul>
                                    <?php
foreach ($mensajesEntrada as $mensaje) {
    echo 'De: ' . $mensaje->usuario . ';  Contenido: ' . $mensaje->contenido . '<hr>';
}
?>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <br>
                            <div class="collapsible-header teal white-text">Mensajes salida</div>
                            <div class="collapsible-body">
                                <ul><?php
foreach ($mensajesSalida as $mensaje) {
    echo 'Contenido: ' . $mensaje->contenido . ';  Para: ' . $mensaje->usuario . '<hr>';
}
?>
                                </ul>
                            </div>
                        </li>

                    </ul>

            </div>
        </div>
    </div>
</div>
