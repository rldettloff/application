<!DOCTYPE html>
<html lang="en">
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
            <a class="navbar-brand" href="home">
            <h6>Random Software Co. LLC</h6>
            </a>
            <a class="navbar-brand" href="home">
            <h6>Software Engineering Internship</h6>
            </a>
            <h6>Seattle Washington, Paid</h6>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                <h2>Mailing List Subscriptions</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!--at this point i still need to figure out how to store these in arrays.. , stolen from my previous forms-->
                    <!--checkboxes for software development-->
                    <label class="form-check-label"><strong>Software Development Jobs:</strong></label><br>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="javascript" value="javascript">
                        <label class="form-check-label" for="javascript">Javascript</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="php" value="php">
                        <label class="form-check-label" for="php">PHP</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="java" value="java">
                        <label class="form-check-label" for="java">Java</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="python" value="python">
                        <label class="form-check-label" for="python">Python</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="html" value="html">
                        <label class="form-check-label" for="html">HTML</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="css" value="css">
                        <label class="form-check-label" for="css">CSS</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="reactjs" value="reactjs">
                        <label class="form-check-label" for="reactjs">ReactJS</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="nodejs" value="nodejs">
                        <label class="form-check-label" for="nodejs">NodeJS</label>
                    </div><br>
                    <!-- Industry vertical checkboxes-->
                    <label class="form-check-label mt-3"><strong>Industry Verticals:</strong></label><br>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="SaaS" value="saas">
                        <label class="form-check-label" for="SaaS">SaaS</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="healthtech" value="healthtech">
                        <label class="form-check-label" for="healthTech">Health Tech</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="agTech" value="agtech">
                        <label class="form-check-label" for="agTech">Ag Tech</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="hrTech" value="hrtech">
                        <label class="form-check-label" for="hrTech">HR Tech</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="industrialTech" value="industrialtech">
                        <label class="form-check-label" for="industrialTech">Industrial Tech</label>
                    </div>
                    <div class="form-check form-check-inline col-md-2">
                        <input class="form-check-input" type="checkbox" id="cyberSecurity" value="cybersecurity">
                        <label class="form-check-label" for="cyberSecurity">Cybersecurity</label>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <a href="summary" class="btn btn-primary w-100" type="button">Next</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
