#!/bin/bash

# Example plugin install
wp core install --url="${WORDPRESS_URL}" --title="${WORDPRESS_TITLE}" --admin_user="${WORDPRESS_ADMIN_USER}" --admin_password="${WORDPRESS_ADMIN_PASSWORD}" --admin_email="${WORDPRESS_ADMIN_EMAIL}" --allow-root
wp theme activate apptension-theme --allow-root
wp post create --post_title='Example post 1' --post_content='Just a small post.' --post_date='2021-03-01 07:00:00' --post_status=publish --tags_input=tag1,tag2 --allow-root
wp post create --post_title='Example post 2' --post_content='Just a small post.' --post_date='2021-03-02 07:00:00' --post_status=publish --tags_input=tag3,tag4 --allow-root
wp post create --post_title='Example post 3' --post_content='Just a small post.' --post_date='2021-03-03 07:00:00' --post_status=publish --tags_input=tag5,tag6 --allow-root
#rm -R wp-content