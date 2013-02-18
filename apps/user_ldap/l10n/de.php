<?php $TRANSLATIONS = array(
"Failed to delete the server configuration" => "Löschen der Serverkonfiguration fehlgeschlagen",
"The configuration is valid and the connection could be established!" => "Die Konfiguration war erfolgreich, die Verbindung konnte hergestellt werden!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Die Konfiguration ist gültig aber die Verbindung ist fehlgeschlagen. Bitte überprüfen Sie die Servereinstellungen und die Anmeldeinformationen.",
"The configuration is invalid. Please look in the ownCloud log for further details." => "Die Konfiguration ist ungültig, bitte sehen Sie für weitere Details im ownCloud Log nach",
"Deletion failed" => "Löschen fehlgeschlagen",
"Take over settings from recent server configuration?" => "Einstellungen von letzter Konfiguration übernehmen?",
"Keep settings?" => "Einstellungen beibehalten?",
"Cannot add server configuration" => "Serverkonfiguration konnte nicht hinzugefügt werden.",
"Connection test succeeded" => "Verbindungstest erfolgreich",
"Connection test failed" => "Verbindungstest fehlgeschlagen",
"Do you really want to delete the current Server Configuration?" => "Wollen Sie die aktuelle Serverkonfiguration wirklich löschen?",
"Confirm Deletion" => "Löschung bestätigen",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Warnung:</b> Die Anwendungen user_ldap und user_webdavauth sind inkompatibel. Es kann demzufolge zu unerwarteten Verhalten kommen. Bitte Deinen Systemadministator eine der beiden Anwendungen zu deaktivieren.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Warnung:</b> Da das PHP-Modul für LDAP nicht installiert ist, wird das Backend nicht funktionieren. Bitte deinen Systemadministrator das Modul zu installieren.",
"Server configuration" => "Serverkonfiguration",
"Add Server Configuration" => "Serverkonfiguration hinzufügen",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Du kannst das Protokoll auslassen, außer wenn Du SSL benötigst. Beginne dann mit ldaps://",
"Base DN" => "Basis-DN",
"One Base DN per line" => "Ein Base DN pro Zeile",
"You can specify Base DN for users and groups in the Advanced tab" => "Du kannst Basis-DN für Benutzer und Gruppen in dem \"Erweitert\"-Reiter konfigurieren",
"User DN" => "Benutzer-DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Der DN des Benutzers für LDAP-Bind, z.B.: uid=agent,dc=example,dc=com. Für anonymen Zugriff lasse DN und Passwort leer.",
"Password" => "Passwort",
"For anonymous access, leave DN and Password empty." => "Lasse die Felder von DN und Passwort für anonymen Zugang leer.",
"User Login Filter" => "Benutzer-Login-Filter",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Bestimmt den angewendeten Filter, wenn eine Anmeldung versucht wird. %%uid ersetzt den Benutzernamen bei dem Anmeldeversuch.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "verwende %%uid Platzhalter, z. B. \"uid=%%uid\"",
"User List Filter" => "Benutzer-Filter-Liste",
"Defines the filter to apply, when retrieving users." => "Definiert den Filter für die Anfrage der Benutzer.",
"without any placeholder, e.g. \"objectClass=person\"." => "ohne Platzhalter, z.B.: \"objectClass=person\"",
"Group Filter" => "Gruppen-Filter",
"Defines the filter to apply, when retrieving groups." => "Definiert den Filter für die Anfrage der Gruppen.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "ohne Platzhalter, z.B.: \"objectClass=posixGroup\"",
"Connection Settings" => "Verbindungseinstellungen",
"Configuration Active" => "Konfiguration aktiv",
"When unchecked, this configuration will be skipped." => "Konfiguration wird übersprungen wenn deaktiviert",
"Port" => "Port",
"Backup (Replica) Host" => "Backup Host (Kopie)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Gib einen optionalen Backup Host an. Es muss sich um eine kopie des Haupt LDAP/AD Servers handeln.",
"Backup (Replica) Port" => "Backup Port",
"Disable Main Server" => "Hauptserver deaktivieren",
"When switched on, ownCloud will only connect to the replica server." => "Wenn aktiviert  wird ownCloud ausschließlich den Backupserver verwenden",
"Use TLS" => "Nutze TLS",
"Do not use it additionally for LDAPS connections, it will fail." => "Benutze es nicht zusätzlich für LDAPS Verbindungen, es wird scheitern.",
"Case insensitve LDAP server (Windows)" => "LDAP-Server (Windows: Groß- und Kleinschreibung bleibt unbeachtet)",
"Turn off SSL certificate validation." => "Schalte die SSL-Zertifikatsprüfung aus.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Falls die Verbindung es erfordert, muss das SSL-Zertifikat des LDAP-Server importiert werden.",
"Not recommended, use for testing only." => "Nicht empfohlen, nur zu Testzwecken.",
"in seconds. A change empties the cache." => "in Sekunden. Eine Änderung leert den Cache.",
"Directory Settings" => "Ordnereinstellungen",
"User Display Name Field" => "Feld für den Anzeigenamen des Benutzers",
"The LDAP attribute to use to generate the user`s ownCloud name." => "Das LDAP-Attribut für die Generierung des Benutzernamens in ownCloud. ",
"Base User Tree" => "Basis-Benutzerbaum",
"One User Base DN per line" => "Ein Benutzer Base DN pro Zeile",
"User Search Attributes" => "Benutzersucheigenschaften",
"Optional; one attribute per line" => "Optional, eine Eigenschaft pro Zeile",
"Group Display Name Field" => "Feld für den Anzeigenamen der Gruppe",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "Das LDAP-Attribut für die Generierung des Gruppennamens in ownCloud. ",
"Base Group Tree" => "Basis-Gruppenbaum",
"One Group Base DN per line" => "Ein Gruppen Base DN pro Zeile",
"Group Search Attributes" => "Gruppensucheigenschaften",
"Group-Member association" => "Assoziation zwischen Gruppe und Benutzer",
"Special Attributes" => "Spezielle Eigenschaften",
"in bytes" => "in Bytes",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Ohne Eingabe wird der Benutzername (Standard) verwendet. Anderenfall trage ein LDAP/AD-Attribut ein.",
"Help" => "Hilfe"
);
