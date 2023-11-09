<?php
require_once("c://xampp/htdocs/proyecto/controller/PedidoController.php"); // Asegúrate de que la ruta del controlador sea correcta.
$obj = new PedidoController();

// Recoge los datos del formulario y asegúrate de que los nombres de los campos coincidan con los de tu formulario.
$id_cliente = $_POST['id_cliente'];
$fecha_pedido = $_POST['fecha_pedido'];
$metodo_pago = $_POST['metodo_pago'];
$estado_pedido = $_POST['estado_pedido'];
$direccion_envio = $_POST['direccion_envio'];
$costo_total = $_POST['costo_total'];
$observaciones = $_POST['observaciones'];

$id = $obj->guardar($id_cliente, $fecha_pedido, $metodo_pago, $estado_pedido, $direccion_envio, $costo_total, $observaciones);

if ($id) {
    header("Location: show.php?id=" . $id);
} else {
    header("Location: create.php"); // Ajusta la redirección en caso de error.
}
?>
