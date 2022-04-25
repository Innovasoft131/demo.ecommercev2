<?php
$texto = "";
if(isset($_GET["item"])){
    if($_GET["item"] == "Mujer" ||
        $_GET["item"] == "Hombre" ||
        $_GET["item"] == "Niño" ){
            $item = "genero";
            $valor = $_GET["item"];
            $texto =  "Productos de ".$_GET["item"];
    }elseif($_GET["item"] == "Nuevo" ||
            $_GET["item"] == "Oferta" ){
                $item = "estado";
                $valor = $_GET["item"];
                if($_GET["item"] == "Nuevo" ){
                    $texto = "Productos ".$_GET["item"]."s";
                }elseif($_GET["item"] == "Oferta"){
                    $texto = "Productos en ".$_GET["item"];
                }
                
    }elseif($_GET["item"] == ""){
        $item = null;
        $valor = null;
        $texto = "Productos";
    }
                
                
}else{
    $item = null;
    $valor = null;
    $texto = "Productos";
}
?>
<div class="main-content">
    <div class="content-page">
        <div class="tilte-section">
        <div class="row row-2">
            <h2><?php echo $texto; ?></h2>
            <div class="select">
            <input type="hidden" name="busquedaPor" id="busquedaPor">
            <select id="slProducto"  onchange="seleccionar()">
                    <?php  
                        if($_GET["item"] != ""){
                            echo '<option value="'.$_GET["item"].'">'.$_GET["item"].'</option>';
                        }
                    ?>
                    <option value="">Seleciona una Opcion</option>
                    <option value="Mujer">Mujer</option>
                    <option value="Niño">Niño</option>
                    <option value="Hombre">Hombre</option>
                    <option value="Oferta">Oferta</option>
                    <option value="Nuevo">Nuevo</option>
                    <option value="">Todos</option>
                </select>   
            </div>

        </div>

        
        </div>

        <div class="products-list" id="listProducts">
        <?php

            
            // paginación
            $total_jersey = ControladorProductos::ctrObtenerTotalProductos($item, $valor);

            $articulo_por_pagina = 6;
            $paginas = $total_jersey / $articulo_por_pagina;
            // redondear el numero de paginas
            $paginas = ceil($paginas);



            
            
            if(!isset($_GET["pagina"])){
                
                echo '<script> window.location = "index.php?ruta=articulos-para-mujeres&pagina=1&item='.$_GET["item"].'";</script>';

            }
            

            
            if($_GET["pagina"] > $paginas || $_GET["pagina"] <= 0 ){
                
                echo '<script> window.location = "index.php?ruta=articulos-para-mujeres&pagina=1&item=""";</script>';
            } 
            
            // mostrar las card deacuerdo a la paginacion y a la seleccion
            //CALCULAR EL INICIO DEL LIMIT
            $iniciar = ($_GET["pagina"]-1)*$articulo_por_pagina;

            $productos = ControladorProductos::ctrMostrarProductosLim($item, $valor, $iniciar, $articulo_por_pagina);

           

            $ruta = "https://admin.ferxostyle.com.mx/";


            foreach ($productos as $key => $value) {
                if($value["estado"] == "Nuevo" ){
                    echo '<div class="product-box">
                                <a href="">
                                    <div class="product">
                                        <img src="'.$ruta.$value["foto"].'">

                                        <div class="detail-title">'.$value["nombre"].'</div>
                                        <div class="detail-price">$'.$value["precio"].'</div>
                                    </div>
                                </a>
                            </div>';
                }elseif($value["estado"] == "Oferta" ){
                    echo '<div class="product-box">
                                <a href="">
                                    <div class="product">
                                        <img src="'.$ruta.$value["foto"].'">
                                        <div class="detail-title">'.$value["nombre"].'</div>
                                        <div class="detail-price">$'.$value["precioOferta"].'</div>
                                    </div>
                                </a>
                            </div>';
                }else{
                    echo '<div class="product-box">
                    <a href="">
                        <div class="product">
                            <img src="'.$ruta.$value["foto"].'">
                            <div class="detail-title">'.$value["nombre"].'</div>
                            <div class="detail-price">$'.$value["precio"].'</div>
                        </div>
                    </a>
                </div>';
                }

            }
                        
        ?>

                            <!--div class="product-box">
                                <a href="">
                                    <div class="product">
                                        <img src="vistas/img/plantilla/modelo2.png">
                                        <div class="title-info2">Oferta</div>
                                        <div class="detail-title">hola</div>
                                        <div class="detail-price">$200</div>
                                    </div>
                                </a>
                            </div -->
                    
        </div>
    </div>
</div>

<!-- PAGINACION -->
<?php
        $items = "";
        if(isset($_GET["item"])){
            if($_GET["item"] != ""){
                $items = $_GET["item"];
            }
        }
?>
<div class="center">
  <ul class="pagination">
    <li><a href="index.php?ruta=articulos-para-mujeres&pagina=<?php echo $_GET["pagina"]-1; ?>&item=<?php if($items != ""){ echo $items;} ?>">Anterior</a></li>
    <?php
        for ($i=0; $i < $paginas; $i++):
    ?>
    <li><a class="<?php echo $_GET["pagina"]==$i+1 ? 'active' : '' ?>" href="index.php?ruta=articulos-para-mujeres&pagina=<?php echo $i+1; ?>&item=<?php if($items != ""){ echo $items;} ?>"><?php echo $i+1; ?></a></li>
    <?php endfor ?>
    <li><a href="index.php?ruta=articulos-para-mujeres&pagina=<?php echo $_GET["pagina"]+1;?>&item=<?php if($items != ""){ echo $items;} ?>">Siguiente</a></li>
  </ul>
</div>