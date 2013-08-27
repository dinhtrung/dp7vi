Drupal 7 Vietnamese Installation Profile
=====

Đây là profile cài đặt cho Drupal tiếng Việt.

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

