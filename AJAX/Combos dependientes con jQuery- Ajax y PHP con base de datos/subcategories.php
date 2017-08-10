<?php
$conexion = new mysqli('localhost', DB_SERVER_USERNAME, DB_SERVER_PASSWORD, DB_DATABASE);
?>
Marca: <select name="category" id="category">
    <?php
    $result = $conexion->query("SELECT c.id_category, name FROM ps_category c
                                LEFT JOIN ps_category_lang cl ON (cl.id_category = c.id_category AND cl.id_lang = 1)
                                WHERE id_parent = 2 ORDER BY name ASC");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {                
            echo '<option value="'.$row['id_category'].'">'.$row['name'].'</option>';
        }
    }
    ?>
</select>
