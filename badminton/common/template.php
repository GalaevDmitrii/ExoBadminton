<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'common/head.php';
    ?>
</head>

<body>
    <?php
    include './common/header.php';
    // -- Navigation--
    include 'common/navigation.php';
    if (!isset($page)) {
        $page = "home";
    }

    switch ($page) {
        case 'home':
            include './content/actu_content.php';
            break;
        case 'about':
            include './content/equipe_content.php';
            break;
        case 'products':
            include './content/stages_content.php';
            break;
        case 'store':
            include './content/crenaux_content.php';
            break;
        default:
            include './content/404.html';
            break;
    }
    // Footer
    include 'common/footer.php';
    ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>