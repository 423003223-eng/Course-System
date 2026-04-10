<?= $this->extend('layouts/main') ?>

<?= $this->section('title') ?>Update course<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-12 col-lg-8 col-xl-6">
        <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-3 mb-4">
            <div>
                <h1 class="h3 mb-1">Update course</h1>


        <div class="card shadow-sm border-0">
            <div class="card-body">
                <?php if (!empty($errors)) : ?>
                    <div class="alert alert-danger">
                        <div class="fw-semibold mb-2">Please fix the following:</div>
                        <ul class="mb-0">
                            <?php foreach ($errors as $error) : ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>

                <form action="/courses/update/<?= esc($course['id']) ?>" method="POST" class="row g-3">
                    <div class="col-12">
                        <label for="course_name" class="form-label">Course name</label>
                        <input type="text" class="form-control" id="course_name" name="course_name"
                               value="<?= esc(old('course_name', $course['course_name'] ?? '')) ?>">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="course_code" class="form-label">Course code</label>
                        <input type="text" class="form-control" id="course_code" name="course_code"
                               value="<?= esc(old('course_code', $course['course_code'] ?? '')) ?>">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="units" class="form-label">Units</label>
                        <input type="text" class="form-control" id="units" name="units"
                               value="<?= esc(old('units', $course['units'] ?? '')) ?>">
                    </div>
                    <div class="col-12">
                        <label for="instructor" class="form-label">Instructor</label>
                        <input type="text" class="form-control" id="instructor" name="instructor"
                               value="<?= esc(old('instructor', $course['instructor'] ?? '')) ?>">
                    </div>

                    <div class="col-12 d-flex flex-column flex-sm-row gap-2 justify-content-end pt-2">
                        <a class="btn btn-outline-secondary" href="/courses">Cancel</a>
                        <button type="submit" name="update" value="1" class="btn btn-primary">Update course</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>