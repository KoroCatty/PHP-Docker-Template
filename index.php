<?php require 'vendor/autoload.php'; ?>
<?php include 'layout/header.php'; ?>


<?php
include 'connect.php';
?>


<main>
    <h1>PHP Docker </h1>

    <?php
    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    // 環境変数にアクセスする
    echo $_ENV['DB_HOST'];
    echo '<br />';
    echo $_ENV['DB_USER'];
    echo '<br />';
    echo $_ENV['DB_PASS'];
    ?>


</main>

<?php include 'layout/footer.php'; ?>