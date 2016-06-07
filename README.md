# wp-theme-2.0

# INSTALLING PROJECT FILES
1. Create Project folder in xampp. ( ex: rapid-plumbing )
2. Download wordpress files from https://wordpress.org/ and put contents into the root folder.
3. Add this wp-theme-2.0 into the themes folder.
4. Rename this wp-theme-2.0 into relevant theme name. ( ex : rapid-plumbing)
5. Go into style.css file and rename Stylesheet name.

# SETTING UP DATABASE
1. Start Apache server and MySQL.
2. Create new database for the project. ( ex : rapid-plumbing )
3. Import wp-template.sql file into the database.
4. In the root folder, change wp-config-sample.php to wp-config.php
5. Open wp-config.php, and change DB-NAME value from "wp-template-2.0" to name from line 2 (rapid-plumbing). 
6. In wp-config.php, change DB_USER value to root and password is blank.

# CHANGING URL IN DATABASE
1. Go into project database. ( ex : rapid-plumbing)
2. Go to wp_options table and change column 'siteurl' value to correct local url to http://localhost/rapid-plumbing/
3. Go to wp_options table and change column 'home' value to correnct local url to http://localhost/rapid-plumbing/
4. Click on SQL tab near the top.  Type:
      update wp_posts set guid = replace(guid,"http://localhost/old-site","http://localhost/rapid-plumbing)

# LAUNCH LOCAL WEBSITE FROM BROWSER
1. Open browser and type url http://localhost/rapid-plumbing. ( Screen will be blank until theme is activated )
2. Login to wordpress http://localhost/rapid-plumbing/wp-admin. ( user : admin , password : password )
3. Go into WP dashboard, select appearances -> themes, then select rapid-plumbing theme
4. Select settings -> permalinks, click Plain and save , then click Post name and save again. ( This will purge out the old links)

