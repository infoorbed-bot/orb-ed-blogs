<?php
$seo_title     = "Contact Us | Get in Touch for O and A Level Courses";
$seo_desc      = "Have questions? Contact Orb-Ed.pk at team@orb-ed.pk for information on O &amp; A Level courses. We're here to assist students in Pakistan and worldwide.";
$seo_canonical = "https://orb-ed.pk/contact.php";
$seo_og_image  = "https://orb-ed.pk/assets/images/bannercontact.png";
?>

<!-- Schema.org: ContactPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "@id": "https://orb-ed.pk/contact.php",
  "url": "https://orb-ed.pk/contact.php",
  "name": "Contact Orb-Ed – O Level & A Level Online Learning Pakistan",
  "description": "Get in touch with Orb-Ed for O Level and A Level course queries. Contact us by phone, email or the form below.",
  "publisher": {
    "@type": "Organization",
    "name": "Orb-Ed",
    "url": "https://orb-ed.pk/",
    "telephone": "+92-330-6723344",
    "email": "team@orb-ed.pk",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "38-C, Block 6, P.E.C.H.S",
      "addressLocality": "Karachi",
      "addressRegion": "Sindh",
      "addressCountry": "PK"
    }
  }
}
</script>

<div class="currentpage5">

    <?php include('header.php'); ?>
    <div class="aboutpage">

        <div class="smoke-section-parent">
            <div class="ag-smoke-block">
                <div>
                    <img class="ag-smoke-1" src="assets/images/sky.png" alt="Smoke background decoration">
                </div>
            </div>
        </div>

        <section class="sec-1 contactsection">
            <span class="baneer-line"><img src="assets/images/ban-line-1.png" alt=""></span>
            <div class="container-1500">
                <div class="row">
                    <div class="col-lg-5 col-md-6 represhing m-auto">

                        <div class="corse-tab">
                            <a href="">Contact Us</a>
                        </div>

                        <!-- H1: one per page -->
                        <h1 class="visually-hidden">Contact Orb-Ed – O Level &amp; A Level Online Courses Pakistan</h1>

                        <p class="animate__animated animate__backInLeft">Hey! If you have any queries,<br>
                        feel free to reach out to us using the details below.<br><br>
                        <strong>We are always happy to help!</strong></p>

                        <div class="row carrersform contactform">
                            <div class="col-lg-6 pl-0">
                                <div class="carrersform">
                                    <input type="text" id="firstName" name="firstName" placeholder="First Name" required aria-label="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="carrersform">
                                    <input type="text" id="lastName" name="lastName" placeholder="Last Name" required aria-label="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="carrersform">
                                    <input type="email" id="email" name="email" placeholder="Email Address" required aria-label="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="carrersform">
                                    <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" required aria-label="Phone Number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="carrersform">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required aria-label="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="carrersform sbbtn">
                                    <a href="#" id="submitLink">Send</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6 animate__animated animate__zoomInLeft m-auto">
                        <div class="sec-1img" style="text-align: end;">
                            <img src="assets/images/bannercontact.png" alt="Contact Orb-Ed – O Level A Level online courses Pakistan support team">
                        </div>
                    </div>
                </div>

                <address style="margin-top: 50px; font-style: normal;">
                    <p><strong>Phone:</strong> <a href="tel:+923306723344" style="color:white;">+92 330 6723344</a></p>
                    <p><strong>Email:</strong> <a style="color:white;" href="mailto:team@orb-ed.pk">team@orb-ed.pk</a></p>
                    <p><strong>Alternate Email:</strong> <a style="color:white;" href="mailto:info@orb-ed.pk">info@orb-ed.pk</a></p>
                    <p><strong>Address:</strong> 38-C, Block 6, P.E.C.H.S, Karachi, Sindh, Pakistan</p>
                </address>
            </div>
        </section>
    </div>

    <script>
        document.getElementById('submitLink').addEventListener('click', function(event) {
            event.preventDefault();
            const firstName   = document.getElementById('firstName').value;
            const lastName    = document.getElementById('lastName').value;
            const email       = document.getElementById('email').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const message     = document.getElementById('message').value;

            function validateForm() {
                if (!firstName || !lastName || !email || !phoneNumber || !message) {
                    alert("Please fill out all fields.");
                    return false;
                }
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (!emailPattern.test(email)) {
                    alert("Please enter a valid email address.");
                    return false;
                }
                const phonePattern = /^[0-9]{11}$/;
                if (!phonePattern.test(phoneNumber)) {
                    alert("Please enter a valid phone number (11 digits).");
                    return false;
                }
                return true;
            }

            if (!validateForm()) return;

            const htmlView = `<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>New Contact Form Submission</title></head><body><p><b>First Name:</b> ${firstName}</p><p><b>Last Name:</b> ${lastName}</p><p><b>Email:</b> ${email}</p><p><b>Phone:</b> ${phoneNumber}</p><p><b>Message:</b> ${message}</p></body></html>`;

            const emailData = {
                personalizations: [{ to: [{ email: 'team@orb-ed.pk' }] }],
                from: { email: 'info@orb-ed.pk' },
                subject: `Contact Form Submission from ${firstName} ${lastName}`,
                content: [{ type: 'text/plain', value: htmlView }]
            };

            fetch('https://sendgrid-email-nodejs.vercel.app', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(emailData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.errors) {
                    alert('There was an issue sending the email. Please try again.');
                } else {
                    alert('Your message has been sent successfully!');
                    document.getElementById('firstName').value = '';
                    document.getElementById('lastName').value  = '';
                    document.getElementById('email').value     = '';
                    document.getElementById('phoneNumber').value = '';
                    document.getElementById('message').value   = '';
                }
            })
            .catch(() => alert('There was an error sending the message. Please try again.'));
        });
    </script>

    <?php include('footer.php'); ?>
</div>
