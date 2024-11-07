### PREREQUISITES TO CHANGE/CHECK FOR WORKING OF EMAIL

#### Steps:
1. Open Xampp
2. Config file of `Apache`
3. _Ctrl+F_ to search `mail function`
4. Update `SMTP=localhost` to `SMTP=smtp.gmail.com`
5. Update `sendmail_from = me@gmail.com` to `sendmail_from = your_email@gmail.com` to want to use to share email
6. Update `sendmail_path = something` to `sendmail_path = C:\xampp\sendmail\sendmail.exe`
7. Now go to `C:\xampp\sendmail\sendmail.ini` and open the .ini(configuration) file 
8. Update `smtp_server=mail.mydomain.com` to `smtp_server=smtp.gmail.com`
9. Update `smtp_port=25` to `smtp_port=587`
10. Update `auth_username` to `your_email@gmail.com` through which you want to share email
11. Update `auth_password` to `APP PASSWORD` from Google account
    1.  Needs 2FA to be enabled
12. Update `force_sender=something` to `force_sender=your_email@gmail.com`