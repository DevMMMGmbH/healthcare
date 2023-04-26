CREATE TABLE tt_content (
    tx_jsdmodule_content_element_parent int(11) unsigned DEFAULT '0' NOT NULL,
    KEY tx_jsdmodule_content_element_parent (tx_jsdmodule_content_element_parent,pid,deleted),
    tx_jsdmodule_akkordeon int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_bereichsteaser int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_bild_text_teaser int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_bildergalerie int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_bilderkachel int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_downloads int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_footer int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_highlight_teaser int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_image_slider int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_infobox int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_jsdmodgmapbvgyt int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_kontakt int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_leichtsprache int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_leistungen int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_leitbilder int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_linkliste int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_navigation int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_options tinytext,
    tx_jsdmodule_schnellzugriffsteaser int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_teaser int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_zahltext int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_zitattext int(11) unsigned DEFAULT '0' NOT NULL
);
CREATE TABLE tx_jsdmodule_akkordeon (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_title tinytext,
    tx_jsdmodule_content text,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_bereichsteaser (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_header tinytext,
    tx_jsdmodule_teaser text,
    tx_jsdmodule_button tinytext,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_bild_text_teaser (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_header tinytext,
    tx_jsdmodule_topline tinytext,
    tx_jsdmodule_teaser text,
    tx_jsdmodule_button tinytext,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_bildergalerie (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_caption tinytext,
    tx_jsdmodule_copyright tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_bilderkachel (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_title tinytext,
    tx_jsdmodule_teaser text,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_link_text tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_downloads (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_description tinytext,
    tx_jsdmodule_file int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_footer (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_footer_teaser int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_footer_menu_a_title tinytext,
    tx_jsdmodule_footer_menu_a_link tinytext,
    tx_jsdmodule_footer_menu_b_title tinytext,
    tx_jsdmodule_footer_menu_b_link tinytext,
    tx_jsdmodule_footer_menu_c_title tinytext,
    tx_jsdmodule_footer_menu_c_link tinytext,
    tx_jsdmodule_footer_menu_d_link tinytext,
    tx_jsdmodule_footer_sm_icons int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_footer_gb_link_a tinytext,
    tx_jsdmodule_footer_gb_link_b tinytext,
    tx_jsdmodule_footer_gb_link_c tinytext,
    tx_jsdmodule_footer_gb_link_d tinytext,
    tx_jsdmodule_footer_gb_link_e tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_highlight_teaser (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_header tinytext,
    tx_jsdmodule_topline tinytext,
    tx_jsdmodule_teaser text,
    tx_jsdmodule_button tinytext,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_options int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_image_slider (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_header tinytext,
    tx_jsdmodule_teaser text,
    tx_jsdmodule_button tinytext,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_infobox (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_text text,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_jsdmodgmapbvgyt (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_jsdmodgmapbvgyt_options tinytext,
    tx_jsdmodule_jsdmodgmapbvgyt_address tinytext,
    tx_jsdmodule_jsdmodgmapbvgyt_video tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_kontakt (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_kontakt_header tinytext,
    tx_jsdmodule_kontakt_rtetext text,
    tx_jsdmodule_kontakt_cta_text tinytext,
    tx_jsdmodule_kontakt_cta_link tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_leichtsprache (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_bodytext text,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_image_option int(11) DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_leistungen (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_title tinytext,
    tx_jsdmodule_teaser text,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_link_text tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_leitbilder (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_leitbild text,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_linkliste (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_title tinytext,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_link_type int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_link_text text,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_navigation (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_pidinrootline tinytext,
    tx_jsdmodule_pages tinytext,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_content_element int(11) unsigned DEFAULT '0' NOT NULL,
    tx_jsdmodule_navigation_loginsimplespeak tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_schnellzugriffsteaser (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_header tinytext,
    tx_jsdmodule_teaser text,
    tx_jsdmodule_button tinytext,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_teaser (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_header tinytext,
    tx_jsdmodule_text text,
    tx_jsdmodule_button tinytext,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_warnhinweise (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_header tinytext,
    tx_jsdmodule_teaser text,
    tx_jsdmodule_button tinytext,
    tx_jsdmodule_link tinytext,
    tx_jsdmodule_image int(11) unsigned DEFAULT '0' NOT NULL,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_zahltext (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_zahl tinytext,
    tx_jsdmodule_text tinytext,
    KEY language (l10n_parent,sys_language_uid)
);
CREATE TABLE tx_jsdmodule_zitattext (
    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_shortversion int(11) DEFAULT '0' NOT NULL,
    tx_jsdmodule_zitat text,
    tx_jsdmodule_zitatcopy tinytext,
    tx_jsdmodule_options tinytext,
    tx_jsdmodule_text text,
    KEY language (l10n_parent,sys_language_uid)
);
