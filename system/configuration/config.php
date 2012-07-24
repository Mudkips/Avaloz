<?php 

//The url to your website;
$config['website']['link'] = 'http://localhost/redo';
//The name of your hotel;
$config['website']['name'] = 'Habbo';
//The front page thingy;
$config['website']['desc'] = 'make friends, play games, and express yourself';

//Mysql hostname, usually localhost;
$config['mysql']['hostname'] = 'localhost';
//Mysql username, usually root;
$config['mysql']['username'] = 'root';
//Mysql password, the one you set;
$config['mysql']['password'] = 'tehxenous';
//Mysql database, you made this and inserted tables.
$config['mysql']['database'] = 'phoenix';
//Mysql port, the port your mysql service is running on;
$config['mysql']['portnumb'] = 3306;

//Store avatars locally for easier loading?
$config['figures']['cache'] = true;
//If so what hotel are we getting them from?
$config['figures']['hotel'] = 'http://habbo.nl';

//Shall we cache pages?
$config['cache']['caching'] = false;
//If so how long shall we cache them for?
$config['cache']['lifetime'] = 3600;

//Hash for passwords;
$config['hashing']['type'] = 'sha1';
//Salt for passwords (extra security);
$config['hashing']['salt'] = '4580934rj3@#$In23i4n23$I234i409rj00f3';

?>