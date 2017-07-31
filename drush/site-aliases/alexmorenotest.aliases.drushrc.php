<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site alexmorenotest, environment dev
$aliases['dev'] = array(
  'root' => '/var/www/html/alexmorenotest.dev/docroot',
  'ac-site' => 'alexmorenotest',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'alexmorenotestfjufxhs7yq.devcloud.acquia-sites.com',
  'remote-host' => 'alexmorenotestfjufxhs7yq.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'alexmorenotest.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['dev.livedev'] = array(
  'parent' => '@alexmorenotest.dev',
  'root' => '/mnt/gfs/alexmorenotest.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site alexmorenotest, environment test
$aliases['test'] = array(
  'root' => '/var/www/html/alexmorenotest.test/docroot',
  'ac-site' => 'alexmorenotest',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'alexmorenotest82wgqmreu4.devcloud.acquia-sites.com',
  'remote-host' => 'alexmorenotest82wgqmreu4.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'alexmorenotest.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  )
);
$aliases['test.livedev'] = array(
  'parent' => '@alexmorenotest.test',
  'root' => '/mnt/gfs/alexmorenotest.test/livedev/docroot',
);
