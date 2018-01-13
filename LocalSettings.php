<?php
# This file was automatically generated by the MediaWiki 1.30.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
        exit;
}
# Load PrivateSettings (e.g. wgDBpassword)
require_once( "/var/www/html/wiki/config/PrivateSettings.php" );

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "World Wiki";
$wgMetaNamespace = "Project";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/wiki";
$wgScriptExtension = ".php";
$wgArticlePath = "{$wgScriptPath}/$1";;

## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://wiki.org.uk";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/images/b/bc/Wiki.png";
$wgFavicon = "$wgResourceBasePath/images/b/bc/Wiki.png";
## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "staff@wiki.org.uk";
$wgPasswordSender = "worldwiki@wiki.org.uk";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "127.0.0.1";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=utf8";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by-sa/4.0/";
$wgRightsText = "Creative Commons Attribution-ShareAlike";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'CologneBlue' );
wfLoadSkin( 'Modern' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );

$wgRawHtml = true;

# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtensions('ExtensionName');
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'Cite' );
require_once "$IP/extensions/Scribunto/Scribunto.php";
$wgScribuntoDefaultEngine = 'luastandalone';
wfLoadExtension( 'Echo' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'LocalisationUpdate' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'TitleBlacklist' );
require_once "$IP/extensions/TorBlock/TorBlock.php";
wfLoadSkin( 'Metrolook' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'CheckUser' );
wfLoadExtension( 'AbuseFilter' );
wfLoadExtension( 'AntiSpoof' );
# End of automatically generated settings.
# Add more configuration options below.
$wgMetrolookDisableAvatar = true;
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['*']['abusefilter-log-detail'] = true;
$wgGroupPermissions['*']['abusefilter-view'] = true;
$wgGroupPermissions['*']['abusefilter-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['user']['move'] = false;
$wgGroupPermissions['sysop']['move'] = true;
$wgGroupPermissions['bureaucrat']['upload'] = true;
$wgGroupPermissions['sysop']['createtalk'] = true;
$wgGroupPermissions['user']['createtalk'] = false;
$wgGroupPermissions['user']['upload'] = false;
$wgGroupPermissions['godpowerz']['edit'] = false;

#ninja group - Arthur
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;
$wgGroupPermissions['ninja']['hideuser'] = true;
$wgGroupPermissions['ninja']['unblockself'] = true;
$wgGroupPermissions['ninja']['suppressrevision'] = true;
$wgGroupPermissions['ninja']['deletelogentry'] = true;
$wgGroupPermissions['ninja']['deleterevision'] = true;
$wgGroupPermissions['ninja']['viewsuppressed'] = true;

#jokes
$wgGroupPermissions['unblockable']['edit'] = false;
$wgGroupPermissions['advancedpermissions']['edit'] = false;
$wgGroupPermissions['expert']['edit'] = false;

#block
$wgCookieSetOnAutoblock = true;

#TorBlock - TNT
$wgTorLoadNodes = true;
$wgTorIPs = [ '172.31.3.168' ];
$wgGroupPermissions['*']['torunblocked'] = false;
$wgGroupPermissions['user']['torunblocked'] = false;
#disable API
$wgEnableAPI = true;

#for mobile view
wfLoadSkin( 'MinervaNeue' );
wfLoadExtension( 'MobileFrontend' );
$wgMFAutodetectMobileView = true;
$wgMFDefaultSkinClass = 'SkinMinerva';

# Prevent all but `trusted` from creating pages (createpage)
$wgGroupPermissions['trusted']['move'] = true;
$wgGroupPermissions['*']['move'] = false;
$wgGroupPermissions['trusted']['createpage'] = true;
$wgGroupPermissions['*']['createpage'] = false;

# other settings
$wgGroupPermissions['user']['createpage'] = false;
$wgGroupPermissions['sysop']['interwiki'] = true;
$wgAllowUserJs = true;
$wgAllowUserCss = true;
$wgNotificationSenderName = "World Wiki Notifications";

#revdel for admins
$wgGroupPermissions['sysop']['deleterevision'] = true;

#Disable all core TALK namespaces except for trusted
$wgNamespaceProtection[NS_TALK] = ['trusted-edit'];
$wgNamespaceProtection[NS_USER_TALK] = ['trusted-edit'];
$wgNamespaceProtection[NS_PROJECT_TALK] = ['trusted-edit'];
$wgNamespaceProtection[NS_FILE_TALK] = ['trusted-edit'];
$wgNamespaceProtection[NS_MEDIAWIKI_TALK] = ['trusted-edit'];
$wgNamespaceProtection[NS_TEMPLATE_TALK] = ['trusted-edit'];
$wgNamespaceProtection[NS_HELP_TALK] = ['trusted-edit'];
$wgNamespaceProtection[NS_CATEGORY_TALK] = ['trusted-edit'];
#trusted edit group
$wgGroupPermissions['trusted']['trusted-edit'] = true;

#Protect the template space for sysops only
$wgNamespaceProtection[NS_TEMPLATE] = ['sysop-edit'];
$wgGroupPermissions['sysop']['sysop-edit'] = true;

#GEO namespace
define("NS_GEO", 3000);
define("NS_GEO_TALK", 3001);
$wgExtraNamespaces[NS_GEO] = "Geo";
$wgExtraNamespaces[NS_GEO_TALK] = "Geo_talk";
$wgContentNamespaces[] = 3000;
#GEO namespace protection
$wgNamespaceProtection[NS_GEO] = ['geomapper-edit'];
$wgNamespaceProtection[NS_GEO_TALK] = ['geomapper-edit'];
$wgGroupPermissions['geomapper']['geomapper-edit'] = true;

#FA namespace
define("NS_FA", 3002);
define("NS_FA_TALK", 3003);
$wgExtraNamespaces[NS_FA] = "Featured";
$wgExtraNamespaces[NS_FA_TALK] = "Featured_talk";
$wgContentNamespaces[] = 3002;
#FA namespace protection
$wgNamespaceProtection[NS_FA] = ['trusted-edit'];
$wgNamespaceProtection[NS_FA_TALK] = ['trusted-edit'];

#BIO namespace
define("NS_BIO", 3004);
define("NS_BIO_TALK", 3005);
$wgExtraNamespaces[NS_BIO] = "Bio";
$wgExtraNamespaces[NS_BIO_TALK] = "Bio_talk";
$wgContentNamespaces[] = 3004;
#BIO namespace protection
$wgNamespaceProtection[NS_BIO] = ['trusted-edit'];
$wgNamespaceProtection[NS_BIO_TALK] = ['trusted-edit'];
