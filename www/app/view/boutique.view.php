<main>
    <div class="shop-container">
        <?php foreach ($data["products"] as $product): ?>
            <div class="product-box">
                <a href="?route=produit&genre=<?php echo $product['genre']; ?>">
                    <figure class="image-container">
                        <img src="../../public/images/mockup/<?php echo strtolower($product['genre']); ?>.png" alt="<?php echo $product['description']; ?>">
                    </figure>
                </a>
                <div class="text-container">
                    <div class="info-container">
                        <h2><?php echo $product['nom']; ?></h2>
                        <p><?php echo $product['description']; ?></p>
                    </div>
                    <div class="price-container">
                        <p class="price"><?php echo $product['prix']; ?>€</p>
                    </div>
                    <div class="quantity-container">
                        <button type=" button" onclick="this.parentNode.querySelector('#quantity-input').stepDown()">-</button>
                        <input id="quantity-input" type="number" value="1" min="1" max="12">
                        <button type="button" onclick="this.parentNode.querySelector('#quantity-input').stepUp()">+</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>