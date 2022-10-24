<?php
require_once("Models/clsDatabase.php");
function getListProduct()
{
    $conn = ConnectDB();
    if($conn==NULL)
        return NULL;
    $sql = "SELECT product.id,product.category_id,product.title,product.price,product.description,galery.thumbnail
            FROM product INNER JOIN galery WHERE galery.product_id=product.id";
    $pdo_stm = $conn->prepare($sql);
    $ketqua = $pdo_stm->execute();
    if($ketqua==FALSE)
        return NULL;
    else
    {
        $rows = $pdo_stm->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
}
?>