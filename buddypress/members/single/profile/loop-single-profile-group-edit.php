<?php
/**
 * Single profile group loop. Used in the member profile edit loop.
 *
 * @package BuddyPress
 * @subpackage TurtleShell
 */
?>

<form action="<?php bp_the_profile_group_edit_form_action(); ?>" method="post" class="<?php echo esc_attr( sanitize_html_class( bp_get_the_profile_group_slug() ) ); ?>">
	<?php do_action( 'bp_template_in_member_profile_group_edit_loop_early' ); ?>


	<?php do_action( 'bp_template_before_member_profile_group_edit_tabs' ); ?>

	<ul class="group-edit-tabs"><?php bp_profile_group_tabs(); ?></ul>


	<?php do_action( 'bp_template_before_member_profile_field_loop' ); ?>

	<?php while ( bp_profile_fields() ) : bp_the_profile_field(); ?>

		<?php bp_get_template_part( 'members/single/profile/loop-single-profile-field-edit', sanitize_file_name( bp_get_the_profile_group_slug() ) ); ?>

	<?php endwhile; ?>


	<?php do_action( 'bp_template_before_member_profile_group_edit_submitbutton' ); ?>

	<input type="submit" name="profile-group-edit-submit" class="submit" value="<?php esc_attr_e( 'Save Changes', 'buddypress' ); ?>" />
	<input type="hidden" name="field_ids" value="<?php bp_the_profile_group_field_ids(); ?>" />


	<?php wp_nonce_field( 'bp_xprofile_edit' ); ?>

	<?php do_action( 'bp_template_in_member_profile_group_edit_loop_late' ); ?>
</form>
