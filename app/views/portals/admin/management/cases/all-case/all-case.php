<?php
$this->renderView('/portals/partials/layouts/header', $data);
?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $contentHeaderTitle ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><?= $breadcrumbActiveItem ?></li>
                    </ol>
                </div>
            </div>

            <section class="content mt-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Case</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>

            </section>
        </div>
    </div>
</div>
</div>

<?php
$this->renderView('/portals/partials/layouts/footer');
?>