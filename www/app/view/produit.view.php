<main>
    <style>
        h1 {
            font-family: <?= $data["product"]["police"] ?>;
        }
    </style>
    <figure>
        <img src="<?= $data["product"]["image"] ?>" alt="<?= $data["product"]["subtitle"] ?>">
    </figure>
    <div class="text-container">
        <h1><?= $data["product"]["name"] ?></h1>
        <h2><?= $data["product"]["subtitle"] ?></h2>
        <p><?= $data["product"]["description"] ?></p>
        <div class="price-container">
            <span><?= $data["product"]["price"] ?> €</span>
            <div class="quantity-container">
                <button type="button" onclick="this.parentNode.querySelector('#quantity-input').stepDown()">-</button>
                <input id="quantity-input" type="number" value="1" min="1" max="12">
                <button type="button" onclick="this.parentNode.querySelector('#quantity-input').stepUp()">+</button>
            </div>
        </div>
    </div>
</main>