<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Site Header -->
    <header class="site-header">
        <div class="header-container">
            <div class="site-logo">
                <div style="width: 42px; height: 42px; background: #d4a843; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 18px; color: #1e3a5f;">P</div>
                <div>
                    <h1 style="margin: 0;">Privacy Training</h1>
                    <div class="subtitle">New Staff Induction — News Media</div>
                </div>
            </div>
            <div style="display: flex; gap: 20px; align-items: center;">
                <a href="<?php echo get_home_url(); ?>" style="color: rgba(255,255,255,0.85); text-decoration: none; font-size: 14px;">Home</a>
                <a href="<?php echo get_permalink(get_page_by_path('references')); ?>" style="color: rgba(255,255,255,0.85); text-decoration: none; font-size: 14px;">References</a>
            </div>
        </div>
    </header>

    <!-- Main Navigation -->
    <nav class="main-nav">
        <div class="nav-container">
            <a href="<?php echo get_permalink(get_page_by_path('privacy-principles')); ?>" <?php if(is_page('privacy-principles')) echo 'class="active"'; ?>>Privacy Principles</a>
            <a href="<?php echo get_permalink(get_page_by_path('respect-privacy')); ?>" <?php if(is_page('respect-privacy')) echo 'class="active"'; ?>>Respect Privacy</a>
            <a href="<?php echo get_permalink(get_page_by_path('confidential-sources')); ?>" <?php if(is_page('confidential-sources')) echo 'class="active"'; ?>>Confidential Sources</a>
            <a href="<?php echo get_permalink(get_page_by_path('verify-information')); ?>" <?php if(is_page('verify-information')) echo 'class="active"'; ?>>Verify Information</a>
            <a href="<?php echo get_permalink(get_page_by_path('data-transparency')); ?>" <?php if(is_page('data-transparency')) echo 'class="active"'; ?>>Data Transparency</a>
            <a href="<?php echo get_permalink(get_page_by_path('compliance-checklist')); ?>" <?php if(is_page('compliance-checklist')) echo 'class="active"'; ?>>Compliance Checklist</a>
        </div>
    </nav>
