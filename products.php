<?php
$titel = "Товар";
require_once("./components/header.php");
require_once("./connect.php");

$id = $connect->real_escape_string($_GET["id"]);
$sql = "SELECT * FROM products WHERE id = $id";

$result = $connect->query($sql);
$products = $result->fetch_assoc();
?>

<main>
    <div class="wrapper">
        <h2><?= $products['name'] ?></h2>
        <div class="products-page">
            <img src="./img/products/<?= $products['image'] ?>" alt="<?= $products['name'] ?>">
            <div class="products-info">
                <p class="products-page-name">Название: <?= $products['name'] ?></p>
                <p class="products-page-price">Цена: <?= $products['price'] ?> рублей</p>
            </div>
        </div>
    </div>
</main>

<?php
require_once("./components/footer.php");
?>