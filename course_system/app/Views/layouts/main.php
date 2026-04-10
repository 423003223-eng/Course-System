<?php
$sectionTitle = trim($this->renderSection('title'));
$pageTitle = $sectionTitle !== '' ? $sectionTitle : ($title ?? 'Course System');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc($pageTitle) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        :root {
            --app-primary: #ffdf3d;
            --app-primary-soft: #ffd65a;
            --app-surface: #fff9eb;
            --app-surface-soft: #fff4d8;
            --app-surface-muted: #fff0c7;
            --app-border: rgba(15, 23, 42, 0.12);
            --app-text: #000;
            --app-text-muted: #000;
            --app-radius: 1rem;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #faea9b;
            color: var(--app-text);
        }

        .app-shell {
            min-height: 100vh;
        }

        .navbar.app-navbar {
            background: #faea9b;
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        }

        .navbar.app-navbar .navbar-brand,
        .navbar.app-navbar .nav-link,
        .navbar.app-navbar .navbar-text {
            color: rgba(0, 0, 0, .95);
        }

        .navbar.app-navbar .nav-link {
            transition: color 0.2s ease;
        }

        .navbar.app-navbar .nav-link:hover,
        .navbar.app-navbar .nav-link:focus {
            color: #ffffff;
            text-decoration: none;
        }

        .navbar.app-navbar .navbar-toggler {
            border-color: rgba(255, 255, 255, .35);
        }

        .navbar.app-navbar .navbar-toggler-icon {
            filter: invert(1);
        }

        .btn-primary {
            color: #000;
            --bs-btn-bg: var(--app-primary);
            --bs-btn-border-color: var(--app-primary);
            --bs-btn-hover-bg: #ab8315;
            --bs-btn-hover-border-color: #ab8315;
            --bs-btn-active-bg: #ab8315;
            --bs-btn-active-border-color: #ab8315;
            box-shadow: 0 16px 45px -40px rgba(199, 171, 30, 0.45);
        }

        .btn-outline-secondary {
            color: var(--app-text);
            border-color: rgba(15, 23, 42, 0.12);
            background: rgba(248, 250, 252, 0.95);
        }

        .btn-white {
            color: #000;
            background-color: rgba(255, 255, 255, 0.85);
            border-color: rgba(255, 255, 255, 0.22);
        }

        .card,
        .hero-card,
        .section-panel {
            background: var(--app-surface);
            border: 1px solid rgba(15, 23, 42, 0.06);
            border-radius: calc(var(--app-radius) - 0.2rem);
        }

        .hero-card {
            min-height: 100%;
            padding: 2rem;
        }

        .section-panel {
            padding: 1.5rem;
        }

        .table thead {
            border-bottom: 1px solid rgba(15, 23, 42, 0.08);
        }

        .table-hover tbody tr:hover {
            background-color: #f8fafc;
        }

        .form-control,
        .input-group-text {
            background-color: var(--app-surface-soft);
            border-color: rgba(15, 23, 42, 0.12);
        }

        .form-control:focus {
            border-color: var(--app-primary);
            box-shadow: 0 0 0 0.15rem rgba(199, 171, 30, 0.15);
        }

        .badge-soft-primary {
            color: #fff;
            background-color: #000;
            border: none;
        }

        .hr-soft {
            border-top-color: rgba(15, 23, 42, 0.08);
        }

        footer {
            color: #000;
        }

        @media (max-width: 575px) {
            .hero-card {
                padding: 1.5rem;
            }

            .navbar.app-navbar .navbar-collapse {
                background: rgba(248, 250, 252, 0.95);
                backdrop-filter: blur(12px);
                border-radius: 0.75rem;
                margin-top: 1rem;
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
<div class="app-shell d-flex flex-column">
    <nav class="navbar navbar-expand-lg app-navbar sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="/">Course System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#appNavbar"
                    aria-controls="appNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="appNavbar">
        
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        <div class="container py-4">
            <?= $this->renderSection('content') ?>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<?= $this->renderSection('scripts') ?>
</body>
</html>
