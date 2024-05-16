<?php
$CONFIG = array (
  'datadirectory' => '/home/user-data/owncloud',
  'instanceid' => 'oc2741855a2e',
  'forcessl' => true,
  'overwritewebroot' => '/cloud',
  'overwrite.cli.url' => 'https://mail.hadathah.org/cloud',
  'user_backends' => 
  array (
    0 => 
    array (
      'class' => '\\OCA\\UserExternal\\IMAP',
      'arguments' => 
      array (
        0 => '127.0.0.1',
        1 => 143,
        2 => NULL,
        3 => NULL,
        4 => false,
        5 => false,
      ),
    ),
  ),
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'mail_smtpmode' => 'sendmail',
  'mail_smtpsecure' => '',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => false,
  'mail_smtphost' => '',
  'mail_smtpport' => '',
  'mail_smtpname' => '',
  'mail_smtppassword' => '',
  'mail_from_address' => 'administrator',
  'passwordsalt' => 'kqpRMlfyFI00q9H5nSwavvYa1qKWxI',
  'secret' => '/MaxtRVe7S3BQLbtQyaUjOz6KKVbu2DScUAcK5OdN+V1DLFg',
  'trusted_domains' => 
  array (
    0 => 'mail.hadathah.org',
  ),
  'dbtype' => 'sqlite3',
  'version' => '26.0.12.2',
  'installed' => true,
  'config_is_read_only' => true,
  'logtimezone' => 'Asia/Riyadh',
  'logdateformat' => 'Y-m-d H:i:s',
  'mail_domain' => 'mail.hadathah.org',
);