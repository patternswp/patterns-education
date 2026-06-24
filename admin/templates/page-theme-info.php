<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for theme info page.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Patterns_Education
 * @subpackage Patterns_Education/Patterns_Education_Intro
 */

?>
	<div id="welcome-panel" class="welcome-panel patterns-education-hero at-bg-img">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2>
					<?php esc_html_e( 'Welcome to Patterns Education', 'patterns-education' ); ?>
				</h2>
				<p>
					<?php
					esc_html_e( 'The Patterns Education theme is now active and ready for use. Unlock your potential with its rich library of one-click demo Starter Packages, Patterns, and Pattern Kits—perfect for schools, tutors, and learning platforms.', 'patterns-education' );

					?>
				</p>

				<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-education" target="_blank" rel="noopener noreferrer nofollow" class="patterns-education-gsn-btn patterns-education-btn-outline button button-primary button-hero patterns-education-install-plugins">
					<?php esc_html_e( 'Documentation', 'patterns-education' ); ?>
				</a>
				<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-education" target="_blank" rel="noopener noreferrer nofollow" class="patterns-education-btn patterns-education-btn-default button button-secodary button-hero" target="_blank">
					<?php esc_html_e( 'Visit Starter Templates', 'patterns-education' ); ?>
				</a>
			</div>

			<div class="welcome-panel-column-container">
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M18 16h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H18a2 2 0 0 1-2-2V18a2 2 0 0 1 2-2zm12 1.5H18a.5.5 0 0 0-.5.5v3h13v-3a.5.5 0 0 0-.5-.5zm.5 5H22v8h8a.5.5 0 0 0 .5-.5v-7.5zm-10 0h-3V30a.5.5 0 0 0 .5.5h2.5v-8z" fill="#fff"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Use ready-made Design, Patterns, Templates & Template Parts', 'patterns-education' ); ?></h3>
						<p>
							<?php esc_html_e( 'Effortlessly use ready-made patterns, templates, and template parts to enhance your site design, making customization quick and easy without starting from scratch.', 'patterns-education' ); ?>
						</p>
						<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>">
							<?php esc_html_e( 'Add a new page', 'patterns-education' ); ?>
						</a>
					</div>
				</div>
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M32.0668 17.0854L28.8221 13.9454L18.2008 24.671L16.8983 29.0827L21.4257 27.8309L32.0668 17.0854ZM16 32.75H24V31.25H16V32.75Z" fill="white"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3>
							<?php esc_html_e( 'Customize Templates, Template Parts & More', 'patterns-education' ); ?>
						</h3>
						<p>
							<?php esc_html_e( 'With a block theme, you can customize every aspect of both the theme and the site, from headers and footers to individual blocks, providing a cohesive and personalized design.', 'patterns-education' ); ?>
						</p>
						<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>">
							<?php esc_html_e( 'Site Editor', 'patterns-education' ); ?>
						</a>
					</div>
				</div>
				<div class="welcome-panel-column">
					<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
						<rect width="48" height="48" rx="4" fill="#2e312f"></rect>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M31 24a7 7 0 0 1-7 7V17a7 7 0 0 1 7 7zm-7-8a8 8 0 1 1 0 16 8 8 0 0 1 0-16z" fill="#fff"></path>
					</svg>
					<div class="welcome-panel-column-content">
						<h3>
							<?php esc_html_e( 'Transform your site\'s appearance with customizable fonts & colors', 'patterns-education' ); ?>
						</h3>
						<p>
							<?php esc_html_e( 'Give your site a unique look by customizing fonts and colors. Achieve anything from subtle tweaks to complete makeovers, enhancing your  site\'s visual appeal and overall design.', 'patterns-education' ); ?>
						</p>
						<a href="<?php echo esc_url( admin_url( '/site-editor.php?path=%2Fwp_global_styles' ) ); ?>">
							<?php esc_html_e( 'Customize styles', 'patterns-education' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="patterns-education-main at-p">
		<div class="at-row at-m patterns-education-main-wrp">
			<div class="at-col-sm-3 at-col-md-5 at-col-lg-4 at-col-xl-3">
				<div class="patterns-education-main-sidebar at-flx at-flx-col at-gap">
					<div class="patterns-education-card at-bg-cl at-bdr">
						<div class="patterns-education-card-body at-p">
							<div class="patterns-education-intro-auth at-p">
								<div class="patterns-education-intro-profile at-h at-w at-bdr at-bdr-rad at-m at-flx at-al-itm-ctr at-jfy-cont-ctr">
									<span class="at-w at-h at-bdr-rad">
										<img class="patterns-education-gsm-screenshot" src="<?php echo esc_url( PATTERNS_EDUCATION_URL . 'assets/img/patternswp-logo-green.png' ); ?>" alt="<?php esc_attr_e( 'Patterns Education', 'patterns-education' ); ?>" />
									</span>
								</div>
								<div class="patterns-education-intro-profile-info at-m at-txt-al">
									<h3 class="txt">
										<?php esc_html_e( 'Patterns Education', 'patterns-education' ); ?>
									</h3>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-education" target="_blank" rel="noopener noreferrer nofollow" class="button-primary patterns-education-btn-primary">
										<?php esc_html_e( 'Visit Site', 'patterns-education' ); ?>
									</a>
									<a href="https://wordpress.org/support/theme/patterns-education" target="_blank" rel="noopener noreferrer nofollow" class="button-secondary patterns-education-btn-secondary">
										<?php esc_html_e( 'Support', 'patterns-education' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="patterns-education-card at-bg-cl at-bdr">
						<div class="patterns-education-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
							<h4 class="patterns-education-card-header-ttl at-txt at-m">
								<?php esc_html_e( 'Contact Information', 'patterns-education' ); ?>
							</h4>
						</div>
						<div class="patterns-education-card-body at-p at-p">
							<div class="patterns-education-intro-auth--info">
								<ul class="patterns-education-personal-detail at-flx at-flx-col at-gap">
									<li class="">
										<dl class="at-flx at-al-itm-ctr at-gap">
											<dt class="at-w">
												<span class="dashicons dashicons-smartphone"></span>
												<b>
													<?php esc_html_e( 'Support:', 'patterns-education' ); ?>
												</b>
											</dt>
											<dd class="at-m">
												<a href="https://wordpress.org/support/theme/patterns-education" target="_blank" rel="noopener noreferrer nofollow">
													<?php esc_html_e( 'Create A Ticket', 'patterns-education' ); ?>
												</a>
											</dd>
										</dl>
									</li>
									<li class="mt-2">
										<dl class="at-flx at-al-itm-ctr at-gap">
											<dt  class="at-w">
												<span class="dashicons dashicons-location"></span>
												<b>
													<?php esc_html_e( 'Location:', 'patterns-education' ); ?>
												</b>
											</dt>
											<dd class="at-m">
												<?php esc_html_e( 'Kathmandu, Nepal', 'patterns-education' ); ?>
											</dd>
										</dl>
									</li>
								</ul>
								<ul class="patterns-education-social at-flx at-jfy-cont-ctr at-al-itm-ctr at-gap at-m">
									<li>
										<a class="at-p at-bdr at-bdr-rad" href="https://profiles.wordpress.org/patternswp/" target="_blank" rel="noopener noreferrer nofollow">
											<span class="dashicons dashicons-wordpress"></span>
										</a>
									</li>
									<li>
										<a class="at-p at-bdr at-bdr-rad" href="https://twitter.com/patternswp" target="_blank" rel="noopener noreferrer nofollow">
											<span class="dashicons dashicons-twitter"></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="at-col-sm-9 at-col-md-7 at-col-lg-8 at-col-xl-9">
				<div class="patterns-education-main-cont at-flx at-flx-col at-gap">
					<div class="at-row at-gap">
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-education-card at-bg-cl at-bdr">
								<div class="patterns-education-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-media-document"></span>
									<h4 class="patterns-education-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Knowledge Base', 'patterns-education' ); ?>
									</h4>
								</div>
								<div class="patterns-education-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'In-depth and well documented articles will help you to use the Patterns Education Themes in easiest way.', 'patterns-education' ); ?>
									</p>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-education" target="_blank" rel="noopener noreferrer nofollow" class="patterns-education-btn">
										<?php esc_html_e( 'Visit Knowledge Base', 'patterns-education' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-education-card at-bg-cl at-bdr">
								<div class="patterns-education-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-groups"></span>
										<h4 class="patterns-education-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Community', 'patterns-education' ); ?>
									</h4>
								</div>
								<div class="patterns-education-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'We want to make customer experience even better. So, join our Facebook community for instant support from experts.', 'patterns-education' ); ?>
									</p>
									<a href="https://www.facebook.com/profile.php?id=100069809678755" target="_blank" rel="noopener noreferrer nofollow" class="patterns-education-btn">
										<?php esc_html_e( 'Join Facebook Group', 'patterns-education' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-education-card at-bg-cl at-bdr">
								<div class="patterns-education-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-backup"></span>
										<h4 class="patterns-education-card-header-ttl at-txt at-m">
										<?php esc_html_e( '24x7 Support', 'patterns-education' ); ?>
									</h4>
								</div>
								<div class="patterns-education-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'We have dedicated support team 24*7 to help you in case you encounter any issue during and after the use of Patterns Education.', 'patterns-education' ); ?>
									</p>
									<a href="https://wordpress.org/support/theme/patterns-education" target="_blank" rel="noopener noreferrer nofollow" class="patterns-education-btn">
										<?php esc_html_e( 'Create A Ticket', 'patterns-education' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="at-col-md-6 at-col-xl-3">
							<div class="patterns-education-card at-bg-cl at-bdr">
								<div class="patterns-education-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-video-alt3"></span>
										<h4 class="patterns-education-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Video Guide', 'patterns-education' ); ?>
									</h4>
								</div>
								<div class="patterns-education-card-body at-p">
									<p class="at-m">
										<?php esc_html_e( 'Patterns Education Theme comes with detailed video tutorials of each and every customization with practical demonstration.', 'patterns-education' ); ?>
									</p>
									<a href="https://patternswp.com/full-site-editing-fse-themes/patterns-education" target="_blank" rel="noopener noreferrer nofollow" class="patterns-education-btn">
										<?php esc_html_e( 'View Video Guide', 'patterns-education' ); ?>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="at-row at-gap">
						<?php
						$recommended_plugins = function_exists( 'patterns_education_get_recommended_plugins' ) ? patterns_education_get_recommended_plugins() : null;
						$quick_links_col     = 'at-col-12';

						if ( $recommended_plugins ) {
							$quick_links_col = 'at-col-sm-8 at-col-md-12 at-col-lg-6 at-col-xl-8';
							?>
						<div class="at-col-sm-4 at-col-md-12 at-col-lg-6 at-col-xl-4">
							<div class="patterns-education-card at-bg-cl at-bdr">
								<div class="patterns-education-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-admin-plugins"></span>
									<h4 class="patterns-education-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Recommended Plugins', 'patterns-education' ); ?>
									</h4>
								</div>
								<div class="patterns-education-card-body at-p at-flx at-flx-col at-gap">
									<?php
									foreach ( $recommended_plugins as $key => $plugin_info ) {
										?>
										<div class="at-flx at-jfy-cont-btw at-al-itm-ctr patterns-education-plugin-recommend">
											<h4 class="patterns-education-plugin-title">
												<?php
												if ( isset( $plugin_info['url'] ) ) {
													?>
												<a href='<?php echo esc_url( $plugin_info['url'] ); ?>' target="_blank" rel="noopener noreferrer nofollow">
													<?php echo esc_html( $plugin_info['name'] ); ?>
												</a>
													<?php
												} else {
													echo esc_html( $plugin_info['name'] );
												}
												?>
											</h4>
											<?php
											if ( patterns_education_is_plugin_active( $plugin_info['plugin'] ) ) {
												?>
												<button class="patterns-education-btn-primary  button-primary" disabled>
													<?php esc_html_e( 'Installed and Activated', 'patterns-education' ); ?>
												</button>
												<?php
											} else {
												?>
												<button class="patterns-education-btn-primary button-primary patterns-education-install-plugin" data-plugin="<?php echo esc_attr( wp_json_encode( $plugin_info ) ); ?>" data-success-text="<?php esc_attr_e( 'Installed and Activated', 'patterns-education' ); ?>" data-fail-text="<?php esc_attr_e( 'Failed to install', 'patterns-education' ); ?>">
													<?php
													if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin_info['plugin'] ) ) {
														esc_html_e( 'Activate', 'patterns-education' );
													} else {
														esc_html_e( 'Install and Activate', 'patterns-education' );
													}
													?>
												</button>
												<?php
											}
											?>
										</div>
										<?php
									}
									?>
								</div>
							</div>
						</div>
							<?php
						}
						?>
						<div class="<?php echo esc_attr( $quick_links_col ); ?>">
							<div class="patterns-education-card at-bg-cl at-bdr">
								<div class="patterns-education-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx at-jfy-cont-st at-gap at-flx">
									<span class="dashicons dashicons-admin-links"></span>
									<h4 class="patterns-education-card-header-ttl at-txt at-m">
										<?php esc_html_e( 'Quick Links', 'patterns-education' ); ?>
									</h4>
								</div>
								<div class="patterns-education-card-body at-p">
									<div class="patterns-education-card-btn-grp at-flx at-flx-wrp at-gap">
										<a class="patterns-education-btn patterns-education-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?categoryId=header&postType=wp_template_part' ) ); ?>">
											<?php esc_html_e( 'Edit Header', 'patterns-education' ); ?>
										</a>
										<a class="patterns-education-btn patterns-education-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_EDUCATION_THEME_NAME . '%2F%2Ffooter&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Footer', 'patterns-education' ); ?>
										</a>
										<a class="patterns-education-btn patterns-education-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_EDUCATION_THEME_NAME . '%2F%2Fprimary-sidebar&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Primary Sidebar', 'patterns-education' ); ?>
										</a>
										<a class="patterns-education-btn patterns-education-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part&postId=' . PATTERNS_EDUCATION_THEME_NAME . '%2F%2Fsecondary-sidebar&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Secondary Sidebar', 'patterns-education' ); ?>
										</a>
										<a class="patterns-education-btn patterns-education-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template_part' ) ); ?>">
											<?php esc_html_e( 'All template parts', 'patterns-education' ); ?>
										</a>
										<a class="patterns-education-btn patterns-education-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . PATTERNS_EDUCATION_THEME_NAME . '%2F%2Ffront-page&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Frontpage', 'patterns-education' ); ?>
										</a>
										<a class="patterns-education-btn patterns-education-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template&postId=' . PATTERNS_EDUCATION_THEME_NAME . '%2F%2Farchive&canvas=edit' ) ); ?>">
											<?php esc_html_e( 'Edit Archive Page', 'patterns-education' ); ?>
										</a>
										<a class="patterns-education-btn patterns-education-btn-primary-outline button button-hero" href="<?php echo esc_url( admin_url( 'site-editor.php?postType=wp_template' ) ); ?>">
											<?php esc_html_e( 'All Templates', 'patterns-education' ); ?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php
					$faqs = function_exists( 'patterns_education_get_theme_faq' ) ? patterns_education_get_theme_faq() : null;
					if ( $faqs ) {
						?>
							<div class="at-row">
								<div class="at-col-12">
									<div class="patterns-education-card at-bg-cl at-bdr">
										<div class="patterns-education-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
											<span class="dashicons dashicons-format-chat"></span>
											<h4 class="patterns-education-card-header-ttl at-txt at-m">
												<?php esc_html_e( 'Frequently Asked Questions', 'patterns-education' ); ?>
											</h4>
										</div>
										<div class="patterns-education-card-body at-p ">
											<div class="patterns-education-accordion at-flx at-flx-col at-gap">
												<?php
												foreach ( $faqs as $key => $faq ) {
													echo "<details class='patterns-education-accordion-section at-bdr'>";
													echo "<summary class='patterns-education-accordion-section-title at-p at-pos at-bdr'>";
													echo "<h4 class='patterns-education-accordion-heading at-m'>";
													echo esc_html( $faq['q'] );
													echo '</h4>';
													echo '</summary>';/*patterns-education-card-header*/
													echo "<div id='patterns-education-info-faq-" . esc_attr( $key ) . "' class='patterns-education-accordion-section-content at-p'>";
													echo wp_kses_post( $faq['a'] );
													echo '</div>';/*id*/
													echo '</details>';/*patterns-education-card*/
												}
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php
					}
					?>
					<?php
					$changelog = function_exists( 'patterns_education_parse_changelog' ) ? patterns_education_parse_changelog() : '';
					if ( $changelog ) {
						?>
							<div class="at-row">
								<div class="at-col-12">
									<div class="patterns-education-card at-bg-cl at-bdr">
										<div class="patterns-education-card-header at-bdr at-p at-jfy-cont-st at-gap at-flx">
											<span class="dashicons dashicons-backup"></span>
											<h4 class="patterns-education-card-header-ttl at-txt at-m">
												<?php esc_html_e( 'Changelog', 'patterns-education' ); ?>
											</h4>
										</div>
										<div class="patterns-education-card-body at-p">
											<pre class="patterns-education-changelog"><?php echo wp_kses_post( $changelog ); ?></pre>
										</div>
									</div>
								</div>
							</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
