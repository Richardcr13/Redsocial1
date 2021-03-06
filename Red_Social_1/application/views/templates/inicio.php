<div class="container mt-3">
    <div class="row">
        <!-- Columna perfil -->
        <div class="col-md-3">
            <div class="container-style-main">
                <div class="perfil-usuario-main">
                    <div class="background-usuario-main"></div>
                    <img src="../images/perfil/camara.png" alt="">
                    <div class="foto-separation"></div>
                    <a href="Perfil" class="links">
                        <div class="text-center nombre-perfil"></div>
                    </a>
                    <div class="tabla-estadisticas">

                    </div>
                </div>
            </div>
        </div>
        <!-- Columna principal -->
        <div class="col-md-6">
            <div class="container-style-main">
                <div class="container-usuario-publicar">
                    <a href="Perfil"><img src="../images/perfil/camara.png" class="image-border " alt=""></a>

                    <form action="Pagina_inicio/publicar" method="POST" enctype="multipart/form-data" class="form-publicar ml-2" id="guardar">

                        <textarea name="contenidoPublicacion"  class="published mb-0" name="post" placeholder="¿Qué estás pensando?" required></textarea>

                            <button class="submit" class="btn-publi">Publicar...</button>

                    </form>
                </div>
                <?php foreach ($post as $posts) {?>
                    <div class="container-usuarios-publicaciones">
                        <div class="usuarios-publicaciones-top">
                            <img src=" ">
                            <div class="informacion-usuario-publico">
                                <h6 class="mb-0"><a href=""></a></h6>
                                <span></span>
                            </div>
                            <div class="acciones-publicacion-usuario">
                                <a href=""><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>


                        <div class="contenido-publicacion-usuario">
                            <p class="mb-1">
                                <?php echo $posts->contenidoPublicacion; ?>
                            </p>
                            <p>
                                <?php echo $posts->fechaPublicacion; ?>
                            </p>
                            <div class="acciones-usuario-publicar mt-2">
                            <a href="" class=""><i class="fas fa-heart mr-1"></i>Me gusta... <span></span></a>

                        </div>
                        <hr>
                        <div class="formulario-comentarios">
                            <img src="" alt="" class="image-border mr-2">
                            <div class="acciones-formulario-comentario">
                                <form action="Pagina_inicio/comentar" method="POST" id="guardar">
                                    <input type="hidden" name="iduserPropietario" value="">
                                    <input type="hidden" name="iduser" value="">
                                    <input type="hidden" name="idpublicacion" value="<?php echo $posts->idpublicacion ?>">
                                    <input type="text" name="contenidoComentario" class="form-comentario-usuario" placeholder="Has un comentario" required>
                                    <div class="btn-comentario-container">
                                        <button type="submit" class="btn-purple">Comenta</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php foreach ($coment as $co) {?>
                        <div class="container-contenido-comentarios">
                                    <img src="" alt="" class="image-border mr-2">
                                    <div class="contenido-comentario-usuario">


                                            <a href="" class="float-right"><i class="far fa-trash-alt"></i></a>


                                        <a href="Perfil" class="big mr-2"><?php echo $co->usuario; ?></a>

                                        <span><?php echo $co->fechaComentario; ?></span>
                                        <p><?php echo $co->contenidoComentario; ?></p>

                                    </div>
                                </div><?php }?>


                        </div>



                    </div>
                    <?php }?>
            </div>
        </div>
        <!-- Columna eventos -->
        <div class="col-md-3">
            <div class="container-style-main">

            </div>
        </div>
    </div>
</div>
