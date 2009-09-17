set VAR=%date:~0,10%

C:\wamp\bin\mysql\mysql5.1.33\bin\mysqldump --opt --user=root --password=xbadmin qqchong > C:\websitedoc\vhome\db-backup\vhome-%VAR%.sql