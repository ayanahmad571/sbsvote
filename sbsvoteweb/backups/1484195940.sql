

CREATE TABLE `a_ms_views` (
  `log_id` int(255) NOT NULL AUTO_INCREMENT,
  `log_user_agent` varchar(698) NOT NULL,
  `log_dnt` varchar(698) NOT NULL,
  `log_hash` varchar(698) NOT NULL,
  `log_ip` varchar(698) NOT NULL,
  `log_valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;


INSERT INTO a_ms_views VALUES
("1","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0","1482131168","585786e05a223222dc50fd16c9e7d25ed64238ce8da09585786e05a22329d3d10d14ee06d8fd279ffda01e2ece","119.82.68.130","1"),
("2","Mozilla/5.0 (Linux; Android 6.0.1; SM-G920F Build/MMB29K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.91 Mobile Safari/537.36","1482670762","585fc2aa60e0161693e386c819cec8345b384d8bbd367585fc2aa60e01dd25362461101e90bce03ea87b81d8d4","64.233.173.136","1"),
("3","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0","1484194159","5877016f5d2b1d2d1bbf4efa3258233d032ae265ada8b5877016f5d2b1f18409d5985f1368a25216c99fd333f0","113.193.186.22","1"),
("4","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0","1484194407","58770267f3f56a5f6057e21ba1ce1de64c6b900b0866758770267f3f569145ad0c4e67ddc611c66d5e832b964d","125.63.65.50","1"),
("5","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0","1484194882","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","125.63.65.50","1"),
("6","Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0","1484195194","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","115.254.60.49","1");




CREATE TABLE `a_page_views` (
  `pg_id` int(255) NOT NULL AUTO_INCREMENT,
  `pg_name` varchar(698) NOT NULL,
  `pg_visit_hash` varchar(698) NOT NULL,
  `pg_dnt` varchar(698) NOT NULL,
  `pg_v_valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;


INSERT INTO a_page_views VALUES
("1","admin_archive.php","5857865c6152fbdf816f63a5211be0ab63a3ea5c7644f5857865c6152fc90c19120c5bd598176963ae263c48c4","1482131156","1"),
("2","home.php","585fc2aa60e0161693e386c819cec8345b384d8bbd367585fc2aa60e01dd25362461101e90bce03ea87b81d8d4","1482670799","1"),
("3","admin_stats.php","585fc2aa60e0161693e386c819cec8345b384d8bbd367585fc2aa60e01dd25362461101e90bce03ea87b81d8d4","1482670864","1"),
("4","home.php","5877016f5d2b1d2d1bbf4efa3258233d032ae265ada8b5877016f5d2b1f18409d5985f1368a25216c99fd333f0","1484194298","1"),
("5","home.php","58770267f3f56a5f6057e21ba1ce1de64c6b900b0866758770267f3f569145ad0c4e67ddc611c66d5e832b964d","1484194833","1"),
("6","home.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194891","1"),
("7","admin_archive.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194898","1"),
("8","admin_graph.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194904","1"),
("9","admin_archive.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194912","1"),
("10","admin_graph.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194938","1"),
("11","admin_parts.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194941","1"),
("12","admin_pos.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194945","1"),
("13","admin_pos.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194979","1"),
("14","admin_parts.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194982","1"),
("15","admin_parts.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484194993","1"),
("16","admin_parts.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195014","1"),
("17","home.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195016","1"),
("18","acomp.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195020","1"),
("19","admin_pos.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195026","1"),
("20","admin_pos.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195046","1"),
("21","admin_parts.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195048","1"),
("22","admin_parts.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195067","1"),
("23","admin_parts.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195099","1"),
("24","home.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195115","1"),
("25","acomp.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195118","1"),
("26","acomp.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195140","1"),
("27","admin_parts.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195149","1"),
("28","admin_parts.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195165","1"),
("29","acomp.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195172","1"),
("30","acomp.php","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1484195175","1"),
("31","admin_parts.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195194","1"),
("32","home.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195202","1"),
("33","admin_stats.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195206","1"),
("34","admin_stats.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195211","1"),
("35","admin_stats.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195214","1"),
("36","admin_stats.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195229","1"),
("37","admin_stats.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195236","1"),
("38","admin_graph.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195257","1"),
("39","admin_graph.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195260","1"),
("40","admin_mods.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195276","1"),
("41","admin_archive.php","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","1484195937","1");




CREATE TABLE `a_pg_click` (
  `href_id` int(255) NOT NULL AUTO_INCREMENT,
  `href_type` varchar(698) DEFAULT NULL,
  `href_linkedto` varchar(698) DEFAULT NULL,
  `href_page` varchar(698) DEFAULT NULL,
  `href_dnt` varchar(68) DEFAULT NULL,
  `href_hash` varchar(698) DEFAULT NULL,
  `href_valid` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`href_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;


INSERT INTO a_pg_click VALUES
("1","dropdown-toggle|button|","#","admin_archive.php","1482131167","5857865c6152fbdf816f63a5211be0ab63a3ea5c7644f5857865c6152fc90c19120c5bd598176963ae263c48c4","1"),
("2","navbar-toggle pull-left|button|button","","home.php","1482670823","585fc2aa60e0161693e386c819cec8345b384d8bbd367585fc2aa60e01dd25362461101e90bce03ea87b81d8d4","1"),
("3","|button|","admin_stats.php","home.php","1482670856","585fc2aa60e0161693e386c819cec8345b384d8bbd367585fc2aa60e01dd25362461101e90bce03ea87b81d8d4","1"),
("4","dropdown-toggle|button|","#","home.php","1484194406","5877016f5d2b1d2d1bbf4efa3258233d032ae265ada8b5877016f5d2b1f18409d5985f1368a25216c99fd333f0","1"),
("5","dropdown-toggle|button|","#","home.php","1484194881","58770267f3f56a5f6057e21ba1ce1de64c6b900b0866758770267f3f569145ad0c4e67ddc611c66d5e832b964d","1"),
("6","|button|","admin_pos.php","acomp.php","1484195026","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1");




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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO a_sv_user_logs VALUES
("1","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1","1484194979","muncircuit","e_sv_modules","from (lum_id = 1 | lum_name = Ayan | lum_username = 741 | lum_password = 0f7d832943f5690ba5e5f12453e9ec5e | lum_y = 2001 | lum_m = 07 | lum_d = 05 | lum_hash = de2f34890198c6f8fdfecb2472ec861c | lum_class = 10 | lum_section = A | lum_house = 2 | lum_ad = 1 | lum_ad_level = 10 | lum_valid = 1 | ) to INSERT INTO `c_master_positions`( `pos_title`, `pos_desc`, `pos_type`, `pos_class_valid`, `pos_added`, `pos_ad_rel_lum_id`, `pos_valid`) VALUES (
	\'President\',
	\'-\',
	\'2\',
	6,
	1484194979,
	1,
	1
	)","insert","1"),
("2","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1","1484194992","muncircuit","d_participants","from (lum_id = 1 | lum_name = Ayan | lum_username = 741 | lum_password = 0f7d832943f5690ba5e5f12453e9ec5e | lum_y = 2001 | lum_m = 07 | lum_d = 05 | lum_hash = de2f34890198c6f8fdfecb2472ec861c | lum_class = 10 | lum_section = A | lum_house = 2 | lum_ad = 1 | lum_ad_level = 10 | lum_valid = 1 | ) to INSERT INTO `d_participants`( `pa_name`, `pa_adm_no`, `pa_rel_ho_id`, `pa_rel_pos_id`) VALUES (
	\'Ayan\',
	\'741\',
	\'2\',
	1
	)","insert","1"),
("3","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1","1484195014","muncircuit","d_participants","from (lum_id = 1 | lum_name = Ayan | lum_username = 741 | lum_password = 0f7d832943f5690ba5e5f12453e9ec5e | lum_y = 2001 | lum_m = 07 | lum_d = 05 | lum_hash = de2f34890198c6f8fdfecb2472ec861c | lum_class = 10 | lum_section = A | lum_house = 2 | lum_ad = 1 | lum_ad_level = 10 | lum_valid = 1 | ) to INSERT INTO `d_participants`( `pa_name`, `pa_adm_no`, `pa_rel_ho_id`, `pa_rel_pos_id`) VALUES (
	\'JIgar\',
	\'1\',
	\'4\',
	1
	)","insert","1"),
("4","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1","1484195045","muncircuit","e_sv_modules","from (lum_id = 1 | lum_name = Ayan | lum_username = 741 | lum_password = 0f7d832943f5690ba5e5f12453e9ec5e | lum_y = 2001 | lum_m = 07 | lum_d = 05 | lum_hash = de2f34890198c6f8fdfecb2472ec861c | lum_class = 10 | lum_section = A | lum_house = 2 | lum_ad = 1 | lum_ad_level = 10 | lum_valid = 1 | ) to INSERT INTO `c_master_positions`( `pos_title`, `pos_desc`, `pos_type`, `pos_class_valid`, `pos_added`, `pos_ad_rel_lum_id`, `pos_valid`) VALUES (
	\'test2\',
	\'-\',
	\'1\',
	6,
	1484195045,
	1,
	1
	)","insert","1"),
("5","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1","1484195067","muncircuit","d_participants","from (lum_id = 1 | lum_name = Ayan | lum_username = 741 | lum_password = 0f7d832943f5690ba5e5f12453e9ec5e | lum_y = 2001 | lum_m = 07 | lum_d = 05 | lum_hash = de2f34890198c6f8fdfecb2472ec861c | lum_class = 10 | lum_section = A | lum_house = 2 | lum_ad = 1 | lum_ad_level = 10 | lum_valid = 1 | ) to INSERT INTO `d_participants`( `pa_name`, `pa_adm_no`, `pa_rel_ho_id`, `pa_rel_pos_id`) VALUES (
	\'Nihaal\',
	\'2\',
	\'2\',
	2
	)","insert","1"),
("6","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1","1484195099","muncircuit","d_participants","from (lum_id = 1 | lum_name = Ayan | lum_username = 741 | lum_password = 0f7d832943f5690ba5e5f12453e9ec5e | lum_y = 2001 | lum_m = 07 | lum_d = 05 | lum_hash = de2f34890198c6f8fdfecb2472ec861c | lum_class = 10 | lum_section = A | lum_house = 2 | lum_ad = 1 | lum_ad_level = 10 | lum_valid = 1 | ) to INSERT INTO `d_participants`( `pa_name`, `pa_adm_no`, `pa_rel_ho_id`, `pa_rel_pos_id`) VALUES (
	\'Bikram\',
	\'1222\',
	\'4\',
	1
	)","insert","1"),
("7","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","1","1484195165","muncircuit","d_participants","from (lum_id = 1 | lum_name = Ayan | lum_username = 741 | lum_password = 0f7d832943f5690ba5e5f12453e9ec5e | lum_y = 2001 | lum_m = 07 | lum_d = 05 | lum_hash = de2f34890198c6f8fdfecb2472ec861c | lum_class = 10 | lum_section = A | lum_house = 2 | lum_ad = 1 | lum_ad_level = 10 | lum_valid = 1 | ) to INSERT INTO `d_participants`( `pa_name`, `pa_adm_no`, `pa_rel_ho_id`, `pa_rel_pos_id`) VALUES (
	\'tesst4\',
	\'123\',
	\'4\',
	2
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO b_sm_logins VALUES
("1","Ayan","741","0f7d832943f5690ba5e5f12453e9ec5e","2001","07","05","de2f34890198c6f8fdfecb2472ec861c","10","A","2","1","10","1"),
("2","Bikramjit","1222","b594d56dcc42250aa884868f5218f95d","2000","12","27","07a4604081c88ea3567090074239b25d","10","A","4","0","0","1");




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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


INSERT INTO b_sv_auth_pass VALUES
("1","741","2001-07-05","Ayan","2","1","0","585fc2aa60e0161693e386c819cec8345b384d8bbd367585fc2aa60e01dd25362461101e90bce03ea87b81d8d4","171.60.116.243","1482670799","10 A"),
("2","741","2001-07-05","Ayan","2","1","0","5877016f5d2b1d2d1bbf4efa3258233d032ae265ada8b5877016f5d2b1f18409d5985f1368a25216c99fd333f0","125.63.65.50","1484194297","10 A"),
("3","1222","2000-12-27","Bikramjit","4 ","1","0","58770267f3f56a5f6057e21ba1ce1de64c6b900b0866758770267f3f569145ad0c4e67ddc611c66d5e832b964d","125.63.65.50","1484194833","10 A"),
("4","741","2001-07-05","Ayan","2","1","0","5877044287fa4b80f6c5634002637a1ace998026aa4565877044287fa45d836e1f8cf123dfea1463011373a4dc","125.63.65.50","1484194891","10 A"),
("5","741","2001-07-05","Ayan","2","1","0","5877057ad517be07ee5340cbd0bc657006dbcda50c86e5877057ad517b061f65df4ced95e522c694d9a0abb0cf","119.82.68.130","1484195202","10 A");




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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


INSERT INTO c_master_positions VALUES
("1","President","-","2","6","1484194979","1","1"),
("2","test2","-","1","6","1484195045","1","1");




CREATE TABLE `d_participants` (
  `pa_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pa_name` varchar(698) NOT NULL DEFAULT '',
  `pa_adm_no` varchar(45) NOT NULL DEFAULT '' COMMENT 'admission no',
  `pa_rel_ho_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'House',
  `pa_rel_pos_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'Postion standinfg for',
  `pa_valid` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`pa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


INSERT INTO d_participants VALUES
("1","Ayan","741","2","1","1"),
("2","JIgar","1","4","1","1"),
("3","Nihaal","2","2","2","1"),
("4","Bikram","1222","4","1","1"),
("5","tesst4","123","4","2","1");




CREATE TABLE `d_vote_bank` (
  `vb_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vb_rel_adm_no` varchar(45) NOT NULL DEFAULT '',
  `vb_rel_pos_id` int(10) unsigned NOT NULL DEFAULT '0',
  `vb_rel_pa_id` int(10) unsigned NOT NULL DEFAULT '0',
  `vb_ip` varchar(698) NOT NULL DEFAULT '',
  `vb_time` varchar(698) NOT NULL DEFAULT '',
  `vb_valid` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`vb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


INSERT INTO d_vote_bank VALUES
("1","741","1","4","119.82.68.130","1484195139","1"),
("2","741","2","3","115.254.60.49","1484195175","1");


