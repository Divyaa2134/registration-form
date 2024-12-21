$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
    const name = $('#name').val().trim();
    const email = $('#email').val().trim();
    const phone = $('#phone').val().trim();
    
    // Basic validation
    if (name === '' || email === '' || phone === '') {
    alert('Please fill in all required fields.');
    e.preventDefault();
    return false;
    }
    
    if (!/^[\w.%+-]+@[\w.-]+\.[a-zA-Z]{2,}$/.test(email)) {
    alert('Please enter a valid email address.');
    e.preventDefault();
    return false;
    }
    
    if (!/^\d{10}$/.test(phone)) {
    alert('Please enter a valid 10-digit phone number.');
    e.preventDefault();
    return false;
    }
    
    return true;
    });
    });