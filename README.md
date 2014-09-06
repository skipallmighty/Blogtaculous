Blogtaculous
=======
If you tried to get this working before and it wasn't working it was because I did not commit directories that are by default being gitignored. 

To install on a virtual machine of some sort (linux ubuntu flavored) and go into your virtual machine and start terminal. 

If you haven't already create a new user with `sudo useradd yourname`. Then install the website (copy it there) in /home/yourname/cake/... Remember where you put it because you will need to adjust the cake.conf in step 3. 

1.  Make sure you have a bridged network connection. Afterwhich you can get your ip address with `ifconfig`
2.  Install apache-mysql-php with `sudo apt-get install lamp-server^`.
3.  Setup your apache site by creating a apache config at `/etc/apache2/sites-available/cake.conf`. You can see my full `cake.conf` in this repo.
..*  Make sure in `/etc/apache2/apache2.conf` that where you see `<Directory />` if it says `Require all denied` change that to `Require all granted`. Should look like this. Apache 2 has extra security measures. 
    ```
    <Directory />
        Options FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
    ```

4.  Enable your conf file for apache to pull configurations from it with `sudo a2ensite cake.conf`.
5.  Restart apache `sudo service apache2 restart`. You can replace restart with reload for speed.
6.  Create your mysql database by logging in to mysql first. `mysql -uroot -p`.
7.  You can see all your databases (you should have none) `SHOW DATABASES;`
8.  Create your database `CREATE DATABASE cake;`
9.  Select your new database `USE cake;`
10.  Create your `post` table. `create table post ( id INT AUTO_INCREMENT PRIMARY KEY,  title varchar(50), author varchar(50), content varchar(500) );`
11.  If you have set your network to be bridged and you have your ip address from step 1 you can go to you host machine (your mac) and type in the ipaddress. For me it was `192.168.1.6`.. So you can get the list of posts `192.168.1.6/posts`. Add `.json` for JSON and add `.xml` for XML.
12.  If you have any permissions issues make sure that your `app/tmp` directory has good permission... do `sudo chmod -R 777 app/tmp`.
13.  If you want to you can change your `/private/etc/hosts` file to point to mysite.com or something like that. See video.
14.  Go have fun.
15.  Make your tmp directory writable with `sudo chmod -R 777 app/tmp`
16.  Make your cache directory writable with `sudo chmod -R 777 Cache /cake/lib/Cake/Config`
