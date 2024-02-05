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
                <h2>Personal Information</h2>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex flex-column">
            <form action="/experience" method="post">
                <div class="row mb-3">
                    <div class="col">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John" required>
                    </div>
                    <div class="col">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Appleseed" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="my.email@email.com" required>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" name="state" value="Washington" required>
                    </div>
                    <div class="col">
                        <label for="phoneNumber" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="222-333-4444" required>
                    </div>
                </div>
            </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                &nbsp; <!--adding spacing for textbox, can change to css if needed-->
                            </div>
                        </div>
                        <div class="col-md-12 p-3 bg-light">
                            <p><strong>Note:</strong> All information entered is protected by our <strong>privacy policy</strong>. Personal information can only be viewed by others with your permission.</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            &nbsp; <!--adding spacing for next button, can change to css if needed-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="experience" class="btn btn-primary w-100" type="button">Next</a>
                            <!--<button type="submit" class="btn btn-primary w-100">Next</button> used to update "apply" button to "next" button-->
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
