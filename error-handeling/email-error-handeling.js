document.getElementById('button').addEventListener('click', () => {
    var txtemail = document.getElementById('txtemail').value;
    const emails = ["@", ".co.za", ".co.nz", ".com", ".gov", "@gmail"];
    
    // Flag to check if the email is valid
    let isValid = false;

    // Check if the email contains any of the valid patterns
    emails.forEach(pattern => {
        if (txtemail.includes(pattern)) {
            isValid = true; // Set the flag to true if a pattern is found
        }
    });

    // Alert based on the validity of the email
    if (!isValid) {
        alert("Invalid email format.");
    }
});