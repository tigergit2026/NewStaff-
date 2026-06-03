    <!-- Site Footer -->
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-widget">
                <h4>Privacy Training</h4>
                <p>These training modules are designed to help new staff understand privacy principles and best practices in news media work.</p>
                <p style="margin-top: 12px;">For questions or further guidance, contact the Privacy Officer or Editor-on-Duty.</p>
            </div>
            <div class="footer-widget">
                <h4>Quick Links</h4>
                <p><a href="<?php echo get_permalink(get_page_by_path('privacy-principles')); ?>" style="color: rgba(255,255,255,0.8); text-decoration: none;">Privacy Principles</a></p>
                <p><a href="<?php echo get_permalink(get_page_by_path('compliance-checklist')); ?>" style="color: rgba(255,255,255,0.8); text-decoration: none;">Compliance Checklist</a></p>
                <p><a href="<?php echo get_permalink(get_page_by_path('references')); ?>" style="color: rgba(255,255,255,0.8); text-decoration: none;">References</a></p>
                <p><a href="#" style="color: rgba(255,255,255,0.8); text-decoration: none;">Privacy Policy</a></p>
            </div>
            <div class="footer-widget">
                <h4>External Resources</h4>
                <p><a href="https://www.presscouncil.org.au" target="_blank" style="color: rgba(255,255,255,0.8); text-decoration: none;">Australian Press Council</a></p>
                <p><a href="https://www.oaic.gov.au" target="_blank" style="color: rgba(255,255,255,0.8); text-decoration: none;">OAIC — Privacy Law</a></p>
                <p><a href="https://www.legislation.gov.au" target="_blank" style="color: rgba(255,255,255,0.8); text-decoration: none;">Commonwealth Legislation</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Privacy Training Program. All rights reserved. | Built for internal staff training purposes.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
