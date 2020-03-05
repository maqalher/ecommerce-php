<?php include '../extend/header.php'; ?>

<div class="container" style="margin-top: 1%;">
    <div class="card text-white bg-secondary">
        <div class="card-header">
            <h4 class="card-title">Alta de inventario</h4>
        </div>
        <div class="card-body">
            <form action="ins_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="producto" required placeholder="Producto" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="cantidad" required placeholder="Cantidad" class="form-control">
                </div>
                <div class="form-group">
                    <input type="number" step="0.01" name="producto" required placeholder="Precio" class="form-control">
                </div>
                <div class="form-group">
                    <select name="categoria" required class="form-control">
                        <option value="" disable selected>Elige una categoria</option>
                        <option value="MODA">MODA</option>
                        <option value="ELECTRONICA">ELECTRONICA</option>
                        <option value="JOYERIA">JOYERIA</option>
                        <option value="RELOJES">RELOJES</option>
                        <option value="HOGAR">HOGAR</option>
                        <option value="ZAPATOS">ZAPATOS</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="file" name="imagen" class="form-control">
                </div>
                <div class="form-group">
                    <textarea name="descripcion" required cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-info">Guardar</button>
            </form>
        </div>
    </div>
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>