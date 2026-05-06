<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SUDIMART — Setiap Peralatan Yang Anda Butuhkan</title>
    <link rel="stylesheet" href="/css/output.css">
</head>

<body class="relative min-h-screen flex flex-col bg-linear-to-b from-[#4C128B] to-[#814FBE]">
    <div class="absolute inset-0 bg-linear-to-br from-[#1a0445] via-[#3a0d7a] to-[#0d0025] -z-10"></div>
    <div class="absolute inset-0 grid-tex opacity-30 -z-10"></div>

    <!-- Header Start -->
    <?php require_once "../app/views/layouts/partials/header.php" ?>
    <!-- Header End -->


    <!-- Main Start -->
    <main class="grow flex flex-col items-center justify-center">
        <?php require_once "$content" ?>
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <?php require_once "../app/views/layouts/partials/footer.php" ?>
    <!-- Footer End -->
</body>

</html>