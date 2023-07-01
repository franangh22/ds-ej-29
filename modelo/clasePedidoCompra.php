<?php

class PedidoCompra
{
    public $fecha;
    public $proveedor;
    public $fechaEntregaEstimada;
    public $costoTotal;
    public $pedidoCerrado;
    public $listLineasCompras = array();

    public function MostrarInformacion()
    {
        echo '<hr>';
        echo '<--- Pedido Compra ---> <br>';
        echo 'Fecha: ' . $this->fecha . '<br>';
        echo 'Fecha de Entrega estimada: ' . $this->fechaEntregaEstimada . '<br>';
        echo 'Costo total: ' . $this->costoTotal . '<br>';
        
        //CONDICION IF PARA PEDIDO CERRADO
        if ($this->pedidoCerrado = true) {
            echo 'Pedido cerrado: ' . 'VERDADERO <br>';
        } else {
            echo 'Pedido cerrado: ' . 'FALSO <br>';
        }
        //CONDICION IF PARA PEDIDO CERRADO
        
        echo '<--- proveedor ---> <br>';
        echo 'ID: ' . $this->proveedor->Id . '<br>';
        echo 'Descripcion: ' . $this->proveedor->Description . '<br> <hr>';
        
        echo '<--- Lista Linea de compras ---> <br>';
        foreach($this->listLineasCompras as $lc){
            echo 'Cantidad: ' . $lc->Cantidad . '<br>';
            echo 'Costo Unitario: ' . $lc->costoUnitario . '<br>';

            if ($lc->fueEntregado = true) {
                echo 'Fue entregado: ' . 'VERDADERO <br>';
            } else {
                echo 'Fue entregado: ' . 'FALSO <br>';
            }
            
            echo 'Codigo Producto: ' . $lc->Producto->Codigo . '<br>';
            echo 'Descripcion Producto: ' . $lc->Producto->Description . '<br>';
            echo 'Precio Producto: ' . $lc->Producto->PrecioVenta . '<br> <hr>';
        }

    }
}