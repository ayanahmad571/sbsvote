

CREATE TABLE `a_ms_views` (
  `log_id` int(255) NOT NULL AUTO_INCREMENT,
  `log_user_agent` varchar(698) NOT NULL,
  `log_dnt` varchar(698) NOT NULL,
  `log_hash` varchar(698) NOT NULL,
  `log_ip` varchar(698) NOT NULL,
  `log_valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO a_ms_views VALUES
("1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0","1479561529","58305139e8ea385cc7e5d746e1a6555d4ff6e2fcc007558305139e8eca692158a91b52d6f57006daa21012f2d4","fe80::987f:da14:9184:381","1");




CREATE TABLE `a_page_views` (
  `pg_id` int(255) NOT NULL AUTO_INCREMENT,
  `pg_name` varchar(698) NOT NULL,
  `pg_visit_hash` varchar(698) NOT NULL,
  `pg_dnt` varchar(698) NOT NULL,
  `pg_v_valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


INSERT INTO a_page_views VALUES
("1","admin_archive.php","583023f3802ff87234ef586066996d3ebcebca4eac5af583023f38034a6ab684a391319d29b488a8555cdc929e","1479561525","1"),
("2","home.php","58305139e8ea385cc7e5d746e1a6555d4ff6e2fcc007558305139e8eca692158a91b52d6f57006daa21012f2d4","1479561536","1"),
("3","home.php","58305139e8ea385cc7e5d746e1a6555d4ff6e2fcc007558305139e8eca692158a91b52d6f57006daa21012f2d4","1479561631","1"),
("4","admin_archive.php","58305139e8ea385cc7e5d746e1a6555d4ff6e2fcc007558305139e8eca692158a91b52d6f57006daa21012f2d4","1479561633","1");




CREATE TABLE `a_pg_click` (
  `href_id` int(255) NOT NULL AUTO_INCREMENT,
  `href_type` varchar(698) DEFAULT NULL,
  `href_linkedto` varchar(698) DEFAULT NULL,
  `href_page` varchar(698) DEFAULT NULL,
  `href_dnt` varchar(68) DEFAULT NULL,
  `href_hash` varchar(698) DEFAULT NULL,
  `href_valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`href_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO a_pg_click VALUES
("1","|button|","admin_archive.php","home.php","1479561633","58305139e8ea385cc7e5d746e1a6555d4ff6e2fcc007558305139e8eca692158a91b52d6f57006daa21012f2d4","1"),
("2","btn btn-block btn-lg btn-success|button|submit","","admin_archive.php","1479561718","58305139e8ea385cc7e5d746e1a6555d4ff6e2fcc007558305139e8eca692158a91b52d6f57006daa21012f2d4","1");




CREATE TABLE `a_sv_user_logs` (
  ` ul_id` int(255) NOT NULL AUTO_INCREMENT,
  `ul_session_hash` varchar(700) NOT NULL,
  `ul_rel_usr_id` int(255) NOT NULL,
  `ul_ins_dnt` varchar(698) NOT NULL,
  `ul_database` varchar(700) NOT NULL DEFAULT 'muncircuit',
  `ul_table` varchar(700) NOT NULL,
  `ul_content` text NOT NULL,
  `ul_querytype` varchar(700) NOT NULL,
  `ul_valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (` ul_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO a_sv_user_logs VALUES
("1","583023f3802ff87234ef586066996d3ebcebca4eac5af583023f38034a6ab684a391319d29b488a8555cdc929e","1","1479561525","muncircuit","e_sv_modules","from (lum_id = 1 | lum_name = Ayan | lum_username = 741 | lum_password = 0f7d832943f5690ba5e5f12453e9ec5e | lum_y = 2001 | lum_m = 07 | lum_d = 05 | lum_hash = de2f34890198c6f8fdfecb2472ec861c | lum_class = 10 | lum_section = A | lum_house = 2 | lum_ad = 1 | lum_ad_level = 10 | lum_valid = 1 | ) to INSERT INTO `e_sv_modules`(`mo_name`, `mo_href`, `mo_icon`, `mo_ifadmin`, `mo_ifnoadmin`, `mo_if_no_log_in`, `mo_if_log_in`,`mo_min_ad_level` , `mo_sub_mod`, `mo_valid`) VALUES (
	\'\',
	\'\',
	\'\',
	,
	,
	,
	,
	,
	,
	
	)","insert","1");




CREATE TABLE `b_sm_logins` (
  `lum_id` int(255) NOT NULL AUTO_INCREMENT,
  `lum_name` varchar(698) NOT NULL,
  `lum_username` varchar(698) NOT NULL,
  `lum_password` varchar(698) NOT NULL,
  `lum_y` varchar(10) NOT NULL,
  `lum_m` varchar(10) NOT NULL,
  `lum_d` varchar(10) NOT NULL,
  `lum_hash` varchar(698) NOT NULL,
  `lum_class` varchar(698) NOT NULL,
  `lum_section` varchar(10) NOT NULL,
  `lum_house` int(5) NOT NULL,
  `lum_ad` int(3) NOT NULL DEFAULT '0',
  `lum_ad_level` int(3) NOT NULL DEFAULT '0',
  `lum_valid` int(2) NOT NULL DEFAULT '1',
  UNIQUE KEY `lum_id` (`lum_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO b_sm_logins VALUES
("1","Ayan","741","0f7d832943f5690ba5e5f12453e9ec5e","2001","07","05","de2f34890198c6f8fdfecb2472ec861c","10","A","2","1","10","1");




CREATE TABLE `b_sv_auth_fail` (
  `af_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `af_adm_no` varchar(45) NOT NULL DEFAULT '',
  `af_dob` varchar(69) NOT NULL DEFAULT '',
  `af_sess_hash` varchar(698) NOT NULL DEFAULT '',
  `af_ip` varchar(450) NOT NULL DEFAULT '',
  `af_dnt` varchar(96) NOT NULL DEFAULT '',
  `af_server_dump` text,
  PRIMARY KEY (`af_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






CREATE TABLE `b_sv_auth_pass` (
  `ap_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ap_admno` varchar(45) NOT NULL DEFAULT '',
  `ap_dob` varchar(698) NOT NULL DEFAULT '',
  `ap_name` varchar(698) NOT NULL DEFAULT '',
  `ap_house` varchar(698) NOT NULL DEFAULT '',
  `ap_lin` int(10) unsigned NOT NULL DEFAULT '1',
  `ap_lot` int(10) unsigned NOT NULL DEFAULT '0',
  `ap_sess_hash` varchar(405) NOT NULL DEFAULT '',
  `ap_ip` varchar(450) NOT NULL DEFAULT '',
  `ap_dnt` varchar(698) NOT NULL DEFAULT '',
  `ap_class` varchar(698) NOT NULL DEFAULT '',
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO b_sv_auth_pass VALUES
("1","741","2001-07-05","Ayan","2 ","1","0","58305139e8ea385cc7e5d746e1a6555d4ff6e2fcc007558305139e8eca692158a91b52d6f57006daa21012f2d4","fe80::987f:da14:9184:381","1479561536","10 A");




CREATE TABLE `c_master_positions` (
  `pos_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pos_title` varchar(698) NOT NULL DEFAULT '' COMMENT 'visible',
  `pos_desc` text COMMENT 'for me',
  `pos_type` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'from table c_master_vote_tpes',
  `pos_class_valid` varchar(698) NOT NULL DEFAULT '' COMMENT 'list',
  `pos_added` varchar(698) NOT NULL DEFAULT '',
  `pos_ad_rel_lum_id` int(10) unsigned NOT NULL DEFAULT '0',
  `pos_valid` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






CREATE TABLE `d_participants` (
  `pa_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pa_name` varchar(698) NOT NULL DEFAULT '',
  `pa_adm_no` varchar(45) NOT NULL DEFAULT '' COMMENT 'admission no',
  `pa_rel_ho_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'House',
  `pa_rel_pos_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Postion standinfg for',
  `pa_valid` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`pa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






CREATE TABLE `d_vote_bank` (
  `vb_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vb_rel_adm_no` varchar(45) NOT NULL DEFAULT '',
  `vb_rel_pos_id` int(10) unsigned NOT NULL DEFAULT '0',
  `vb_rel_pa_id` int(10) unsigned NOT NULL DEFAULT '0',
  `vb_ip` varchar(698) NOT NULL DEFAULT '',
  `vb_time` varchar(698) NOT NULL DEFAULT '',
  `vb_valid` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`vb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




