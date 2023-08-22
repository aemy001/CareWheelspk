database name: tsdp2
CREDENTIALS:
// you can find more credentials in db
1. Admin login:
email: ali@gmail.com
password: alii123
2. Driver Login:
email: jawed567@gmail.com
password: 1234567
3. Customer Login:
email: jawedsalman53@gmail.com
password: 1234567





To enable sending mail you need to follow these steps: 

Go to C:\xampp\php and open the php.ini file.
Find [mail function] by pressing ctrl + f.
Search and pass the following values:
SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = YourGmailId@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"


Now, go to C:\xampp\sendmail and open the sendmail.ini file.

Find [sendmail] by pressing ctrl + f.
Search and pass the following values
smtp_server=smtp.gmail.com
smtp_port=587 or 25 //use any of them
error_logfile=error.log
debug_logfile=debug.log
auth_username=YourGmailId@gmail.com
auth_password=Your-Gmail-Password
force_sender=YourGmailId@gmail.com(optional)