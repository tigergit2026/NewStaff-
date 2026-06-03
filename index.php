<?php get_header(); ?>

<div class="site-content">
    <div class="content-area">
        <div class="page-header" style="background: linear-gradient(135deg, #1e3a5f 0%, #2c5282 100%); color: white; border-left: none; border-radius: 8px;">
            <h1 style="color: white; font-size: 32px;">Welcome to Privacy Training</h1>
            <p style="color: rgba(255,255,255,0.9); font-size: 17px; margin-top: 15px;">
                Understanding privacy principles is essential for everyone working in news media. 
                This training module will guide you through the core privacy principles, explain how they apply in daily work, and help you build good privacy habits.
            </p>
            <div style="margin-top: 25px;">
                <a href="<?php echo get_permalink(get_page_by_path('privacy-principles')); ?>" style="display: inline-block; background: #d4a843; color: #1e3a5f; padding: 12px 28px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 14px; margin-right: 12px;">Start Training</a>
                <a href="<?php echo get_permalink(get_page_by_path('compliance-checklist')); ?>" style="display: inline-block; background: rgba(255,255,255,0.15); color: white; border: 1px solid rgba(255,255,255,0.3); padding: 12px 28px; border-radius: 6px; text-decoration: none; font-weight: 600; font-size: 14px;">View Checklist</a>
            </div>
        </div>

        <div class="content-block">
            <h2>About This Training</h2>
            <p>This training is designed to help new staff understand how privacy principles apply to news media work. It covers the Australian Press Council's Statement of Privacy Principles, the Australian Privacy Principles (APPs), and practical guidance on how to apply these principles in everyday reporting and editing work.</p>
            <div style="background: #f0f4f8; border-left: 4px solid #d4a843; padding: 20px 25px; margin-top: 25px; border-radius: 0 8px 8px 0;">
                <strong>Why It Matters:</strong> Privacy is not just a legal requirement — it's a core professional value. Respecting privacy builds public trust, protects sources, and upholds the integrity of journalism.
            </div>
        </div>

        <div class="content-block">
            <h2>Training Modules</h2>
            <p>Click on any module below to begin that section of the training.</p>
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; margin-top: 25px;">
                <a href="<?php echo get_permalink(get_page_by_path('privacy-principles')); ?>" style="text-decoration: none; color: inherit;">
                    <div style="border: 1px solid #e8edf2; border-left: 4px solid #2c5282; border-radius: 8px; padding: 20px 25px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                        <div style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px; font-weight: 600;">Module 1: Privacy Principles</div>
                        <div style="font-size: 14px; color: #666; margin: 0;">Understand the APC Statement of Privacy Principles and APPs that guide all our work.</div>
                    </div>
                </a>
                <a href="<?php echo get_permalink(get_page_by_path('respect-privacy')); ?>" style="text-decoration: none; color: inherit;">
                    <div style="border: 1px solid #e8edf2; border-left: 4px solid #d4a843; border-radius: 8px; padding: 20px 25px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                        <div style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px; font-weight: 600;">Module 2: Respect Privacy When Publishing</div>
                        <div style="font-size: 14px; color: #666; margin: 0;">Learn how to balance public interest with individuals' right to privacy.</div>
                    </div>
                </a>
                <a href="<?php echo get_permalink(get_page_by_path('confidential-sources')); ?>" style="text-decoration: none; color: inherit;">
                    <div style="border: 1px solid #e8edf2; border-left: 4px solid #2c5282; border-radius: 8px; padding: 20px 25px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                        <div style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px; font-weight: 600;">Module 3: Protect Confidential Sources</div>
                        <div style="font-size: 14px; color: #666; margin: 0;">Know your obligations to protect journalists' sources and confidential information.</div>
                    </div>
                </a>
                <a href="<?php echo get_permalink(get_page_by_path('verify-information')); ?>" style="text-decoration: none; color: inherit;">
                    <div style="border: 1px solid #e8edf2; border-left: 4px solid #d4a843; border-radius: 8px; padding: 20px 25px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                        <div style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px; font-weight: 600;">Module 4: Verify Information Before Publication</div>
                        <div style="font-size: 14px; color: #666; margin: 0;">Ensure accuracy and take care when handling personal information.</div>
                    </div>
                </a>
                <a href="<?php echo get_permalink(get_page_by_path('data-transparency')); ?>" style="text-decoration: none; color: inherit;">
                    <div style="border: 1px solid #e8edf2; border-left: 4px solid #2c5282; border-radius: 8px; padding: 20px 25px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                        <div style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px; font-weight: 600;">Module 5: Be Transparent About Data Use</div>
                        <div style="font-size: 14px; color: #666; margin: 0;">Understand transparency obligations when collecting and using personal data.</div>
                    </div>
                </a>
                <a href="<?php echo get_permalink(get_page_by_path('compliance-checklist')); ?>" style="text-decoration: none; color: inherit;">
                    <div style="border: 1px solid #e8edf2; border-left: 4px solid #d4a843; border-radius: 8px; padding: 20px 25px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                        <div style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px; font-weight: 600;">Module 6: Privacy Compliance Checklist</div>
                        <div style="font-size: 14px; color: #666; margin: 0;">A practical DO/DON'T checklist you can use to check your work before publishing.</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <aside class="widget-area">
        <div class="widget">
            <h3>Quick Links</h3>
            <ul style="list-style: none; padding-left: 0;">
                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;"><a href="<?php echo get_permalink(get_page_by_path('privacy-principles')); ?>" style="color: #2c5282; text-decoration: none; font-size: 14px;">Privacy Principles</a></li>
                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;"><a href="<?php echo get_permalink(get_page_by_path('respect-privacy')); ?>" style="color: #2c5282; text-decoration: none; font-size: 14px;">Respect Privacy</a></li>
                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;"><a href="<?php echo get_permalink(get_page_by_path('confidential-sources')); ?>" style="color: #2c5282; text-decoration: none; font-size: 14px;">Confidential Sources</a></li>
                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;"><a href="<?php echo get_permalink(get_page_by_path('verify-information')); ?>" style="color: #2c5282; text-decoration: none; font-size: 14px;">Verify Information</a></li>
                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;"><a href="<?php echo get_permalink(get_page_by_path('data-transparency')); ?>" style="color: #2c5282; text-decoration: none; font-size: 14px;">Data Transparency</a></li>
                <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;"><a href="<?php echo get_permalink(get_page_by_path('compliance-checklist')); ?>" style="color: #2c5282; text-decoration: none; font-size: 14px;">Compliance Checklist</a></li>
                <li style="padding: 8px 0;"><a href="<?php echo get_permalink(get_page_by_path('references')); ?>" style="color: #2c5282; text-decoration: none; font-size: 14px;">References</a></li>
            </ul>
        </div>
        <div class="widget" style="background: #fff8e7; border: 1px solid #d4a843;">
            <h3 style="color: #8a6914;">Need Help?</h3>
            <p style="font-size: 14px; line-height: 1.7;">If you are unsure about a privacy issue, <strong>always seek guidance</strong> from an editor or the privacy officer before publishing.</p>
        </div>
    </aside>
</div>

<?php get_footer(); ?>
