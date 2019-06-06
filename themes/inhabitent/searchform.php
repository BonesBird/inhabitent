<a class="search-toggle" aria-hidden="true">
	<form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">

		<fieldset><i class="fas fa-search" onclick="myFunction()"></i>
			<label>
				<input type="search" class="search-field" placeholder="SEARCH ..." id="icon" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="Search for:" />
			</label>
			<span class="screen-reader-text"><?php echo esc_html('Search'); ?></span>
		</fieldset>
	</form>
</a>

<script>
	function myFunction() {
		var x = document.getElementById("icon");
		if (x.style.display === "none") {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
</script>