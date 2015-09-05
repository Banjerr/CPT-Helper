<?php

/*=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
                            CREATE $cpt_name
=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-*/
$portfolioSongs = new Custom_Post_Type($cpt_name);
$portfolioSongs->add_taxonomy($cpt_taxonomy);
// $portfolioSongs->add_meta_box($cpt_metaName, array(
// 		'Instruments used' => 'textarea',
// 		'Link to song' => 'text'
// 	)
// );

?>
