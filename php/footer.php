<?php

	global $meta,
		   $contact,
		   $page;
	
	$options = get_fields('options');
	
	$footnotes = isset($page['footnotes']) && isset($page['footnotes'][0]['footnotes'][0]) && $page['footnotes'][0]['footnotes'][0] ? array_column($page['footnotes'][0]['footnotes'], 'footnote') : [];
	
?>

		
				<script type="text/javascript">var footnotes = <?=json_encode($footnotes)?>;</script>
				
				<footer smoothscroll class="<?=isset($meta['footer']) ? $meta['footer'] : false?>">
					<div id="footer" scroll="footer">
						<div class="container">
							<div>
								<a href="/" aria-label="Homepage">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 296.99 343.07" style="enable-background:new 0 0 296.99 343.07" xml:space="preserve"><path d="M0 94.69h296.99v12.19H0zM0 165.17h206.95v12.19H0zM0 236.19h111.16v12.19H0zM0 0h296.99v12.19H0zM0 117.83h206.95v12.19H0zM0 330.89h111.16v12.19H0zM0 23.67h296.99v12.19H0zM0 212.52h206.95v12.19H0zM0 307.21h111.16v12.19H0zM0 47.35h296.99v12.19H0zM0 188.85h206.95v12.19H0zM0 283.54h111.16v12.19H0zM0 71.02h296.99v12.19H0zM0 141.5h206.95v12.19H0zM0 259.87h111.16v12.19H0z"/></svg>
								</a>
								
								<h2 class="para xsm">Address</h2>
								<p class="para md pre"><?=$contact['contact']['address']?></p>
							</div>
							<div>
								<?php if ($options['footer_social_links']): ?>
									<p class="para xsm social-links">
										<?php foreach ($options['footer_social_links'] as $link): ?>
											<a href="<?=$link['link']['url']?>" target="<?=$link['link']['target']?>"><?=$link['link']['title']?></a>
										<?php endforeach; ?>
									</p>
								<?php endif; ?>
								<p class="para xsm" role="contentinfo">&copy; <?=date('Y')?> Forum Asset Management - All Rights Reserved / <a href="/disclaimer">Disclaimer</a> / <a href="/privacy-policy">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</footer>
			</div>
		</main>
		
		<div id="footnote"></div>
		
<? /*
		<script src="<?=get_template_directory_uri()?>/assets/js/public.js?v.1.x.<?=md5(time())?>"></script>
*/ ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="<?=get_template_directory_uri()?>/assets/js/public.js?v2.01"></script>


		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjTyGk_DNd-6ThgG84ipmBbVVPNbUuzYM" defer></script>
		<script src="https://player.vimeo.com/api/player.js"></script>

				<? /*
		<!-- Global site tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=G-551EPHJ1QC"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments);}
			  gtag('js', new Date());
			
			  gtag('config', 'G-551EPHJ1QC');
			</script>
		*/ ?>
		<!-- Start of HubSpot Embed Code -->
			<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/21165985.js"></script>
		<!-- End of HubSpot Embed Code -->
		<!-- Start of Linkedin Insight Tag -->
		<script type="text/javascript">
		_linkedin_partner_id = "5416484";
		window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
		window._linkedin_data_partner_ids.push(_linkedin_partner_id);
		</script><script type="text/javascript">
		(function(l) {
		if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
		window.lintrk.q=[]}
		var s = document.getElementsByTagName("script")[0];
		var b = document.createElement("script");
		b.type = "text/javascript";b.async = true;
		b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
		s.parentNode.insertBefore(b, s);})(window.lintrk);
		</script>
		<noscript>
		<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=5416484&fmt=gif" />
		</noscript>
		<!-- End of Linkedin Insight Tag -->
	</body>
</html>