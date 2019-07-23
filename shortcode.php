<?php


get_template_part( 'rella/rella-init' );
    
    
    
    /////////////////////////////////////////////////   test  /////////////////////////////////////////////////////
    
    
    add_action('init', 'amir');
    function amir()
    {
        $aemi = array(
                      'name'               => __(' &#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740; &#1578;&#1705;&#1740;'),
                      'singular_name'      => __('&#1575;&#1605;&#1740;&#1585; &#1587;&#1608;&#1605;'),
                      'menu_name'          => __('&#1575;&#1605;&#1740;&#1585; &#1587;&#1608;&#1605;'),
                      'name_admin_bar'     => __('&#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740;'),
                      'add_new'            => __('&#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740; &#1580;&#1583;&#1740;&#1583;'),
                      'add_new_item'       => __('&#1575;&#1601;&#1586;&#1608;&#1583;&#1606; &#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740; &#1580;&#1583;&#1740;&#1583;'),
                      'new_item'           => __('&#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740; &#1605;&#1588;&#1575;&#1576;&#1607; &#1580;&#1583;&#1740;&#1583;'),
                      'edit_item'          => __('&#1608;&#1740;&#1585;&#1575;&#1740;&#1588; &#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740;'),
                      'view_item'          => __('&#1605;&#1588;&#1575;&#1607;&#1583;&#1607; &#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740;'),
                      'all_items'          => __('&#1607;&#1605;&#1607; &#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740;'),
                      'search_items'       => __('&#1580;&#1587;&#1578;&#1580;&#1608; &#1583;&#1585; &#1576;&#1740;&#1606; &#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740; &#1607;&#1575;'),
                      'not_found'          => __('&#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740; &#1740;&#1575;&#1601;&#1578; &#1606;&#1588;&#1583;'),
                      'not_found_in_trash' => __('&#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740; &#1583;&#1585; &#1586;&#1576;&#1575;&#1604;&#1607; &#1583;&#1575;&#1606; &#1740;&#1575;&#1601;&#1578; &#1606;&#1588;&#1583;')
                      );
        $amir = array(
                      'labels'             => $aemi,
                      'description'        => __('&#1593;&#1705;&#1587; &#1607;&#1575;&#1740; &#1575;&#1605;&#1740;&#1585; &#1607;&#1575;&#1740; &#1607;&#1575;&#1576; &#1581;&#1587;&#1575;&#1576; &#1583;&#1575;&#1585;&#1740; &#1576;&#1585;&#1578;&#1585;'),
                      'public'             => true,
                      'publicly_queryable' => true,
                      'show_ui'            => true,
                      'show_in_menu'       => true,
                      'query_var'          => true,
                      'rewrite'            => array('slug' => 'amir'),
                      'capability_type'    => 'post',
                      'has_archive'        => true,
                      // 'taxonomies'  => array( 'category', 'post_tag' ),
                      'hierarchical'       => false,
                      'menu_position'      => 6,
                      'supports'           => array('amir')
                      );
        register_post_type('amir', $amir);
    }
    
    
    
    
    
    
    
    
    add_action('add_meta_boxes', 'cd_meta_box_add_amiraemi');
    
    function cd_meta_box_add_amiraemi()
    {
        add_meta_box('my-meta-box-id', '&#1578;&#1740;&#1578;&#1585; &#1576;&#1575;&#1705;&#1587;', 'func_cd_meta_box_cb_amiraemi', 'amir', 'advanced', 'high');
    }
    
    function func_cd_meta_box_cb_amiraemi($post)
    {
        // ** Part 1 : custom inputs : can remove or add
     
     
        // &#1606;&#1575;&#1605; &#1580;&#1583;&#1608;&#1604;
        $name_jadval = get_post_meta($post->ID, 'name_jadval', true);
        // &#1578;&#1740;&#1578;&#1585; &#1580;&#1583;&#1608;&#1604;
        $title_1 = get_post_meta($post->ID, 'title_1', true);
        $title_2 = get_post_meta($post->ID, 'title_2', true);
        $title_3 = get_post_meta($post->ID, 'title_3', true);
        $title_4 = get_post_meta($post->ID, 'title_4', true);
        $title_5 = get_post_meta($post->ID, 'title_5', true);
     
        // &#1605;&#1578;&#1606; &#1578;&#1740;&#1578;&#1585; &#1580;&#1583;&#1608;&#1604;
        $text_title_1 = get_post_meta($post->ID, 'text_title_1', true);
        $text_title_2 = get_post_meta($post->ID, 'text_title_2', true);
        $text_title_3 = get_post_meta($post->ID, 'text_title_3', true);
        $text_title_4 = get_post_meta($post->ID, 'text_title_4', true);
        $text_title_5 = get_post_meta($post->ID, 'text_title_5', true);
     
        // &#1578;&#1593;&#1583;&#1575;&#1583; &#1605;&#1605;&#1576;&#1585;
        $number_1 = get_post_meta($post->ID, 'number_1', true);
        $number_2 = get_post_meta($post->ID, 'number_2', true);
        $number_3 = get_post_meta($post->ID, 'number_3', true);
        $number_4 = get_post_meta($post->ID, 'number_4', true);
        $number_5 = get_post_meta($post->ID, 'number_5', true);
        $number_6 = get_post_meta($post->ID, 'number_6', true);
     
        // &#1587;&#1578;&#1608;&#1606; &#1575;&#1608;&#1604;
        $column_1_1 = get_post_meta($post->ID, 'column_1_1', true);
        $column_1_2 = get_post_meta($post->ID, 'column_1_2', true);
        $column_1_3 = get_post_meta($post->ID, 'column_1_3', true);
        $column_1_4 = get_post_meta($post->ID, 'column_1_4', true);
        $column_1_5 = get_post_meta($post->ID, 'column_1_5', true);
        $column_1_6 = get_post_meta($post->ID, 'column_1_6', true);
     
        // &#1587;&#1578;&#1608;&#1606; &#1583;&#1608;&#1605;
        $column_2_1 = get_post_meta($post->ID, 'column_2_1', true);
        $column_2_2 = get_post_meta($post->ID, 'column_2_2', true);
        $column_2_3 = get_post_meta($post->ID, 'column_2_3', true);
        $column_2_4 = get_post_meta($post->ID, 'column_2_4', true);
        $column_2_5 = get_post_meta($post->ID, 'column_2_5', true);
        $column_2_6 = get_post_meta($post->ID, 'column_2_6', true);
     
        // &#1587;&#1578;&#1608;&#1606; &#1587;&#1608;&#1605;
     
        $column_3_1 = get_post_meta($post->ID, 'column_3_1', true);
        $column_3_2 = get_post_meta($post->ID, 'column_3_2', true);
        $column_3_3 = get_post_meta($post->ID, 'column_3_3', true);
        $column_3_4 = get_post_meta($post->ID, 'column_3_4', true);
        $column_3_5 = get_post_meta($post->ID, 'column_3_5', true);
        $column_3_6 = get_post_meta($post->ID, 'column_3_6', true);
     
        // &#1587;&#1578;&#1608;&#1606; &#1670;&#1607;&#1575;&#1585;&#1605;
        $column_4_1 = get_post_meta($post->ID, 'column_4_1', true);
        $column_4_2 = get_post_meta($post->ID, 'column_4_2', true);
        $column_4_3 = get_post_meta($post->ID, 'column_4_3', true);
        $column_4_4 = get_post_meta($post->ID, 'column_4_4', true);
        $column_4_5 = get_post_meta($post->ID, 'column_4_5', true);
        $column_4_6 = get_post_meta($post->ID, 'column_4_6', true);
     
        //&#1587;&#1578;&#1608;&#1606; &#1662;&#1606;&#1580;&#1605;
     
        $column_5_1 = get_post_meta($post->ID, 'column_5_1', true);
        $column_5_2 = get_post_meta($post->ID, 'column_5_2', true);
        $column_5_3 = get_post_meta($post->ID, 'column_5_3', true);
        $column_5_4 = get_post_meta($post->ID, 'column_5_4', true);
        $column_5_5 = get_post_meta($post->ID, 'column_5_5', true);
        $column_5_6 = get_post_meta($post->ID, 'column_5_6', true);
     
     
        // &#1587;&#1578;&#1608;&#1606; &#1588;&#1588;&#1605;
     
     
        $column_6_1 = get_post_meta($post->ID, 'column_6_1', true);
        $column_6_2 = get_post_meta($post->ID, 'column_6_2', true);
        $column_6_3 = get_post_meta($post->ID, 'column_6_3', true);
        $column_6_4 = get_post_meta($post->ID, 'column_6_4', true);
        $column_6_5 = get_post_meta($post->ID, 'column_6_5', true);
        $column_6_6 = get_post_meta($post->ID, 'column_6_6', true);
     
     
        // &#1604;&#1740;&#1578;&#1705; &#1705;&#1585;&#1583;&#1606; &#1607;&#1585; &#1711;&#1586;&#1740;&#1606;&#1607;
     
        $link_1 = get_post_meta($post->ID, 'link_1', true);
        $link_2 = get_post_meta($post->ID, 'link_2', true);
        $link_3 = get_post_meta($post->ID, 'link_3', true);
        $link_4 = get_post_meta($post->ID, 'link_4', true);
        $link_5 = get_post_meta($post->ID, 'link_5', true);
        $link_6 = get_post_meta($post->ID, 'link_6', true);
        $link_7 = get_post_meta($post->ID, 'link_7', true);
        $link_8 = get_post_meta($post->ID, 'link_8', true);
        $link_9 = get_post_meta($post->ID, 'link_9', true);
        $link_10 = get_post_meta($post->ID, 'link_10', true);
        $link_11 = get_post_meta($post->ID, 'link_11', true);
        $link_12 = get_post_meta($post->ID, 'link_12', true);
        $link_13 = get_post_meta($post->ID, 'link_13', true);
        $link_14 = get_post_meta($post->ID, 'link_14', true);
        $link_15 = get_post_meta($post->ID, 'link_15', true);
        $link_16 = get_post_meta($post->ID, 'link_16', true);
        $link_17 = get_post_meta($post->ID, 'link_17', true);
        $link_18 = get_post_meta($post->ID, 'link_18', true);
        $link_19 = get_post_meta($post->ID, 'link_19', true);
        $link_20 = get_post_meta($post->ID, 'link_20', true);
        $link_21 = get_post_meta($post->ID, 'link_21', true);
        $link_22 = get_post_meta($post->ID, 'link_22', true);
        $link_23 = get_post_meta($post->ID, 'link_23', true);
        $link_24 = get_post_meta($post->ID, 'link_24', true);
     
     
        function cc_mime_types($mimes)
        {
            $mimes['svg'] = 'image/svg+xml';
            return $mimes;
        }
        add_filter('upload_mimes', 'cc_mime_types');
     
     
        wp_nonce_field('my_meta_box_nonce', 'meta_box_nonce'); ?>

<!-- ** tag input baraye onaee ke bala neveshte (for part 1) -->
<p>
<label for="">&#1606;&#1575;&#1605; &#1580;&#1583;&#1608;&#1604;</label>
<input type="text" name="name_jadval" id="name_jadval" value="<?php echo $name_jadval; ?>" style="width:20%; border:1px solid turquoise ">
</p>



<p>
<label for=""> &#1578;&#1740;&#1578;&#1585; &#1576;&#1575;&#1604;&#1575; &#1580;&#1583;&#1608;&#1604;</label>
<div class="" style="display:flex">
<input type="text" name="title_1" id="title_1" value="<?php echo $title_1; ?>" style="width:20%; margin:5px; border:1px solid navy" />
<input type="text" name="title_2" id="title_2" value="<?php echo $title_2; ?>" style="width:20%; margin:5px; border:1px solid navy" />
<input type="text" name="title_3" id="title_3" value="<?php echo $title_3; ?>" style="width:20%; margin:5px; border:1px solid navy" />
<input type="text" name="title_4" id="title_4" value="<?php echo $title_4; ?>" style="width:20%; margin:5px; border:1px solid navy" />
<input type="text" name="title_5" id="title_5" value="<?php echo $title_5; ?>" style="width:20%; margin:5px; border:1px solid navy" />

</div>
</p>
<p>
<label for="">&#1605;&#1578;&#1606; &#1578;&#1740;&#1578;&#1585; &#1576;&#1575;&#1604;&#1575;&#1740; &#1580;&#1583;&#1608;&#1604;</label>
<div class="" style="display:flex">
<input type="text" name="text_title_1" id="text_title_1" value="<?php echo $text_title_1; ?>" style="width:20%; margin:5px; border:1px solid magenta " />
<input type="text" name="text_title_2" id="text_title_2" value="<?php echo $text_title_2; ?>" style="width:20%; margin:5px; border:1px solid magenta " />
<input type="text" name="text_title_3" id="text_title_3" value="<?php echo $text_title_3; ?>" style="width:20%; margin:5px; border:1px solid magenta " />
<input type="text" name="text_title_4" id="text_title_4" value="<?php echo $text_title_4; ?>" style="width:20%; margin:5px; border:1px solid magenta " />
<input type="text" name="text_title_5" id="text_title_5" value="<?php echo $text_title_5; ?>" style="width:20%; margin:5px; border:1px solid magenta " />

</div>
</p>



<p>
<label for="">&#1578;&#1593;&#1583;&#1575;&#1583; &#1605;&#1605;&#1576;&#1585;</label>
<div class="" style="display:flex">
<input type="text" name="number_1" id="number_1" value="<?php echo $number_1; ?>" style="width:20%; margin:5px; border: 1px solid pink" />
<input type="text" name="number_2" id="number_2" value="<?php echo $number_2; ?>" style="width:20%; margin:5px; border: 1px solid pink" />
<input type="text" name="number_3" id="number_3" value="<?php echo $number_3; ?>" style="width:20%; margin:5px; border: 1px solid pink" />
<input type="text" name="number_4" id="number_4" value="<?php echo $number_4; ?>" style="width:20%; margin:5px; border: 1px solid pink" />
<input type="text" name="number_5" id="number_5" value="<?php echo $number_5; ?>" style="width:20%; margin:5px; border: 1px solid pink" />
<input type="text" name="number_6" id="number_6" value="<?php echo $number_6; ?>" style="width:20%; margin:5px; border: 1px solid pink" />

</div>
</p>
<p>
<label for="">&#1587;&#1578;&#1608;&#1606; &#1575;&#1608;&#1604;</label>
<div class="" style="display:flex">
<input type="text" name="column_1_1" id="column_1_1" value="<?php echo $column_1_1; ?>" style="width:20%; margin:5px; border:1px solid gray" />
<input type="text" name="column_1_2" id="column_1_2" value="<?php echo $column_1_2; ?>" style="width:20%; margin:5px; border:1px solid gray" />
<input type="text" name="column_1_3" id="column_1_3" value="<?php echo $column_1_3; ?>" style="width:20%; margin:5px; border:1px solid gray" />
<input type="text" name="column_1_4" id="column_1_4" value="<?php echo $column_1_4; ?>" style="width:20%; margin:5px; border:1px solid gray" />
<input type="text" name="column_1_5" id="column_1_5" value="<?php echo $column_1_5; ?>" style="width:20%; margin:5px; border:1px solid gray" />
<input type="text" name="column_1_6" id="column_1_6" value="<?php echo $column_1_6; ?>" style="width:20%; margin:5px; border:1px solid gray" />

</div>
</p>
<p>
<label for="">&#1587;&#1578;&#1608;&#1606; &#1583;&#1608;&#1605;</label>
<div class="" style="display:flex">
<input type="text" name="column_2_1" id="column_2_1" value="<?php echo $column_2_1; ?>" style="width:20%; margin:5px; border:1px solid yellow" />
<input type="text" name="column_2_2" id="column_2_2" value="<?php echo $column_2_2; ?>" style="width:20%; margin:5px; border:1px solid yellow" />
<input type="text" name="column_2_3" id="column_2_3" value="<?php echo $column_2_3; ?>" style="width:20%; margin:5px; border:1px solid yellow" />
<input type="text" name="column_2_4" id="column_2_4" value="<?php echo $column_2_4; ?>" style="width:20%; margin:5px; border:1px solid yellow" />
<input type="text" name="column_2_5" id="column_2_5" value="<?php echo $column_2_5; ?>" style="width:20%; margin:5px; border:1px solid yellow" />
<input type="text" name="column_2_6" id="column_2_6" value="<?php echo $column_2_6; ?>" style="width:20%; margin:5px; border:1px solid yellow" />
</div>
</p>
<p>
<label for="">&#1587;&#1578;&#1608;&#1606; &#1587;&#1608;&#1605;</label>
<div class="" style="display:flex">
<input type="text" name="column_3_1" id="column_3_1" value="<?php echo $column_3_1; ?>" style="width:20% ; margin:5px; border:1px solid green" />
<input type="text" name="column_3_2" id="column_3_2" value="<?php echo $column_3_2; ?>" style="width:20% ; margin:5px; border:1px solid green" />
<input type="text" name="column_3_3" id="column_3_3" value="<?php echo $column_3_3; ?>" style="width:20% ; margin:5px; border:1px solid green" />
<input type="text" name="column_3_4" id="column_3_4" value="<?php echo $column_3_4; ?>" style="width:20% ; margin:5px; border:1px solid green" />
<input type="text" name="column_3_5" id="column_3_5" value="<?php echo $column_3_5; ?>" style="width:20% ; margin:5px; border:1px solid green" />
<input type="text" name="column_3_6" id="column_3_6" value="<?php echo $column_3_6; ?>" style="width:20% ; margin:5px; border:1px solid green" />
</div>
</p>
<p>
<label for="">&#1587;&#1578;&#1608;&#1606; &#1670;&#1607;&#1575;&#1585;&#1605;</label>
<div class="" style="display:flex">
<input type="text" name="column_4_1" id="column_4_1" value="<?php echo $column_4_1; ?>" style="width:20%; margin:5px; border:1px solid red" />
<input type="text" name="column_4_2" id="column_4_2" value="<?php echo $column_4_2; ?>" style="width:20%; margin:5px; border:1px solid red" />
<input type="text" name="column_4_3" id="column_4_3" value="<?php echo $column_4_3; ?>" style="width:20%; margin:5px; border:1px solid red" />
<input type="text" name="column_4_4" id="column_4_4" value="<?php echo $column_4_4; ?>" style="width:20%; margin:5px; border:1px solid red" />
<input type="text" name="column_4_5" id="column_4_5" value="<?php echo $column_4_5; ?>" style="width:20%; margin:5px; border:1px solid red" />
<input type="text" name="column_4_6" id="column_4_6" value="<?php echo $column_4_6; ?>" style="width:20%; margin:5px; border:1px solid red" />
</div>
</p>
<p>
<label for="">&#1587;&#1578;&#1608;&#1606; &#1662;&#1606;&#1580;&#1605;</label>
<div class="" style="display:flex">
<input type="text" name="column_5_1" id="column_5_1" value="<?php echo $column_5_1; ?>" style="width:20%; margin:5px; border:1px solid orange" />
<input type="text" name="column_5_2" id="column_5_2" value="<?php echo $column_5_2; ?>" style="width:20%; margin:5px; border:1px solid orange" />
<input type="text" name="column_5_3" id="column_5_3" value="<?php echo $column_5_3; ?>" style="width:20%; margin:5px; border:1px solid orange" />
<input type="text" name="column_5_4" id="column_5_4" value="<?php echo $column_5_4; ?>" style="width:20%; margin:5px; border:1px solid orange" />
<input type="text" name="column_5_5" id="column_5_5" value="<?php echo $column_5_5; ?>" style="width:20%; margin:5px; border:1px solid orange" />
<input type="text" name="column_5_6" id="column_5_6" value="<?php echo $column_5_6; ?>" style="width:20%; margin:5px; border:1px solid orange" />
</div>
</p>

<p>
<label for="">&#1587;&#1578;&#1608;&#1606; &#1588;&#1588;&#1605;</label>
<div class="" style="display:flex">
<input type="text" name="column_6_1" id="column_6_1" value="<?php echo $column_6_1; ?>" style="width:20%; margin:5px; border:1px solid cyan" />
<input type="text" name="column_6_2" id="column_6_2" value="<?php echo $column_6_2; ?>" style="width:20%; margin:5px; border:1px solid cyan" />
<input type="text" name="column_6_3" id="column_6_3" value="<?php echo $column_6_3; ?>" style="width:20%; margin:5px; border:1px solid cyan" />
<input type="text" name="column_6_4" id="column_6_4" value="<?php echo $column_6_4; ?>" style="width:20%; margin:5px; border:1px solid cyan" />
<input type="text" name="column_6_5" id="column_6_5" value="<?php echo $column_6_5; ?>" style="width:20%; margin:5px; border:1px solid cyan" />
<input type="text" name="column_6_6" id="column_6_6" value="<?php echo $column_6_6; ?>" style="width:20%; margin:5px; border:1px solid cyan" />
</div>
</p>
<p>
<label for=""> &#1604;&#1740;&#1606;&#1705; &#1601;&#1585;&#1605; &#1607;&#1575; &#1608; &#1608;&#1589;&#1604; &#1588;&#1583;&#1606; &#1576;&#1607; &#1583;&#1585;&#1711;&#1575;&#1607; &#1662;&#1585;&#1583;&#1575;&#1582;&#1578; </label>

<div class="" style="display:flex">
<input type="text" name="link_1" id="link_1" value="<?php echo $link_1; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_2" id="link_2" value="<?php echo $link_2; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_3" id="link_3" value="<?php echo $link_3; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_4" id="link_4" value="<?php echo $link_4; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_5" id="link_5" value="<?php echo $link_5; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_6" id="link_6" value="<?php echo $link_6; ?>" style="width:20%; margin:5px; border:1px solid blue" />
</div>
<br><br>
<div class="" style="display:flex">
<input type="text" name="link_7" id="link_7" value="<?php echo $link_7; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_8" id="link_8" value="<?php echo $link_8; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_9" id="link_9" value="<?php echo $link_9; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_10" id="link_10" value="<?php echo $link_10; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_11" id="link_11" value="<?php echo $link_11; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_12" id="link_12" value="<?php echo $link_12; ?>" style="width:20%; margin:5px; border:1px solid blue" />
</div>
<br><br>
<div class="" style="display:flex">
<input type="text" name="link_13" id="link_13" value="<?php echo $link_13; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_14" id="link_14" value="<?php echo $link_14; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_15" id="link_15" value="<?php echo $link_15; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_16" id="link_16" value="<?php echo $link_16; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_17" id="link_17" value="<?php echo $link_17; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_18" id="link_18" value="<?php echo $link_18; ?>" style="width:20%; margin:5px; border:1px solid blue" />
</div>
<br><br>
<div class="" style="display:flex">
<input type="text" name="link_19" id="link_19" value="<?php echo $link_19; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_20" id="link_20" value="<?php echo $link_20; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_21" id="link_21" value="<?php echo $link_21; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_22" id="link_22" value="<?php echo $link_22; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_23" id="link_23" value="<?php echo $link_23; ?>" style="width:20%; margin:5px; border:1px solid blue" />
<input type="text" name="link_24" id="link_24" value="<?php echo $link_24; ?>" style="width:20%; margin:5px; border:1px solid blue" />
</div>
<br><br>


</p>


<?php
    
    }
    
    add_action('save_post', 'cd_meta_box_save_amiraemi');
    function cd_meta_box_save_amiraemi($post_id)
    {
        // Bail if we're doing an auto save
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
        
        // if our nonce isn't there, or we can't verify it, bail
        if (!isset($_POST['meta_box_nonce']) || !wp_verify_nonce($_POST['meta_box_nonce'], 'my_meta_box_nonce')) return;
        
        // if our current user can't edit this post, bail
        if (!current_user_can('edit_post')) return;
        
        // now we can actually save the data
        $allowed = array(
                         'a' => array( // on allow a tags
                                      'href' => array() // and those anchors can only have href attribute
                                      )
                         );
        
        // ** baraye onaee ke bala neveshte bod
        
        
        
        //  test amir aemi
        
        if (isset($_POST['name_jadval']))
            update_post_meta($post_id, 'name_jadval', wp_kses($_POST['name_jadval'], $allowed));
        
        // &#1578;&#1740;&#1578;&#1585; &#1576;&#1575;&#1604;&#1575;
        
        if (isset($_POST['title_1']))
            
            update_post_meta($post_id, 'title_1', wp_kses($_POST['title_1'], $allowed));
        
        if (isset($_POST['title_2']))
            
            update_post_meta($post_id, 'title_2', wp_kses($_POST['title_2'], $allowed));
        
        if (isset($_POST['title_3']))
            
            update_post_meta($post_id, 'title_3', wp_kses($_POST['title_3'], $allowed));
        
        if (isset($_POST['title_4']))
            
            update_post_meta($post_id, 'title_4', wp_kses($_POST['title_4'], $allowed));
        
        if (isset($_POST['title_5']))
            
            update_post_meta($post_id, 'title_5', wp_kses($_POST['title_5'], $allowed));
        
        
        
        //&#1605;&#1578;&#1606; &#1578;&#1740;&#1578;&#1585; &#1576;&#1575;&#1604;&#1575;
        
        
        if (isset($_POST['text_title_1']))
            
            update_post_meta($post_id, 'text_title_1', wp_kses($_POST['text_title_1'], $allowed));
        
        if (isset($_POST['text_title_2']))
            
            update_post_meta($post_id, 'text_title_2', wp_kses($_POST['text_title_2'], $allowed));
        
        if (isset($_POST['text_title_3']))
            
            update_post_meta($post_id, 'text_title_3', wp_kses($_POST['text_title_3'], $allowed));
        
        if (isset($_POST['text_title_4']))
            
            update_post_meta($post_id, 'text_title_4', wp_kses($_POST['text_title_4'], $allowed));
        
        if (isset($_POST['text_title_5']))
            
            update_post_meta($post_id, 'text_title_5', wp_kses($_POST['text_title_5'], $allowed));
        
        // &#1578;&#1593;&#1583;&#1575;&#1583; &#1605;&#1605;&#1576;&#1585; &#1607;&#1575;
        
        
        
        
        if (isset($_POST['number_1']))
            
            update_post_meta($post_id, 'number_1', wp_kses($_POST['number_1'], $allowed));
        
        if (isset($_POST['number_2']))
            
            update_post_meta($post_id, 'number_2', wp_kses($_POST['number_2'], $allowed));
        
        if (isset($_POST['number_3']))
            
            update_post_meta($post_id, 'number_3', wp_kses($_POST['number_3'], $allowed));
        
        if (isset($_POST['number_4']))
            
            update_post_meta($post_id, 'number_4', wp_kses($_POST['number_4'], $allowed));
        
        if (isset($_POST['number_5']))
            
            update_post_meta($post_id, 'number_5', wp_kses($_POST['number_5'], $allowed));
        
        if (isset($_POST['number_6']))
            
            update_post_meta($post_id, 'number_6', wp_kses($_POST['number_6'], $allowed));
        
        
        
        
        
        // &#1587;&#1578;&#1608;&#1606; &#1740;&#1705;
        
        
        if (isset($_POST['column_1_1']))
            
            update_post_meta($post_id, 'column_1_1', wp_kses($_POST['column_1_1'], $allowed));
        
        if (isset($_POST['column_1_2']))
            
            update_post_meta($post_id, 'column_1_2', wp_kses($_POST['column_1_2'], $allowed));
        
        if (isset($_POST['column_1_3']))
            
            update_post_meta($post_id, 'column_1_3', wp_kses($_POST['column_1_3'], $allowed));
        
        if (isset($_POST['column_1_4']))
            
            update_post_meta($post_id, 'column_1_4', wp_kses($_POST['column_1_4'], $allowed));
        
        if (isset($_POST['column_1_5']))
            
            update_post_meta($post_id, 'column_1_5', wp_kses($_POST['column_1_5'], $allowed));
        
        if (isset($_POST['column_1_6']))
            
            update_post_meta($post_id, 'column_1_6', wp_kses($_POST['column_1_6'], $allowed));
        
        
        
        //  &#1587;&#1578;&#1608;&#1606; &#1583;&#1608;&#1605;
        
        
        
        if (isset($_POST['column_2_1']))
            
            update_post_meta($post_id, 'column_2_1', wp_kses($_POST['column_2_1'], $allowed));
        
        if (isset($_POST['column_2_2']))
            
            update_post_meta($post_id, 'column_2_2', wp_kses($_POST['column_2_2'], $allowed));
        
        if (isset($_POST['column_2_3']))
            
            update_post_meta($post_id, 'column_2_3', wp_kses($_POST['column_2_3'], $allowed));
        
        if (isset($_POST['column_2_4']))
            
            update_post_meta($post_id, 'column_2_4', wp_kses($_POST['column_2_4'], $allowed));
        
        if (isset($_POST['column_2_5']))
            
            update_post_meta($post_id, 'column_2_5', wp_kses($_POST['column_2_5'], $allowed));
        
        if (isset($_POST['column_2_6']))
            
            update_post_meta($post_id, 'column_2_6', wp_kses($_POST['column_2_6'], $allowed));
        
        
        // &#1587;&#1578;&#1608;&#1606; &#1587;&#1608;&#1605;
        
        
        
        
        
        if (isset($_POST['column_3_1']))
            
            update_post_meta($post_id, 'column_3_1', wp_kses($_POST['column_3_1'], $allowed));
        
        if (isset($_POST['column_3_2']))
            
            update_post_meta($post_id, 'column_3_2', wp_kses($_POST['column_3_2'], $allowed));
        
        if (isset($_POST['column_3_3']))
            
            update_post_meta($post_id, 'column_3_3', wp_kses($_POST['column_3_3'], $allowed));
        
        if (isset($_POST['column_3_4']))
            
            update_post_meta($post_id, 'column_3_4', wp_kses($_POST['column_3_4'], $allowed));
        
        if (isset($_POST['column_3_5']))
            
            update_post_meta($post_id, 'column_3_5', wp_kses($_POST['column_3_5'], $allowed));
        
        if (isset($_POST['column_3_6']))
            
            update_post_meta($post_id, 'column_3_6', wp_kses($_POST['column_3_6'], $allowed));
        
        
        // &#1587;&#1578;&#1608;&#1606; &#1670;&#1607;&#1575;&#1585;&#1605;
        
        
        
        
        
        if (isset($_POST['column_4_1']))
            
            update_post_meta($post_id, 'column_4_1', wp_kses($_POST['column_4_1'], $allowed));
        
        if (isset($_POST['column_4_2']))
            
            update_post_meta($post_id, 'column_4_2', wp_kses($_POST['column_4_2'], $allowed));
        
        if (isset($_POST['column_4_3']))
            
            update_post_meta($post_id, 'column_4_3', wp_kses($_POST['column_4_3'], $allowed));
        
        if (isset($_POST['column_4_4']))
            
            update_post_meta($post_id, 'column_4_4', wp_kses($_POST['column_4_4'], $allowed));
        
        if (isset($_POST['column_4_5']))
            
            update_post_meta($post_id, 'column_4_5', wp_kses($_POST['column_4_5'], $allowed));
        
        if (isset($_POST['column_4_6']))
            
            update_post_meta($post_id, 'column_4_6', wp_kses($_POST['column_4_6'], $allowed));
        
        
        // &#1587;&#1578;&#1608;&#1606; &#1781;
        
        if (isset($_POST['column_5_1']))
            
            update_post_meta($post_id, 'column_5_1', wp_kses($_POST['column_5_1'], $allowed));
        
        if (isset($_POST['column_5_2']))
            
            update_post_meta($post_id, 'column_5_2', wp_kses($_POST['column_5_2'], $allowed));
        
        if (isset($_POST['column_5_3']))
            
            update_post_meta($post_id, 'column_5_3', wp_kses($_POST['column_5_3'], $allowed));
        
        if (isset($_POST['column_5_4']))
            
            update_post_meta($post_id, 'column_5_4', wp_kses($_POST['column_5_4'], $allowed));
        
        if (isset($_POST['column_5_5']))
            
            update_post_meta($post_id, 'column_5_5', wp_kses($_POST['column_5_5'], $allowed));
        
        if (isset($_POST['column_5_6']))
            
            update_post_meta($post_id, 'column_5_6', wp_kses($_POST['column_5_6'], $allowed));
        
        //  &#1587;&#1578;&#1608;&#1606; &#1782;
        
        if (isset($_POST['column_6_1']))
            
            update_post_meta($post_id, 'column_6_1', wp_kses($_POST['column_6_1'], $allowed));
        
        if (isset($_POST['column_6_2']))
            
            update_post_meta($post_id, 'column_6_2', wp_kses($_POST['column_6_2'], $allowed));
        
        if (isset($_POST['column_6_3']))
            
            update_post_meta($post_id, 'column_6_3', wp_kses($_POST['column_6_3'], $allowed));
        
        if (isset($_POST['column_6_4']))
            
            update_post_meta($post_id, 'column_6_4', wp_kses($_POST['column_6_4'], $allowed));
        
        if (isset($_POST['column_6_5']))
            
            update_post_meta($post_id, 'column_6_5', wp_kses($_POST['column_6_5'], $allowed));
        
        if (isset($_POST['column_6_6']))
            
            update_post_meta($post_id, 'column_6_6', wp_kses($_POST['column_6_6'], $allowed));
        
        
        
        
        // &#1604;&#1740;&#1606;&#1705; &#1607;&#1575;
        
        
        
        
        
        if (isset($_POST['link_1']))
            
            update_post_meta($post_id, 'link_1', wp_kses($_POST['link_1'], $allowed));
        
        if (isset($_POST['link_2']))
            
            update_post_meta($post_id, 'link_2', wp_kses($_POST['link_2'], $allowed));
        
        if (isset($_POST['link_3']))
            
            update_post_meta($post_id, 'link_3', wp_kses($_POST['link_3'], $allowed));
        
        if (isset($_POST['link_4']))
            
            update_post_meta($post_id, 'link_4', wp_kses($_POST['link_4'], $allowed));
        
        if (isset($_POST['link_5']))
            
            update_post_meta($post_id, 'link_5', wp_kses($_POST['link_5'], $allowed));
        
        if (isset($_POST['link_6']))
            
            update_post_meta($post_id, 'link_6', wp_kses($_POST['link_6'], $allowed));
        
        
        
        if (isset($_POST['link_7']))
            
            update_post_meta($post_id, 'link_7', wp_kses($_POST['link_7'], $allowed));
        
        if (isset($_POST['link_8']))
            
            update_post_meta($post_id, 'link_8', wp_kses($_POST['link_8'], $allowed));
        
        if (isset($_POST['link_9']))
            
            update_post_meta($post_id, 'link_9', wp_kses($_POST['link_9'], $allowed));
        
        if (isset($_POST['link_10']))
            
            update_post_meta($post_id, 'link_10', wp_kses($_POST['link_10'], $allowed));
        
        if (isset($_POST['link_11']))
            
            update_post_meta($post_id, 'link_11', wp_kses($_POST['link_11'], $allowed));
        
        if (isset($_POST['link_12']))
            
            update_post_meta($post_id, 'link_12', wp_kses($_POST['link_12'], $allowed));
        
        
        
        
        if (isset($_POST['link_13']))
            
            update_post_meta($post_id, 'link_13', wp_kses($_POST['link_13'], $allowed));
        
        if (isset($_POST['link_14']))
            
            update_post_meta($post_id, 'link_14', wp_kses($_POST['link_14'], $allowed));
        
        if (isset($_POST['link_15']))
            
            update_post_meta($post_id, 'link_15', wp_kses($_POST['link_15'], $allowed));
        
        if (isset($_POST['link_16']))
            
            update_post_meta($post_id, 'link_16', wp_kses($_POST['link_16'], $allowed));
        
        
        
        if (isset($_POST['link_17']))
            
            update_post_meta($post_id, 'link_17', wp_kses($_POST['link_17'], $allowed));
        
        
        
        if (isset($_POST['link_18']))
            
            update_post_meta($post_id, 'link_18', wp_kses($_POST['link_18'], $allowed));
        
        if (isset($_POST['link_19']))
            
            update_post_meta($post_id, 'link_19', wp_kses($_POST['link_19'], $allowed));
        
        if (isset($_POST['link_20']))
            
            update_post_meta($post_id, 'link_20', wp_kses($_POST['link_20'], $allowed));
        
        if (isset($_POST['link_21']))
            
            update_post_meta($post_id, 'link_21', wp_kses($_POST['link_21'], $allowed));
        
        if (isset($_POST['link_22']))
            
            update_post_meta($post_id, 'link_22', wp_kses($_POST['link_22'], $allowed));
        
        if (isset($_POST['link_23']))
            
            update_post_meta($post_id, 'link_23', wp_kses($_POST['link_23'], $allowed));
        
        if (isset($_POST['link_24']))
            
            update_post_meta($post_id, 'link_24', wp_kses($_POST['link_24'], $allowed));
    }
    
    
    




