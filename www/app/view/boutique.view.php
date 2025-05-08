<main>
    <div class="shop-container">
        <?php foreach ($data["products"] as $product): ?>
            <div class="product-box">
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                <p><?php echo htmlspecialchars($product['description']); ?></p>
                <p>Price: $<?php echo number_format($product['price'], 2); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</main>