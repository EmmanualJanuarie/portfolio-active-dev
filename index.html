<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <!-- Particles link -->
    <link rel="stylesheet" href="particle/style.css">
    <!-- setting fav-icon -->
    <link rel="icon" type="image/x-icon" href="favicon_e.ico">
    <title>Emmanual | Authentication</title>
</head>
<body>
    <div id="particles-js"></div>
    <div class="card-size card-center-location outer-card frost-effect">
        <div class="card">
            <p>Enter your email to receive an access token to the website.</p>
            <p>
                <form id="emailForm">
                    <input type="email" placeholder="johndoe@gmail.com" id="txtemail" required>
                    <input type="submit" class="btn-blue" value="Request">
                </form>
            </p>
            <div id="message"></div>
        </div>
    </div>

    <script type="text/javascript" src="particle/particles.js"></script>
    <script type="text/javascript" src="particle/app.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@latest/dist/email.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            emailjs.init("2nDs450P0UZE_HLQf");

            document.getElementById('emailForm').addEventListener('submit', function(event) {
                event.preventDefault();
                const email = document.getElementById('txtemail').value;
                const token = generateToken();
                const expirationTime = Date.now() + (60 * 60 * 1000); // Token valid for 1 hour
                const link = `http://127.0.0.1:5500/App/token/home-page/home-page.html?token=${token}&expires=${expirationTime}`;

                console.log('Sending user email and fetching IP...');
                
                // Fetch the user's IP address
                fetch('https://ipinfo.io/json?token=398eaede27e3d3')
                .then(response => response.json())
                .then(data => {
                    const userIp = data.ip;
                    console.log('User IP:', userIp);

                    // Send email using EmailJS
                    return emailjs.send("service_t18t728", "template_qb7k9bn", {
                        to_email: email,
                        link: link
                    }).then(function(response) {
                        console.log('EmailJS User Email Response:', response);
                        document.getElementById('txtemail').value = "";
                        localStorage.setItem('token', token);
                        localStorage.setItem('timestamp', Date.now());

                        // Send notification to yourself
                        return emailjs.send("service_lhlee18", "template_xhpkz2m", {
                            from_email: email,
                            ip_address: userIp
                        });
                    });
                })
                .then(function(response) {
                    console.log('Notification EmailJS Response:', response);
                })
                .catch(function(error) {
                    console.error('EmailJS Error:', error);
                    alert('Failed to send email. Please try again.');
                });
            });

            function generateToken() {
                return [...Array(30)].map(() => Math.random().toString(36)[2]).join('');
            }
        });
    </script>
</body>
</html>
