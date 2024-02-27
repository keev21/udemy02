
<?php
require_once "includes/header.php";
require_once "includes/navbar.php";
?>

    <!-- Contenedor principal -->
    <div class="container-fluid mt-3">

            <div class="row">
                <!-- Columna para productos (60%) -->
                <div class="col-md-8">
                    <h2>Productos</h2>
                    <!-- Primera fila de productos -->
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="https://placehold.co/600x400" class="card-img-top" alt="Producto 1">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 1</h5>
                                    <p class="card-text">Descripción del producto 1.</p>
                                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="https://placehold.co/600x400" class="card-img-top" alt="Producto 2">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 2</h5>
                                    <p class="card-text">Descripción del producto 2.</p>
                                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="https://placehold.co/600x400" class="card-img-top" alt="Producto 3">
                                <div class="card-body">
                                    <h5 class="card-title">Producto 3</h5>
                                    <p class="card-text">Descripción del producto 3.</p>
                                    <a href="#" class="btn btn-primary">Agregar al carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Segunda fila de productos -->
                    <div class="row">
                        <!-- Aquí van los productos 4, 5 y 6 -->
                    </div>
                    <!-- Tercera fila de productos -->
                    <div class="row">
                        <!-- Aquí van los productos 7, 8 y 9 -->
                    </div>
                </div>

                <!-- Columna para el carrito (40%) -->
                <div class="col-md-4">
                    <h2>Carrito</h2>
                    <!-- Aquí va el carrito -->
                    <div id="carrito">
                        <!-- Tabla de productos en el carrito -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Producto 1</td>
                                    <td>1</td>
                                    <td>$10.00</td>
                                </tr>
                                <td>Producto 1</td>
                                <td>1</td>
                                <td>$10.00</td>
                                </tr>
                                <!-- Repite este bloque para cada producto en el carrito -->
                            </tbody>
                        </table>
                        <!-- Total del carrito -->
                        <div class="mt-3">
                            <h5>SubTotal: $10.00</h5>
                            <h5>Iva: $10.00</h5>
                            <h5>Total: $10.00</h5>
                            <button class="btn btn-success">Realizar pedido</button>
                        </div>
                        <div class="mt-3">

                            <button class="btn btn-danger">Vaciar carrito</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
   <?php require_once "includes/footer.php"; ?>