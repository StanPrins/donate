set FILE=%date:~0,4%.%date:~5,2%.%date:~8,2%

C:\wamp\bin\mysql\mysql5.1.33\bin\mysqldump --opt --user=root qqchong > c:\wamp\www\qqchong\%FILE%.sql