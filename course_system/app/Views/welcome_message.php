<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Home<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-12 col-xl-10">
        <div class="hero-card shadow-sm mb-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <span class="badge badge-soft-primary rounded-pill px-3 py-2 mb-3">Modern course workflow</span>
                    <h1 class="display-5 fw-bold mb-3">Organize courses with a polished and responsive UI.</h1>
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a class="btn btn-primary btn-lg" href="/courses">Browse courses</a>
                        <a class="btn btn-outline-secondary btn-lg" href="/courses/create">Add a course</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-panel h-100">
                        <h2 class="h5 mb-3">What you can do today</h2>
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-start mb-3">
                                <span class="me-3 text-primary fs-4">●</span>
                                <div>
                                    <strong>Search and explore</strong>
                                    <div class="text-muted small">Filter course records quickly with an intuitive search bar.</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-start mb-3">
                                <span class="me-3 text-primary fs-4">●</span>
                                <div>
                                    <strong>Create and update</strong>
                                    <div class="text-muted small">Add new courses or edit existing details with confidence.</div>
                                </div>
                            </li>
                            <li class="d-flex align-items-start">
                                <span class="me-3 text-primary fs-4">●</span>
                                <div>
                                    <strong>Stay mobile-ready</strong>
                                    <div class="text-muted small">Everything adjusts cleanly for phones, tablets, and desktops.</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

