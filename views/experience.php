<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Software Development Internship Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <!-- No inline styles will be used (only bootstrap) -->
</head>
<body>

<nav class="navbar navbar-light bg-white">
    <div class="container-fluid">
        <div class="navbar-text">
            <h6>Random Software Co. LLC</h6>
            <h6>Software Engineering Internship</h6>
            <h6>Seattle Washington, Paid</h6>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                <h2>Experience Information</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="biography" class="form-label">Biography</label>
                    <textarea class="form-control" id="biography" name="biography" rows="5" required></textarea>
                </div>
                <div class="col-md-6">
                    <label for="githubLink" class="form-label">GitHub Link</label>
                    <input type="text" class="form-control" id="githubLink" name="githubLink" placeholder="Enter your GitHub link" required>

                    <div class="form-check mt-3">
                        <label class="form-check-label"><strong>Years of Experience</strong></label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="yearsOfExperience" id="beginner" value="beginner">
                            <label class="form-check-label" for="beginner">0-2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relocate" id="intermediate" value="intermediate">
                            <label class="form-check-label" for="intermediate">2-4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relocate" id="pro" value="pro">
                            <label class="form-check-label" for="pro">4+</label>
                        </div>
                    </div>

                    <div class="form-check mt-3">
                        <label class="form-check-label"><strong>Willing to Relocate: </strong></label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relocate" id="yes" value="Yes">
                            <label class="form-check-label" for="yes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relocate" id="no" value="No">
                            <label class="form-check-label" for="no">No</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relocate" id="maybe" value="Maybe">
                            <label class="form-check-label" for="maybe">Maybe</label>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <a href="jobOpenings" class="btn btn-primary w-100" type="button">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
