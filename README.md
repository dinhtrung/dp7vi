Drupal 7 Vietnamese Installation Profile
=====

Đây là profile cài đặt cho Drupal tiếng Việt.

» « › ‹ ” “ ’ ‘


## Sử dụng

Download và giải nén `dp7vi` vào thư mục [drupal]/profiles/

~~~
drush make --no-core profiles/dp7vi/dp7vi.make
drush si --account-name=admin --account-pass='admin' --account-mail=admin@dp7vi.com --db-url=mysql://root:dbRootPass@localhost/dp7_vi --site-mail=noreply@dp7vi.com --locale=vi --site-name='Drupal 7 Vietnamese Installation Profile' dp7vi
~~~


## Các tính năng dựng sẵn

* Tắt chế độ `clean_url`
* Bật chế độ trình bày `fences`

## Các module được tích hợp

Các module hỗ trợ cho hệ thống:

* fences
* backup_migrate

Các module hỗ trợ ngôn ngữ:

* i18n
* i18nviews
* pathauto
* transliteration

## Cài đặt qua Drush
~~~
drush dl drupal
cd drupal-*
drush dl backup_migrate ctools libraries ckeditor context devel ds features fences i18n i18nviews imce jquery_update l10n_client l10n_update oembed metatag panels pathauto realname strongarm superfish tagadelic taxonomy_menu token transliteration variable views wysiwyg_filter service_links
wget https://drupal.org/files/i18n_string-Support-text-format-elements-fix-1252144.patch
cd sites/all/modules/i18n
patch -p1 < ../i18n_string-Support-text-format-elements-fix-1252144.patch
drush si dp7vi
~~~


## Speed up
sudo apt-get install memcached php5-apcu php5-memcached
drush dl memcache_storage

