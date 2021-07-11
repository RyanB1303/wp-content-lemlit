<?php

/**
 * The template for register page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" <?php generate_do_element_classes('content'); ?>>
	<main id="main" <?php generate_do_element_classes('main'); ?>>

		<?php
		/**
		 * generate_before_main_content hook.
		 *
		 * @since 0.1
		 */
		do_action('generate_before_main_content');

		?>
		<div class="inside-article">

			<h1 class="entry-title" itemprop="headline">Register</h1>
			<div class="entry-content">
				<form method="POST" name="register-lemlit">
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="password" placeholder="********">
						</div>
					</div>
					<div class="form-group row">
						<label for="nama" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nama" placeholder="Nama">
						</div>
					</div>
					<div class="form-group row">
						<label for="nip" class="col-sm-2 col-form-label">NIP</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nip" placeholder="NIP">
						</div>
					</div>
					<div class="form-group row">
						<label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
						<div class="col-sm-10">
							<select name="prodi" id="prodi" class="form-control">
								<option value="" selected disabled>Pilih Program Studi</option>
								<option value="FTI">FTI</option>
								<option value="FH">FH</option>
								<option value="FKG">FKG</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="telepon" class="col-sm-2 col-form-label">No. HP / No. Telp</label>
						<div class="col-sm-10">
							<input type="tel" class="form-control" id="telepon" placeholder="Telepon">
						</div>
					</div>
					<div class="form-group row">
						<label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="alamat" placeholder="Alamat">
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
		<?php
		/**
		 * generate_after_main_content hook.
		 *
		 * @since 0.1
		 */
		do_action('generate_after_main_content');
		?>
	</main>
</div>

<?php
/**
 * generate_after_primary_content_area hook.
 *
 * @since 2.0
 */
do_action('generate_after_primary_content_area');



get_footer();
