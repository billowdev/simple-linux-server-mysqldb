# Linux Server simple login system with mysql
##  Operating System Subject 
### [Ubuntu Server + apache2](https://www.youtube.com/watch?v=P9_TxAYZ20E&t=1084s)
### [ทดลองเซิร์ฟเวอร์ กับระบบล็อคอิน phpmyadmin - mysql ใน ubunt userver](https://www.youtube.com/watch?v=OFN-RVQfcuQ&t=212s)

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

### install apache2 (ทำการติดตั้ง apache2)
```
apt install apache2 -y
```

### install php
<pre>
apt install php php-cgi libapache2-mod-php php-common php-pear php-mbstring

a2enconf php7.4-cgi

systemctl reload apache2.service

systemctl restart apache2
</pre>

```
ufw allow 'Apache'
```
#### make sure the service is running
```
systemctl status apache2
```
#### Check IP addresses
```
hostname -I
```

#### ลองพิมพ์ ip ที่ได้จากคำสั่ง hostname -I ใน url ของ browser
<pre>
192.168.xx.xxx
</pre>
##### ถ้าปรากฎหน้า apache แสดงว่าใช้งานได้ครับ

### install mysql (ทำการติดตั้ง mysql)
```
apt install mysql-server -y
```

#### check mysql server is running
```
systemctl status mysql
```

#### security-related operations.
```
mysql_secure_installation
```

#### 1. yes : y
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/1-mysql-secure.png"
     alt="Apache2"
     style="width=400px" />
#### 2. select low : 0
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/2-mysql-secure.png"
     alt="Apache2"
     style="width=400px" />
#### 3. after you enter password then : y
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/3-mysql-secure.png"
     alt="Apache2"
     style="width=400px" />

#### 4. remove anonymous user : y
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/4-mysql-secure.png"
     alt="Apache2"
     style="width=400px" />
#### 5. disallow root remote : y
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/5-mysql-secure.png"
     alt="Apache2"
     style="width=400px" />
#### 6. remove test db: y
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/6-mysql-secure.png"
     alt="Apache2"
     style="width=400px" />

#### 7. reload db: y
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/7-mysql-secure.png"
     alt="Apache2"
     style="width=400px" />


### install phpmyadmin
```
apt install phpmyadmin -y
```

#### 1. Select Apache2
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/1-apache2.png"
     alt="Apache2"
     style="width=400px" />

#### 2.Select yes
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/2-yes.png"
     alt="Select-yes"
     style="width=400px" />

#### 3.type your password for phpmyadmin (ในที่นี้จะพิมพ์ codetopanda123456789 ซึ่งยาวพอตัว เพราะถ้าพิมพ์สั้นไปมันจะ Error ซึ่งต้องแก้ไข policy จะมีวิธีบอกอยู่ด้านล่างครับ : ) )
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/3-password-ok.png"
     alt="enter-password"
     style="width=400px" />


#### 4. confirm password (พิมพ์รหัสผ่านอีกครั้งเพื่อ confirm)
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/4-password-confirm-ok.png"
     alt="confirm-password"
     style="width=400px" />

#### 5. if not error it finished (ถ้าไม่เกิดข้อผิดพลาดใดๆ ถือว่าเสร็จสิ้น ถ้าเกิดข้อผิดพลาดลอง อ่านโค้ด Error แล้วลอง เลื่อนลงไปด้านล่าง ถ้าข้อผิดพลาดนั้นไม่ได้มี ใน tutorialนี้ ลอง Search Google เพื่อแก้ดูครับ น่าจะไม่ยากเกินความสามารถครับ :) )
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/5-finished.png"
     alt="result"
     style="width=400px" />

### If error 1819 (HY000) scroll down to check (ถ้า Error เลื่อนลงไปดู ข้างล่างครับ)


### จากนั้นเราจะทำการใช้ mysql
#### 6. use mysql
<pre>
mysql
</pre>

#### Exit mysql
<pre>
exit
</pre>

#### 7. เข้าไปหน้า phpmyadmin

<pre>
192.168.xx.xxx/phpmyadmin
</pre>

### 8. login phpmyadmin (เข้าสู่ระบบ phpmyadmin)

<pre>
id: phpmyadmin
pass: yourpassword
</pre>

-----------------------------------------------------------
### Fix phpmyadmin not found (วิธีแก้หากหา phpmyadmin ไม่เจอ)
#####  [ref : how-to-solve-the-phpmyadmin](https://askubuntu.com/questions/387062/how-to-solve-the-phpmyadmin-not-found-issue-after-upgrading-php-and-apache)

```
ln -s /usr/share/phpmyadmin /var/www/html
```
-----------------------------------------------------------

