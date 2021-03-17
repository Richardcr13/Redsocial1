<div class="perfil-container-usuario">
    <div class="imagen-header-perfil-usuario">
        <img src="../images/nav-bar/k.jpg" class="imagen-portada-perfil" alt="">
</div>


   <div class="container-header-usuario">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="datos-perfil-usuario">
                        <img src="../images/nav-bar/k.jpg" class="imagen-perfil-usuario" alt="">

                            <div class="imagen-perfil-cambiar">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <i class="fas fa-camera"></i>
                                    <div class="input-file">
                                        <input type="hidden" name="id_user" value="">
                                        <input type="file" name="imagen" id="imagen" required>
                                    </div>
                                    </div>
                                    <div class="editar-perfil">
                                        <button class="btn-change-image">Editar</button>
                                    </div>
                                </form>


                        <div class="datos-personales-usuario">
                            <h3></h3>
                            <div class="descripcion-usuario">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="container-principal-informacion-usuario">
                        <div class="container-style-main">

                                <div class="container-usuario-publicar">
                                    <a href="Perfil"><img src="../images/perfil/camara.png" class="image-border " alt=""></a>
                                    <form action="Pagina_inicio/publicar" method="POST" class="form-publicar ml-2" id="guardar">
                                        <textarea name="contenidoPublicacion" id="" class="published mb-0" placeholder="¿Qué estas pensando?" required></textarea>


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
                                <form action="Perfil/publicar" method="POST">
                                    <input type="hidden" name="iduserPropietario" value="">
                                    <input type="hidden" name="iduser" value="">
                                    <input type="hidden" name="idpublicacion" value="<?php echo $posts->idpublicacion ?>">
                                    <input type="text" name="contenidoPublicacion" class="form-comentario-usuario" placeholder="Has un comentario" required>
                                    <div class="btn-comentario-container">
                                        <button class="btn-purple">Comentar...</button>
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
                </div>
