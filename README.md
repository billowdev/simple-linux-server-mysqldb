# testServerPHP
testServerPHP

ref: https://www.thaicreate.com/community/php-mysql-login-form-check-username-password.html





### Fix phpmyadmin not found
- https://askubuntu.com/questions/387062/how-to-solve-the-phpmyadmin-not-found-issue-after-upgrading-php-and-apache
<pre>
sudo ln -s /usr/share/phpmyadmin /var/www/html
</pre>

### Fix  ERROR 1819 (HY000)


- enable the validate_password plugin
<pre>
mysql> SELECT plugin_name, plugin_status FROM information_schema.plugins WHERE plugin_name LIKE 'validate%';
mysql> install plugin validate_password SONAME 'validate_password.so';
</pre>

- check plugin is activated?
<pre>
mysql> SELECT plugin_name, plugin_status FROM information_schema.plugins WHERE plugin_name LIKE 'validate%';
</pre>


-  set a lower password validation policy
<pre>
mysql> SET GLOBAL validate_password_policy=LOW;
OR
mysql> SET GLOBAL validate_password_policy=0;
</pre>

- confirm the password validation policy level.
<pre>
SHOW VARIABLES LIKE 'validate_password%';
</pre>

- Assign password
<pre>
mysql> create user ‘youruser’@’localhost’ IDENTIFIED BY ‘thisisyourpassword’;
</pre>


-----------------------
- revert to the ‘MEDIUM’ password policy
<pre>
mysql> SET GLOBAL validate_password_policy=MEDIUM;
</pre>


-----------------------
### FIX phpmyadmin USER can't login

- 1
<pre>
sudo mysql -p -u root
</pre>

- 2 Create USER And assign password
<pre>
CREATE USER 'youruser'@'%' IDENTIFIED BY 'thispass';
</pre>

- 3 Add root to youruser
<pre>
GRANT ALL PRIVILEGES ON *.* TO 'youruser'@'%' WITH GRANT OPTION;
</pre>
