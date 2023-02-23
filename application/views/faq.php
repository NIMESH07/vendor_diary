<style>
	.text-default {
		color: <?php echo $site->colour_name;?> !important;
	}
</style>
<noscript>
	<div class="noscript colrw boxshadow">You have not enabled Javascript on your browser, please enable it to use the
		website
	</div>
</noscript>
<!-- /.page-header -->

<!--Goole Ad Off-->

<!--<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8898782763527089" crossorigin="anonymous"></script>-->
<!-- Home page -->
<ins class="adsbygoogle"
	 style="display:block"
	 data-ad-client="ca-pub-8898782763527089"
	 data-ad-slot="5983426633"
	 data-ad-format="auto"
	 data-full-width-responsive="true"></ins>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<section class="main_privacy"
		 style="background-image: url(<?php echo base_url() . 'assets/v2/images/about_bg.jpg'; ?>)">
	<div class="container">
		<div class="Main_title">
			<h3 class="text-capitalize text-light">Privacy Policy</h3>
		</div>
	</div>
</section>
<section class="my-4 privacy_inner">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<div class="privacy_card">
					<label class="d-block mb-4">FAQ</label>
					<?php foreach ($allfaq as $data) {
						?>

						<h3>*<b><?php echo $data->question; ?></b></h3>
						<p class="text-wrap">&nbsp ➡️<?php echo $data->answer; ?></p>
					<?php } ?>
					<label class="d-block mb-4">Contact Us</label>
					<p>If you have any questions about this Privacy Policy, You can contact us:</p>
					<h3>By email: info@vendordiary.com</h3>
				</div>
			</div>
		</div>
	</div>
</section>
</html>
        
