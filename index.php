<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Complaint Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-shell">
        <section class="welcome-panel">
            <div class="brand">
                <span class="brand-mark">C</span>
                <span>CivicConnect</span>
            </div>

            <div class="welcome-copy">
                <p class="eyebrow">YOUR VOICE MATTERS</p>
                <h1>Let’s make our community better.</h1>
                <p class="welcome-text">
                    Share an issue in your area and help us understand what needs attention.
                    Your complaint is recorded so it can be reviewed.
                </p>

                <div class="trust-note">
                    <span class="trust-icon">✓</span>
                    <div>
                        <strong>Simple. Clear. Accessible.</strong>
                        <p>Submit the details below to register your complaint.</p>
                    </div>
                </div>
            </div>

            <div class="panel-decoration decoration-one"></div>
            <div class="panel-decoration decoration-two"></div>
            <p class="panel-footer">ONLINE COMPLAINT REGISTRATION PORTAL</p>
        </section>

        <section class="form-panel">
            <div class="form-heading">
                <p class="eyebrow">COMPLAINT FORM</p>
                <h2>Tell us what happened</h2>
                <p>Fill in the details below. Fields marked with * are required.</p>
            </div>

            <form action="submit_complaint.php" method="POST" id="complaintForm">
                <div class="field">
                    <label for="name">Full name <span>*</span></label>
                    <input type="text" name="name" id="name" placeholder="e.g. Rahul Sharma" autocomplete="name" required>
                </div>

                <div class="field">
                    <label for="address">Address <span>*</span></label>
                    <textarea name="address" id="address" placeholder="Street, area, city" autocomplete="street-address" required></textarea>
                </div>

                <div class="field">
                    <label for="email">Email address <span>*</span></label>
                    <input type="email" name="email" id="email" placeholder="you@example.com" autocomplete="email" required>
                </div>

                <div class="field">
                    <label for="complaint">Complaint details <span>*</span></label>
                    <textarea name="complaint" id="complaint" maxlength="500" placeholder="Describe the issue and where it happened..." required></textarea>
                    <p id="count">0 / 500 characters</p>
                </div>

                <button type="submit">Submit complaint <span aria-hidden="true">→</span></button>
                <p class="form-note">Please check your details before submitting.</p>
            </form>

            <div class="form-bottom">
                <span>Already submitted a complaint?</span>
                <a href="admin.php">View submitted complaints</a>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
