<title>Контакты</title>

<div class="container" style="min-height:calc(100vh - 176px)">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Контакты</h1>
            <p class="lead">Вы можете связаться с нами следующими способами</p>
            <ul class="list-unstyled">
                <!-- для каждого полученного контакта выводится его тип и значение -->
                <?php foreach ($contacts as $contact) { ?>
                    <li><b><?php echo $contact['name']; ?>:</b> <?php echo $contact['content']; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#contacts').addClass("active");
</script>