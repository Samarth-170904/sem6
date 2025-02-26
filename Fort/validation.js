// Login Form Validation
function validateLogin(event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    const email = document.getElementById('login-email').value.trim();
    const password = document.getElementById('login-password').value.trim();


    // Reset error messages
    document.getElementById('login-email-error').style.display = 'none';
    document.getElementById('login-password-error').style.display = 'none';


    let isValid = true;

    // Email validation (basic check for @ and .)
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        document.getElementById('login-email-error').style.display = 'block';
        document.getElementById('login-email-error').textContent = 'Please enter a valid email address (e.g., user@example.com).';
        isValid = false;
    }

    // Password validation (minimum 6 characters)
    if (password.length < 6) {
        document.getElementById('login-password-error').style.display = 'block';
        document.getElementById('login-password-error').textContent = 'Password must be at least 6 characters long.';
        isValid = false;
    }

    if (isValid) {
        alert('Login successful! This is a demo alert.'); // Replace with actual submission logic
        document.getElementById('login-form').reset(); // Clear form
    } else {
        alert('Please fix the errors in the form before submitting.'); // Alert user if validation fails
    }

    return isValid;
}

// Registration Form Validation
function validateRegistration(event) {
    event.preventDefault(); // Prevent form submission

    // Get form values
    const name = document.getElementById('reg-name').value.trim();
    const email = document.getElementById('reg-email').value.trim();
    const password = document.getElementById('reg-password').value.trim();
    const mobile = document.getElementById('reg-mobile').value.trim();

    // Reset error messages
    document.getElementById('reg-name-error').style.display = 'none';
    document.getElementById('reg-email-error').style.display = 'none';
    document.getElementById('reg-password-error').style.display = 'none';
    document.getElementById('reg-mobile-error').style.display = 'none';

    let isValid = true;

    // Name validation (letters and spaces only, minimum 2 characters)
    const nameRegex = /^[A-Za-z\s]+$/;
    if (!nameRegex.test(name) || name.length < 2) {
        document.getElementById('reg-name-error').style.display = 'block';
        document.getElementById('reg-name-error').textContent = 'Please enter a valid name (letters and spaces only, at least 2 characters).';
        isValid = false;
    }

    // Email validation (basic check for @ and .)
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        document.getElementById('reg-email-error').style.display = 'block';
        document.getElementById('reg-email-error').textContent = 'Please enter a valid email address (e.g., user@example.com).';
        isValid = false;
    }

    // Password validation (minimum 6 characters, at least one letter and one number)
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
    if (!passwordRegex.test(password)) {
        document.getElementById('reg-password-error').style.display = 'block';
        document.getElementById('reg-password-error').textContent = 'Password must be at least 6 characters long and include at least one letter and one number.';
        isValid = false;
    }

    // Mobile number validation (exactly 10 digits, no country code or spaces)
    const mobileRegex = /^\d{10}$/;
    if (!mobileRegex.test(mobile)) {
        document.getElementById('reg-mobile-error').style.display = 'block';
        document.getElementById('reg-mobile-error').textContent = 'Please enter a valid 10-digit mobile number (e.g., 1234567890).';
        isValid = false;
    }

    if (isValid) {
        alert('Registration successful! This is a demo alert.'); // Replace with actual submission logic
        document.getElementById('registration-form').reset(); // Clear form
    } else {
        alert('Please fix the errors in the form before submitting.'); // Alert user if validation fails
    }

    return isValid;
}