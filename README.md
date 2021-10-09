# Linux Server simple login system with mysql
##  Operating System Subject 
###### VMware Ubuntu Server - phpmyadmin - mysql

##  [LEARNING SITE : w3schools](https://www.w3schools.com/)

-----------------------------------------------------------

### Change to root (เปลี่ยนสิทธิ์เป็น root)
<pre>
sudo su
</pre>

### after install your linux-server (ทำการอัพเดตแพคเกจต่างๆ)
<pre>
apt update
apt upgrade -y
</pre>

##### [More Detail - How To Install the Apache Web Server on Ubuntu 20.04](https://www.digitalocean.com/community/tutorials/how-to-install-the-apache-web-server-on-ubuntu-20-04)

#### install apache2 (ทำการติดตั้ง apache2)
<pre>
apt install apache2 -y
</pre>
<pre>
ufw allow 'Apache'
</pre>
#### make sure the service is running
<pre>
systemctl status apache2
</pre>
#### Check IP addresses
<pre>
hostname -I
</pre>

#### ลองพิมพ์ ip ที่ได้จากคำสั่ง hostname -I ใน url ของ browser
<pre>
192.168.xx.xxx
</pre>
##### ถ้าปรากฎหน้า apache แสดงว่าใช้งานได้ครับ

### install mysql (ทำการติดตั้ง mysql)
<pre>
apt install mysql-server -y
</pre>

##### จากนั้นเราจะทำการใช้ mysql
#### use mysql
<pre>
mysql -p -u root
</pre>
#### Create USER for database
<pre>
CREATE USER 'testuser'@'%' IDENTIFIED BY 'root1234';
</pre>

#### Exit mysql
<pre>
exit
</pre>

#### install phpmyadmin
<pre>
apt install phpmyadmin -y
</pre>

#### 1. Select Apache2
![alt text]("https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/assets/images/1-apache2.png")

#### 2.Select yes

![alt text]("https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/assets/images/2-yes.png"/>

#### 3.type your password for phpmyadmin (ในที่นี้จะพิมพ์ codetopanda123456789 ซึ่งยาวพอตัว เพราะถ้าพิมพ์สั้นไปมันจะ Error ซึ่งต้องแก้ไข policy จะมีวิธีบอกอยู่ด้านล่างครับ : ) )

![alt text]("https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/assets/images/3-password-ok.png"/>

#### 4. confirm password (พิมพ์รหัสผ่านอีกครั้งเพื่อ confirm)

![alt text]("https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/assets/images/4-password-confirm-ok.png"/>

#### 5. if not error it finished (ถ้าไม่เกิดข้อผิดพลาดใดๆ ถือว่าเสร็จสิ้น ถ้าเกิดข้อผิดพลาดลอง อ่านโค้ด Error แล้วลอง เลื่อนลงไปด้านล่าง ถ้าข้อผิดพลาดนั้นไม่ได้มี ใน tutorialนี้ ลอง Search Google เพื่อแก้ดูครับ น่าจะไม่ยากเกินความสามารถครับ :) )

![alt text]("/assets/images/5-finished.png"/>

#### 6. เข้าไปหน้า phpmyadmin

<pre>
192.168.xx.xxx/phpmyadmin
</pre>

#### 7. login phpmyadmin (เข้าสู่ระบบ phpmyadmin)

<pre>
id: phpmyadmin
pass: yourpassword
</pre>

#### ถ้าหากว่าได้ทำการพิมพ์บรรทัดในหัวข้อ
#### Create USER for database
#### จะสามารถใช้ user ด้านล่างได้ครับ

<pre>
testuser
root1234
</pre>

-----------------------------------------------------------
#### Fix phpmyadmin not found (วิธีแก้หา phpmyadmin ไม่เจอ)
#####  [ref : how-to-solve-the-phpmyadmin](https://askubuntu.com/questions/387062/how-to-solve-the-phpmyadmin-not-found-issue-after-upgrading-php-and-apache)

<pre>
sudo ln -s /usr/share/phpmyadmin /var/www/html
</pre>
-----------------------------------------------------------
#### ทำการสร้าง database

#### use mysql

<pre>
mysql -p -u root
</pre>

#### CREATE DB

<pre>
CREATE database mydatabase;
</pre>

#### USE DATABASE

<pre>
USE mydatabase;
</pre>

### CREATE TABLE

<pre>
CREATE TABLE `member` (
  `UserID` int(3) unsigned zerofill NOT NULL auto_increment,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL default 'USER',
  PRIMARY KEY  (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM  AUTO_INCREMENT=3 ;
</pre>

#### INSERT USER AND ADMIN DATA

<pre>
INSERT INTO `member` VALUES (004, 'root', 'root', 'Mr Root Ubuntu', 'ADMIN');
INSERT INTO `member` VALUES (005, 'codetopanda', 'ctp123', 'MR Codetopand Portdee', 'USER');
</pre>

#### Exit mysql

<pre>
exit
</pre>

-----------------------------------------------------------

#### Preparing site change directory to /var/www/html
###### เปลี่ยนโฟล์เดอร์ไปที่ path /var/www/html

<pre>
cd /var/www/html
</pre>

#### Clone git in /var/www/html |  Move all file to /var/www/html | remove simple-linux-server-mysqldb Folder | 

<pre>
git clone https://github.com/lacakp/simple-linux-server-mysqldb.git; mv -v ./simple-linux-server-mysqldb/* ./ ; rm -r simple-linux-server-mysqldb;
</pre>

#### nano to config database ( เข้าไปแก้ไข เปลี่ยน ip-user-password-database)
#### ใน tutorial นี้ได้ตั้งไว้คือ (192.168.xx.xxx, testuser, root1234, mydatabasee)

<pre>
nano connectdb.php
</pre>



-----------------------------------------------------------

## FIX phpmyadmin USER can't login ( แก้ ไม่สามารถเข้า phpmyadmin ได้)

###### mysql

<pre>
sudo mysql -p -u root
</pre>

###### 2 Create USER And assign password

<pre>
CREATE USER 'youruser'@'%' IDENTIFIED BY 'thispass';
</pre>

###### 3 Add root to youruser

<pre>
GRANT ALL PRIVILEGES ON *.* TO 'youruser'@'%' WITH GRANT OPTION;
</pre>

-----------------------------------------------------------

#### Fix  ERROR 1819 (HY000) (แก้ Error policy password เราจะเปลี่ยนให้มัน low)

###### enable the validate_password plugin

<pre>
mysql> SELECT plugin_name, plugin_status FROM information_schema.plugins WHERE plugin_name LIKE 'validate%';
mysql> install plugin validate_password SONAME 'validate_password.so';
</pre>

###### check plugin is activated?

<pre>
mysql> SELECT plugin_name, plugin_status FROM information_schema.plugins WHERE plugin_name LIKE 'validate%';
</pre>


###### set a lower password validation policy

<pre>
mysql> SET GLOBAL validate_password_policy=LOW;
OR
mysql> SET GLOBAL validate_password_policy=0;
</pre>

###### confirm the password validation policy level.

<pre>
SHOW VARIABLES LIKE 'validate_password%';
</pre>

###### Assign password

<pre>
mysql> create user ‘youruser’@’localhost’ IDENTIFIED BY ‘thisisyourpassword’;
</pre>

###### revert to the ‘MEDIUM’ password policy (กลับคืนค่าของ policy)

<pre>
mysql> SET GLOBAL validate_password_policy=MEDIUM;
</pre>



