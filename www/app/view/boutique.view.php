<main>
    <div class="shop-container">
        <?php foreach ($data["products"] as $product): ?>
            <a href="#" class="product-box">
                <figure class="image-container">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['description']; ?>">
                </figure>
                <div class="text-container">
                    <div class="info-container">
                        <h2><?php echo $product['name']; ?></h2>
                        <p><?php echo $product['description']; ?></p>
                    </div>
                    <div class="price-container">
                        <p><?php echo $product['price']; ?>€</p>
                    </div>
                    <div class="quantity-container">
                        <button class="add-one-to-chart">+</button>
                        <input type="number" value="1" min="1" max="10" class="quantity-input">
                        <button class="remove-one-to-chart">-</button>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</main>