<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

    if (mysqli_num_rows($check_cart_numbers) > 0) {
        $message[] = 'already added to cart!';
    } else {
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'product added to cart!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buildedin</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
    .articles {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .article {
        background-color: #f7f7f7;
        padding: 20px;
        border-radius: 5px;
    }

    .article-title {
        margin-top: 0;
        font-size: 40px;
    }

    .article-date {
        margin-top: 10px;
        color: #666;
        font-style: italic;
    }

    .article-content {
        font-size: 20px;
    }
</style>

<body>
    <?php include 'header.php'; ?>
    <div class="articles">
        <div class="article">
            <h2 class="article-title">Arsitek</h2>
            <p class="article-content">Rencanakan impian Anda bersama kami! Sebagai arsitek profesional, kami akan membantu Anda merancang dan membangun bangunan yang indah, fungsional, dan tahan lama..</p>
            <p class="article-content">Hubungi Kami:</p>
            <p class="article-content">Noeman +123456</p>
            <p class="article-content">Pei+4567892</p>
            <p class="article-content">Hadi +589666</p>
            <p class="article-content">Ridho +899555</p>
            <small class="article-date">Published on April 01, 2023</small>
        </div>
        <div class="article">
            <h2 class="article-title">Perkerja Bangunan</h2>
            <p class="article-content">Bangunan yang kokoh dan estetis adalah impian setiap pemilik rumah atau bisnis. Kami menyediakan layanan lengkap dalam pembangunan dan renovasi bangunan dengan standar kualitas yang tinggi.</p>
            <p class="article-content">Hubungi Kami:</p>
            <p class="article-content">Antoni Gaudi +123456</p>
            <p class="article-content">Masamune +4567892</p>
            <p class="article-content">Naofumi +589666</p>
            <p class="article-content">Franky +899555</p>
            <small class="article-date">Published on March 31, 2023</small>
        </div>
        <div class="article">
            <h2 class="article-title">Tukang Pipa</h2>
            <p class="article-content">Kami adalah tim tukang pipa terbaik yang siap membantu Anda dengan segala jenis pekerjaan pipa, dari instalasi hingga perbaikan. Kami menggunakan bahan berkualitas tinggi dan teknologi terbaru untuk memastikan hasil yang memuaskan.</p>
            <p class="article-content">Hubungi Kami:</p>
            <p class="article-content">Leo +123456</p>
            <p class="article-content">Gregor +4567892</p>
            <p class="article-content">Lufy +589666</p>
            <small class="article-date">Published on March 30, 2023</small>
        </div>
        <div class="article">
            <h2 class="article-title">Tukang Listrik</h2>
            <p class="article-content">Jangan mengabaikan sistem listrik yang bermasalah, segera hubungi kami untuk mendapatkan solusi cepat dan tepat! Sebagai tukang listrik profesional, kami akan memastikan sistem listrik Anda bekerja dengan baik dan aman.</p>
            <p class="article-content">Hubungi Kami:</p>
            <p class="article-content">Nicolas light +123456</p>
            <p class="article-content">Electro +54222</p>
            <p class="article-content">God Enel +5652224</p>
            <p class="article-content">Kilua +5555244</p>
            <small class="article-date">Published on March 29, 2023</small>
        </div>
        <div class="article">
            <h2 class="article-title">Tukang Kayu</h2>
            <p class="article-content">Membutuhkan jasa tukang kayu untuk membangun atau memperbaiki berbagai macam struktur kayu? Kami adalah solusinya! Dengan pengalaman dan keahlian yang kami miliki, kami siap membantu Anda menciptakan bangunan kayu yang indah, fungsional, dan tahan lama.</p>
            <p class="article-content">Hubungi Kami:</p>
            <p class="article-content">Yamato +8822211</p>
            <p class="article-content">Hashirama +45422</p>
            <p class="article-content">Zetsu +4452222258</p>
            <p class="article-content">kamui woods +4565225</p>
            <small class="article-date">Published on March 28, 2023</small>
        </div>
        <div class="article">
            <h2 class="article-title">Tukang Cat</h2>
            <p class="article-content">Bangunan yang kokoh dan estetis adalah impian setiap pemilik rumah atau bisnis. Kami menyediakan layanan lengkap dalam pembangunan dan renovasi bangunan dengan standar kualitas yang tinggi.</p>
            <p class="article-content">Hubungi Kami:</p>
            <p class="article-content">Leonardo da Vinci +45255522</p>
            <p class="article-content">Pablo pica +44422588</p>
            <p class="article-content">Raden Saleh +9911487</p>
            <p class="article-content">Hendra +66321485</p>
            <small class="article-date">Published on March 27, 2023</small>
        </div>
        <div class="article">
            <h2 class="article-title">Kontraktor</h2>
            <p class="article-content">Kami memiliki tim kontraktor yang terlatih dan terampil dalam mengelola proyek bangunan yang kompleks dan berukuran besar. Kami memastikan setiap proyek yang kami kerjakan memenuhi standar keselamatan dan kualitas yang tinggi, serta diselesaikan sesuai dengan jadwal yang telah disepakati.</p>
            <p class="article-content">Hubungi Kami:</p>
            <p class="article-content">ACS Group +89965554</p>
            <p class="article-content">VINCI +112233355</p>
            <p class="article-content">Skanska +1452478</p>
            <p class="article-content">Waskita +6545122</p>
            <small class="article-date">Published on March 26, 2023</small>
        </div>
    </div>
    

    <?php include 'footer.php'; ?>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>