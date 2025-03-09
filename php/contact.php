<section id="contact">
    <div class="container">
        <h2 class="container-heading">Contact Us</h2>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <div class="square"></div>
        <form action="php/form-submit.php" method="post" data-aos="fade-up" data-aos-duration="500">
            <div class="form-group">
                <label for="full-name"><span class="sr-only">Full Name</span></label>
                <input
                    type="text"
                    name="full-name"
                    id="full-name"
                    placeholder="Full Name" required />
            </div>
            <div class="form-group">
                <label for="email-address"><span class="sr-only">Email Address</span></label>
                <input
                    type="email"
                    name="email-address"
                    id="email-address"
                    placeholder="Email Address" required />
            </div>
            <div class="form-group">
                <label for="phone-number"><span class="sr-only">Phone Number</span></label>
                <input
                    type="text"
                    name="phone-number"
                    id="phone-number"
                    placeholder="Phone Number" required />
            </div>
            <div class="form-group">
                <label for="address"><span class="sr-only">Address</span></label>
                <input
                    type="text"
                    name="address"
                    id="address"
                    placeholder="Address" required />
            </div>
            <div class="form-group full">
                <label for="choose-service"><span class="sr-only">Choose Service</span></label>
                <select name="choose-service" id="choose-service" required>
                    <option value="residential">Choose Service</option>
                    <option value="residential" <?= $page_title == "Residential" ? "selected" : "" ?>>Residential</option>
                    <option value="commercial" <?= $page_title == "Commercial" ? "selected" : "" ?>>Commercial</option>
                    <option value="construction" <?= $page_title == "Construction" ? "selected" : "" ?>>Construction</option>
                </select>
            </div>
            <div class="form-group full">
                <label for="your-message"><span class="sr-only">Your Message</span></label>
                <textarea
                    name="your-message"
                    id="your-message"
                    placeholder="Your Message" required></textarea>
            </div>
            <div class="form-group full">
                <p class="disclaimer">This site is protected by Cloudflare Turnstile and its <a href="https://www.cloudflare.com/privacypolicy/" target="_blank" rel="noopener">Privacy Policy</a> and <a href="https://www.cloudflare.com/website-terms/" target="_blank" rel="noopener">Terms of Use</a> apply.</p>
                <div class="cf-turnstile" data-sitekey="0x4AAAAAAA_-SEpJhq1T37mH" data-callback="javascriptCallback"></div>
            </div>
            <input type="submit" name="submit" id="submit" value="Send a Message" class="btn btn-tertiary">
        </form>
    </div>
</section>