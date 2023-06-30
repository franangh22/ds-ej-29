<?php

require_once 'modelo/clasePedidoCompra.php';
require_once 'modelo/claseLineaCompra.php';
require_once 'modelo/claseProducto.php';
require_once 'modelo/claseProveedor.php';

#instanciar clase Producto
$Prod1 = new Producto();
$Prod1 ->Codigo = 'VH00FGH';
$Prod1 ->Description ='NVIDIA RTX';
$Prod1 ->PrecioVenta ='200.000$';

$Prod2 = new Producto();
$Prod2 ->Codigo = 'VH12FGH';
$Prod2 ->Description ='NVIDIA GTX';
$Prod2 ->PrecioVenta ='100.000$';

#instanciar lineaCompra
$LC1 = new LineaCompra();
$LC1->Producto = $Prod1;
$LC1->Cantidad = 1;
$LC1->costoUnitario = 1000000 . '$';
$LC1->fueEntregado = true;

$LC2 = new LineaCompra();
$LC2->Producto = $Prod2;
$LC2->Cantidad = 2;
$LC2->costoUnitario = 500000 . '$';
$LC2->fueEntregado = true;

#Instanciar clase proveedor
$prov = new Proveedor();
$prov->Id = 1;
$prov->Description = 'CompuLandia';


#instanciar clase PEDIDO COMPRA
$pedidoC = new PedidoCompra();
$pedidoC->fecha = date("d/m/y", mktime(0, 0, 0, 6, 30, 2023));
$pedidoC->proveedor = $prov;
$pedidoC -> fechaEntregaEstimada = date("d/m/y", mktime(0, 0, 0, 7, 5, 2023));
$pedidoC -> costoTotal = '1500000 $';
$pedidoC -> pedidoCerrado = true;
$pedidoC -> listLineasCompras[] = $LC1;
$pedidoC -> listLineasCompras[] = $LC2;
$pedidoC->MostrarInformacion();