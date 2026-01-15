<?php
/**
 * The template for displaying the footer
 */
?>
    <!-- FOOTER CONTENT START -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-grid">
                    <!-- Col 1: Products -->
                    <div class="footer-col">
                        <h4>Products</h4>
                        <ul>
                            <li><a href="#">SmartV Solo</a></li>
                            <li><a href="#">SmartV Wall</a></li>
                            <li><a href="#">SmartV Digital Avatar</a></li>
                            <li><a href="#">SmartV Holographic Human</a></li>
                            <li><a href="#">SmartV Slots</a></li>
                        </ul>
                    </div>
                    
                    <!-- Col 2: Solutions -->
                    <div class="footer-col">
                        <h4>Solutions</h4>
                        <ul>
                            <li><a href="#">Retail</a></li>
                            <li><a href="#">Digital Out-of-Home</a></li>
                            <li><a href="#">Events & Entertainment</a></li>
                            <li><a href="#">Hospitality</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Medical</a></li>
                        </ul>
                    </div>
                    
                    <!-- Col 3: Industries -->
                    <div class="footer-col">
                        <h4>Industries</h4>
                        <ul>
                            <li><a href="#">Retail</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Automotive</a></li>
                            <li><a href="#">Museums</a></li>
                            <li><a href="#">Medical</a></li>
                        </ul>
                    </div>

                    <!-- Col 4: Company -->
                    <div class="footer-col">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Events</a></li>
                        </ul>
                    </div>

                    <!-- Col 5: Partnership -->
                    <div class="footer-col">
                        <h4>Partnership</h4>
                        <ul>
                            <li><a href="#">Become a Partner</a></li>
                            <li><a href="#">Find a Partner</a></li>
                            <li><a href="#">Partner Portal</a></li>
                        </ul>
                    </div>

                    <!-- Col 6: Information -->
                    <div class="footer-col brand-col">
                        <h4>Contact Us</h4>
                        <address style="margin-bottom: 15px; font-style: normal; color: #aaa; font-size: 0.9rem; line-height: 1.6;">
                            <strong>Registered Office & Showroom:</strong><br>
                            Office A, The Makers Building,<br>
                            Nile Street, London, N1 7RD,<br>
                            United Kingdom
                        </address>
                        
                        <div class="contact-details" style="margin-bottom: 20px; font-size: 0.9rem; color: #aaa;">
                            <p style="margin-bottom: 5px;">
                                <strong>Sales Dept:</strong> +44 (0) 208-0685-328 ext. 1<br>
                                <a href="mailto:info@hypervsn.com" style="color: #fff;">info@hypervsn.com</a>
                            </p>
                            <p>
                                <strong>Support (24/7):</strong> +44 (0) 208-0685-328 ext. 3<br>
                                <a href="mailto:support@hypervsn.com" style="color: #fff;">support@hypervsn.com</a>
                            </p>
                        </div>

                        <div class="social-icons" style="margin-bottom: 20px;">
                            <a href="#" class="social-icon" aria-label="YouTube">YT</a>
                            <a href="#" class="social-icon" aria-label="Twitter">X</a>
                            <a href="#" class="social-icon" aria-label="Facebook">FB</a>
                            <a href="#" class="social-icon" aria-label="Instagram">IG</a>
                            <a href="#" class="social-icon" aria-label="LinkedIn">IN</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <div class="footer-links">
                    <a href="#">Legal documents</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>
                <!-- Dynamic Year -->
                <p>&copy; <?php echo date('Y'); ?> HYPERVSN. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Floating Action Buttons -->
    <div class="floating-actions-container">
        <!-- Bottom Left: Call Back -->
        <div class="floating-left">
            <a href="#" class="floating-btn call-btn" aria-label="Call Back">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.15 15.15 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24 11.36 11.36 0 0 0 3.53.56 1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A16 16 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1 11.36 11.36 0 0 0 .56 3.53 1 1 0 0 1-.24 1.02l-2.2 2.2z"/></svg>
            </a>
        </div>

        <!-- Bottom Right: WhatsApp & LiveChat -->
        <div class="floating-right">
            <a href="#" class="floating-btn fa fa-whatsapp whatsapp-btn" aria-label="WhatsApp">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/></svg>
            </a>
            <a href="#" class="floating-btn chat-btn" aria-label="Live Chat">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            </a>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
