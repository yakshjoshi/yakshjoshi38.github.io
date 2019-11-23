 drop table  if exists planets;
 drop table if exists users;


create table planets(
planet_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
planet_name VARCHAR(20) NOT NULL,
planet_habitat varchar(5) NOT NULL,
planet_link varchar(20) NOT NULL
);

create table users(
user_id  INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_name VARCHAR(20) NOT NULL,
user_b_date date not null,
user_gender varchar(10) not null,
user_email varchar(50) not null
);



INSERT INTO planets (planet_name, planet_habitat,planet_link)VALUES ('Mercury', 'NO', './mercury.php');
INSERT INTO planets (planet_name, planet_habitat,planet_link)VALUES ('Venus', 'NO', './venus.php');
INSERT INTO planets (planet_name, planet_habitat,planet_link)VALUES ('Earth', 'YES', './earth.php');
INSERT INTO planets (planet_name, planet_habitat,planet_link)VALUES ('Mars', 'NO', './mars.php');
INSERT INTO planets (planet_name, planet_habitat,planet_link)VALUES ('Jupiter', 'NO', './jupiter.php');
INSERT INTO planets (planet_name, planet_habitat,planet_link)VALUES ('Saturn', 'NO', './saturn.php');
INSERT INTO planets (planet_name, planet_habitat,planet_link)VALUES ('Uranus', 'NO', './uranus.php');
INSERT INTO planets (planet_name, planet_habitat,planet_link)VALUES ('Neptune', 'NO', './neptune.php');


INSERT INTO users (user_name,user_b_date,user_gender,user_email) VALUES ('Yaksh', '1998-08-03' , 'Male' , 'yakshjoshi38@gmail.com');

