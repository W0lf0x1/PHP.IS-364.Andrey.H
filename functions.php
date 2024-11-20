<link rel="stylesheet" href="/css/style.css">
<?php
function display_product_card($product) {
        echo '<div class="in-box">';
        echo '<h2>' . htmlspecialchars($product['name']) . '</h2>';
        echo '<p><strong>ID:</strong> ' . htmlspecialchars($product['id']) . '</p>';
        echo '<p><strong>Описание:</strong> ' . htmlspecialchars($product['description']) . '</p>';
        echo '<p><strong>Цена:</strong> ' . htmlspecialchars($product['price']) . ' руб.</p>';
        echo '<p><strong>Количество на складе:</strong> ' . htmlspecialchars($product['stock']) . '</p>';
        echo '</div>';
    }

    function load_products_from_ini($filename) {
        if (!file_exists($filename)) {
            die("Файл не найден.");
        }
        return parse_ini_file($filename, true);
    }
    
    function display_all_products($products) {
        foreach ($products as $product) {
            display_product_card($product);
        }
    }
?>