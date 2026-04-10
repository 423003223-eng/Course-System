<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Courses<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4">
    <div>
        <h1 class="h2 mb-1">Courses</h1>
    </div>
    <div class="d-flex gap-2">
        <a class="btn btn-primary" href="/courses/create">Add course</a>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">
        <form action="/courses" method="GET" class="row g-3 justify-content-center align-items-end mb-4">
            <div class="col-12 col-md-8 col-lg-6">
                <label class="form-label visually-hidden" for="searchKeyword">Search</label>
                <div class="input-group">
                    <span class="input-group-text">Search</span>
                    <input class="form-control" type="text" id="searchKeyword" name="keyword" value="<?= esc($searchKeyword ?? '') ?>"
                           placeholder="Course name, code, or instructor">
                </div>
            </div>
            <div class="col-12 col-md-auto d-grid">
                <button class="btn btn-primary" type="submit">Apply</button>
            </div>
            <?php if (!empty($searchKeyword)): ?>
                <div class="col-12 col-md-auto d-grid">
                    <a class="btn btn-outline-secondary" href="/courses">Clear</a>
                </div>
            <?php endif; ?>
        </form>

        <?php if (empty($courses)) : ?>
            <div class="alert alert-info mb-0">
                No courses found.
            </div>
        <?php else : ?>
            <div class="table-responsive">
                <table class="table align-middle table-hover mb-0">
                    <thead class="table-light">
                    <tr>
                        <th class="text-muted" style="width: 90px;">ID</th>
                        <th>Course name</th>
                        <th style="width: 160px;">Code</th>
                        <th style="width: 100px;">Units</th>
                        <th>Instructor</th>
                        <th class="text-end" style="width: 220px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($courses as $c) : ?>
                        <tr>
                            <td class="text-muted"><?= esc($c['id']) ?></td>
                            <td class="fw-semibold"><?= esc($c['course_name']) ?></td>
                            <td><span class="badge badge-soft-primary"><?= esc($c['course_code']) ?></span></td>
                            <td><?= esc($c['units']) ?></td>
                            <td><?= esc($c['instructor']) ?></td>
                            <td class="text-end">
                                <div class="d-flex flex-wrap justify-content-end gap-2">
                                    <a class="btn btn-sm btn-outline-primary" href="/courses/edit/<?= esc($c['id']) ?>">Update</a>
                                    <a class="btn btn-sm btn-outline-danger" href="/courses/delete/<?= esc($c['id']) ?>"
                                       onclick="return confirm('Remove this course?')">Remove</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection() ?>