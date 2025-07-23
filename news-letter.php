<div class="newsletter-form-container">
    <form id="newsletter-subscribe-form" class="newsletter-form" method="post">
        <input 
            type="email" 
            name="email" 
            class="newsletter-email" 
            placeholder="Your Email Address" 
            value="" 
            required
        >
        <button type="submit" class="newsletter-submit">Get Started</button>
    </form>
</div>

<style>
    input[type=email]{
        border: none !important;
    }
    .newsletter-form-container {
    background: #fff;
    padding: 10px 10px;
    border-radius: 10px;
}
.newsletter-form-container {
    font-family: Lexend Deca, sans-serif;
    max-width: 100%;
}

.newsletter-form {
    display: flex;
    width: 100%;
}

.newsletter-email {
    flex-grow: 1;
    padding: 10px 15px;
    border: 1px solid #ddd;
    border-radius: 4px 0 0 4px;
    font-size: 14px;
    outline: none;
}

.newsletter-submit {
    background-color: #077083 !important;
    color: #fff;
    border: none !important;
    padding: 10px 20px;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    white-space: nowrap;
    transition: background-color 0.3s;
}

.newsletter-submit:hover {
    background-color: #333;
}
</style>

<script>
document.getElementById('newsletter-subscribe-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input[name="email"]').value;
    
    // This is a placeholder for WordPress AJAX submission
    // In a real WordPress environment, you would use wp_ajax hooks
    console.log('Submitting email:', email);
    
    // For WordPress, you would typically use something like:
    /*
    jQuery.post(
        ajaxurl, 
        {
            action: 'subscribe_email',
            email: email
        }, 
        function(response) {
            alert('Thank you for subscribing!');
        }
    );
    */
    
    alert('You subdcribed Marketing The Coast Newsletter: ' + email);
});
</script>