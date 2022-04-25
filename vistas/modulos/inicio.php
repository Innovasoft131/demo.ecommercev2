<section class="banner">
    <div class="textBx">
        <h2>¡Dale un nuevo estilo <br> a tu entrenamiento!</h2>
        <p>El éxito no siempre se trata de grandeza.
        Se trata de coherencia. El trabajo <br> duro y constante logra el éxito.
         vendrá la grandeza.</p>
         <a href="#" class="btn">Explere ahora &#8594;</a>
    </div>
</section>
<!---- categoria de niños, mujeres y hombres ----->
<div class="categories">
    <div class="container-peque">
        <div class="row">
            <div class="col-3" id="cnHombre">
                <h3>Hombres</h3>
                <img src="vistas/img/plantilla/hombres.jpg">
            </div>
            <div class="col-3" id="cnNinio">
                <h3>Niños</h3>
                <img src="vistas/img/plantilla/ninios.jpg">
            </div>
            <div class="col-3" id="cnMujer">
                <h3>Mujeres</h3>
                <img src="vistas/img/plantilla/mujeres.jpg">
            </div>
        </div>
    </div>

</div>

<!---- Nuevos productos ----->
<div class="container-peque">
    <h2 class="titulo">Nuevos Productos</h2>
    <div class="row">
        <?php
            $item = "estado";
            $valor = "Nuevo";

            $iniciar = 0;
            $articulo_por_pagina = 4;
                

            $respuesta = ControladorInicio::ctrMostrarProductosLim($item, $valor, $iniciar,$articulo_por_pagina);


            $ruta = "https://admin.ferxostyle.com.mx/";


            foreach ($respuesta as $key => $value) {
                echo '<div class="col-4">
                        <img src="vistas/img/plantilla/Modelo4.png">
                        <h4>'.$value["nombre"].'</h4>
                        <p>$'.$value["precio"].'</p>
                    </div>';
            }
                        
        ?>
        
            
            

        <!--div class="col-4">
            <img src="vistas/img/plantilla/product-2.jpg">
            <h4>Modelo 1</h4>
            <div class="clasificacion">
                <i class="fa fa-star"></i>
            </div>
            <p>$500.00</p>
        </div-->

    </div>
<!--
    <h2 class="titulo">Ofertas</h2>
    <div class="row">
        <div class="col-4">
            <img src="vistas/img/plantilla/product-5.jpg">
            <h4>Modelo 1</h4>
            <div class="clasificacion">
                <i class="fa fa-star"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="vistas/img/plantilla/product-6.jpg">
            <h4>Modelo 1</h4>
            <div class="clasificacion">
                <i class="fa fa-star"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="vistas/img/plantilla/product-7.jpg">
            <h4>Modelo 1</h4>
            <div class="clasificacion">
                <i class="fa fa-star"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="vistas/img/plantilla/product-8.jpg">
            <h4>Modelo 1</h4>
            <div class="clasificacion">
                <i class="fa fa-star"></i>
            </div>
            <p>$500.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="vistas/img/plantilla/product-9.jpg">
            <h4>Modelo 1</h4>
            <div class="clasificacion">
                <i class="fa fa-star"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="vistas/img/plantilla/product-10.jpg">
            <h4>Modelo 1</h4>
            <div class="clasificacion">
                <i class="fa fa-star"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="vistas/img/plantilla/product-11.jpg">
            <h4>Modelo 1</h4>
            <div class="clasificacion">
                <i class="fa fa-star"></i>
            </div>
            <p>$500.00</p>
        </div>
        <div class="col-4">
            <img src="vistas/img/plantilla/product-12.jpg">
            <h4>Modelo 1</h4>
            <div class="clasificacion">
                <i class="fa fa-star"></i>
            </div>
            <p>$500.00</p>
        </div>
    </div>
    -->
</div>

<!-- Pedidos Personalizados -->
<div class="ofertas">
    <div class="container-peque">
        <div class="row">
            <div class="col-2">
                <img src="vistas/img/plantilla/playera1.png" class="oferta-img">
            </div>
            <div class="col-2">
                <p>Disponible exclusivamente en FerxoStyle</p>
                <h1>Modelo Personalizado</h1>
                <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam distinctio inventore, iusto, natus facilis recusandae eveniet fuga quasi reiciendis praesentium nobis sed magni, totam quibusdam numquam provident. Ad, sapiente quos?</small>
                <br>
                <a href="#" class="btn">Comprar ahora &#8594;</a>
            </div>
        </div>
    </div>
</div>


<!-- comentarios -->

<div class="comentarios">
    <div class="container-peque">
        <div class="row">
            <div class="col-3">
                <i class="fas fa-quote-left commillas"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi delectus assumenda, numquam magni omnis asperiores natus hic tempora nobis sed esse quae dolorum amet nesciunt, ad reprehenderit sunt labore quo.</p>
                <img src="vistas/img/plantilla/user-1.png">
                <h3>Cristina</h3>
            </div>
            <div class="col-3">
                <i class="fas fa-quote-left commillas"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi delectus assumenda, numquam magni omnis asperiores natus hic tempora nobis sed esse quae dolorum amet nesciunt, ad reprehenderit sunt labore quo.</p>
                <img src="vistas/img/plantilla/user-2.png">
                <h3>Juan</h3>
            </div>
            <div class="col-3">
                <i class="fas fa-quote-left commillas"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi delectus assumenda, numquam magni omnis asperiores natus hic tempora nobis sed esse quae dolorum amet nesciunt, ad reprehenderit sunt labore quo.</p>
                <img src="vistas/img/plantilla/user-3.png">
                <h3>Juana</h3>
            </div>
        </div>
    </div>
</div>


<!-- marcas -->

<div class="marcas">
    <div class="container-peque">
        <div class="row">
            <!-- div class="col-5">
                <img src="vistas/img/plantilla/logo-godrej.png">
            </div>
            <div class="col-5">
                <img src="vistas/img/plantilla/logo-oppo.png">
            </div>
            <div class="col-5">
                <img src="vistas/img/plantilla/logo-coca-cola.png">
            </div -->
            <div class="col-5">
                <img src="vistas/img/plantilla/logo-paypal.png">
            </div>
            <!-- div class="col-5">
                <img src="vistas/img/plantilla/logo-philips.png">
            </div -->

        </div>
    </div>
</div>
