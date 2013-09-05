<?php




$view = new view();
$view->name = 'tags_nodes';
$view->description = 'Nodes related with current NID by tags';
$view->tag = 'default, frontpage, tags';
$view->base_table = 'node';
$view->human_name = 'Sản phẩm cùng loại';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Sản phẩm cùng loại';
$handler->display->display_options['use_ajax'] = TRUE;
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['use_more_text'] = 'Xem thêm';
$handler->display->display_options['link_display'] = 'custom_url';
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['distinct'] = TRUE;
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['submit_button'] = 'Áp dụng';
$handler->display->display_options['exposed_form']['options']['reset_button_label'] = 'Thiết lập lại';
$handler->display->display_options['exposed_form']['options']['exposed_sorts_label'] = 'Sắp xếp theo';
$handler->display->display_options['exposed_form']['options']['sort_desc_label'] = 'Giảm dần';
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '6';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'slideshow';
$handler->display->display_options['style_options']['flexslider_views_slideshow']['caption_field'] = 'none';
$handler->display->display_options['style_options']['slideshow_type'] = 'flexslider_views_slideshow';
$handler->display->display_options['style_options']['slideshow_skin'] = 'default';
$handler->display->display_options['style_options']['skin_info'] = array(
  'class' => 'default',
  'name' => 'Mặc định',
  'module' => 'views_slideshow',
  'path' => '',
  'stylesheets' => array(),
);
$handler->display->display_options['style_options']['widgets']['top']['views_slideshow_pager']['weight'] = '1';
$handler->display->display_options['style_options']['widgets']['top']['views_slideshow_pager']['type'] = 'views_slideshow_pager_fields';
$handler->display->display_options['style_options']['widgets']['top']['views_slideshow_pager']['views_slideshow_pager_fields_fields'] = array(
  'nid' => 0,
  'field_deal_image' => 0,
  'title' => 0,
  'commerce_price' => 0,
  'field_or_price' => 0,
  'commerce_sales' => 0,
  'field_timending' => 0,
  'add_to_cart_form' => 0,
  'field_headline' => 0,
  'field_few_words' => 0,
);
$handler->display->display_options['style_options']['widgets']['top']['views_slideshow_controls']['weight'] = '1';
$handler->display->display_options['style_options']['widgets']['top']['views_slideshow_controls']['type'] = 'views_slideshow_controls_text';
$handler->display->display_options['style_options']['widgets']['top']['views_slideshow_slide_counter']['weight'] = '1';
$handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_pager']['weight'] = '1';
$handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_pager']['type'] = 'views_slideshow_pager_fields';
$handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_pager']['views_slideshow_pager_fields_fields'] = array(
  'nid' => 0,
  'field_deal_image' => 0,
  'title' => 0,
  'commerce_price' => 0,
  'field_or_price' => 0,
  'commerce_sales' => 0,
  'field_timending' => 0,
  'add_to_cart_form' => 0,
  'field_headline' => 0,
  'field_few_words' => 0,
);
$handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_controls']['weight'] = '1';
$handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_controls']['type'] = 'views_slideshow_controls_text';
$handler->display->display_options['style_options']['widgets']['bottom']['views_slideshow_slide_counter']['weight'] = '1';
$handler->display->display_options['row_plugin'] = 'panels_fields';
$handler->display->display_options['row_options']['layout'] = 'flexible:slide_panel';
$handler->display->display_options['row_options']['regions'] = array(
  'nid' => 'title',
  'field_deal_image' => 'image',
  'commerce_price' => 'small_left',
  'field_or_price' => 'small_left',
  'commerce_sales' => 'center',
  'field_timending' => 'small_right',
  'add_to_cart_form' => 'large_right',
  'field_headline' => 'title',
  'field_few_words' => 'center',
);
/* No results behavior: Chung: Vùng văn bản */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
/* Quan hệ: Nội dung: Referenced product */
$handler->display->display_options['relationships']['field_product_product_id']['id'] = 'field_product_product_id';
$handler->display->display_options['relationships']['field_product_product_id']['table'] = 'field_data_field_product';
$handler->display->display_options['relationships']['field_product_product_id']['field'] = 'field_product_product_id';
/* Trường: Nội dung: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = '';
$handler->display->display_options['fields']['nid']['exclude'] = TRUE;
$handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
/* Trường: Commerce Product: Ảnh sản phẩm */
$handler->display->display_options['fields']['field_deal_image']['id'] = 'field_deal_image';
$handler->display->display_options['fields']['field_deal_image']['table'] = 'field_data_field_deal_image';
$handler->display->display_options['fields']['field_deal_image']['field'] = 'field_deal_image';
$handler->display->display_options['fields']['field_deal_image']['relationship'] = 'field_product_product_id';
$handler->display->display_options['fields']['field_deal_image']['label'] = '';
$handler->display->display_options['fields']['field_deal_image']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['field_deal_image']['alter']['path'] = 'node/[nid]';
$handler->display->display_options['fields']['field_deal_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_deal_image']['hide_alter_empty'] = FALSE;
$handler->display->display_options['fields']['field_deal_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_deal_image']['settings'] = array(
  'image_style' => 'large',
  'image_link' => '',
);
$handler->display->display_options['fields']['field_deal_image']['delta_limit'] = '1';
$handler->display->display_options['fields']['field_deal_image']['delta_offset'] = '0';
/* Trường: Commerce Product: Price */
$handler->display->display_options['fields']['commerce_price']['id'] = 'commerce_price';
$handler->display->display_options['fields']['commerce_price']['table'] = 'field_data_commerce_price';
$handler->display->display_options['fields']['commerce_price']['field'] = 'commerce_price';
$handler->display->display_options['fields']['commerce_price']['relationship'] = 'field_product_product_id';
$handler->display->display_options['fields']['commerce_price']['label'] = '';
$handler->display->display_options['fields']['commerce_price']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['commerce_price']['click_sort_column'] = 'amount';
$handler->display->display_options['fields']['commerce_price']['type'] = 'commerce_price_formatted_amount';
$handler->display->display_options['fields']['commerce_price']['settings'] = array(
  'calculation' => '0',
);
/* Trường: Commerce Product: Giá gốc */
$handler->display->display_options['fields']['field_or_price']['id'] = 'field_or_price';
$handler->display->display_options['fields']['field_or_price']['table'] = 'field_data_field_or_price';
$handler->display->display_options['fields']['field_or_price']['field'] = 'field_or_price';
$handler->display->display_options['fields']['field_or_price']['relationship'] = 'field_product_product_id';
$handler->display->display_options['fields']['field_or_price']['label'] = '';
$handler->display->display_options['fields']['field_or_price']['alter']['text'] = '<del>[field_or_price] </del>';
$handler->display->display_options['fields']['field_or_price']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_or_price']['click_sort_column'] = 'amount';
$handler->display->display_options['fields']['field_or_price']['type'] = 'opendeals_formatted_amount';
/* Trường: Nội dung: Ngày hết hạn */
$handler->display->display_options['fields']['field_timending']['id'] = 'field_timending';
$handler->display->display_options['fields']['field_timending']['table'] = 'field_data_field_timending';
$handler->display->display_options['fields']['field_timending']['field'] = 'field_timending';
$handler->display->display_options['fields']['field_timending']['label'] = 'Thời gian còn lại';
$handler->display->display_options['fields']['field_timending']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_timending']['type'] = 'jst_timer';
$handler->display->display_options['fields']['field_timending']['settings'] = array(
  'dir' => 'down',
  'format_txt' => '',
);
/* Trường: Commerce Product: Add to Cart form */
$handler->display->display_options['fields']['add_to_cart_form']['id'] = 'add_to_cart_form';
$handler->display->display_options['fields']['add_to_cart_form']['table'] = 'commerce_product';
$handler->display->display_options['fields']['add_to_cart_form']['field'] = 'add_to_cart_form';
$handler->display->display_options['fields']['add_to_cart_form']['relationship'] = 'field_product_product_id';
$handler->display->display_options['fields']['add_to_cart_form']['label'] = '';
$handler->display->display_options['fields']['add_to_cart_form']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['add_to_cart_form']['show_quantity'] = 0;
$handler->display->display_options['fields']['add_to_cart_form']['default_quantity'] = '1';
$handler->display->display_options['fields']['add_to_cart_form']['combine'] = 1;
$handler->display->display_options['fields']['add_to_cart_form']['display_path'] = 0;
$handler->display->display_options['fields']['add_to_cart_form']['line_item_type'] = 0;
/* Trường: Nội dung: Tiêu đề nổi bật */
$handler->display->display_options['fields']['field_headline']['id'] = 'field_headline';
$handler->display->display_options['fields']['field_headline']['table'] = 'field_data_field_headline';
$handler->display->display_options['fields']['field_headline']['field'] = 'field_headline';
$handler->display->display_options['fields']['field_headline']['label'] = '';
$handler->display->display_options['fields']['field_headline']['alter']['make_link'] = TRUE;
$handler->display->display_options['fields']['field_headline']['alter']['path'] = 'node/[nid]';
$handler->display->display_options['fields']['field_headline']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_headline']['element_wrapper_type'] = 'h4';
/* Trường: Commerce Product: Điểm nổi bật */
$handler->display->display_options['fields']['field_few_words']['id'] = 'field_few_words';
$handler->display->display_options['fields']['field_few_words']['table'] = 'field_data_field_few_words';
$handler->display->display_options['fields']['field_few_words']['field'] = 'field_few_words';
$handler->display->display_options['fields']['field_few_words']['relationship'] = 'field_product_product_id';
$handler->display->display_options['fields']['field_few_words']['label'] = '';
$handler->display->display_options['fields']['field_few_words']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_few_words']['type'] = 'text_trimmed';
$handler->display->display_options['fields']['field_few_words']['settings'] = array(
  'trim_length' => '200',
);
/* Tiêu chuẩn sắp xếp: Nội dung: Ngày hết hạn (field_timending) */
$handler->display->display_options['sorts']['field_timending_value']['id'] = 'field_timending_value';
$handler->display->display_options['sorts']['field_timending_value']['table'] = 'field_data_field_timending';
$handler->display->display_options['sorts']['field_timending_value']['field'] = 'field_timending_value';
$handler->display->display_options['sorts']['field_timending_value']['order'] = 'DESC';
/* Contextual filter: Trường: Thẻ phân loại (field_tags) */
$handler->display->display_options['arguments']['field_tags_tid']['id'] = 'field_tags_tid';
$handler->display->display_options['arguments']['field_tags_tid']['table'] = 'field_data_field_tags';
$handler->display->display_options['arguments']['field_tags_tid']['field'] = 'field_tags_tid';
$handler->display->display_options['arguments']['field_tags_tid']['relationship'] = 'field_product_product_id';
$handler->display->display_options['arguments']['field_tags_tid']['default_action'] = 'default';
$handler->display->display_options['arguments']['field_tags_tid']['exception']['title'] = 'Tất cả';
$handler->display->display_options['arguments']['field_tags_tid']['default_argument_type'] = 'taxonomy_tid';
$handler->display->display_options['arguments']['field_tags_tid']['default_argument_options']['node'] = TRUE;
$handler->display->display_options['arguments']['field_tags_tid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['field_tags_tid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['field_tags_tid']['summary_options']['items_per_page'] = '25';
/* Contextual filter: Nội dung: Nid */
$handler->display->display_options['arguments']['nid']['id'] = 'nid';
$handler->display->display_options['arguments']['nid']['table'] = 'node';
$handler->display->display_options['arguments']['nid']['field'] = 'nid';
$handler->display->display_options['arguments']['nid']['default_action'] = 'default';
$handler->display->display_options['arguments']['nid']['exception']['title'] = 'Tất cả';
$handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
$handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['nid']['not'] = TRUE;
/* Tiêu chí lọc: Nội dung: Đã công bố */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Tiêu chí lọc: Nội dung: Kiểu */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'deal' => 'deal',
);
/* Tiêu chí lọc: Nội dung: Ngày hết hạn (field_timending) */
$handler->display->display_options['filters']['field_timending_value']['id'] = 'field_timending_value';
$handler->display->display_options['filters']['field_timending_value']['table'] = 'field_data_field_timending';
$handler->display->display_options['filters']['field_timending_value']['field'] = 'field_timending_value';
$handler->display->display_options['filters']['field_timending_value']['operator'] = '>';
$handler->display->display_options['filters']['field_timending_value']['granularity'] = 'minute';
$handler->display->display_options['filters']['field_timending_value']['default_date'] = 'now';
/* Tiêu chí lọc: Nội dung: Đưa lên trang chủ */
$handler->display->display_options['filters']['promote']['id'] = 'promote';
$handler->display->display_options['filters']['promote']['table'] = 'node';
$handler->display->display_options['filters']['promote']['field'] = 'promote';
$handler->display->display_options['filters']['promote']['value'] = '1';

/* Display: Content pane */
$handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
$handler->display->display_options['allow']['use_pager'] = 0;
$handler->display->display_options['allow']['items_per_page'] = 0;
$handler->display->display_options['allow']['offset'] = 0;
$handler->display->display_options['allow']['link_to_view'] = 0;
$handler->display->display_options['allow']['more_link'] = 0;
$handler->display->display_options['allow']['path_override'] = 0;
$handler->display->display_options['allow']['title_override'] = 0;
$handler->display->display_options['allow']['exposed_form'] = 0;
$handler->display->display_options['allow']['fields_override'] = 0;
$handler->display->display_options['argument_input'] = array(
  'field_tags_tid' => array(
    'type' => 'context',
    'context' => 'entity:commerce_product.field-tags',
    'context_optional' => 0,
    'panel' => '0',
    'fixed' => '',
    'label' => 'Trường: Tags (field_tags)',
  ),
  'nid' => array(
    'type' => 'context',
    'context' => 'entity:node.nid',
    'context_optional' => 0,
    'panel' => '0',
    'fixed' => '',
    'label' => 'Nội dung: Nid',
  ),
);

