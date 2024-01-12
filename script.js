document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const message = document.getElementById("message").value;

        // You can perform additional validation here

        // Send the form data to a server (You would need a server-side script for this)
        // For demonstration purposes, we'll just display an alert with the form data.
        alert(`Name: ${name}\nEmail: ${email}\nMessage: ${message}`);

        // Clear the form fields
        form.reset();
    });
});
