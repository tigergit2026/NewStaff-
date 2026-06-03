<?php get_header(); ?>

<div class="site-content">
    <div class="content-area">
        <!-- Hero Section -->
        <div class="page-header" style="background: linear-gradient(135deg, #1e3a5f 0%, #2c5282 100%); color: white; border-left: none; border-radius: 8px;">
            <h1 style="color: white; font-size: 32px;">Welcome to Your Privacy Training</h1>
            <p class="page-subtitle" style="color: rgba(255,255,255,0.9); font-size: 17px; margin-top: 15px;">
                Understanding privacy principles is essential for everyone working in news media. This training module will guide you through the core privacy principles, explain how they apply in daily work, and help you build good privacy habits.
            </p>
            <div style="margin-top: 25px;">
                <a href="<?php echo get_permalink(get_page_by_path('privacy-principles')); ?>" class="btn" style="background: #d4a843; color: #1e3a5f; margin-right: 12px;">Start Training</a>
                <a href="<?php echo get_permalink(get_page_by_path('compliance-checklist')); ?>" class="btn" style="background: rgba(255,255,255,0.15); color: white; border: 1px solid rgba(255,255,255,0.3);">View Checklist</a>
            </div>
        </div>

        <!-- Introduction -->
        <div class="content-block">
            <h2>About This Training</h2>
            <p>This training is designed to help new staff understand how privacy principles apply to news media work. It covers the Australian Press Council's Statement of Privacy Principles, the Australian Privacy Principles (APPs), and practical guidance on how to apply these principles in everyday reporting and editing work.</p>
            
            <div class="quote-box" style="margin-top: 25px;">
                <strong>Why It Matters:</strong> Privacy is not just a legal requirement — it's a core professional value. Respecting privacy builds public trust, protects sources, and upholds the integrity of journalism.
            </div>
        </div>

        <!-- Training Modules Overview -->
        <div class="content-block">
            <h2>Training Modules</h2>
            <p>Click on any module below to begin that section of the training.</p>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; margin-top: 25px;">
                
                <a href="<?php echo get_permalink(get_page_by_path('privacy-principles')); ?>" style="text-decoration: none; color: inherit;">
                <div class="principle-card" style="border: 1px solid #e8edf2; border-left: 4px solid #2c5282; border-radius: 8px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                    <h3 style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px;">Module 1: Privacy Principles</h3>
                    <p style="font-size: 14px; color: #666; margin: 0;">Understand the APC Statement of Privacy Principles and APPs that guide all our work.</p>
                </div>
                </a>
                
                <a href="<?php echo get_permalink(get_page_by_path('respect-privacy')); ?>" style="text-decoration: none; color: inherit;">
                <div class="principle-card" style="border: 1px solid #e8edf2; border-left: 4px solid #d4a843; border-radius: 8px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                    <h3 style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px;">Module 2: Respect Privacy When Publishing</h3>
                    <p style="font-size: 14px; color: #666; margin: 0;">Learn how to balance public interest with individuals' right to privacy.</p>
                </div>
                </a>
                
                <a href="<?php echo get_permalink(get_page_by_path('confidential-sources')); ?>" style="text-decoration: none; color: inherit;">
                <div class="principle-card" style="border: 1px solid #e8edf2; border-left: 4px solid #2c5282; border-radius: 8px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                    <h3 style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px;">Module 3: Protect Confidential Sources</h3>
                    <p style="font-size: 14px; color: #666; margin: 0;">Know your obligations to protect journalists' sources and confidential information.</p>
                </div>
                </a>
                
                <a href="<?php echo get_permalink(get_page_by_path('verify-information')); ?>" style="text-decoration: none; color: inherit;">
                <div class="principle-card" style="border: 1px solid #e8edf2; border-left: 4px solid #d4a843; border-radius: 8px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                    <h3 style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px;">Module 4: Verify Information Before Publication</h3>
                    <p style="font-size: 14px; color: #666; margin: 0;">Ensure accuracy and take care when handling personal information.</p>
                </div>
                </a>
                
                <a href="<?php echo get_permalink(get_page_by_path('data-transparency')); ?>" style="text-decoration: none; color: inherit;">
                <div class="principle-card" style="border: 1px solid #e8edf2; border-left: 4px solid #2c5282; border-radius: 8px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                    <h3 style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px;">Module 5: Be Transparent About Data Use</h3>
                    <p style="font-size: 14px; color: #666; margin: 0;">Understand transparency obligations when collecting and using personal data.</p>
                </div>
                </a>
                
                <a href="<?php echo get_permalink(get_page_by_path('compliance-checklist')); ?>" style="text-decoration: none; color: inherit;">
                <div class="principle-card highlight" style="border: 1px solid #e8edf2; border-left: 4px solid #d4a843; border-radius: 8px; height: 100%; cursor: pointer; transition: box-shadow 0.3s;" onmouseover="this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" onmouseout="this.style.boxShadow='none'">
                    <h3 style="color: #1e3a5f; font-size: 16px; margin-bottom: 10px;">Module 6: Privacy Compliance Checklist</h3>
                    <p style="font-size: 14px; color: #666; margin: 0;">A practical DO/DON'T checklist you can use to check your work before publishing.</p>
                </div>
                </a>
                
            </div>
        </div>

        <!-- Key Points -->
        <div class="content-block">
            <h2>Key Points to Remember</h2>
            <ul class="numbered-list">
                <li><strong>Privacy is a right</strong> — Everyone has a right to privacy, and the media must respect that right while serving the public interest.</li>
                <li><strong>Public interest justifies intrusion</strong> — But only when the benefit to the public clearly outweighs the invasion of privacy.</li>
                <li><strong>Confidential sources are protected</strong> — Journalists have a professional and sometimes legal obligation to protect their sources.</li>
                <li><strong>Accuracy matters</strong> — Always verify information, especially when it involves personal details about individuals.</li>
                <li><strong>Transparency builds trust</strong> — Be open about how you collect and use personal data.</li>
            </ul>
        </div>
    </div>

    <!-- Sidebar -->
    <aside class="widget-area">
        <div class="widget">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="<?php echo get_permalink(get_page_by_path('privacy-principles')); ?>">Privacy Principles</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('respect-privacy')); ?>">Respect Privacy</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('confidential-sources')); ?>">Confidential Sources</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('verify-information')); ?>">Verify Information</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('data-transparency')); ?>">Data Transparency</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('compliance-checklist')); ?>">Compliance Checklist</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('references')); ?>">References</a></li>
            </ul>
        </div>
        <div class="widget" style="background: #fff8e7; border: 1px solid #d4a843;">
            <h3 style="color: #8a6914;">Need Help?</h3>
            <p style="font-size: 14px;">If you are unsure about a privacy issue, <strong>always seek guidance</strong> from an editor or the privacy officer before publishing.</p>
        </div>
    </aside>
</div>

<?php get_footer(); ?>
