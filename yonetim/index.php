<?php include_once "template/header.php"; ?>  <!-- Sayfa başında yer alacak header dosyasını ekler -->
<?php include_once "template/sidebar.php"; ?>  <!-- Sayfanın yan tarafında bulunan sidebar (yan menü) dosyasını ekler -->
<?php include_once "template/navbar.php"; ?>    <!-- Sayfa üst kısmında yer alacak navbar (navigasyon çubuğu) dosyasını ekler -->

<div class="container">
    <?php
        if ($_GET) {  
            print_r($_GET);  // Eğer bir GET isteği varsa, bu isteği ekrana yazdırır (örneğin URL'den gönderilen veriler)
        }
    ?>
</div>

<?php include_once "template/footer.php"; ?>  <!-- Sayfanın sonunda yer alacak footer dosyasını ekler -->
