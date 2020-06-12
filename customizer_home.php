please make sure we can add more then 3 in that section
Theme editor: DirectoryEngine: customizer_home.php (customizer/customizer_home.php)
function block_item_icon( $wp_manager,$name_section,$section) {
 //for($i = 1; $i<=3 ; $i++)
for($i = 1; $i<=6 ; $i++)
}
Such that, In the theme customization, added three more items, where user can add more.
In Theme editor: home.php (includes/home.php) to edit function:  function block_6()
Added three more item divs, and changed the order.
