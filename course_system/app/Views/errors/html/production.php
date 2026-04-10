<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">

    <title><?= lang('Errors.whoops') ?></title>
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
                        <h1 class="h3 mb-2"><?= lang('Errors.whoops') ?></h1>
                        <p class="text-muted mb-4"><?= lang('Errors.weHitASnag') ?></p>
                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-2">
                            <button class="btn btn-primary" onclick="location.reload()">Try again</button>
                            <a class="btn btn-outline-secondary" href="/courses">Go to Courses</a>
                        </div>
                    </div>
                </div>
                <div class="text-center small text-muted mt-3">
                    If the problem persists, check your database connection and logs.
                </div>
            </div>
        </div>
    </main>

</body>

</html>
