<div class="container mt-5">
    <div class="alert alert-success display-1 text-center mb-5" role="alert">
        <strong>Listado Productos</strong>
    </div>
    <div class="container mt-4">
            <div class="d-flex justify-content-end">
                <a href="<?php echo site_url('/user-form') ?>" class="btn btn-warning mb-2">Añadir Producto</a>
            </div>
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
            }
            ?>
    <table id="miTabla" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $products) : ?>
                    <tr>
                        <td><?php echo $products['ID'] ?></td>
                        <td><?php echo $products['NAME'] ?></td>
                        <td><?php echo $products['DESCRIPTION'] ?></td>
                        <td><?php echo $products['PRICE'] ?></td>
                        <td><?php echo $products['STOCK'] ?></td>
                        <td>
                            <a href="<?php echo base_url('edit-view/' . $products['ID']); ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="<?php echo base_url('delete/' . $products['ID']); ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </tr>
                <?php endforeach; ?>
            </tbody>

    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="public/js/script_tabla.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

<script>
    $(document).ready(function() {
        $('#tabla').DataTable({});
    });
</script>