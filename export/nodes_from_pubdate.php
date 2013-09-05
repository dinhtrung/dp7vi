$view = new view();
$view->name = 'nodes_from_pubdate';
$view->description = 'Contents written at the same time of current contents';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Nodes from Pubdate';
$view->core = 0;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'On this Month';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['use_more_text'] = 'thêm';
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['query_comment'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '10';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['style_options']['default_row_class'] = FALSE;
$handler->display->display_options['style_options']['row_class_special'] = FALSE;
$handler->display->display_options['style_options']['wrapper_class'] = '';
$handler->display->display_options['row_plugin'] = 'fields';
$handler->display->display_options['row_options']['default_field_elements'] = FALSE;
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
/* Tiêu chuẩn sắp xếp: Nội dung: Ngày gửi bài */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Bộ lọc ngữ cảnh: Nội dung: Nid */
$handler->display->display_options['arguments']['nid']['id'] = 'nid';
$handler->display->display_options['arguments']['nid']['table'] = 'node';
$handler->display->display_options['arguments']['nid']['field'] = 'nid';
$handler->display->display_options['arguments']['nid']['default_action'] = 'default';
$handler->display->display_options['arguments']['nid']['default_argument_type'] = 'node';
$handler->display->display_options['arguments']['nid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['nid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['nid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['nid']['not'] = TRUE;
/* Bộ lọc ngữ cảnh: Nội dung: Created year + month */
$handler->display->display_options['arguments']['created_year_month']['id'] = 'created_year_month';
$handler->display->display_options['arguments']['created_year_month']['table'] = 'node';
$handler->display->display_options['arguments']['created_year_month']['field'] = 'created_year_month';
$handler->display->display_options['arguments']['created_year_month']['default_action'] = 'default';
$handler->display->display_options['arguments']['created_year_month']['default_argument_type'] = 'node_created';
$handler->display->display_options['arguments']['created_year_month']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['created_year_month']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['created_year_month']['summary_options']['items_per_page'] = '25';
/* Tiêu chí lọc: Nội dung: Đã công bố */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '1';
$handler->display->display_options['filters']['status']['group'] = 0;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

/* Display: Khối */
$handler = $view->new_display('block', 'Block', 'block_nodes_from_pubdate');

