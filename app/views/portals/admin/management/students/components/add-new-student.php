<div class="container my-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-primary text-white text-center rounded-top-4 py-4">
            <h3 class="mb-0">Elementary Student Registration</h3>
        </div>

        <div class="card-body p-5">

            <!-- Section: LRN -->
            <div class="mb-5">
                <h5 class="fw-bold mb-3">Learner Reference Number</h5>
                <input type="text" class="form-control form-control-lg" name="lrn" placeholder="Enter 12-digit LRN" maxlength="12" required>
            </div>

            <!-- Section: Student Info -->
            <div class="border rounded-3 p-4 mb-5">
                <h5 class="fw-bold mb-4 text-primary">Student Information</h5>
                <div class="row g-4">
                    <div class="col-md-4">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control form-control-lg" name="firstName" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control form-control-lg" name="middleName">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control form-control-lg" name="lastName" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Suffix</label>
                        <input type="text" class="form-control form-control-lg" name="suffix" placeholder="e.g. Jr., III">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control form-control-lg" name="dob" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Place of Birth</label>
                        <input type="text" class="form-control form-control-lg" name="birthPlace" required>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Gender</label>
                        <select class="form-select form-select-lg" name="gender" required>
                            <option disabled selected>Choose...</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Grade Level</label>
                        <select class="form-select form-select-lg" name="gradeLevel" required>
                            <option disabled selected>Choose Grade</option>
                            <option>Kindergarten</option>
                            <option>Grade 1</option>
                            <option>Grade 2</option>
                            <option>Grade 3</option>
                            <option>Grade 4</option>
                            <option>Grade 5</option>
                            <option>Grade 6</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Nationality</label>
                        <input type="text" class="form-control form-control-lg" name="nationality">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Religion</label>
                        <input type="text" class="form-control form-control-lg" name="religion">
                    </div>
                </div>
            </div>

            <!-- Section: Guardian Info -->
            <div class="border rounded-3 p-4 mb-5">
                <h5 class="fw-bold mb-4 text-primary">Parent / Guardian Information</h5>
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">Guardian Name</label>
                        <input type="text" class="form-control form-control-lg" name="guardianName" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Contact Number</label>
                        <input type="tel" class="form-control form-control-lg" name="contactNumber" placeholder="e.g. 0917xxxxxxx" required>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Home Address</label>
                        <textarea class="form-control form-control-lg" name="address" rows="2" required></textarea>
                    </div>
                </div>
            </div>

            <!-- Submit -->
            <div class="text-center">
                <button type="submit" class="btn btn-lg btn-success px-5 py-2 rounded-pill shadow-sm">Submit Form</button>
            </div>
        </div>
    </div>
</div>