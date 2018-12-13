<title>Каталог</title>

<div class="container text-center" style="min-height:calc(100vh - 176px)">
    <h1 class="mt-5">Каталог</h1>
    <div class="row">

        <!-- для каждого товара выводится карточка с его изображением, названием и ценой -->
        <?php foreach ($products as $product) { ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="<?php echo '../images/'.$product['image']; ?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $product['name']; ?></h4>
                    <h5><?php echo $product['price']; ?> руб.</h5>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>

</div>

<script type="text/javascript">
    $('#catalog').addClass("active");
</script>