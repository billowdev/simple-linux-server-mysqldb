
# CentOS 8

#### change to root
<pre>
su
</pre>

#### update
```
yum update -y
```

### install apache package
```
dnf install httpd
```

### open up port 80 
```
firewall-cmd --permanent --add-service=http
```

```
firewall-cmd --permanent --add-service=https
```

```
firewall-cmd --reload
```

### Check server
```
systemctl start httpd
```

```
systemctl status httpd
```

#### Check hostname
```
hostname -I
```

### Installing MySQL

```
dnf install mysql-server
```

```
systemctl start mysqld.service
```

```
systemctl status mysqld
```

#### set ใช้งาน mysql เมื่อรัน server
```
systemctl enable mysqld
```

### install security mysql
```
mysql_secure_installation
```
#### test sql
```
mysqladmin -u root -p version
```

```
mysql -u root -p
```

### install php
```
dnf -y install php php-common php-process php-xmlrpc php-xml php-soap php-snmp php-recode php-bcmath php-cli php-dba php-dbg php-mbstring php-odbc php-pecl-apcu-devel php-pecl-zip php-pgsql php-pecl-apcu php-pear php-pdo php-opcache php-devel php-embedded php-enchant php-gd php-fpm php-gmp php-intl php-ldap php-json php-mysqlnd php-pdo php-gd php-mbstring zip unzip tar wget
```

### install phpmyadmin
##### [phpmyadmin](https://www.phpmyadmin.net/)

```
cd /var/www/html
wget https://files.phpmyadmin.net/phpMyAdmin/4.9.4/phpMyAdmin-4.9.4-all-languages.zip
```

#### unzip

```
unzip phpMyAdmin-4.9.4-all-languages.zip
```
### rename 
```
mv phpMyAdmin-4.9.4-all-languages phpmyadmin
```

### change ownership
```
chown -R apache:apache /var/www/html/phpmyadmin
```

#### rename config file
```
cd phpmyadmin
mv config.sample.inc.php config.inc.php
```

```
nano config.inc.php
```

#### php root password
```
$cfg['blowfish_secret']='thisispassword';
```

<!-- ##### perrmissions temporary phpMyAdmin
<pre>

mkdir /usr/share/phpmyadmin/tmp

chown -R apache:apache /usr/share/phpmyadmin

chmod 777 /usr/share/phpmyadmin/tmp

</pre> -->

###  import the tables for phpMyAdmin
```
mysql < sql/create_tables.sql
```

### Configure Apache for phpMyAdmin
```
nano /etc/httpd/conf.d/phpmyadmin.conf
```

##### หลังจากสร้างไฟล์แล้วให้นำไฟล์โค้ดด้านล่างไปใส่ใน conf ไฟล์

```
Alias /phpmyadmin /var/www/html/phpmyadmin

<Directory /var/www/html/phpmyadmin/>
   AddDefaultCharset UTF-8

   <IfModule mod_authz_core.c>
     # Apache 2.4
     <RequireAny>
      Require all granted
     </RequireAny>
   </IfModule>
   <IfModule !mod_authz_core.c>
     # Apache 2.2
     Order Deny,Allow
     Deny from All
     Allow from 127.0.0.1
     Allow from ::1
   </IfModule>
</Directory>

<Directory /var/www/html/phpmyadmin/setup/>
   <IfModule mod_authz_core.c>
     # Apache 2.4
     <RequireAny>
       Require all granted
     </RequireAny>

   </IfModule>

   <IfModule !mod_authz_core.c>
     # Apache 2.2
     Order Deny,Allow
     Deny from All
     Allow from 127.0.0.1
     Allow from ::1
   </IfModule>

</Directory>

```

#### restart httod
```
systemctl restart httpd
```


###### user mysql
<pre>
mysql –u root –p
</pre>

<pre>
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'thisispassword';
</pre>

### ( หากต้องการเปลี่ยนตำแหน่งโฟลเดอร์ phpmyadmin)

```
nano /etc/httpd/conf.d/phpmyadmin.conf

แล้วก็หาบรรทัด
Alias /phpmyadmin /var/www/html/phpmyadmin

เปลี่ยนใหม่เป็น
/securelocation คือ ตำแหน่งที่ต้องการเปลี่ยน

Alias /newlocation /var/www/html/phpmyadmin
```

##### หลังจากนนั้นทำการ 

```
systemctl restart httpd
```

<!--
### protocol for phpMyAdmin
```
yum –y install policycoreutils-python-utils
```

 #### เปิดใช้งานการเข้าถึงไดเร็กทอรี phpmyadmin
```
emanage fcontext –a –t httpd_sys_rw_content_t '/usr/share/phpmyadmin/'
```

```
semanage fcontext –a –t httpd_sys_rw_content_t "usr/share/phpmyadmin/tmp(/.*)?"
```

```
restorecon -Rv '/usr/share/phpmyadmin/'
``` -->

<!-- #### Allow Traffic
```
firewall–cmd ––permanent ––add-service=http
```

```
firewall-cmd ––reload
``` -->
