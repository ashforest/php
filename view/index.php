<!-- заголовок страницы -->
<title><?php echo $name; ?></title>

<!-- контейнер с содержимым -->
<div class="container" style="min-height:calc(100vh - 176px)">
    <div class="row">
        <div class="col-lg-12 text-center">
            <!-- заголовок страницы -->
            <h1 class="mt-5"><?php echo $name; ?></h1>
            <!-- содержимое -->
            <p class="lead"><?php echo $content; ?></p>
        </div>
    </div>
</div>

<!-- смена активной страницы в хедере -->
<script type="text/javascript">
    $('#<?php echo $info_id; ?>').addClass("active");
</script>