function my_shortcode_function() {

?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">




<style>


.iran {
    direction: rtl;
}

.body {
    background-image: url('./assets/img/bg-blue.png');
    direction: rtl;
    height:100%;
    width: 100%;
}
.icon {
    height:50px;
    width:120px ;
    display: unset;
    border-radius:20px;
    background-color:transparent;
    transition:width .2s;
    -webkit-transition: width 0.4s; /* Safari 3.1 to 6.0 */

}

.icon:hover {
    height:25px;
    width:130px;
    display: flex;
    border-radius: 20px;
    justify-content: flex-start;
    padding-right: 15px ;
    align-items: center ;
  
    /* -webkit-transition: width .2s; For Safari 3.1 to 6.0  */
    transition: width .2s;
    color:red
 } 



.icon {
    height:50px;
    width:20px ;
    display: unset;
    border-radius:20px;
    /* background-color:#4AB1E6; */
    transition:width .2s;
    -webkit-transition: width 0.8s; /* Safari 3.1 to 6.0 */

} 




.hamintori:hover {
    width: 120px;
    color:#fff;
    font-size:11px;

}


.hamintori {
    height:23px;
    width:0px ;
    font-size:13px;
    display: inline-flex;
    flex-direction:row;
    border-radius:20px;
    background-color:#53ba66;
    /* background-color: red; */
    /* transition:width 1s; */
    -webkit-transition: width 1s; /* Safari 3.1 to 6.0 */

}


.are {
    background-color: transparent;
    border-radius: 30px;
    padding: 2px 10px;
    box-sizing: border-box;
    height:auto !important;
     transition: all 0.5s ease 0s;
    overflow: hidden; 
    position: absolute;

    height:20px; 
    width:30px;
    
}


.are:hover {
    display: inline-block;
    margin-right:10px;
    color:blue;
    width:20px;
    height:20px;
}
.fuck {
    color:#cccccc;
    font-size:14px;
height:24px;
width:20px;
margin:5px;
}

.fuck:hover {
    color:#fff;
    margin:5px;
    font-size:14px;


}


.fuck_fuck:hover {
    color:#a2a2a2;
    margin:5px;
    font-size:14px;


}

.fuck_fuck {
    margin:5px;
    color:#4cea7a;
    font-size:14px;


}
/*
#fuck_amir{
background-image:./assets/img/bg-blue.png;
height:600px; 
width:100%;
}
*/

.test_table {
    height:50vh;
    width:100%;
    background-color:#fff;  
    border:0px; 
    border-radius:10px; 
    border-collapse:separate; 
    border-spacing: 0px;
}
.title-fuck {
    display: flex; 
    height:40px ; 
    width:400px ; 
    border:3px dotted #a2a2a2; 
    margin-top: 100px ; 
    justify-content: center;
    padding-top:5px
}
.text_title {
    color:#a2a2a2;  
    font-size:15px
    }
.border-top-fuck {
height:50px; 
width:50px; 
border-radius:25px; 
background-color:#3CD4BF; 
display: flex; 
justify-content: center; 
align-items: center;
margin-top: 100px
}
.bad {
height:25px; 
width:180px; 
display: flex ; 
border-radius: 20px; 
justify-content: flex-start; 
padding-right: 40px ; 
align-items: center ; 
right:16%
}
@media (max-width:768px){
.bad {
height:25px;
width:180px;
display:flex;
border-radius:20px;
justify-content:flex-start;
padding-right:40px;
align-items:center;
right:53%;
}
.text-fuck-hamed {
width:85%;
}
.border-top-fuck{
height:38px;
width:64px;
border-radius:19px;
background-color:#3CD4BF;
display:flex;
justify-content:center;
align-items:center;
margin-top:65px;
}
.title-fuck {
    height:80px;
    display: flex;
    width: 400px;
    border:2px dotted #a2a2a2;
    margin-top:100px;
    justify-content: center;
    padding-top: 5px;
    padding-right: 16px;  
}
.text_title {
    font-size:12px;
    color: #a2a2a2;
}
.test_table {
    height:50vh;
    width:90%;
    background-color: #fff;
    border:0px;
    border-radius: 10px;
    border-collapse: separate;
    border-spacing: 0px;
}
.fuck{
font-size:10px;
}

}

</style>



    <div class="container-fulid iran" id="fuck_amir" style="background-image:<?php echo get_template_directory_uri();?>https://lh120.irandns.com:2222/CMD_FILE_MANAGER/domains/persianmember.com/public_html/wp-content/themes/boo/assets/img/bg-blue.png;">

        <div class="row" style="display: flex; justify-content: space-around; align-items: center; margin:0px">
            <div class="row" style="display:flex;margin:0px; justify-content: center;">
                <div class="border-top-fuck" style="">
                    <i class="fas fuck-dolar fa-dollar-sign" style="color:#fff; font-size:18px; "></i>
                </div>
                <p style="font-size:30px ; font-weight:800; color:#fff;margin-top: 110px; margin-right: 20px"><?php echo get_post_meta(8238, 'name_jadval', true); ?> </p>
            </div>
            <div class="title-fuck" style=" ">
                <p class="text_title" style="">&#1576;&#1585;&#1575;&#1740; &#1587;&#1601;&#1575;&#1585;&#1588; &#1607;&#1585; &#1705;&#1583;&#1575;&#1605; &#1585;&#1608;&#1740; &#1587;&#1576;&#1583; &#1582;&#1585;&#1740;&#1583;<span><i class="fas fa-shopping-cart" style="font-size:22px"></i><i class="fas fa-plus" style="color:#3CD4BF; font-size:15px"></i></span> &#1705;&#1606;&#1575;&#1585; &#1570;&#1606; &#1705;&#1604;&#1740;&#1705; &#1705;&#1606;&#1740;&#1583;</p>
            </div>

        </div>



        <div class="row" style="margin:0px auto">
            <div class="col-md-1 text-fuck-hamed"></div>
            <div class="table-responsive col-md-10">

                <table class="table table-striped test_table" style="">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align:right; font-family:iransans;">
                                <p style="font-size:14px"> <?php echo get_post_meta(8238, 'title_1', true); ?></p>
                                <p style="font-size:11px; font-weight:400; font-family:iransans">
                                    <?php echo get_post_meta(8238, 'text_title_1', true) ?>
                                </p>
                            </th>
                            <th scope=" col" style="text-align:right ; border-bottom: 2px  solid #4AB1E6 ; font-family:iransans">
                                <p style="font-size:14px"> <?php echo get_post_meta(8238, 'title_2', true); ?></p>
                                <p style=" font-size:11px; font-weight:400; font-family:iransans">
                                    <?php echo get_post_meta(8238, 'text_title_2', true) ?>
                                </p>
                            </th>
                            <th scope="col" style="text-align:right ; border-bottom: 2px solid #4adfe6 ; font-family:iransans">
                                <p style="font-size:14px"> <?php echo get_post_meta(8238, 'title_3', true); ?></p>
                                <p style=" font-size:11px; font-weight:400; font-family:iransans">

                                    <?php echo get_post_meta(8238, 'text_title_3', true) ?>


                                </p>
                            </th>
                            <th scope="col" style="text-align:right ; border-bottom: 2px solid #3CD4BF ; font-family:iransans">
                                <p style="font-size:14px"> <?php echo get_post_meta(8238, 'title_4', true); ?> </p>
                                <p style=" font-size:11px; font-weight:400; font-family:iransans">

                                    <?php echo get_post_meta(8238, 'text_title_4', true) ?>


                                </p>
                            </th>
                            <th scope="col" style="text-align:right ; border-bottom: 2px solid #3CD4BF ; font-family:iransans">
                                <p style="font-size:14px"> <?php echo get_post_meta(8238, 'title_5', true); ?> </p>
                                <p style=" font-size:11px; font-weight:400; font-family:iransans">
                                    <?php echo get_post_meta(8238, 'text_title_5', true) ?>

                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color:#f9fbfb">
                            <td scope="row" style="text-align:center ; font-family:iransans;font-size: 13px ; ">
                                <?php echo get_post_meta(8238, 'number_1', true) ?>

                            </td>
                            <td style=" display:flex">
							
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_1_1', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                    <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_1', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>

                                    </a>
                                </div>
                            
                            </td>
                            <td scope="col" style="text-align:right;">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_1_2', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_2', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>							

                            <td scope="col" style="text-align:right;">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_1_3', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_3', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right; ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_1_4', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_4', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col" style="text-align:center; font-family:iransans; font-size: 13px ;">
                                <?php echo get_post_meta(8238, 'number_2', true) ?>

                            </td>
                            <td style=" display:flex;">
                                <p style="text-align:right; font-family:iransans;font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_2_1', true)  ?>

                                </p>
                                <div class=" icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                    <a class="hamintori" style="text-decoration:none" href="<?php echo get_post_meta(8238, 'link_5', true) ?>"> <i class="fas fuck fa-cart-plus""></i>
                                    <i class=" fas fuck_fuck fa-plus"></i>
<p style="color:#fff; font-size:11px; margin-top:4px">
&#1587;&#1601;&#1575;&#1585;&#1588; &#1583;&#1607;&#1740;&#1583;
</p>
   </a>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_2_2', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_6', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_2_3', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_7', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_2_4', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_8', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                        </tr>
                        <tr style="background-color:#f9fbfb">
                            <td scope="col" style="text-align:center;font-family:iransans;font-size: 13px ;">
                                <?php echo get_post_meta(8238, 'number_3', true) ?>

                            </td>
                            <td style=" display:flex">
                                <p style="text-align:right ; font-family:iransans;font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_3_1', true)  ?>

                                </p>

                                <div class="bad" style="">
                                    <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_9', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
<p style="color:#fff; font-size:11px; margin-top:4px">
&#1587;&#1601;&#1575;&#1585;&#1588; &#1583;&#1607;&#1740;&#1583;
</p>

                                    </a>
                                </div>
							</td>	
                            <td scope="col" style="text-align:right; ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_3_2', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_10', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_3_3', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_11', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_3_4', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_12', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col" style="text-align:center;font-family:iransans;font-size: 13px ;">
                                <?php echo get_post_meta(8238, 'number_4', true) ?>

                            </td>
                            <td style=" display:flex">
                                <p style="text-align:right ; font-family:iransans;font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_4_1', true)  ?>

                                </p>
                                <div class=" icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                    <a class="hamintori" style="text-decoration:none" href="<?php echo get_post_meta(8238, 'link_13', true) ?>"> <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
<p style="color:#fff; font-size:11px; margin-top:4px">
&#1587;&#1601;&#1575;&#1585;&#1588; &#1583;&#1607;&#1740;&#1583;
</p>
</a>
                                </div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_4_2', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_14', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_4_3', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_15', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_4_4', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_16', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                        </tr>
                        <tr style="background-color:#f9fbfb">
                            <td scope="col" style="text-align:center;font-family:iransans; font-size: 13px ;">
                                <?php echo get_post_meta(8238, 'number_5', true) ?>

                            </td>
                            <td style=" display:flex">
                                <p style="text-align:right ; font-family:iransans;font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_5_1', true)  ?>


                                </p>
                                <div class=" icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                    <a class="hamintori" style="text-decoration:none" href="<?php echo get_post_meta(8238, 'link_17', true) ?>"> <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
<p style="color:#fff; font-size:11px; margin-top:4px">
&#1587;&#1601;&#1575;&#1585;&#1588; &#1583;&#1607;&#1740;&#1583;
</p>
                                    </a>
                                </div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_5_2', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_18', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_5_3', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_19', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_5_4', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_20', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                        </tr>
                        <tr>
                            <td scope="col" style="text-align:center;font-family:iransans;font-size: 13px ;">
                                <?php echo get_post_meta(8238, 'number_6', true) ?>

                            </td>
                            <td style=" display:flex">
                                <p style="text-align:right ; font-family:iransans;font-size: 13px ;">

                                    <?php echo get_post_meta(8238, 'column_6_1', true)  ?>

                                </p>
                                <div class=" icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                    <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_21', true) ?>"> <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
<p style="color:#fff; font-size:11px; margin-top:4px">
&#1587;&#1601;&#1575;&#1585;&#1588; &#1583;&#1607;&#1740;&#1583;
</p>

                                    </a>
                                </div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_6_2', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_22', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_6_3', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_23', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                            <td scope="col" style="text-align:right ">
							<div class="row" style="display: flex; padding: 0 15px;">
                                <p style="text-align:right ;  font-family:iransans ; font-size: 13px ;">
                                    <?php echo get_post_meta(8238, 'column_6_4', true)  ?>
                                </p>
                                <div class=" row icon" style="height:25px; width:150px; display: flex ; border-radius: 20px; justify-content: flex-start; padding-right: 15px ; align-items: center ; margin-right:10px">
                                   
								   <a style="text-decoration:none" class="hamintori" href="<?php echo get_post_meta(8238, 'link_24', true) ?>">
                                        <i class="fas fuck fa-cart-plus"></i>
                                        <i class="fas fuck_fuck fa-plus"></i>
										<p style="color:#fff; font-size:11px; margin-top:4px">Ø³ÙØ§Ø±Ø´ Ø¯Ù‡ÛŒØ¯</p>
                                    </a>
                                </div>
							</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
<?php
} 
add_shortcode('buy', 'my_shortcode_function');