### ทำการสร้าง database

#### use mysql

```
mysql -p -u root
```

#### CREATE your Database

```
CREATE database mydatabase;
```

#### USE your DATABASE

```
USE mydatabase;
```

### CREATE TABLE

```
CREATE TABLE `member` (
  `UserID` int(3) unsigned zerofill NOT NULL auto_increment,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL default 'USER',
  PRIMARY KEY  (`UserID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=MyISAM  AUTO_INCREMENT=3;
```

#### INSERT USER AND ADMIN DATA

```
INSERT INTO `member` VALUES (004, 'root', 'root', 'Mr Root Ubuntu', 'ADMIN');
INSERT INTO `member` VALUES (005, 'codetopanda', 'ctp123', 'MR Codetopand Portdee', 'USER');
```

#### Exit mysql

<pre>
exit
</pre>

-----------------------------------------------------------

### Preparing site change directory to /var/www/html
###### เปลี่ยนโฟล์เดอร์ไปที่ path /var/www/html

```
cd /var/www/html
```

#### check git เพื่อความชัวร์ทำการเช็คว่า linux ท่านใช้ gitได้ไหม 

<pre>
git (if git not install ) then
apt install git
</pre>

#### Clone git in /var/www/html |  Move all file to /var/www/html | remove simple-linux-server-mysqldb Folder | 

```
git clone https://github.com/lacakp/simple-linux-server-mysqldb.git; mv -v ./simple-linux-server-mysqldb/* ./ ; rm -r simple-linux-server-mysqldb;
```

<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/clone.png"
     alt="Clone"
     style="width=400px" />

#### Check file (ทำการเช็คไฟล์ในโฟลเดอร์ )

<pre>
ls -al
</pre>

<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/ls-al.png"
     alt="ls-al"
     style="width=400px" />
     
#### nano to config database ( เข้าไปแก้ไข เปลี่ยน ip-user-password-database)
#### ใน tutorial นี้ได้ตั้งไว้คือ (localhost:3306, myuser, root1234, mydatabase) MySQL default port is 3306

```
nano connectdb.php
```

<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/nanoconnectdb.png"
     alt="login-page"
     style="width=400px" />


#### วิธี save
<pre>
1. CTRL + x
2. y
3. Enter
</pre>


### เข้าไปใน 192.168.xx.xxx/login.php
<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/loginphp.png"
     alt="login-page"
     style="width=400px" />



-----------------------------------------------------------

### FIX phpmyadmin USER can't login ( แก้ ไม่สามารถเข้า phpmyadmin ได้)

###### mysql

```
mysql -p -u root
```

###### 2 Create USER And assign password

```
CREATE USER 'youruser'@'%' IDENTIFIED BY 'thispass';
```

###### 3 Add root to youruser

```
GRANT ALL PRIVILEGES ON *.* TO 'youruser'@'%' WITH GRANT OPTION;
```

-----------------------------------------------------------

### Fix  ERROR 1819 (HY000) (แก้ Error policy password เราจะเปลี่ยนให้มัน low)

#### enable the validate_password plugin

```
SELECT plugin_name, plugin_status FROM information_schema.plugins WHERE plugin_name LIKE 'validate%';
install plugin validate_password SONAME 'validate_password.so';
```

#### check plugin is activated?

```
SELECT plugin_name, plugin_status FROM information_schema.plugins WHERE plugin_name LIKE 'validate%';
```


#### set a lower password validation policy

```
SET GLOBAL validate_password_policy=LOW;
SET GLOBAL validate_password.policy=LOW;
```

#### confirm the password validation policy level.

```
SHOW VARIABLES LIKE 'validate_password%';
```

#### Create User
```
create user ‘myuser’@’%’ IDENTIFIED BY ‘root1234’;
GRANT ALL PRIVILEGES ON *.* TO 'myuser'@'%' WITH GRANT OPTION;
SHOW GRANTS FOR myuser;
FLUSH PRIVILEGES;
```

### revert to the ‘MEDIUM’ password policy (ในกรณีอยากกลับคืนค่าของ policy กลับปเป็น MEDIUM หรือ Strong)

```
SET GLOBAL validate_password_policy=MEDIUM;
```





# preview 

<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/result-1.png"
     alt="Apache2"
     style="width=400px" />

<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/result-2.png"
     alt="Apache2"
     style="width=400px" />


<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/result-3.png"
     alt="Apache2"
     style="width=400px" />

<img src="https://raw.githubusercontent.com/lacakp/simple-linux-server-mysqldb/site/images/result-4.png"
     alt="Apache2"
     style="width=400px" />
