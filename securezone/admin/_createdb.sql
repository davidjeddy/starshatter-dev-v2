# File: createdb.sql
# Script Name: vSignup 2.1
# Author: Vincent Ryan Ong
# Email: support@beanbug.net
#
# Description:
# vSignup is a member registration script which utilizes vAuthenticate
# for its security handling. This handy script features email verification,
# sending confirmation email message, restricting email domains that are 
# allowed for membership, and much more.
#
# This script is a freeware but if you want to give donations,
# please send your checks (coz cash will probably be stolen in the
# post office) them to:
#
# Vincent Ryan Ong
# Rm. 440 Wellington Bldg.
# 655 Condesa St. Binondo, Manila
# Philippines, 1006

#
# AUTHUSER
#

CREATE TABLE authuser (
  id int(11) NOT NULL auto_increment,
  uname varchar(25) NOT NULL default '',
  passwd varchar(25) NOT NULL default '',
  team varchar(25) NOT NULL default '',
  level int(4) NOT NULL default '0',
  status varchar(10) NOT NULL default '',
  lastlogin datetime default NULL,
  logincount int(11) default NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM;

#
# Dumping data for table 'authuser'
#

INSERT INTO authuser VALUES ( '1', 'sa', '', 'Admin', '1', 'active', '', 0);
INSERT INTO authuser VALUES ( '2', 'admin', '', 'Admin', '1', 'active', '', 0);
INSERT INTO authuser VALUES ( '3', 'test', 'test', 'Temporary', '999', 'active', '', 0);


#
# AUTHTEAM
#

CREATE TABLE authteam (
   id int(4) NOT NULL auto_increment,
   teamname varchar(25) NOT NULL,
   teamlead varchar(25) NOT NULL,
   status varchar(10) NOT NULL,
   PRIMARY KEY (id),
   KEY teamname (teamname, teamlead)
);

#
# Dumping data for table 'authteam'
#

INSERT INTO authteam VALUES ( '1', 'Ungrouped', 'sa', 'active');
INSERT INTO authteam VALUES ( '2', 'Admin', 'sa', 'active');
INSERT INTO authteam VALUES ( '3', 'Temporary', 'sa', 'active');

#
# Table structure for table `signup`
#

CREATE TABLE signup (
  id int(11) NOT NULL auto_increment,
  uname varchar(25) NOT NULL default '',
  fname varchar(30) NOT NULL default '',
  lname varchar(20) NOT NULL default '',
  email varchar(45) NOT NULL default '',
  country varchar(20) default NULL,
  zipcode bigint(20) default NULL,
  datejoined datetime NOT NULL default '0000-00-00 00:00:00',
  confirmkey varchar(32) NOT NULL default '',
  PRIMARY KEY  (id)
) TYPE=MyISAM;

#
# Dumping data for table `signup`
#

# --------------------------------------------------------

#
# Table structure for table `emailer`
#

CREATE TABLE emailer (
  id int(11) NOT NULL auto_increment,
  profile varchar(20) NOT NULL default '',
  email varchar(40) NOT NULL default '',
  name varchar(50) NOT NULL default '',
  subject varchar(100) NOT NULL default '',
  emailmessage text NOT NULL,
  PRIMARY KEY  (id),
  UNIQUE KEY id (id,profile),
  KEY profile (profile)
) TYPE=MyISAM;

#
# Dumping data for table `emailer`
#

INSERT INTO emailer VALUES (2, 'Default', 'membership@domain.com', 'Membership', 'Your Membership Confirmation', 'Hi!\r\n\r\nPlease click [[<-here->]] to confirm your membership. If your email client does not support HTML messages, open a new browser then copy this URL ([[--]]) and paste it in the location bar. \r\n\r\nRegards,\r\nMembership Department');
INSERT INTO emailer VALUES (5, 'Password Reminder', 'membership@domain.com', 'Membership', 'Your Password Reminder', 'Hello!\r\n\r\nYou have recently requested to have your password emailed to this address. \r\n\r\nYour password is: [[--]]\r\n\r\nIf you think that you did not request for this info, please disregard this message and accept our apologies for taking your time.\r\n\r\nThank you and good day!\r\n\r\nSincerely,\r\nMembership Department');
# --------------------------------------------------------

#
# Table structure for table `signupsetup`
#

CREATE TABLE signupsetup (
  id int(11) NOT NULL auto_increment,
  validemail text,
  profile varchar(20) NOT NULL default '',
  autoapprove tinyint(4) NOT NULL default '0',
  autosend tinyint(4) NOT NULL default '0',
  autosendadmin tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (id),
  UNIQUE KEY id (id)
) TYPE=MyISAM;

#
# Dumping data for table `signupsetup`
#

INSERT INTO signupsetup VALUES (1, '', 'Default', 0, 1, 0);
