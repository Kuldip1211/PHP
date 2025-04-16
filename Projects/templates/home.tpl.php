<?php
    // PHP array of slide data
    $slides = [
        [
            'image' => 'assets\iphone.png',
            'title' => 'iPhone 14 Pro',
            'discount' => '10% OFF Voucher',
            'price' => 'From $999'
        ],
        [
            'image' => 'assets\iphone.png',
            'title' => 'iPhone 14 Plus',
            'discount' => '8% OFF Voucher',
            'price' => 'From $899'
        ],
        [
            'image' => 'assets\iphone.png',
            'title' => 'iPhone 14',
            'discount' => '5% OFF Voucher',
            'price' => 'From $799'
        ],
        [
            'image' => 'assets\iphone.png',
            'title' => 'iPhone 13',
            'discount' => '15% OFF Voucher',
            'price' => 'From $699'
        ],
        [
            'image' => 'assets\iphone.png',
            'title' => 'iPhone 13 Mini',
            'discount' => '12% OFF Voucher',
            'price' => 'From $599'
        ]
    ];
    ?>

    <div id="iphoneCarousel" class="carousel slide p-4" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <?php foreach ($slides as $index => $slide): ?>
                <button type="button" data-bs-target="#iphoneCarousel" 
                        data-bs-slide-to="<?= $index ?>" 
                        <?= $index === 0 ? 'class="active" aria-current="true"' : '' ?>></button>
            <?php endforeach; ?>
        </div>

        <!-- Slides -->
        <div class="carousel-inner">
            <?php foreach ($slides as $index => $slide): ?>
                <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>" data-bs-interval="3000">
                    <img src="<?= $slide['image'] ?>" class="d-block w-100" alt="<?= $slide['title'] ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h3><?= $slide['title'] ?></h3>
                        <p class="text-warning fw-bold"><?= $slide['discount'] ?></p>
                        <p><?= $slide['price'] ?></p>
                        <a href="#" class="btn shop-now-btn">Shop Now →</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#iphoneCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#iphoneCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
