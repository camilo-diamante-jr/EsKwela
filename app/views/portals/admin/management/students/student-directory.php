<?php
$this->renderView('/portals/partials/layouts/header');
?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Students</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Students</li>
                    </ol>
                </div>


                <section class="content mt-4">
                    <div class="card">
                        <header class="card-header border-0 bg-light  pt-3 pb-0">
                            <nav>
                                <ul
                                    class="nav nav-tabs border-0">
                                    <li class="nav-item">
                                        <a href="#browseStudent" class="nav-link active" aria-current="page" data-bs-toggle="tab">
                                            <span>Browse </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#insertStudent" class="nav-link" data-bs-toggle="tab">Insert</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#importStudent" class="nav-link" data-bs-toggle="tab">
                                            <span>Import</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </header>
                        <section class="card-body">

                            <!-- Tab Content -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="browseStudent">
                                    <?php require_once 'components/buttons-by-grade.php' ?>

                                    <div class="table-responsive">
                                        <table id="studentTable" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>LRN No.</th>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($students as $index => $student):

                                                    $studentID = $student['studentID'];
                                                    $middleInitial = substr($student['middleName'], -1) . ".";
                                                    $completeName = $student['firstName'] . " "  . ucfirst($middleInitial) . " " . $student['lastName'];

                                                ?>
                                                    <tr>
                                                        <td><?= $studentID ?></td>
                                                        <td><?= $completeName ?></td>
                                                        <td></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane" id="insertStudent">
                                    <?php require_once 'components/add-new-student.php' ?>
                                </div>

                                <div class="tab-pane fade" id="importStudent">
                                    <label for="">Import Student Data <small>(Acccept excel only)</small></label>
                                    <div class="input-group">
                                        <input type="file" name="" id="" class="form-control" />
                                        <button type="button" class="btn bg-pink">Save</button>
                                    </div>
                                </div>
                            </div>


                        </section>


                    </div>
                </section>

            </div>
        </div>
    </div>
</div>


<?php
$this->renderView('/portals/partials/layouts/footer');
?>

<script>
    $('#studentTable').DataTable();
</script>