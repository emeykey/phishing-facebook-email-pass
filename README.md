# Facebook phishing site with EN-US localization
#### Info
- Frontend is 1:1 copy of US Facebook login page in english.
- No external resources are being loaded, everything's stored locally.
- Mobile broswer/screen scaling compatible.
- Copyright year generated dynamically.

#### Install
- Copy content of this repository onto your web server and you're ready to go.
- PHP 5 or newer required.

#### How does it work?
- Going to the site without URI always redirects to /facebook/ directory, it's because it seems more legit no matter the domain you use.
- Any link that is displayed, besides the login button, will redirect back onto the login page itself.
- If either login or password field is empty when login button is pressed, it will redirect itself back onto the same login page and will save nothing.
- Otherwise after pressing login it will save provided credentials into, inside config specified, file that will be inside the /result/ directory. Afterwards comes redirection onto URL, specified inside config.
- Data that are saved are Datetime, IP address, User-Agent, E-mail/Phone and Password.

#### Config
- config/config.php

#### Tips
- Use Let's Encrypt TLS/SSL, https always adds to the feeling of legitimacy and it's free.
- For the redirect URL use something like a Facebook page, then you can social engineer anyone more easily to actually login without being too suspicious. You can tell them that a friend of yours created a new page and would appreciate them liking it or whatever, be creative.
- If you would to be to login to some account, use a residential proxy, not a basic VPN, preferably from the same country, otherwise the account will get locked behind a security checkpoint. Using the mobile app might also be a good idea, but of course don't use your personal phone.

###### Yeah and by the way it's illegal to actually use it on anyone without their consent, so keep that in mind and stay safe.
###### All code and informations provided are for non-profit academical purposes only.
--
###### 2018-23
###### @emeykey
