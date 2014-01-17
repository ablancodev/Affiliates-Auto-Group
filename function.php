add_action('affiliates_added_affiliate', 'affiliate_add_to_group' );

function affiliate_add_to_group ( $affiliate_id ) {
	$user_id = affiliates_get_affiliate_user($affiliate_id);
	if ($user_id != null) {
		if ( $group = Groups_Group::read_by_name( 'Premium' ) ) {
			$result = Groups_User_Group::create( array( "user_id"=>$user_id, "group_id"=>$group->group_id ) );
		}
	}
}
