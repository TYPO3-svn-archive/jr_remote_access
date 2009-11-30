#
# Table structure for table 'tx_jrremoteaccess_domain_model_customer'
#
CREATE TABLE tx_jrremoteaccess_domain_model_customer (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,

	name varchar(200) DEFAULT '' NOT NULL,
	description tinytext,
	api_key varchar(64) DEFAULT '' NOT NULL,
	histories int(11) DEFAULT '0' NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);

#
# Table structure for table 'tx_jrremoteaccess_domain_model_history'
#
CREATE TABLE tx_jrremoteaccess_domain_model_history (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,

	customer int(11) DEFAULT '0' NOT NULL,
	access int(11) NOT NULL,
	ip_address varchar(15) DEFAULT '' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid)
);

