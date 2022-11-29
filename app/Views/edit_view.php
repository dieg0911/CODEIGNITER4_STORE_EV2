<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    .container {
      max-width: 500px;
    }
    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <form method="post" ID="update_user" name="update_user" 
    action="<?= site_url('/update') ?>">
      <input type="hidden" name="ID" id="ID" value="<?php echo $user_obj['ID']; ?>">
      <div class="form-group">
        <label>Nombre del Producto</label>
        <input type="text" name="NAME" class="form-control" value="<?php echo $user_obj['NAME']; ?>">
      </div>
      <div class="form-group">
        <label>Descripcion</label>
        <input type="" name="DESCRIPTION" class="form-control" value="<?php echo $user_obj['DESCRIPTION']; ?>">
      </div>
      <div class="form-group">
        <label>Precio</label>
        <input type="number" name="PRICE" class="form-control" value="<?php echo $user_obj['PRICE']; ?>">
      </div>
      <div class="form-group">
        <label>Cantidad</label>
        <input type="number" name="STOCK" class="form-control" value="<?php echo $user_obj['STOCK']; ?>">
      </div>
      
      <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block">Guardar</button>
      </div>
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
 
</body>
</html>