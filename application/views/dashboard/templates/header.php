<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/vendors/choices.js/choices.min.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/vendors/iconly/bold.css">

    <!-- Custom -->
    <link href="<?= base_url() ?>/assets/custom/style.css" rel="stylesheet">

    <!-- Caraousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />

    <!-- DataTable -->
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet">

    <!-- Image Preview Upload -->
    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/vendors/toastify/toastify.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/vendors/fontawesome/all.min.css">
    <style>
        table.dataTable td {
            padding: 15px 8px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }

        #loading {
            width: 100%;
            height: 100%;
            position: fixed;
            text-indent: 100%;
            background: #f2f7ff url('./assets/img/icon/loading.gif') no-repeat center;
            z-index: 1;
            opacity: 0.6;
        }
    </style>

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/vendors/sweetalert2/sweetalert2.min.css">

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Form Editor -->
    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/vendors/summernote/summernote-lite.min.css">

    <!-- Animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>mazer/dist/assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url() ?>mazer/dist/assets/images/favicon.svg" type="image/x-icon">

</head>

<body>
    <!-- <div id="loading">Loading...</div> -->
    <div id="app">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>