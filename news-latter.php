<div class="simple-newsletter-form">
    <form class="newsletter-form" action="#" method="POST">
        <div class="form-group">
            <input type="email" name="subscriber_email" class="form-input" placeholder="Enter your email" required>
            <button type="submit" class="subscribe-button">Subscribe</button>
        </div>
    </form>
</div>

<style>
.simple-newsletter-form {
    max-width: 100%;
    margin: 0 auto;
}

.form-group {
    display: flex;
    width: 100%;
}

.form-input {
    flex: 1;
    padding: 12px 15px;
    border: 1px solid #fff;
    border-radius: 4px 0 0 4px;
    font-size: 16px;
    outline: none;
    transition: border 0.3s;
}

.form-input:focus {
    border-color: #fff;
}

.subscribe-button {
    margin-left: 10px;
    border-radius: 5px;
    padding: 12px 20px;
    background: #A5CD39;
    color: white;
    border: none;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    transition: background 0.3s;
}

/* Success message style */
.success-message {
    color: #A5CD39;
    font-weight: bold;
    padding: 10px;
    text-align: center;
}
</style>