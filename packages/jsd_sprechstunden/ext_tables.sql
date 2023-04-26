#
# Table structure for table 'tx_jsdsprechstunden_domain_model_sprechstunden'
#
CREATE TABLE tx_jsdsprechstunden_domain_model_sprechstunden (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	auswahlname varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	einrichtung varchar(255) DEFAULT '' NOT NULL,
	gglmaplink varchar(255) DEFAULT '' NOT NULL,
	beschreibung text,
	termin_title varchar(255) DEFAULT '' NOT NULL,
	termin_email_title varchar(255) DEFAULT '' NOT NULL,
	termin_email_link varchar(255) DEFAULT '' NOT NULL,
	termin_link_title varchar(255) DEFAULT '' NOT NULL,
	termin_link varchar(255) DEFAULT '' NOT NULL,
	termin_tel_link varchar(255) DEFAULT '' NOT NULL,
	termin_tel varchar(255) DEFAULT '' NOT NULL,
	termin_zeiten_title varchar(255) DEFAULT '' NOT NULL,
	termin_zeiten text,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted smallint(5) unsigned DEFAULT '0' NOT NULL,
	hidden smallint(5) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state smallint(6) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,
	l10n_state text,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_jsdsprechstunden_domain_model_sprechstunden'
#
CREATE TABLE tx_jsdsprechstunden_domain_model_sprechstunden (
	categories int(11) unsigned DEFAULT '0' NOT NULL
);
