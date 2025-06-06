<main>
    <style>
        h1 {
            font-family: <?= $data["product"]["police"] ?>;
        }
    </style>
    <figure>
        <img src="../../public/images/mockup/<?php echo $data["product"]["genre"]; ?>.png" alt="<?= $data["product"]["description"] ?>">
    </figure>
    <div class="text-container">
        <h1><?= $data["product"]["nom"] ?></h1>
        <p><?= $data["product"]["description"] ?></p>
        <div class="price-container">
            <span><?= $data["product"]["prix"] ?> €</span>
            <div class="quantity-container">
                <button type="button" onclick="this.parentNode.querySelector('#quantity-input').stepDown()">-</button>
                <input id="quantity-input" type="number" value="1" min="1" max="12">
                <button type="button" onclick="this.parentNode.querySelector('#quantity-input').stepUp()">+</button>
            </div>
        </div>
    </div>
</main>