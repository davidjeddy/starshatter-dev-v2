#
# phpBB Backup Script
# Dump of tables for SSDv2Forum
#
# DATE : 25-05-2003 14:52:42 GMT
#
#
# TABLE: phpBB_auth_access
#
DROP TABLE IF EXISTS phpBB_auth_access;
CREATE TABLE phpBB_auth_access(
	group_id mediumint(8) NOT NULL,
	forum_id smallint(5) unsigned NOT NULL,
	auth_view tinyint(1) NOT NULL,
	auth_read tinyint(1) NOT NULL,
	auth_post tinyint(1) NOT NULL,
	auth_reply tinyint(1) NOT NULL,
	auth_edit tinyint(1) NOT NULL,
	auth_delete tinyint(1) NOT NULL,
	auth_sticky tinyint(1) NOT NULL,
	auth_announce tinyint(1) NOT NULL,
	auth_vote tinyint(1) NOT NULL,
	auth_pollcreate tinyint(1) NOT NULL,
	auth_attachments tinyint(1) NOT NULL,
	auth_mod tinyint(1) NOT NULL, 
	KEY group_id (group_id), 
	KEY forum_id (forum_id)
);

#
# Table Data for phpBB_auth_access
#

INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('4', '9', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '7', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '8', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '9', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '3', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '10', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '11', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '5', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '12', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '6', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '13', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '14', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '16', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
INSERT INTO phpBB_auth_access (group_id, forum_id, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, auth_mod) VALUES('2', '15', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1');
#
# TABLE: phpBB_banlist
#
DROP TABLE IF EXISTS phpBB_banlist;
CREATE TABLE phpBB_banlist(
	ban_id mediumint(8) unsigned NOT NULL auto_increment,
	ban_userid mediumint(8) NOT NULL,
	ban_ip varchar(8) NOT NULL,
	ban_email varchar(255), 
	PRIMARY KEY (ban_id), 
	KEY ban_ip_user_id (ban_ip, ban_userid)
);
#
# TABLE: phpBB_categories
#
DROP TABLE IF EXISTS phpBB_categories;
CREATE TABLE phpBB_categories(
	cat_id mediumint(8) unsigned NOT NULL auto_increment,
	cat_title varchar(100),
	cat_order mediumint(8) unsigned NOT NULL, 
	PRIMARY KEY (cat_id), 
	KEY cat_order (cat_order)
);

#
# Table Data for phpBB_categories
#

INSERT INTO phpBB_categories (cat_id, cat_title, cat_order) VALUES('2', 'SSD General', '10');
INSERT INTO phpBB_categories (cat_id, cat_title, cat_order) VALUES('3', 'MODing', '20');
INSERT INTO phpBB_categories (cat_id, cat_title, cat_order) VALUES('4', 'Test', '50');
INSERT INTO phpBB_categories (cat_id, cat_title, cat_order) VALUES('5', 'OT', '40');
INSERT INTO phpBB_categories (cat_id, cat_title, cat_order) VALUES('6', 'Convertions', '30');
#
# TABLE: phpBB_config
#
DROP TABLE IF EXISTS phpBB_config;
CREATE TABLE phpBB_config(
	config_name varchar(255) NOT NULL,
	config_value varchar(255) NOT NULL, 
	PRIMARY KEY (config_name)
);

#
# Table Data for phpBB_config
#

INSERT INTO phpBB_config (config_name, config_value) VALUES('config_id', '1');
INSERT INTO phpBB_config (config_name, config_value) VALUES('board_disable', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('sitename', '-=SSDv2=-');
INSERT INTO phpBB_config (config_name, config_value) VALUES('site_desc', 'StarShatter Dev.');
INSERT INTO phpBB_config (config_name, config_value) VALUES('cookie_name', 'ssdv2-forum');
INSERT INTO phpBB_config (config_name, config_value) VALUES('cookie_path', '/');
INSERT INTO phpBB_config (config_name, config_value) VALUES('cookie_domain', '');
INSERT INTO phpBB_config (config_name, config_value) VALUES('cookie_secure', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('session_length', '3600');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_html', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_html_tags', 'b,i,u,pre');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_bbcode', '1');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_smilies', '1');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_sig', '1');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_namechange', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_theme_create', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_avatar_local', '1');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_avatar_remote', '1');
INSERT INTO phpBB_config (config_name, config_value) VALUES('allow_avatar_upload', '1');
INSERT INTO phpBB_config (config_name, config_value) VALUES('override_user_style', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('posts_per_page', '15');
INSERT INTO phpBB_config (config_name, config_value) VALUES('topics_per_page', '50');
INSERT INTO phpBB_config (config_name, config_value) VALUES('hot_threshold', '25');
INSERT INTO phpBB_config (config_name, config_value) VALUES('max_poll_options', '10');
INSERT INTO phpBB_config (config_name, config_value) VALUES('max_sig_chars', '255');
INSERT INTO phpBB_config (config_name, config_value) VALUES('max_inbox_privmsgs', '50');
INSERT INTO phpBB_config (config_name, config_value) VALUES('max_sentbox_privmsgs', '25');
INSERT INTO phpBB_config (config_name, config_value) VALUES('max_savebox_privmsgs', '50');
INSERT INTO phpBB_config (config_name, config_value) VALUES('board_email_sig', 'Thanks, The Management');
INSERT INTO phpBB_config (config_name, config_value) VALUES('board_email', 'starshatterdev@hotmail.com');
INSERT INTO phpBB_config (config_name, config_value) VALUES('smtp_delivery', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('smtp_host', '');
INSERT INTO phpBB_config (config_name, config_value) VALUES('smtp_username', '');
INSERT INTO phpBB_config (config_name, config_value) VALUES('smtp_password', '');
INSERT INTO phpBB_config (config_name, config_value) VALUES('require_activation', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('flood_interval', '15');
INSERT INTO phpBB_config (config_name, config_value) VALUES('board_email_form', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('avatar_filesize', '12288');
INSERT INTO phpBB_config (config_name, config_value) VALUES('avatar_max_width', '128');
INSERT INTO phpBB_config (config_name, config_value) VALUES('avatar_max_height', '128');
INSERT INTO phpBB_config (config_name, config_value) VALUES('avatar_path', 'images/avatars');
INSERT INTO phpBB_config (config_name, config_value) VALUES('avatar_gallery_path', 'images/avatars/gallery');
INSERT INTO phpBB_config (config_name, config_value) VALUES('smilies_path', 'images/smiles');
INSERT INTO phpBB_config (config_name, config_value) VALUES('default_style', '6');
INSERT INTO phpBB_config (config_name, config_value) VALUES('default_dateformat', 'D M d, Y g:i a');
INSERT INTO phpBB_config (config_name, config_value) VALUES('board_timezone', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('prune_enable', '1');
INSERT INTO phpBB_config (config_name, config_value) VALUES('privmsg_disable', '1');
INSERT INTO phpBB_config (config_name, config_value) VALUES('gzip_compress', '0');
INSERT INTO phpBB_config (config_name, config_value) VALUES('coppa_fax', '');
INSERT INTO phpBB_config (config_name, config_value) VALUES('coppa_mail', '');
INSERT INTO phpBB_config (config_name, config_value) VALUES('record_online_users', '2');
INSERT INTO phpBB_config (config_name, config_value) VALUES('record_online_date', '1049031604');
INSERT INTO phpBB_config (config_name, config_value) VALUES('server_name', 'ssd.servehttp.com');
INSERT INTO phpBB_config (config_name, config_value) VALUES('server_port', '80');
INSERT INTO phpBB_config (config_name, config_value) VALUES('script_path', '/ssdv2/forums/');
INSERT INTO phpBB_config (config_name, config_value) VALUES('version', '.0.4');
INSERT INTO phpBB_config (config_name, config_value) VALUES('board_startdate', '1049031528');
INSERT INTO phpBB_config (config_name, config_value) VALUES('default_lang', 'english');
#
# TABLE: phpBB_disallow
#
DROP TABLE IF EXISTS phpBB_disallow;
CREATE TABLE phpBB_disallow(
	disallow_id mediumint(8) unsigned NOT NULL auto_increment,
	disallow_username varchar(25) NOT NULL, 
	PRIMARY KEY (disallow_id)
);

#
# Table Data for phpBB_disallow
#

INSERT INTO phpBB_disallow (disallow_id, disallow_username) VALUES('1', 'Admin');
INSERT INTO phpBB_disallow (disallow_id, disallow_username) VALUES('2', 'Pheagey');
INSERT INTO phpBB_disallow (disallow_id, disallow_username) VALUES('3', 'milo');
INSERT INTO phpBB_disallow (disallow_id, disallow_username) VALUES('4', 'God');
INSERT INTO phpBB_disallow (disallow_id, disallow_username) VALUES('5', 'Satan');
INSERT INTO phpBB_disallow (disallow_id, disallow_username) VALUES('6', 'Eric Harris');
#
# TABLE: phpBB_forums
#
DROP TABLE IF EXISTS phpBB_forums;
CREATE TABLE phpBB_forums(
	forum_id smallint(5) unsigned NOT NULL,
	cat_id mediumint(8) unsigned NOT NULL,
	forum_name varchar(150),
	forum_desc text,
	forum_status tinyint(4) NOT NULL,
	forum_order mediumint(8) unsigned DEFAULT '1' NOT NULL,
	forum_posts mediumint(8) unsigned NOT NULL,
	forum_topics mediumint(8) unsigned NOT NULL,
	forum_last_post_id mediumint(8) unsigned NOT NULL,
	prune_next int(11),
	prune_enable tinyint(1) NOT NULL,
	auth_view tinyint(2) NOT NULL,
	auth_read tinyint(2) NOT NULL,
	auth_post tinyint(2) NOT NULL,
	auth_reply tinyint(2) NOT NULL,
	auth_edit tinyint(2) NOT NULL,
	auth_delete tinyint(2) NOT NULL,
	auth_sticky tinyint(2) NOT NULL,
	auth_announce tinyint(2) NOT NULL,
	auth_vote tinyint(2) NOT NULL,
	auth_pollcreate tinyint(2) NOT NULL,
	auth_attachments tinyint(2) NOT NULL, 
	PRIMARY KEY (forum_id), 
	KEY forums_order (forum_order), 
	KEY cat_id (cat_id), 
	KEY forum_last_post_id (forum_last_post_id)
);

#
# Table Data for phpBB_forums
#

INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('1', '2', 'General Chat', '', '0', '10', '22', '5', '35', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('2', '3', 'Ships', '', '0', '10', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('3', '3', 'Missions', '', '0', '20', '7', '1', '42', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('4', '3', 'Misc Objects', '', '0', '30', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('5', '3', 'Campagin', '', '0', '40', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('6', '3', 'Universes', '', '0', '50', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('7', '5', 'Over Time', '', '0', '10', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('8', '4', 'Testing Posts', 'Pruned Every 7 days', '0', '10', '0', '0', '0', NULL, '1', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('9', '6', 'StarCraft to Starshatter', 'SC to SS convertion', '0', '10', '1', '1', '29', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('10', '6', 'Star Wars', '', '0', '20', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('11', '6', 'Star Trek (TNG era)', '', '0', '30', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('12', '6', 'Star Trek (OTS era)', '', '0', '40', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('13', '6', 'Babylon 5', '', '0', '50', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('14', '6', 'Battlestar Galactica', '', '0', '60', '0', '0', '0', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('15', '6', 'Other(s)', '', '0', '80', '2', '1', '16', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
INSERT INTO phpBB_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments) VALUES('16', '6', 'BattleTech', '', '0', '70', '2', '1', '18', NULL, '0', '0', '0', '0', '0', '1', '1', '3', '3', '1', '1', '0');
#
# TABLE: phpBB_forum_prune
#
DROP TABLE IF EXISTS phpBB_forum_prune;
CREATE TABLE phpBB_forum_prune(
	prune_id mediumint(8) unsigned NOT NULL auto_increment,
	forum_id smallint(5) unsigned NOT NULL,
	prune_days smallint(5) unsigned NOT NULL,
	prune_freq smallint(5) unsigned NOT NULL, 
	PRIMARY KEY (prune_id), 
	KEY forum_id (forum_id)
);

#
# Table Data for phpBB_forum_prune
#

INSERT INTO phpBB_forum_prune (prune_id, forum_id, prune_days, prune_freq) VALUES('1', '8', '7', '1');
#
# TABLE: phpBB_groups
#
DROP TABLE IF EXISTS phpBB_groups;
CREATE TABLE phpBB_groups(
	group_id mediumint(8) NOT NULL auto_increment,
	group_type tinyint(4) DEFAULT '1' NOT NULL,
	group_name varchar(40) NOT NULL,
	group_description varchar(255) NOT NULL,
	group_moderator mediumint(8) NOT NULL,
	group_single_user tinyint(1) DEFAULT '1' NOT NULL, 
	PRIMARY KEY (group_id), 
	KEY group_single_user (group_single_user)
);

#
# Table Data for phpBB_groups
#

INSERT INTO phpBB_groups (group_id, group_type, group_name, group_description, group_moderator, group_single_user) VALUES('1', '1', 'Anonymous', 'Personal User', '0', '1');
INSERT INTO phpBB_groups (group_id, group_type, group_name, group_description, group_moderator, group_single_user) VALUES('2', '1', 'Admin', 'Personal User', '0', '1');
INSERT INTO phpBB_groups (group_id, group_type, group_name, group_description, group_moderator, group_single_user) VALUES('3', '1', '', 'Personal User', '0', '1');
INSERT INTO phpBB_groups (group_id, group_type, group_name, group_description, group_moderator, group_single_user) VALUES('4', '1', 'SC to SS', 'Starcraft to StarShatter convertion group.', '3', '0');
INSERT INTO phpBB_groups (group_id, group_type, group_name, group_description, group_moderator, group_single_user) VALUES('5', '1', '', 'Personal User', '0', '1');
INSERT INTO phpBB_groups (group_id, group_type, group_name, group_description, group_moderator, group_single_user) VALUES('6', '1', '', 'Personal User', '0', '1');
INSERT INTO phpBB_groups (group_id, group_type, group_name, group_description, group_moderator, group_single_user) VALUES('7', '1', '', 'Personal User', '0', '1');
INSERT INTO phpBB_groups (group_id, group_type, group_name, group_description, group_moderator, group_single_user) VALUES('8', '1', '', 'Personal User', '0', '1');
#
# TABLE: phpBB_posts
#
DROP TABLE IF EXISTS phpBB_posts;
CREATE TABLE phpBB_posts(
	post_id mediumint(8) unsigned NOT NULL auto_increment,
	topic_id mediumint(8) unsigned NOT NULL,
	forum_id smallint(5) unsigned NOT NULL,
	poster_id mediumint(8) NOT NULL,
	post_time int(11) NOT NULL,
	poster_ip varchar(8) NOT NULL,
	post_username varchar(25),
	enable_bbcode tinyint(1) DEFAULT '1' NOT NULL,
	enable_html tinyint(1) NOT NULL,
	enable_smilies tinyint(1) DEFAULT '1' NOT NULL,
	enable_sig tinyint(1) DEFAULT '1' NOT NULL,
	post_edit_time int(11),
	post_edit_count smallint(5) unsigned NOT NULL, 
	PRIMARY KEY (post_id), 
	KEY forum_id (forum_id), 
	KEY topic_id (topic_id), 
	KEY poster_id (poster_id), 
	KEY post_time (post_time)
);

#
# Table Data for phpBB_posts
#

INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('13', '8', '15', '5', '1052039646', '50dfce01', '', '1', '0', '1', '1', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('12', '7', '1', '4', '1052012545', 'd2365135', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('11', '6', '1', '4', '1051913698', 'd2365135', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('10', '6', '1', '4', '1051903524', 'd2365135', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('9', '6', '1', '2', '1051814868', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('14', '9', '1', '6', '1052080979', '440ad628', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('15', '7', '1', '2', '1052180351', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('16', '8', '15', '2', '1052180458', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('17', '10', '16', '5', '1052243854', '50dfce01', '', '1', '0', '1', '1', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('18', '10', '16', '2', '1052362440', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('19', '9', '1', '2', '1052362496', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('20', '7', '1', '6', '1052364789', '440ad628', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('21', '7', '1', '4', '1052376786', 'd2365135', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('22', '7', '1', '6', '1052481936', '3f5ff5f2', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('23', '11', '1', '2', '1052539895', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('24', '11', '1', '2', '1052676546', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('25', '12', '1', '2', '1052708864', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('26', '12', '1', '6', '1052752638', '3f5ff5f2', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('27', '7', '1', '6', '1052865931', '440ad628', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('28', '12', '1', '2', '1052880398', '443b8781', '', '1', '0', '1', '1', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('29', '13', '9', '2', '1052880548', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('30', '7', '1', '4', '1052892164', 'd25631f9', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('31', '12', '1', '6', '1052943337', '3f5ff5f2', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('32', '12', '1', '2', '1053020690', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('33', '12', '1', '6', '1053025647', '3f5ff5f2', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('34', '12', '1', '2', '1053068066', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('35', '12', '1', '6', '1053100662', '3f5ff5f2', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('36', '14', '3', '7', '1053370263', '44312c13', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('37', '14', '3', '6', '1053372449', '3f5ff5f2', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('38', '14', '3', '2', '1053414248', '443b8781', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('39', '14', '3', '7', '1053461142', '44312c13', '', '1', '0', '1', '0', '1053523140', '1');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('40', '14', '3', '2', '1053501582', '443b8781', '', '1', '0', '1', '1', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('41', '14', '3', '6', '1053528912', '3f5ff5f2', '', '1', '0', '1', '0', NULL, '0');
INSERT INTO phpBB_posts (post_id, topic_id, forum_id, poster_id, post_time, poster_ip, post_username, enable_bbcode, enable_html, enable_smilies, enable_sig, post_edit_time, post_edit_count) VALUES('42', '14', '3', '7', '1053545594', '44312c13', '', '1', '0', '1', '0', NULL, '0');
#
# TABLE: phpBB_posts_text
#
DROP TABLE IF EXISTS phpBB_posts_text;
CREATE TABLE phpBB_posts_text(
	post_id mediumint(8) unsigned NOT NULL,
	bbcode_uid varchar(10) NOT NULL,
	post_subject varchar(60),
	post_text text, 
	PRIMARY KEY (post_id)
);

#
# Table Data for phpBB_posts_text
#

INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('13', 'cd1418da5a', 'Where\'s BattleTech?', 'No own board for BattleTech? Must use this then...

Has anyone BattleTech stuff under work? I am big BT-fan and I really would like take some heavy aerospacefighter for ride and blow Arrow IVs to heads of Kurita\'s BattleMasters :twisted:');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('12', 'ee8d80537c', 'idea for creating ships', 'if we had some basic set rules or equations for creating ships so that when we get multiplayer it makes a farly fair fight, I.E.

if an engine has X amount of thrust it should have a mass of Y, a size of Z and requre a power input of P.
etc. etc. for powerplants, thrusters, shields, weps, hull strength, bla. bla. bla.

anyone good at math to come up with some decent equations for working it out?

this way balancing ships shouldent be to much of an issue, if a ship is created folowing these rules then we would put something in the description saying so.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('11', '2465817b6a', '', 'I guess it worked! ;)

I think a link directly to this forum on the main page might be a good idea,  just seems to me to be to many clicks to get here.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('10', '37de47f850', '', 'test...');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('9', 'ed6f2d35f7', 'StarShater Dev. V2 goes LIVE!', 'After nearly 4 months of work Starshater Dev V2 goes live. Taking 1/2 as much time as the original StarShatter Dev to develop but having twice as much functionality i hope this become THE best place to anything StarShatter!
       If you have any suggestion or comments PLEASE eMail me and i\'ll be more than happy to help you out!
       Once again, have fun everyone!');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('14', 'bf69c5e5c8', 'Upload Troubles', 'Pheagey I\'m still having trouble uploading my mod.  I\'m trying to put it under the \'Other\' mods (cause it\'s a whole universe unto itself)...let me know if you need any more info...



[color=red:bf69c5e5c8]Necromancer
[/color:bf69c5e5c8]');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('15', 'b6b06054ee', 'true, but...', 'Good idea but hard to implement. Plus it would limit the crativity of people. I think we should test out the multi-player using 3rd party ships 1st. I  think ships like mine and crazy-eddies would be fair matches. Perhaps doing a points system would be a better idea. ala SFC. Engine power gives u points, mass takes points, weapon power gives points, etc, etc.
       we\'ll have to see how things 1st.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('16', '46195d2491', 'yo.', 'I\'ll add a battletech forum, but I don\'t know anyone working on anything battletech stuff yet.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('17', '6099dec2c2', 'BattleTech brainstorming', 'Thanks Pheagley for this forum. Let\'s all bunch together and think something cool for BT mods. It can be useful for modders.

What I would like to see... Jumpships and small warships with hangarbays and few aerospace fighters would be start. After those BattleMechs and tanks. Would be cool if fighter can target to \'Mech subsystems like arms, legs and head. Arrow IV right to head... unfair? Maybe not: good thing if that megamissile even hit to moving \'Mech. What come to LRMs there is missile defensive systems on \'Mechs. Ballistic fire may be problem for AI to handle (Long Tom cannons/tanks).

I think BattleTech would be very cool mod for Starshatter. 100 ton warmachines walking and shooting around, player in tiny fighter trying to survive in cross fire of many missiles and lasers shot by extreme powerful BattleMechs. What it sound like?

Any other ideas?');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('18', '8ec3417f6f', 'herm', 'The arm/leg amination is going to be impossibe in SS. tanks don\'t work to well but they are possible. Anyways. the starships would be interesting');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('19', 'e696cf20fc', 'eMail sent', 'eMail sent to u with some info in it.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('20', 'c5a0f977fd', 'I had banged this idea around', 'I started a basic system using economics and an arbitrarily assigned technology level (ala starfire) to come up with different system values and costs...but it was still really really rough and unbalanced...if your interested i could email u a copy of it to take a look at...

Necromancer');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('21', '90ea71e31a', '', 'yea ok send it over.
unless its small enough to post here easly...

another way we could do it - though it would give slightly less for individual modders to play with - is to make .mag or .obj systems, then people can shove the systems together and the number of however meany they want to get the power,thrust, etc. that they are after. then they just need to add up the mass, etc. buld there hull around the systems, place the locations of the systems in there .def then delete all the unneeded pollys - given this would not be so easy to do in magic at the moment, but most other progys should let you groop objects.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('22', 'ccf46198e5', 'ok, i\'ll send it tonight', 'I\'ll send it over tonight when i get home, its several pages long...

Necromancer');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('23', 'bf66fa2dc8', 'StarShatter Dev. V2 latest info.', '[color=black:bf66fa2dc8][size=18:bf66fa2dc8][u:bf66fa2dc8][b:bf66fa2dc8]5/7/2K3[/b:bf66fa2dc8][/u:bf66fa2dc8][/size:bf66fa2dc8][/color:bf66fa2dc8] [size=12:bf66fa2dc8]- New server goes up and file transfered over.[/size:bf66fa2dc8]
[img:bf66fa2dc8]http://ssd.servehttp.com/ssdv2/interfaces/default/SSDTitle2.png[/img:bf66fa2dc8]');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('24', '39905011de', 'Server switch completed', 'Switched the server and everything looks like its all working ok. If you run into any bugs plz eMail. thanx');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('25', 'f4e5a432c9', 'Necro, Feedback about your ASU fleet.', 'My input: Overall nice. I like how you keep a common theme througth out. Very nice.
Things I\'d recommend:
Add beauty pics, LODs, and map icons. Other than that I think its great!');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('26', 'd418bd128d', 'Thanks Pheagey!!', 'I\'m in the process of completing fleet #3, the Pol\'Hadronii Concordiuum, once I\'m finished with them, I\'ve got to go back and correct the lights on the Orion Trade Confederation\'s Heavy Cruiser... After that, then the LOD\'ing process begins (which leads me to a question, how many LODs are enough?)  Beauty and Map Icons will be the final thing I do before I release the final version.  The next question I have is your limit on size, when I\'m finished, this mod will be pretty big by itself, way over the 10 meg size limit you\'ve imposed.  Should I break up the mod into smaller bits, e.g. Each empire has a seperate .dat file?.

Some of the other things I\'m going to be adding: 
1) Music
2) 2 additional fleets
3) 2 mini-campaigns and a larger over-all campaign

Things that yet need to happen:
1) Ship and fighter varients 
2) Fighter balance (In the demo mission, Carrier combat, the three United Star System Fighter flights can destroy the carrier in a matter of minutes due to the onboard fighter guns firing rate is WAY to high.
3) Ship Re-Scaling... Fighters are almost to small to hit, cap ships aren\'t big enough for my taste.
4) LODs
5) Beauty Shots
6) Map Icons
7) Campaign Missions need to be def\'ed.

If anybody has anything they think they can offer, you can email me at:
ARobb73@cox.net

Thanks
Necromancer');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('27', '6467c9189d', 'Sent', '[quote:6467c9189d=\"se5a\"]yea ok send it over.
unless its small enough to post here easly...[/quote:6467c9189d]

Sent it over to you erm...yesterday... sorry for the delay...things have been insanely busy here....

Necromancer');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('28', '307686d2b1', 'yo ur fleets!', 'My personal opinion about LOD\'s 3-4 are good. A close up LOD, 2 & 3 are medium LODs and the 3 & 4 are for more than 4-5km away from the ship. (very very low poly count- for use on a \'tactical combat\' style).

    The .DAT thing we could do both ways. One big fileand then each fleet in a seperate file. 

    Do u know howto add music? Right now I know it\'s not a publicly known thing- but if u have inside info lemme know yo!');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('29', '079404dea6', 'Corodius Entertainment website online', 'Corodius Entertainment
http://ssd.servehttp.com/CorEnt/ is now online. Nowhere finish but it\'s atleast up.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('30', 'ed56d5c6e5', '', 'yup got it! havent had a chance to have a good look at it - looks nice and detailed though! will have to print it out...');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('31', '4adf5a62d1', 'Re: yo ur fleets!', '[quote:4adf5a62d1=\"Pheagey\"]    Do u know howto add music? Right now I know it\'s not a publicly known thing- but if u have inside info lemme know yo![/quote:4adf5a62d1]

No, not any inside info, but I have successfully added music in a B5 mod that I scrapped (not scrapped as much as I was unable to release it due to the fact that some of the models were not mine and I could not obtain permission for their use). But, only one song per mission, no dynamic music and it will repeat itself... But, yeah, I can add music...  8)

Necromancer');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('32', 'dcb2f0fd81', 'How how how how???', 'How\'d you do it? I love getting info like this! (Mine is I post it on SSD?)
 :)  :D  :o');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('33', '6cc24733ea', 'Re: How how how how???', '[quote:6cc24733ea=\"Pheagey\"]How\'d you do it? I love getting info like this! (Mine is I post it on SSD?)
 :)  :D  :o[/quote:6cc24733ea]

Hehe... yeah, you can post it, I just couldn\'t resist being a bit mysterious about it though... but here\'s the trick:

To add Music to a Scenario:

1-    Create a weapon def, that causes no damage, has totally black (0,0,0) flash and bitmap parms with a lifetime and recycle rate as long as the music clip you want to play is, then add a refire_dely of whatever length you like (this creates the replay frequency) and make the \'sound\' parameter the music .wav file you want to play.  

2- Equip a ship with this weapon.  Now,  2 catches, only have one ship per scenario with music_weapon equipped, make varients that do not so you can have more than one of that ship in a scenario (e.g. In my ships/station drop down, you\'ll see 2 varients of Babylon 5... Bab5 & Bab5_music) when I want to have music in a scenario with B5 in it, I use Bab5_music.  The other catch to this is, as soon as the ship with the music_weapon is destroyed, the music stops, so I typically only use large ships (that are hard to destroy) as centerpieces for music.

Remember when you do this, you have to increase the sound_max_dist to an ungodly number (like10e9) so that everyone involved in the scenario can hear the music....

So, there you have it.

Necromancer');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('34', '4d4fe9a9f6', 'interesting', 'Now THAT is a hack!
But seriously ingeniuse! Im ganna have o try that.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('35', 'ec596cd2eb', 'Re: interesting', '[quote:ec596cd2eb=\"Pheagey\"]Now THAT is a hack!
But seriously ingeniuse! Im ganna have o try that.[/quote:ec596cd2eb]
 :twisted: I stumbled across it trying to get the shadow ships to scream...then I said...heeeeeyy...music might work too.  Let me know if you have any trouble with it, I can send you some examples if need be.

Necromancer');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('36', '12a0ccb35a', 'Asteriod Fields', 'You have a post on the SSD main page that talks about asteriod fields.  Is there some built in way to add asteriod fields to your missions.  I know you can just make some asteriod models in majic, make them stations and place them around the map.  I was just wondering if there is an easier way.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('37', 'a295dfebf3', 'Re: Asteriod Fields', '[quote:a295dfebf3=\"Game_Ender\"]You have a post on the SSD main page that talks about asteriod fields.  Is there some built in way to add asteriod fields to your missions.  I know you can just make some asteriod models in majic, make them stations and place them around the map.  I was just wondering if there is an easier way.[/quote:a295dfebf3]

I believe that in the demo your stuck with the station solution, milo has said that there will be asteroids in the final, but they aren\'t in the demo. (Not sure if that is a \'not supported in demo\' or \'not general knowledge on how to get them in mission in the demo\') 8)

Necromancer');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('38', '37524f31c0', 'ast. fields', 'The ast. fileds are not in the current pulic demo. They are, however, in he current build that milo is working on. We are all eagerly awaiting the release of the next demo.
   Trust me, the minute it\'s avaliable I\'ll beon it like kids at an icecream truck1 :D');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('39', 'daa020a549', '', 'Can you guys point me in the direction of the tools i need to extract the asteriods from homeworld cataclysm.  It wouldn\'t be hard for me to model and def an asteriod its just that can\'t skin very well.  So i just want to borrow some from homeworld.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('40', 'd6efd05973', 'arg', 'Not off the top of my head but I know there pretty easy to find. Just smack google up for a search.');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('41', '89658c4e52', 'Maybe...', '[quote:89658c4e52=\"Game_Ender\"]Can you guys point me in the direction of the tools i need to extract the asteriods from homeworld cataclysm.  It wouldn\'t be hard for me to model and def an asteriod its just that can\'t skin very well.  So i just want to borrow some from homeworld.[/quote:89658c4e52]

Check the forums at www.relicnews.com, the research station there has alot of links to modding tools for homeworld and HW:C

Necormancer');
INSERT INTO phpBB_posts_text (post_id, bbcode_uid, post_subject, post_text) VALUES('42', 'cb2fcd197c', 'That was an ordeal but it worked.', 'Thanks a lot Necromancer, but i found the tools. 

But it was kinda of a journey after.  After i got the asteriods out the .big file, using the BigViewer.  I then had to find a program that could convert the .lif images and .peo files to formats i could use.  Well i found 3D explorer (Which took a while because i really didn\'t know what i was looking for) and did a batch on the image files to get them to .bmp format.  Well after a tutorial for photoshop on doing a batch process i converted on the .bmp to .pcx in no time flat.  Then i did a little edditing of the .mtl file to use the pcx instead of .lif files.   The asteriod was already for majic and worked without a hitch.');
#
# TABLE: phpBB_privmsgs
#
DROP TABLE IF EXISTS phpBB_privmsgs;
CREATE TABLE phpBB_privmsgs(
	privmsgs_id mediumint(8) unsigned NOT NULL auto_increment,
	privmsgs_type tinyint(4) NOT NULL,
	privmsgs_subject varchar(255) NOT NULL,
	privmsgs_from_userid mediumint(8) NOT NULL,
	privmsgs_to_userid mediumint(8) NOT NULL,
	privmsgs_date int(11) NOT NULL,
	privmsgs_ip varchar(8) NOT NULL,
	privmsgs_enable_bbcode tinyint(1) DEFAULT '1' NOT NULL,
	privmsgs_enable_html tinyint(1) NOT NULL,
	privmsgs_enable_smilies tinyint(1) DEFAULT '1' NOT NULL,
	privmsgs_attach_sig tinyint(1) DEFAULT '1' NOT NULL, 
	PRIMARY KEY (privmsgs_id), 
	KEY privmsgs_from_userid (privmsgs_from_userid), 
	KEY privmsgs_to_userid (privmsgs_to_userid)
);

#
# Table Data for phpBB_privmsgs
#

INSERT INTO phpBB_privmsgs (privmsgs_id, privmsgs_type, privmsgs_subject, privmsgs_from_userid, privmsgs_to_userid, privmsgs_date, privmsgs_ip, privmsgs_enable_bbcode, privmsgs_enable_html, privmsgs_enable_smilies, privmsgs_attach_sig) VALUES('1', '1', 'test', '2', '3', '1051140373', '7f000001', '1', '0', '1', '0');
INSERT INTO phpBB_privmsgs (privmsgs_id, privmsgs_type, privmsgs_subject, privmsgs_from_userid, privmsgs_to_userid, privmsgs_date, privmsgs_ip, privmsgs_enable_bbcode, privmsgs_enable_html, privmsgs_enable_smilies, privmsgs_attach_sig) VALUES('2', '1', 'test private message', '2', '3', '1053698997', '443b8781', '1', '0', '1', '1');
#
# TABLE: phpBB_privmsgs_text
#
DROP TABLE IF EXISTS phpBB_privmsgs_text;
CREATE TABLE phpBB_privmsgs_text(
	privmsgs_text_id mediumint(8) unsigned NOT NULL,
	privmsgs_bbcode_uid varchar(10) NOT NULL,
	privmsgs_text text, 
	PRIMARY KEY (privmsgs_text_id)
);

#
# Table Data for phpBB_privmsgs_text
#

INSERT INTO phpBB_privmsgs_text (privmsgs_text_id, privmsgs_bbcode_uid, privmsgs_text) VALUES('1', '0d12bf6d4d', 'testing the PM system');
INSERT INTO phpBB_privmsgs_text (privmsgs_text_id, privmsgs_bbcode_uid, privmsgs_text) VALUES('2', 'be3207704f', 'test');
#
# TABLE: phpBB_ranks
#
DROP TABLE IF EXISTS phpBB_ranks;
CREATE TABLE phpBB_ranks(
	rank_id smallint(5) unsigned NOT NULL auto_increment,
	rank_title varchar(50) NOT NULL,
	rank_min mediumint(8) NOT NULL,
	rank_special tinyint(1),
	rank_image varchar(255), 
	PRIMARY KEY (rank_id)
);

#
# Table Data for phpBB_ranks
#

INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('1', 'Site Admin', '-1', '1', NULL);
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('2', 'cadet', '0', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('3', 'Jr. Lt.', '50', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('4', 'Sr. Lt.', '100', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('5', 'Jr. Commander', '200', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('6', 'Commander', '300', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('7', '1st Officer', '400', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('8', 'Captain', '500', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('9', 'Rear Admiral', '1000', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('10', 'Admiral', '2000', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('11', 'Suprem Commander in Charge', '3000', '0', '');
INSERT INTO phpBB_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES('12', 'SSD Moderator', '-1', '1', '');
#
# TABLE: phpBB_search_results
#
DROP TABLE IF EXISTS phpBB_search_results;
CREATE TABLE phpBB_search_results(
	search_id int(11) unsigned NOT NULL,
	session_id varchar(32) NOT NULL,
	search_array text NOT NULL, 
	PRIMARY KEY (search_id), 
	KEY session_id (session_id)
);

#
# Table Data for phpBB_search_results
#

INSERT INTO phpBB_search_results (search_id, session_id, search_array) VALUES('447644908', '940c4fe2ba81ba10996d6bb08a76f7fc', 'a:7:{s:14:\"search_results\";s:2:\"13\";s:17:\"total_match_count\";i:1;s:12:\"split_search\";N;s:7:\"sort_by\";i:0;s:8:\"sort_dir\";s:4:\"DESC\";s:12:\"show_results\";s:5:\"posts\";s:12:\"return_chars\";i:200;}');
#
# TABLE: phpBB_search_wordlist
#
DROP TABLE IF EXISTS phpBB_search_wordlist;
CREATE TABLE phpBB_search_wordlist(
	word_text varchar(50) binary NOT NULL,
	word_id mediumint(8) unsigned NOT NULL auto_increment,
	word_common tinyint(1) unsigned NOT NULL, 
	PRIMARY KEY (word_text), 
	KEY word_id (word_id)
);

#
# Table Data for phpBB_search_wordlist
#

INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('example', '1', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('post', '2', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('phpbb', '3', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('installation', '4', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('delete', '5', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('topic', '6', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('forum', '7', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('since', '8', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('everything', '9', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('seems', '10', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('working', '11', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('welcome', '12', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('apologies', '13', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('backup', '14', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('guess', '15', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('messed', '16', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('styles', '17', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tryin', '18', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('work', '19', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('registered', '20', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('rightio', '21', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('forces', '22', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('frost', '23', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('groups', '24', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('guy', '25', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('help', '26', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('join', '27', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mod', '28', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('models', '29', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('msn', '30', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('owns', '31', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('share', '32', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('site', '33', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('talk', '34', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('texturers', '35', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('two', '36', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('wanted', '37', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('wondering', '530', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('works', '39', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('coming', '40', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('convertion', '41', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('depends', '42', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('file', '43', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('website', '440', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('give', '45', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hit', '46', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hopefully', '47', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('latly', '48', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('obj', '49', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('rest', '50', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('shatner', '51', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('snags', '52', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('sounds', '53', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tetures', '54', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tool', '55', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('week', '56', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('yea', '57', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('directly', '100', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('clicks', '99', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('test', '98', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('cool', '62', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('corodius', '63', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('entertainment', '64', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('flange', '65', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('group', '66', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('invited', '67', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mate', '68', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mine', '69', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('name', '70', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('released', '71', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tyrant', '72', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('while', '73', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('yeah', '74', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('again', '75', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('anything', '76', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('become', '77', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('comments', '78', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('dev', '79', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('develope', '80', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('email', '81', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fun', '82', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('functionality', '83', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('goes', '84', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('happy', '85', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hope', '86', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ill', '87', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('live', '88', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('months', '89', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('nearly', '90', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('original', '91', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('place', '92', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('starshater', '93', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('starshatter', '94', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('suggestion', '95', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('taking', '96', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('twice', '97', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('idea', '101', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('link', '102', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('main', '103', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('might', '104', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('think', '105', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('worked', '106', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('amount', '107', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('anyone', '108', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('balancing', '109', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('basic', '110', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bla', '111', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('created', '112', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('creating', '113', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('decent', '114', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('discription', '115', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('engine', '116', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('equations', '117', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fair', '118', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('farly', '119', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fight', '120', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('folowing', '121', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hull', '122', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('input', '123', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('issue', '124', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('makes', '125', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mass', '126', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('math', '127', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('multiplayer', '128', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('power', '129', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('powerplants', '130', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('requre', '131', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('rules', '132', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('saying', '133', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('set', '134', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('shields', '135', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ship', '136', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ships', '137', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('shouldent', '138', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('size', '139', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('strength', '140', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('thrust', '141', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('thrusters', '142', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('weps', '143', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('aerospacefighter', '144', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('arrow', '145', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('battlemasters', '146', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('battletech', '147', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('blow', '148', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('board', '149', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('btfan', '150', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('heads', '151', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('heavy', '152', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ivs', '153', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('kuritas', '154', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('own', '155', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ride', '156', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('stuff', '157', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('twisted', '158', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('wheres', '159', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('cause', '160', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('info', '161', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('itself', '162', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('let', '163', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mods', '164', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('necromancer', '165', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('pheagey', '166', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('still', '167', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('trouble', '168', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('troubles', '169', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('trying', '170', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('universe', '171', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('unto', '172', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('upload', '173', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('uploading', '174', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('whole', '175', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('1st', '176', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('3rd', '177', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ala', '178', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('crativity', '179', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('crazyeddies', '180', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('doing', '181', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('gives', '182', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hard', '183', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('implement', '184', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('limit', '185', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('matches', '186', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('party', '187', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('people', '188', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('perhaps', '189', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('plus', '190', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('points', '191', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('sfc', '192', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('system', '193', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('takes', '194', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('things', '195', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('using', '196', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('weapon', '197', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('add', '198', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('100', '199', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('aerospace', '200', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('arms', '201', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ballistic', '202', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('battlemechs', '203', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('brainstorming', '204', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bunch', '205', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('cannons', '206', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('cross', '207', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('defensive', '208', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('extreme', '209', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('few', '210', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fighter', '211', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fighters', '212', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fire', '213', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('handle', '214', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hangarbays', '215', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('head', '216', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ideas', '217', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('jumpships', '218', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('lasers', '219', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('legs', '220', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('lets', '221', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('long', '222', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('lrms', '223', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('may', '224', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mech', '225', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mechs', '226', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('megamissile', '227', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('missile', '228', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('missiles', '229', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('modders', '230', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('moving', '231', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('pheagley', '232', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('player', '233', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('powerful', '234', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('problem', '235', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('right', '236', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('shooting', '237', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('shot', '238', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('sound', '239', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('start', '240', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('subsystems', '241', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('survive', '242', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('systems', '243', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tanks', '244', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('target', '245', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('thanks', '246', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('thing', '247', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tiny', '248', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('together', '249', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tom', '250', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ton', '251', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('unfair', '252', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('useful', '253', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('walking', '254', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('warmachines', '255', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('warships', '256', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('amination', '257', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('anyways', '258', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('arm', '259', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('herm', '260', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('impossibe', '261', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('interesting', '262', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('leg', '263', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('possible', '264', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('starships', '265', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('sent', '266', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('arbitrarily', '267', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('assigned', '268', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('banged', '269', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('copy', '270', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('costs', '271', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('different', '272', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('economics', '273', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('interested', '274', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('level', '275', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('rough', '276', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('starfire', '277', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('started', '278', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('technology', '279', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('unbalanced', '280', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('values', '281', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('another', '282', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('buld', '283', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('def', '284', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('easly', '285', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('easy', '286', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('enough', '287', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('given', '288', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('groop', '289', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('however', '290', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('individual', '291', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('locations', '292', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mag', '293', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('magic', '294', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('make', '295', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('meany', '296', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('moment', '297', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('number', '298', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('objects', '299', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('play', '300', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('pollys', '301', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('progys', '302', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('send', '303', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('shove', '304', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('slightly', '305', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('unless', '306', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('unneeded', '307', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('pages', '308', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('several', '309', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tonight', '310', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('2k3', '311', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('latest', '312', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('server', '313', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('transfered', '314', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bugs', '315', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('completed', '316', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('looks', '317', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('plz', '318', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('run', '319', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('switch', '320', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('switched', '321', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('thanx', '322', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('asu', '323', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('beauty', '324', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('common', '325', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('feedback', '326', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fleet', '327', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('great', '328', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('icons', '329', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('keep', '330', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('lods', '331', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('map', '332', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('necro', '333', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('nice', '334', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('overall', '335', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('pics', '336', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('reccomend', '337', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('theme', '338', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('througth', '339', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('adding', '340', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('additional', '341', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('arobb73', '342', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('back', '343', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('balance', '344', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('begins', '345', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bits', '346', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('break', '347', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('campaign', '348', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('cap', '349', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('carrier', '350', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('combat', '351', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('completing', '352', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('concordiuum', '353', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('confederations', '354', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('correct', '355', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('cox', '356', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('cruiser', '357', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('dat', '358', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('defed', '359', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('demo', '360', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('destroy', '361', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('due', '362', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('empire', '363', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('final', '364', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('finished', '365', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('firing', '366', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fleets', '367', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('flights', '368', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('guns', '369', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('happen', '370', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('high', '371', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('imposed', '372', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ive', '373', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('larger', '374', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('leads', '375', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('lights', '376', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('loding', '377', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('matter', '378', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('meg', '379', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('minicampaigns', '380', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('minutes', '381', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mission', '382', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('missions', '383', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('music', '384', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('net', '385', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('next', '386', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('offer', '387', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('onboard', '388', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('orion', '389', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('polhadronii', '390', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('pretty', '391', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('process', '392', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('rate', '393', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('release', '394', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('rescaling', '395', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('seperate', '396', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('shots', '397', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('smaller', '398', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('star', '399', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('taste', '400', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('three', '401', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('trade', '402', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('united', '403', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('varients', '404', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('youve', '405', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('busy', '406', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('delay', '407', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('erm', '408', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('insanely', '409', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('sorry', '410', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('yesterday', '411', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('45km', '412', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('away', '413', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('both', '414', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('close', '415', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('count', '416', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fileand', '417', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('howto', '418', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('inside', '419', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('known', '420', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('lemme', '421', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('lod', '422', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('low', '423', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('medium', '424', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('one', '425', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('opinion', '426', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('personal', '427', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('poly', '428', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('publicly', '429', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('style', '430', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tactical', '431', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ways', '432', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('nowhere', '439', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('finish', '438', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('online', '435', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('atleast', '437', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('chance', '441', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('detailed', '442', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('print', '443', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('yup', '444', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('added', '445', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('dynamic', '446', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fact', '447', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('obtain', '448', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('per', '449', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('permission', '450', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('repeat', '451', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('scrapped', '452', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('song', '453', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('successfully', '454', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('unable', '455', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('getting', '456', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('howd', '457', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('love', '458', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ssd', '459', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bab5', '460', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bab5music', '461', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('babylon', '462', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bit', '463', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bitmap', '464', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('black', '465', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('catch', '466', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('catches', '467', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('causes', '468', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('centerpieces', '469', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('clip', '470', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('create', '471', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('creates', '472', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('damage', '473', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('destroyed', '474', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('drop', '475', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('equip', '476', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('equipped', '477', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('flash', '478', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('frequency', '479', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hear', '480', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hehe', '481', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('heres', '482', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('increase', '483', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('involved', '484', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('length', '485', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('lifetime', '486', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('like10e9', '487', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('musicweapon', '488', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mysterious', '489', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('parameter', '490', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('parms', '491', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('recycle', '492', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('refiredely', '493', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('remember', '494', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('replay', '495', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('resist', '496', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('scenario', '497', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('soundmaxdist', '498', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('station', '499', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('stops', '500', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('totally', '501', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('trick', '502', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('typically', '503', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ungodly', '504', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('wav', '505', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('whatever', '506', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ganna', '507', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hack', '508', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ingeniuse', '509', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('seriously', '510', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('try', '511', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('across', '512', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('examples', '513', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('heeeeeyy', '514', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('scream', '515', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('shadow', '516', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('stumbled', '517', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('asteriod', '518', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('talks', '529', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('stations', '528', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fields', '521', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('majic', '527', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('easier', '526', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('built', '525', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('asteroids', '531', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('believe', '532', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('general', '533', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('knowledge', '534', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('milo', '535', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('solution', '536', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('stuck', '537', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('supported', '538', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('sure', '539', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ast', '540', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('avaliable', '541', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('awaiting', '542', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('beon', '543', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('build', '544', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('current', '545', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('eagerly', '546', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('fileds', '547', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('icecream', '548', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('kids', '549', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('minute', '550', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('pulic', '551', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('truck1', '552', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('trust', '553', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tools', '580', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('skin', '579', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('point', '578', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('model', '577', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('homeworld', '576', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('guys', '575', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('extract', '574', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('direction', '573', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('cataclysm', '572', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('borrow', '571', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('asteriods', '570', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('arg', '565', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('google', '566', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('search', '567', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('smack', '568', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('top', '569', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('wouldnt', '581', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('check', '582', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('com', '583', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('forums', '584', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('links', '585', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('modding', '586', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('necormancer', '587', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('relicnews', '588', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('research', '589', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('already', '590', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('batch', '591', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bigviewer', '592', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('bmp', '593', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('convert', '594', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('converted', '595', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('edditing', '596', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('explorer', '597', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('files', '598', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('flat', '599', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('format', '600', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('formats', '601', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('hitch', '602', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('image', '603', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('images', '604', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('instead', '605', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('journey', '606', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('kinda', '607', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('lif', '608', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('mtl', '609', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('ordeal', '610', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('pcx', '611', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('peo', '612', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('photoshop', '613', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('program', '614', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('took', '615', '0');
INSERT INTO phpBB_search_wordlist (word_text, word_id, word_common) VALUES('tutorial', '616', '0');
#
# TABLE: phpBB_search_wordmatch
#
DROP TABLE IF EXISTS phpBB_search_wordmatch;
CREATE TABLE phpBB_search_wordmatch(
	post_id mediumint(8) unsigned NOT NULL,
	word_id mediumint(8) unsigned NOT NULL,
	title_match tinyint(1) NOT NULL, 
	KEY post_id (post_id), 
	KEY word_id (word_id)
);

#
# Table Data for phpBB_search_wordmatch
#

INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '125', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '124', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '123', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '127', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '126', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '135', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '134', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '133', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '132', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '131', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '130', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '129', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '128', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '122', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '121', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '120', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '119', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '118', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '117', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '116', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '115', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '114', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '113', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '112', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '111', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '110', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '109', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '108', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '152', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '151', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '150', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '149', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '148', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '147', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '146', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '145', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '108', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '144', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '137', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '101', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '113', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '143', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '142', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '141', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '140', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '139', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '138', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '137', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '136', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '107', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('12', '11', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '106', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '105', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '10', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '104', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '103', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '102', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '101', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '15', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '7', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '93', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '88', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '84', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '79', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '97', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '96', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '95', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '94', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '93', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '92', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '100', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('11', '99', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('10', '98', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '91', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '90', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '89', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '88', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '87', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '86', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '85', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '84', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '83', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '82', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '81', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '80', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '79', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '78', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '77', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '76', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '75', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '26', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('9', '19', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '153', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '154', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '155', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '156', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '157', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '158', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '19', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '147', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('13', '159', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '160', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '161', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '162', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '163', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '28', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '164', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '166', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '167', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '168', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '170', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '171', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '172', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '174', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '175', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '169', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('14', '173', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '176', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '177', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '178', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '179', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '180', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '181', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '116', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '118', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '182', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '183', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '101', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '184', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '185', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '126', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '186', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '69', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '128', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '187', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '188', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '189', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '190', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '191', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '129', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '192', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '137', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '193', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '194', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '98', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '195', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '105', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '196', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('15', '197', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('16', '198', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('16', '108', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('16', '76', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('16', '147', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('16', '7', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('16', '87', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('16', '157', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('16', '11', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '7', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '28', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '46', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '62', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '94', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '105', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '145', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '147', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '164', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '170', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '199', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '200', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '201', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '202', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '203', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '205', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '206', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '207', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '208', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '209', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '210', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '211', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '212', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '213', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '214', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '215', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '216', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '217', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '218', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '219', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '220', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '221', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '222', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '223', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '224', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '225', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '226', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '227', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '228', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '229', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '230', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '231', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '232', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '233', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '234', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '235', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '236', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '237', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '238', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '239', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '240', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '241', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '242', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '243', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '244', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '245', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '246', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '247', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '248', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '249', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '250', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '251', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '252', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '253', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '254', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '255', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '256', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '147', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('17', '204', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '257', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '258', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '259', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '261', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '262', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '263', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '264', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '265', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '244', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '19', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('18', '260', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('19', '81', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('19', '161', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('19', '266', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('19', '81', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('19', '266', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '178', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '267', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '268', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '110', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '270', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '271', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '272', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '273', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '81', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '274', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '275', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '276', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '277', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '278', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '167', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '193', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '279', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '280', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '196', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '281', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '269', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('20', '101', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '198', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '282', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '283', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '284', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '5', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '285', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '286', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '287', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '45', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '288', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '289', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '290', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '122', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '291', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '163', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '292', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '293', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '294', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '295', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '126', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '296', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '230', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '297', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '298', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '49', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '299', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '188', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '92', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '300', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '301', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '2', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '129', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '302', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '303', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '304', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '305', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '243', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '141', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '249', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '306', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '307', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('21', '57', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '87', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '222', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '308', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '303', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '309', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '310', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '87', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '303', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('22', '310', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '311', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '43', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '84', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '313', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '314', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '145', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '79', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '161', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '312', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('23', '94', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '315', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '81', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '9', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '317', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '318', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '319', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '313', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '321', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '322', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '11', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '316', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '313', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('24', '320', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '198', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '324', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '325', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '328', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '329', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '123', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '330', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '331', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '332', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '334', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '335', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '336', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '337', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '338', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '195', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '105', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '339', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '323', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '326', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '327', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('25', '333', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '28', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '43', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '46', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '76', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '81', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '105', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '136', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '137', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '139', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '152', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '162', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '185', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '193', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '195', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '211', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '212', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '246', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '247', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '287', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '324', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '327', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '329', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '331', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '332', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '335', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '340', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '341', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '342', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '343', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '344', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '345', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '346', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '347', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '348', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '349', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '350', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '351', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '352', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '353', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '354', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '355', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '356', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '357', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '358', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '359', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '360', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '361', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '362', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '363', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '364', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '365', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '366', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '367', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '368', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '369', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '370', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '371', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '372', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '373', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '374', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '375', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '376', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '377', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '378', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '379', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '380', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '381', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '382', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '383', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '384', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '385', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '386', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '387', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '388', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '389', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '390', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '391', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '392', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '393', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '394', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '395', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '396', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '397', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '398', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '399', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '400', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '401', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '402', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '403', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '404', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '405', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '166', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('26', '246', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '406', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '407', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '285', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '287', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '408', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '409', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '2', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '303', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '266', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '410', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '195', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '306', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '57', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '411', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('27', '266', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '412', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '198', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '413', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '414', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '415', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '351', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '416', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '358', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '43', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '417', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '327', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '418', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '161', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '419', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '420', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '421', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '422', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '331', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '423', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '424', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '384', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '425', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '426', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '427', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '428', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '429', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '236', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '396', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '136', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '430', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '431', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '247', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '432', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('28', '367', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '440', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '435', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '64', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '63', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '435', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '439', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '438', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '64', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '63', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('29', '437', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('30', '441', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('30', '442', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('30', '317', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('30', '334', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('30', '443', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('30', '444', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '198', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '445', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '362', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '446', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '447', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '418', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '161', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '419', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '162', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '420', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '421', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '69', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '382', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '28', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '29', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '384', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '448', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '425', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '449', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '450', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '429', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '394', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '451', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '236', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '452', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '453', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '454', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '247', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '455', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '74', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('31', '367', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('32', '456', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('32', '457', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('32', '161', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('32', '458', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('32', '69', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('32', '2', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('32', '459', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '198', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '460', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '461', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '462', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '463', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '464', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '465', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '466', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '467', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '468', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '469', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '470', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '471', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '472', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '473', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '284', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '361', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '474', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '475', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '476', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '477', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '43', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '478', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '479', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '456', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '183', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '480', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '481', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '482', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '457', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '483', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '161', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '484', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '485', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '486', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '487', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '222', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '458', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '295', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '69', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '384', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '488', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '489', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '298', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '425', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '490', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '491', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '449', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '300', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '2', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '393', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '492', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '493', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '494', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '495', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '496', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '497', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '136', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '137', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '239', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '498', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '459', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '499', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '500', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '501', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '502', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '503', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '504', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '404', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '505', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '197', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '506', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('33', '74', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('34', '507', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('34', '508', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('34', '509', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('34', '510', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('34', '511', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('34', '262', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '512', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '513', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '507', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '508', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '514', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '509', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '163', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '104', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '384', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '515', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '303', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '510', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '516', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '137', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '517', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '168', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '511', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '170', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '158', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '19', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('35', '262', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '521', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '518', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '530', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '529', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '528', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '459', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '2', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '92', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '29', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '383', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '332', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '295', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '527', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '103', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '521', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '526', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '525', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '518', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('36', '198', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '198', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '518', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '531', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '532', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '525', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '360', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '526', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '521', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '364', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '533', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '534', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '103', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '527', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '295', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '332', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '535', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '382', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '383', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '29', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '92', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '2', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '536', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '459', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '499', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '528', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '537', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '538', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '539', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '529', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '530', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '518', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('37', '521', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '540', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '541', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '542', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '543', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '544', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '545', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '360', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '546', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '547', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '290', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '548', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '87', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '549', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '535', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '550', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '386', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '551', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '394', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '552', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '553', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '11', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '540', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('38', '521', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '580', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '579', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '578', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '577', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '576', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '183', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '575', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '574', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '573', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '284', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '572', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '571', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '570', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '518', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('40', '286', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('40', '566', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('40', '216', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('40', '391', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('40', '567', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('40', '568', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('40', '569', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('40', '565', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('39', '581', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '518', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '570', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '571', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '572', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '582', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '583', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '284', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '573', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '574', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '584', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '575', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '183', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '576', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '585', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '586', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '577', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '587', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '578', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '588', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '589', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '579', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '499', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '580', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('41', '581', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '590', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '518', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '570', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '591', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '592', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '593', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '594', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '595', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '181', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '596', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '597', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '43', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '598', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '599', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '600', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '601', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '602', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '603', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '604', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '605', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '606', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '607', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '608', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '527', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '609', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '165', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '611', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '612', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '613', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '392', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '614', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '246', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '615', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '580', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '616', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '196', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '73', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '106', '0');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '610', '1');
INSERT INTO phpBB_search_wordmatch (post_id, word_id, title_match) VALUES('42', '106', '1');
#
# TABLE: phpBB_sessions
#
DROP TABLE IF EXISTS phpBB_sessions;
CREATE TABLE phpBB_sessions(
	session_id char(32) NOT NULL,
	session_user_id mediumint(8) NOT NULL,
	session_start int(11) NOT NULL,
	session_time int(11) NOT NULL,
	session_ip char(8) NOT NULL,
	session_page int(11) NOT NULL,
	session_logged_in tinyint(1) NOT NULL, 
	PRIMARY KEY (session_id), 
	KEY session_user_id (session_user_id), 
	KEY session_id_ip_user_id (session_id, session_ip, session_user_id)
);

#
# Table Data for phpBB_sessions
#

INSERT INTO phpBB_sessions (session_id, session_user_id, session_start, session_time, session_ip, session_page, session_logged_in) VALUES('bfd7a196cf208c622f787fc404e36e59', '2', '1053873805', '1053874353', '443b8781', '0', '1');
#
# TABLE: phpBB_smilies
#
DROP TABLE IF EXISTS phpBB_smilies;
CREATE TABLE phpBB_smilies(
	smilies_id smallint(5) unsigned NOT NULL auto_increment,
	code varchar(50),
	smile_url varchar(100),
	emoticon varchar(75), 
	PRIMARY KEY (smilies_id)
);

#
# Table Data for phpBB_smilies
#

INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('1', ':D', 'icon_biggrin.gif', 'Very Happy');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('2', ':-D', 'icon_biggrin.gif', 'Very Happy');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('3', ':grin:', 'icon_biggrin.gif', 'Very Happy');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('4', ':)', 'icon_smile.gif', 'Smile');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('5', ':-)', 'icon_smile.gif', 'Smile');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('6', ':smile:', 'icon_smile.gif', 'Smile');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('7', ':(', 'icon_sad.gif', 'Sad');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('8', ':-(', 'icon_sad.gif', 'Sad');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('9', ':sad:', 'icon_sad.gif', 'Sad');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('10', ':o', 'icon_surprised.gif', 'Surprised');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('11', ':-o', 'icon_surprised.gif', 'Surprised');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('12', ':eek:', 'icon_surprised.gif', 'Surprised');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('13', ':shock:', 'icon_eek.gif', 'Shocked');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('14', ':?', 'icon_confused.gif', 'Confused');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('15', ':-?', 'icon_confused.gif', 'Confused');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('16', ':???:', 'icon_confused.gif', 'Confused');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('17', '8)', 'icon_cool.gif', 'Cool');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('18', '8-)', 'icon_cool.gif', 'Cool');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('19', ':cool:', 'icon_cool.gif', 'Cool');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('20', ':lol:', 'icon_lol.gif', 'Laughing');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('21', ':x', 'icon_mad.gif', 'Mad');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('22', ':-x', 'icon_mad.gif', 'Mad');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('23', ':mad:', 'icon_mad.gif', 'Mad');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('24', ':P', 'icon_razz.gif', 'Razz');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('25', ':-P', 'icon_razz.gif', 'Razz');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('26', ':razz:', 'icon_razz.gif', 'Razz');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('27', ':oops:', 'icon_redface.gif', 'Embarassed');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('28', ':cry:', 'icon_cry.gif', 'Crying or Very sad');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('29', ':evil:', 'icon_evil.gif', 'Evil or Very Mad');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('30', ':twisted:', 'icon_twisted.gif', 'Twisted Evil');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('31', ':roll:', 'icon_rolleyes.gif', 'Rolling Eyes');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('32', ':wink:', 'icon_wink.gif', 'Wink');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('33', ';)', 'icon_wink.gif', 'Wink');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('34', ';-)', 'icon_wink.gif', 'Wink');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('35', ':!:', 'icon_exclaim.gif', 'Exclamation');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('36', ':?:', 'icon_question.gif', 'Question');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('37', ':idea:', 'icon_idea.gif', 'Idea');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('38', ':arrow:', 'icon_arrow.gif', 'Arrow');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('39', ':|', 'icon_neutral.gif', 'Neutral');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('40', ':-|', 'icon_neutral.gif', 'Neutral');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('41', ':neutral:', 'icon_neutral.gif', 'Neutral');
INSERT INTO phpBB_smilies (smilies_id, code, smile_url, emoticon) VALUES('42', ':mrgreen:', 'icon_mrgreen.gif', 'Mr. Green');
#
# TABLE: phpBB_themes
#
DROP TABLE IF EXISTS phpBB_themes;
CREATE TABLE phpBB_themes(
	themes_id mediumint(8) unsigned NOT NULL auto_increment,
	template_name varchar(30) NOT NULL,
	style_name varchar(30) NOT NULL,
	head_stylesheet varchar(100),
	body_background varchar(100),
	body_bgcolor varchar(6),
	body_text varchar(6),
	body_link varchar(6),
	body_vlink varchar(6),
	body_alink varchar(6),
	body_hlink varchar(6),
	tr_color1 varchar(6),
	tr_color2 varchar(6),
	tr_color3 varchar(6),
	tr_class1 varchar(25),
	tr_class2 varchar(25),
	tr_class3 varchar(25),
	th_color1 varchar(6),
	th_color2 varchar(6),
	th_color3 varchar(6),
	th_class1 varchar(25),
	th_class2 varchar(25),
	th_class3 varchar(25),
	td_color1 varchar(6),
	td_color2 varchar(6),
	td_color3 varchar(6),
	td_class1 varchar(25),
	td_class2 varchar(25),
	td_class3 varchar(25),
	fontface1 varchar(50),
	fontface2 varchar(50),
	fontface3 varchar(50),
	fontsize1 tinyint(4),
	fontsize2 tinyint(4),
	fontsize3 tinyint(4),
	fontcolor1 varchar(6),
	fontcolor2 varchar(6),
	fontcolor3 varchar(6),
	span_class1 varchar(25),
	span_class2 varchar(25),
	span_class3 varchar(25),
	img_size_poll smallint(5) unsigned,
	img_size_privmsg smallint(5) unsigned, 
	PRIMARY KEY (themes_id)
);

#
# Table Data for phpBB_themes
#

INSERT INTO phpBB_themes (themes_id, template_name, style_name, head_stylesheet, body_background, body_bgcolor, body_text, body_link, body_vlink, body_alink, body_hlink, tr_color1, tr_color2, tr_color3, tr_class1, tr_class2, tr_class3, th_color1, th_color2, th_color3, th_class1, th_class2, th_class3, td_color1, td_color2, td_color3, td_class1, td_class2, td_class3, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, span_class1, span_class2, span_class3, img_size_poll, img_size_privmsg) VALUES('1', 'subSilver', 'subSilver', 'subSilver.css', '', 'E5E5E5', '000000', '006699', '5493B4', '', 'DD6900', 'EFEFEF', 'DEE3E7', 'D1D7DC', '', '', '', '98AAB1', '006699', 'FFFFFF', 'cellpic1.gif', 'cellpic3.gif', 'cellpic2.jpg', 'FAFAFA', 'FFFFFF', '', 'row1', 'row2', '', 'Verdana, Arial, Helvetica, sans-serif', 'Trebuchet MS', 'Courier, \'Courier New\', sans-serif', '10', '11', '12', '444444', '006600', 'FFA34F', '', '', '', NULL, NULL);
INSERT INTO phpBB_themes (themes_id, template_name, style_name, head_stylesheet, body_background, body_bgcolor, body_text, body_link, body_vlink, body_alink, body_hlink, tr_color1, tr_color2, tr_color3, tr_class1, tr_class2, tr_class3, th_color1, th_color2, th_color3, th_class1, th_class2, th_class3, td_color1, td_color2, td_color3, td_class1, td_class2, td_class3, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, span_class1, span_class2, span_class3, img_size_poll, img_size_privmsg) VALUES('3', 'SSDv2', 'SSDv2', 'SSDv2.css', '', '000000', '000000', '000000', '000000', '000000', '000000', 'aaaaaa', 'aaaaaa', 'aaaaaa', '', '', '', 'aaaaaa', 'aaaaaa', 'aaaaaa', '', '', '', 'aaaaaa', 'aaaaaa', 'aaaaaa', '', '', '', '', '', '', '12', '12', '12', '000000', '000000', '000000', '', '', '', NULL, NULL);
INSERT INTO phpBB_themes (themes_id, template_name, style_name, head_stylesheet, body_background, body_bgcolor, body_text, body_link, body_vlink, body_alink, body_hlink, tr_color1, tr_color2, tr_color3, tr_class1, tr_class2, tr_class3, th_color1, th_color2, th_color3, th_class1, th_class2, th_class3, td_color1, td_color2, td_color3, td_class1, td_class2, td_class3, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, span_class1, span_class2, span_class3, img_size_poll, img_size_privmsg) VALUES('4', 'fs2', 'fs2 Gold', 'fs2_gold.css', '', 'fafafa', '000000', '979900', '979900', '979900', 'c1c287', 'f5f5ed', 'f3f3e9', 'e8e8df', '', '', '', '98AAB1', '006699', 'FFFFFF', '', '', '', 'FAFAFA', 'ffffff', '', 'row1', 'row2', '', 'Verdana, Arial, Helvetica, sans-serif', 'Trebuchet MS', 'Courier, \'Courier New\', sans-serif', '10', '11', '12', '000000', '006600', 'FFA34F', '', '', '', '0', '0');
INSERT INTO phpBB_themes (themes_id, template_name, style_name, head_stylesheet, body_background, body_bgcolor, body_text, body_link, body_vlink, body_alink, body_hlink, tr_color1, tr_color2, tr_color3, tr_class1, tr_class2, tr_class3, th_color1, th_color2, th_color3, th_class1, th_class2, th_class3, td_color1, td_color2, td_color3, td_class1, td_class2, td_class3, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, span_class1, span_class2, span_class3, img_size_poll, img_size_privmsg) VALUES('5', 'fs2', 'fs2 Silver', 'fs2_silver.css', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'row1', 'row2', '', '', '', '', '10', '11', '12', '000000', '006600', 'FFA34F', '', '', '', '0', '0');
INSERT INTO phpBB_themes (themes_id, template_name, style_name, head_stylesheet, body_background, body_bgcolor, body_text, body_link, body_vlink, body_alink, body_hlink, tr_color1, tr_color2, tr_color3, tr_class1, tr_class2, tr_class3, th_color1, th_color2, th_color3, th_class1, th_class2, th_class3, td_color1, td_color2, td_color3, td_class1, td_class2, td_class3, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, span_class1, span_class2, span_class3, img_size_poll, img_size_privmsg) VALUES('6', 'fs2', 'fs2', 'fs2.css', '', 'E5E5E5', '000000', '006699', '5493B4', '', 'DD6900', 'EFEFEF', 'DEE3E7', 'D1D7DC', '', '', '', '98AAB1', '006699', 'FFFFFF', 'cellpic1.gif', 'cellpic3.gif', 'cellpic2.jpg', 'FAFAFA', 'FFFFFF', '', 'row1', 'row2', '', 'Verdana, Arial, Helvetica, sans-serif', 'Trebuchet MS', 'Courier, \'Courier New\', sans-serif', '10', '11', '12', '444444', '006600', 'FFA34F', '', '', '', '0', '0');
#
# TABLE: phpBB_themes_name
#
DROP TABLE IF EXISTS phpBB_themes_name;
CREATE TABLE phpBB_themes_name(
	themes_id smallint(5) unsigned NOT NULL,
	tr_color1_name char(50),
	tr_color2_name char(50),
	tr_color3_name char(50),
	tr_class1_name char(50),
	tr_class2_name char(50),
	tr_class3_name char(50),
	th_color1_name char(50),
	th_color2_name char(50),
	th_color3_name char(50),
	th_class1_name char(50),
	th_class2_name char(50),
	th_class3_name char(50),
	td_color1_name char(50),
	td_color2_name char(50),
	td_color3_name char(50),
	td_class1_name char(50),
	td_class2_name char(50),
	td_class3_name char(50),
	fontface1_name char(50),
	fontface2_name char(50),
	fontface3_name char(50),
	fontsize1_name char(50),
	fontsize2_name char(50),
	fontsize3_name char(50),
	fontcolor1_name char(50),
	fontcolor2_name char(50),
	fontcolor3_name char(50),
	span_class1_name char(50),
	span_class2_name char(50),
	span_class3_name char(50), 
	PRIMARY KEY (themes_id)
);

#
# Table Data for phpBB_themes_name
#

INSERT INTO phpBB_themes_name (themes_id, tr_color1_name, tr_color2_name, tr_color3_name, tr_class1_name, tr_class2_name, tr_class3_name, th_color1_name, th_color2_name, th_color3_name, th_class1_name, th_class2_name, th_class3_name, td_color1_name, td_color2_name, td_color3_name, td_class1_name, td_class2_name, td_class3_name, fontface1_name, fontface2_name, fontface3_name, fontsize1_name, fontsize2_name, fontsize3_name, fontcolor1_name, fontcolor2_name, fontcolor3_name, span_class1_name, span_class2_name, span_class3_name) VALUES('1', 'The lightest row colour', 'The medium row color', 'The darkest row colour', '', '', '', 'Border round the whole page', 'Outer table border', 'Inner table border', 'Silver gradient picture', 'Blue gradient picture', 'Fade-out gradient on index', 'Background for quote boxes', 'All white areas', '', 'Background for topic posts', '2nd background for topic posts', '', 'Main fonts', 'Additional topic title font', 'Form fonts', 'Smallest font size', 'Medium font size', 'Normal font size (post body etc)', 'Quote & copyright text', 'Code text colour', 'Main table header text colour', '', '', '');
INSERT INTO phpBB_themes_name (themes_id, tr_color1_name, tr_color2_name, tr_color3_name, tr_class1_name, tr_class2_name, tr_class3_name, th_color1_name, th_color2_name, th_color3_name, th_class1_name, th_class2_name, th_class3_name, td_color1_name, td_color2_name, td_color3_name, td_class1_name, td_class2_name, td_class3_name, fontface1_name, fontface2_name, fontface3_name, fontsize1_name, fontsize2_name, fontsize3_name, fontcolor1_name, fontcolor2_name, fontcolor3_name, span_class1_name, span_class2_name, span_class3_name) VALUES('3', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
#
# TABLE: phpBB_topics
#
DROP TABLE IF EXISTS phpBB_topics;
CREATE TABLE phpBB_topics(
	topic_id mediumint(8) unsigned NOT NULL auto_increment,
	forum_id smallint(8) unsigned NOT NULL,
	topic_title char(60) NOT NULL,
	topic_poster mediumint(8) NOT NULL,
	topic_time int(11) NOT NULL,
	topic_views mediumint(8) unsigned NOT NULL,
	topic_replies mediumint(8) unsigned NOT NULL,
	topic_status tinyint(3) NOT NULL,
	topic_vote tinyint(1) NOT NULL,
	topic_type tinyint(3) NOT NULL,
	topic_first_post_id mediumint(8) unsigned NOT NULL,
	topic_last_post_id mediumint(8) unsigned NOT NULL,
	topic_moved_id mediumint(8) unsigned NOT NULL, 
	PRIMARY KEY (topic_id), 
	KEY forum_id (forum_id), 
	KEY topic_moved_id (topic_moved_id), 
	KEY topic_status (topic_status), 
	KEY topic_type (topic_type)
);

#
# Table Data for phpBB_topics
#

INSERT INTO phpBB_topics (topic_id, forum_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, topic_status, topic_vote, topic_type, topic_first_post_id, topic_last_post_id, topic_moved_id) VALUES('8', '15', 'Where\'s BattleTech?', '5', '1052039646', '7', '1', '0', '0', '0', '13', '16', '0');
INSERT INTO phpBB_topics (topic_id, forum_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, topic_status, topic_vote, topic_type, topic_first_post_id, topic_last_post_id, topic_moved_id) VALUES('6', '1', 'StarShater Dev. V2 goes LIVE!', '2', '1051814868', '16', '2', '0', '0', '0', '9', '11', '0');
INSERT INTO phpBB_topics (topic_id, forum_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, topic_status, topic_vote, topic_type, topic_first_post_id, topic_last_post_id, topic_moved_id) VALUES('9', '1', 'Upload Troubles', '6', '1052080979', '13', '1', '0', '0', '0', '14', '19', '0');
INSERT INTO phpBB_topics (topic_id, forum_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, topic_status, topic_vote, topic_type, topic_first_post_id, topic_last_post_id, topic_moved_id) VALUES('7', '1', 'idea for creating ships', '4', '1052012545', '41', '6', '0', '0', '0', '12', '30', '0');
INSERT INTO phpBB_topics (topic_id, forum_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, topic_status, topic_vote, topic_type, topic_first_post_id, topic_last_post_id, topic_moved_id) VALUES('10', '16', 'BattleTech brainstorming', '5', '1052243854', '10', '1', '0', '0', '0', '17', '18', '0');
INSERT INTO phpBB_topics (topic_id, forum_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, topic_status, topic_vote, topic_type, topic_first_post_id, topic_last_post_id, topic_moved_id) VALUES('11', '1', 'StarShatter Dev. V2 latest info.', '2', '1052539895', '11', '1', '0', '0', '1', '23', '24', '0');
INSERT INTO phpBB_topics (topic_id, forum_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, topic_status, topic_vote, topic_type, topic_first_post_id, topic_last_post_id, topic_moved_id) VALUES('12', '1', 'Necro, Feedback about your ASU fleet.', '2', '1052708864', '35', '7', '0', '1', '0', '25', '35', '0');
INSERT INTO phpBB_topics (topic_id, forum_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, topic_status, topic_vote, topic_type, topic_first_post_id, topic_last_post_id, topic_moved_id) VALUES('13', '9', 'Corodius Entertainment website online', '2', '1052880548', '3', '0', '0', '0', '0', '29', '29', '0');
INSERT INTO phpBB_topics (topic_id, forum_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, topic_status, topic_vote, topic_type, topic_first_post_id, topic_last_post_id, topic_moved_id) VALUES('14', '3', 'Asteriod Fields', '7', '1053370263', '23', '6', '0', '0', '0', '36', '42', '0');
#
# TABLE: phpBB_topics_watch
#
DROP TABLE IF EXISTS phpBB_topics_watch;
CREATE TABLE phpBB_topics_watch(
	topic_id mediumint(8) unsigned NOT NULL,
	user_id mediumint(8) NOT NULL,
	notify_status tinyint(1) NOT NULL, 
	KEY topic_id (topic_id), 
	KEY user_id (user_id), 
	KEY notify_status (notify_status)
);
#
# TABLE: phpBB_user_group
#
DROP TABLE IF EXISTS phpBB_user_group;
CREATE TABLE phpBB_user_group(
	group_id mediumint(8) NOT NULL,
	user_id mediumint(8) NOT NULL,
	user_pending tinyint(1), 
	KEY group_id (group_id), 
	KEY user_id (user_id)
);

#
# Table Data for phpBB_user_group
#

INSERT INTO phpBB_user_group (group_id, user_id, user_pending) VALUES('1', '-1', '0');
INSERT INTO phpBB_user_group (group_id, user_id, user_pending) VALUES('2', '2', '0');
INSERT INTO phpBB_user_group (group_id, user_id, user_pending) VALUES('3', '3', '0');
INSERT INTO phpBB_user_group (group_id, user_id, user_pending) VALUES('4', '3', '0');
INSERT INTO phpBB_user_group (group_id, user_id, user_pending) VALUES('5', '4', '0');
INSERT INTO phpBB_user_group (group_id, user_id, user_pending) VALUES('6', '5', '0');
INSERT INTO phpBB_user_group (group_id, user_id, user_pending) VALUES('7', '6', '0');
INSERT INTO phpBB_user_group (group_id, user_id, user_pending) VALUES('8', '7', '0');
#
# TABLE: phpBB_users
#
DROP TABLE IF EXISTS phpBB_users;
CREATE TABLE phpBB_users(
	user_id mediumint(8) NOT NULL,
	user_active tinyint(1) DEFAULT '1',
	username varchar(25) NOT NULL,
	user_password varchar(32) NOT NULL,
	user_session_time int(11) NOT NULL,
	user_session_page smallint(5) NOT NULL,
	user_lastvisit int(11) NOT NULL,
	user_regdate int(11) NOT NULL,
	user_level tinyint(4),
	user_posts mediumint(8) unsigned NOT NULL,
	user_timezone decimal(5,2) DEFAULT '0.00' NOT NULL,
	user_style tinyint(4),
	user_lang varchar(255),
	user_dateformat varchar(14) DEFAULT 'd M Y H:i' NOT NULL,
	user_new_privmsg smallint(5) unsigned NOT NULL,
	user_unread_privmsg smallint(5) unsigned NOT NULL,
	user_last_privmsg int(11) NOT NULL,
	user_emailtime int(11),
	user_viewemail tinyint(1),
	user_attachsig tinyint(1),
	user_allowhtml tinyint(1) DEFAULT '1',
	user_allowbbcode tinyint(1) DEFAULT '1',
	user_allowsmile tinyint(1) DEFAULT '1',
	user_allowavatar tinyint(1) DEFAULT '1' NOT NULL,
	user_allow_pm tinyint(1) DEFAULT '1' NOT NULL,
	user_allow_viewonline tinyint(1) DEFAULT '1' NOT NULL,
	user_notify tinyint(1) DEFAULT '1' NOT NULL,
	user_notify_pm tinyint(1) NOT NULL,
	user_popup_pm tinyint(1) NOT NULL,
	user_rank int(11),
	user_avatar varchar(100),
	user_avatar_type tinyint(4) NOT NULL,
	user_email varchar(255),
	user_icq varchar(15),
	user_website varchar(100),
	user_from varchar(100),
	user_sig text,
	user_sig_bbcode_uid varchar(10),
	user_aim varchar(255),
	user_yim varchar(255),
	user_msnm varchar(255),
	user_occ varchar(100),
	user_interests varchar(255),
	user_actkey varchar(32),
	user_newpasswd varchar(32), 
	PRIMARY KEY (user_id), 
	KEY user_session_time (user_session_time)
);

#
# Table Data for phpBB_users
#

INSERT INTO phpBB_users (user_id, user_active, username, user_password, user_session_time, user_session_page, user_lastvisit, user_regdate, user_level, user_posts, user_timezone, user_style, user_lang, user_dateformat, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_emailtime, user_viewemail, user_attachsig, user_allowhtml, user_allowbbcode, user_allowsmile, user_allowavatar, user_allow_pm, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_rank, user_avatar, user_avatar_type, user_email, user_icq, user_website, user_from, user_sig, user_sig_bbcode_uid, user_aim, user_yim, user_msnm, user_occ, user_interests, user_actkey, user_newpasswd) VALUES('-1', '0', 'Anonymous', '', '0', '0', '0', '1049031528', '0', '0', '0.00', NULL, '', '', '0', '0', '0', NULL, '0', '0', '0', '1', '1', '1', '0', '1', '0', '1', '0', NULL, '', '0', '', '', '', '', '', NULL, '', '', '', '', '', '', '');
INSERT INTO phpBB_users (user_id, user_active, username, user_password, user_session_time, user_session_page, user_lastvisit, user_regdate, user_level, user_posts, user_timezone, user_style, user_lang, user_dateformat, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_emailtime, user_viewemail, user_attachsig, user_allowhtml, user_allowbbcode, user_allowsmile, user_allowavatar, user_allow_pm, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_rank, user_avatar, user_avatar_type, user_email, user_icq, user_website, user_from, user_sig, user_sig_bbcode_uid, user_aim, user_yim, user_msnm, user_occ, user_interests, user_actkey, user_newpasswd) VALUES('2', '1', 'Pheagey', '', '1053874353', '0', '1053831117', '1049031528', '1', '17', '0.00', '4', 'english', 'd M Y h:i a', '0', '0', '1050792471', NULL, '0', '1', '1', '1', '1', '1', '1', '1', '0', '1', '0', '1', '', '0', 'p_grean@hotmail.com', '', 'http://ssd.servehttp.com/ssdv2/', 'Mid.-Fl, USA', 'I picked up a magic 8 ball the other day and it said:\'Outlook not so good.\'
I replyed \'Yea, but Microsoft ships it anyways.\'

Starshatter Dev.
http://ssd.servehttp.com/', 'e1efb57dfc', '', 'Pheagey', 'pheageygrean@hotmail.com', 'student, etc', 'cars, computers, chicks,', '', '');
INSERT INTO phpBB_users (user_id, user_active, username, user_password, user_session_time, user_session_page, user_lastvisit, user_regdate, user_level, user_posts, user_timezone, user_style, user_lang, user_dateformat, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_emailtime, user_viewemail, user_attachsig, user_allowhtml, user_allowbbcode, user_allowsmile, user_allowavatar, user_allow_pm, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_rank, user_avatar, user_avatar_type, user_email, user_icq, user_website, user_from, user_sig, user_sig_bbcode_uid, user_aim, user_yim, user_msnm, user_occ, user_interests, user_actkey, user_newpasswd) VALUES('3', '1', 'Lord Darkstar', '', '1052860945', '1', '1052576856', '1049689120', '1', '3', '10.00', '3', 'english', 'D M d, Y g:i a', '2', '0', '1053698997', NULL, '0', '1', '0', '1', '1', '1', '1', '1', '0', '1', '1', '0', '', '0', 'corodius@softhome.net', '57871978', '', '', '', '', 'CladaraCorodius', 'cladacoro', 'corodius@msn.com', '', '', '', NULL);
INSERT INTO phpBB_users (user_id, user_active, username, user_password, user_session_time, user_session_page, user_lastvisit, user_regdate, user_level, user_posts, user_timezone, user_style, user_lang, user_dateformat, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_emailtime, user_viewemail, user_attachsig, user_allowhtml, user_allowbbcode, user_allowsmile, user_allowavatar, user_allow_pm, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_rank, user_avatar, user_avatar_type, user_email, user_icq, user_website, user_from, user_sig, user_sig_bbcode_uid, user_aim, user_yim, user_msnm, user_occ, user_interests, user_actkey, user_newpasswd) VALUES('4', '1', 'se5a', '', '1053810798', '1', '1053222849', '1051856397', '0', '5', '-12.00', '4', 'english', 'D M d, Y g:i a', '0', '0', '0', NULL, '1', '1', '0', '1', '1', '1', '1', '1', '0', '1', '1', '0', '', '0', 'scout_e5@hotmail.com', '124746912', '', 'New Zealand', '', '', '', 'scout_e5', 'scout_e5@hotmail.com', 'fabricate trampolines and other stuff.', '', '', NULL);
INSERT INTO phpBB_users (user_id, user_active, username, user_password, user_session_time, user_session_page, user_lastvisit, user_regdate, user_level, user_posts, user_timezone, user_style, user_lang, user_dateformat, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_emailtime, user_viewemail, user_attachsig, user_allowhtml, user_allowbbcode, user_allowsmile, user_allowavatar, user_allow_pm, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_rank, user_avatar, user_avatar_type, user_email, user_icq, user_website, user_from, user_sig, user_sig_bbcode_uid, user_aim, user_yim, user_msnm, user_occ, user_interests, user_actkey, user_newpasswd) VALUES('5', '1', 'Matti Kuokkanen', '', '1053098190', '0', '1052983063', '1052039121', '0', '2', '2.00', '4', 'english', 'D M d, Y g:i a', '0', '0', '0', NULL, '1', '1', '0', '1', '1', '1', '1', '1', '0', '1', '1', '0', '', '0', 'matti_kuokkanen@yahoo.co.uk', '', '', '', '\"Battlefield and bed, there I perform best\" - Peter Davion', '95a218596a', '', '', '', '', '', '', NULL);
INSERT INTO phpBB_users (user_id, user_active, username, user_password, user_session_time, user_session_page, user_lastvisit, user_regdate, user_level, user_posts, user_timezone, user_style, user_lang, user_dateformat, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_emailtime, user_viewemail, user_attachsig, user_allowhtml, user_allowbbcode, user_allowsmile, user_allowavatar, user_allow_pm, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_rank, user_avatar, user_avatar_type, user_email, user_icq, user_website, user_from, user_sig, user_sig_bbcode_uid, user_aim, user_yim, user_msnm, user_occ, user_interests, user_actkey, user_newpasswd) VALUES('6', '1', 'Necromancer', '', '1053712821', '0', '1053702960', '1052078700', '0', '10', '0.00', '3', 'english', 'D M d, Y g:i a', '0', '0', '1052752588', NULL, '0', '1', '0', '1', '1', '1', '1', '1', '0', '1', '1', '0', '', '0', 'ARobb73@cox.net', '', '', 'Virginia', '', '', '', '', '', 'Programmer/Analyst', 'Digital Art, Equestrian Riding, Modding Games', '', NULL);
INSERT INTO phpBB_users (user_id, user_active, username, user_password, user_session_time, user_session_page, user_lastvisit, user_regdate, user_level, user_posts, user_timezone, user_style, user_lang, user_dateformat, user_new_privmsg, user_unread_privmsg, user_last_privmsg, user_emailtime, user_viewemail, user_attachsig, user_allowhtml, user_allowbbcode, user_allowsmile, user_allowavatar, user_allow_pm, user_allow_viewonline, user_notify, user_notify_pm, user_popup_pm, user_rank, user_avatar, user_avatar_type, user_email, user_icq, user_website, user_from, user_sig, user_sig_bbcode_uid, user_aim, user_yim, user_msnm, user_occ, user_interests, user_actkey, user_newpasswd) VALUES('7', '1', 'Game_Ender', '', '1053636347', '0', '1053607377', '1053370018', '0', '3', '0.00', '3', 'english', 'D M d, Y g:i a', '0', '0', '0', NULL, '1', '1', '0', '1', '1', '1', '1', '1', '0', '1', '1', '0', '', '0', 'game_ender67@hotmail.com', '', '', '', '', '', '', '', '', '', '', '', NULL);
#
# TABLE: phpBB_vote_desc
#
DROP TABLE IF EXISTS phpBB_vote_desc;
CREATE TABLE phpBB_vote_desc(
	vote_id mediumint(8) unsigned NOT NULL auto_increment,
	topic_id mediumint(8) unsigned NOT NULL,
	vote_text text NOT NULL,
	vote_start int(11) NOT NULL,
	vote_length int(11) NOT NULL, 
	PRIMARY KEY (vote_id), 
	KEY topic_id (topic_id)
);

#
# Table Data for phpBB_vote_desc
#

INSERT INTO phpBB_vote_desc (vote_id, topic_id, vote_text, vote_start, vote_length) VALUES('1', '12', 'What do you think of Necro\'s ASU fleet?', '1052708864', '0');
#
# TABLE: phpBB_vote_results
#
DROP TABLE IF EXISTS phpBB_vote_results;
CREATE TABLE phpBB_vote_results(
	vote_id mediumint(8) unsigned NOT NULL,
	vote_option_id tinyint(4) unsigned NOT NULL,
	vote_option_text varchar(255) NOT NULL,
	vote_result int(11) NOT NULL, 
	KEY vote_option_id (vote_option_id), 
	KEY vote_id (vote_id)
);

#
# Table Data for phpBB_vote_results
#

INSERT INTO phpBB_vote_results (vote_id, vote_option_id, vote_option_text, vote_result) VALUES('1', '1', 'Great!', '1');
INSERT INTO phpBB_vote_results (vote_id, vote_option_id, vote_option_text, vote_result) VALUES('1', '2', 'Good, needs a little work thought.', '0');
INSERT INTO phpBB_vote_results (vote_id, vote_option_id, vote_option_text, vote_result) VALUES('1', '3', 'It\'s ok.', '0');
INSERT INTO phpBB_vote_results (vote_id, vote_option_id, vote_option_text, vote_result) VALUES('1', '4', 'Mmm, it\'s crap.', '0');
INSERT INTO phpBB_vote_results (vote_id, vote_option_id, vote_option_text, vote_result) VALUES('1', '5', 'Give it up!', '0');
#
# TABLE: phpBB_vote_voters
#
DROP TABLE IF EXISTS phpBB_vote_voters;
CREATE TABLE phpBB_vote_voters(
	vote_id mediumint(8) unsigned NOT NULL,
	vote_user_id mediumint(8) NOT NULL,
	vote_user_ip char(8) NOT NULL, 
	KEY vote_id (vote_id), 
	KEY vote_user_id (vote_user_id), 
	KEY vote_user_ip (vote_user_ip)
);

#
# Table Data for phpBB_vote_voters
#

INSERT INTO phpBB_vote_voters (vote_id, vote_user_id, vote_user_ip) VALUES('1', '2', '443b8781');
#
# TABLE: phpBB_words
#
DROP TABLE IF EXISTS phpBB_words;
CREATE TABLE phpBB_words(
	word_id mediumint(8) unsigned NOT NULL auto_increment,
	word char(100) NOT NULL,
	replacement char(100) NOT NULL, 
	PRIMARY KEY (word_id)
);
