# Guest List
MVC application for adding people to guest list
# Requirements
- MySQL installed
- Symfony installed
# Database configuration
- Import my <b>baza.sql</b> file into your database. Database's name is <b>demo</b>
- Open <b>.env</b> file
- Set your database URL like I did in <a href="https://github.com/savelyevlad/guest_list/blob/master/.env#L32">line 32</a>, where:<br>
<b>root</b> is my username<br>
<b>keklelkek</b> is my password<br>
<b>demo</b> is database's name
# Run application
App is made using <a href="http://symfony.com/"><b>symfomy</b> framework</a><br>
To run it <b>symfony</b> should be <a href="https://symfony.com/doc/current/setup.html#technical-requirements">installed</a>. <br>
Open terminal, move into the project directory (e.g. Git Bash Here in Windows context menu), and start the local web server as follows:<br> 
```sh
symfony server:start
```
Open your browser and navigate to <a href="http://localhost:8000/">http://localhost:8000/</a>. If everything is working, you’ll see a welcome page. Later, when you are finished working, stop the server by pressing Ctrl+C from your terminal.
# Additional
The view is quite naive and understandable <br>
<b>Login</b>: kek<br>
<b>Password</b>: 12345678
