$view = new view();
$view->name = 'nodes_from_tags';
$view->description = 'Provide some tags as contextual filters, and display related nodes. Used for related content block';
$view->tag = 'default, nodes, tags';
$view->base_table = 'node';
$view->human_name = 'Nodes from Tags';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Related Contents';
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '10';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['style_options']['default_row_class'] = FALSE;
$handler->display->display_options['style_options']['row_class_special'] = FALSE;
$handler->display->display_options['style_options']['wrapper_class'] = '';
$handler->display->display_options['row_plugin'] = 'fields';
/* Trường: Nội dung: Tiêu đề */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Tiêu chuẩn sắp xếp: Nội dung: Dính */
$handler->display->display_options['sorts']['sticky']['id'] = 'sticky';
$handler->display->display_options['sorts']['sticky']['table'] = 'node';
$handler->display->display_options['sorts']['sticky']['field'] = 'sticky';
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
/* Bộ lọc ngữ cảnh: Nội dung: Tags (field_tags) */
$handler->display->display_options['arguments']['field_tags_tid']['id'] = 'field_tags_tid';
$handler->display->display_options['arguments']['field_tags_tid']['table'] = 'field_data_field_tags';
$handler->display->display_options['arguments']['field_tags_tid']['field'] = 'field_tags_tid';
$handler->display->display_options['arguments']['field_tags_tid']['default_action'] = 'default';
$handler->display->display_options['arguments']['field_tags_tid']['default_argument_type'] = 'taxonomy_tid';
$handler->display->display_options['arguments']['field_tags_tid']['default_argument_options']['node'] = TRUE;
$handler->display->display_options['arguments']['field_tags_tid']['default_argument_options']['anyall'] = '+';
$handler->display->display_options['arguments']['field_tags_tid']['default_argument_options']['limit'] = TRUE;
$handler->display->display_options['arguments']['field_tags_tid']['default_argument_options']['vocabularies'] = array(
  'tags' => 'tags',
);
$handler->display->display_options['arguments']['field_tags_tid']['summary']['number_of_records'] = '0';
$handler->display->display_options['arguments']['field_tags_tid']['summary']['format'] = 'default_summary';
$handler->display->display_options['arguments']['field_tags_tid']['summary_options']['items_per_page'] = '25';
$handler->display->display_options['arguments']['field_tags_tid']['break_phrase'] = TRUE;
/* Tiêu chí lọc: Nội dung: Đã công bố */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;

/* Display: Khối */
$handler = $view->new_display('block', 'Block', 'block_nodes_from_tags');
$handler->display->display_options['block_description'] = 'Related Contents';

