<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= lang('Errors.pageNotFound') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 text-center">
                        <div class="display-4 fw-semibold mb-2">404</div>
                        <h1 class="h4 mb-2"><?= lang('Errors.pageNotFound') ?></h1>
                        <p class="text-muted mb-4">
                            <?php if (ENVIRONMENT !== 'production') : ?>
                                <?= nl2br(esc($message)) ?>
                            <?php else : ?>
                                <?= lang('Errors.sorryCannotFind') ?>
                            <?php endif; ?>
                        </p>
                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-2">
                            <a class="btn btn-primary" href="/courses">Go to Courses</a>
                            <button class="btn btn-outline-secondary" onclick="history.back()">Go back</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
