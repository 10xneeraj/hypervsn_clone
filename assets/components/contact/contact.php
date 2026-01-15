<?php
/**
 * Contact Section Component
 */
?>
<section id="contact" class="contact-section fade-up">
    <div class="container">
      <div class="contact-wrapper">
        <div class="contact-header">
          <h2 class="section-title">
            Get in <span class="text-gradient">touch</span>
          </h2>
          <p>
            Fill in the form below and our team will get back to you shortly.
          </p>
        </div>
        <form id="contactForm" class="contact-form">
          <div class="form-grid">
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" id="firstName" name="firstName" required />
            </div>
            <div class="form-group">
              <label for="lastName">Surname</label>
              <input type="text" id="lastName" name="lastName" required />
            </div>
            <div class="form-group">
              <label for="email">Business Email</label>
              <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" />
            </div>
            <div class="form-group">
              <label for="company">Company</label>
              <input type="text" id="company" name="company" />
            </div>
            <div class="form-group">
              <label for="country">Country</label>
              <select id="country" name="country">
                <option value="">Select Country</option>
                <option value="UK">United Kingdom</option>
                <option value="US">United States</option>
                <option value="DE">Germany</option>
                <option value="FR">France</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>

          <div class="form-footer">
            <div class="checkbox-group">
              <input type="checkbox" id="privacy" required />
              <label for="privacy"
                >I agree to the <a href="#">Privacy Policy</a></label
              >
            </div>
            <button type="submit" class="btn btn-primary btn-submit">
              Submit
            </button>
          </div>
          <div id="formMessage" class="form-message"></div>
        </form>
      </div>
    </div>
  </section>
