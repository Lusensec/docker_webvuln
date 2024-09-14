********************************    1、数据库生成     *************************************************************************
请在mysql数据库中手动生成相关数据库名：bwapp_bak

********************************    2、数据库表生成  （请手动在bwapp_bak数据库中生成表）*************************************************************************
 create table blog
  (id int(10) NOT NULL ,
  owner varchar(100) DEFAULT NULL,
  entry varchar(500) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (id)
)

CREATE TABLE heroes (
  id int(10) NOT NULL ,
  login varchar(100) DEFAULT NULL,
  password varchar(100) DEFAULT NULL,
  secret varchar(100) DEFAULT NULL,
  PRIMARY KEY (id)
)

CREATE TABLE movies(
  id int(10) NOT NULL ,
  title varchar(100) DEFAULT NULL,
  release_year varchar(100) DEFAULT NULL,
  genre varchar(100) DEFAULT NULL,
  main_character varchar(100) DEFAULT NULL,
  imdb varchar(100) DEFAULT NULL,
  PRIMARY KEY (id)
)

CREATE TABLE users (
  id int(10) NOT NULL ,
  login varchar(100) DEFAULT NULL,
  password varchar(100) DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  secret varchar(100) DEFAULT NULL,
  activation_code varchar(100) DEFAULT NULL,
  activated tinyint(1) DEFAULT '0',
  reset_code varchar(100) DEFAULT NULL,
  admin tinyint(1) DEFAULT '0',
  PRIMARY KEY (id)
)

********************************    3、数据生成     *************************************************************************
INSERT INTO heroes VALUES(1,'neo','trinity','Oh why didn''t I took that BLACK pill?');
INSERT INTO heroes VALUES(2,'alice','loveZombies','There''s a cure!');
INSERT INTO heroes VALUES(3,'thor','Asgard','Oh, no... this is Earth... isn''t it?');
INSERT INTO heroes VALUES(4,'wolverine','Log@N','What''s a Magneto?');
INSERT INTO heroes VALUES(5,'johnny','m3ph1st0ph3l3s','I''m the Ghost Rider!');
INSERT INTO heroes VALUES(6,'seline','m00n','It wasn''t the Lycans. It was you.');

INSERT INTO movies VALUES(1,'G.I. Joe: Retaliation','2013','action','Cobra Commander','tt1583421');
INSERT INTO movies VALUES(2,'Iron Man','2008','action','Tony Stark','tt0371746');
INSERT INTO movies VALUES(3,'Man of Steel','2013','action','Clark Kent','tt0770828');
INSERT INTO movies VALUES(4,'Terminator Salvation','2009','sci-fi','John Connor','tt0438488');
INSERT INTO movies VALUES(5,'The Amazing Spider-Man','2012','action','Peter Parker','tt0948470');
INSERT INTO movies VALUES(6,'The Cabin in the Woods','2011','horror','Some zombies','tt1259521');
INSERT INTO movies VALUES(7,'The Dark Knight Rises','2012','action','Bruce Wayne','tt1345836');
INSERT INTO movies VALUES(8,'The Incredible Hulk','2008','action','Bruce Banner','tt0800080');
INSERT INTO movies VALUES(9,'World War Z','2013','horror','Gerry Lane','tt0816711');


INSERT INTO users VALUES(1,'A.I.M.','6885858486f31043e5839c735d99457f045affd0','bwapp-aim@mailinator.com','A.I.M. or Authentication Is Missing',NULL,1,NULL,1);
INSERT INTO users VALUES(2,'bee','6885858486f31043e5839c735d99457f045affd0','bwapp-bee@mailinator.com','Any bugs?',NULL,1,NULL,0);

