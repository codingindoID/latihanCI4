<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0"><i class="<?= $icon ?>"></i><?= $title ?></h1>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
            <?php if ($sub) : ?>
                <li class="breadcrumb-item active"><?= $sub ?></li>
            <?php endif ?>
        </ol>
    </div>
</div>