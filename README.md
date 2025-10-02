# My Movie List
A website made in Year 12 IT in a team of 2 which allows users to make an account, log in, and create and view movie lists made by themselves and others.

The website uses PHP, MySQL, HTML, CSS and JavaScript. XAMPP was used to create a local web server to develop and test the website on.
The website includes some basic security measures such as password salting, hashing using Bcrypt verison 2y, and the use of prepared statements to prevent SQL Injections.

## Usage
### Running using Docker Compose
The web application can be hosted using Docker Compose to build containers for each of the required services through the Docker Compose configuration file I've created for it.

**Download the project files**
- If you have git installed, clone the repository to your device using the command `git clone https://github.com/Adzzzy/My-Movie-List-Website`
- Alternatively, from the github repository page press the green "code" button and choose "Download ZIP". Make sure to unzip the folder.

**Get Docker Desktop**
- Head to https://www.docker.com/products/docker-desktop/ and click on _Download Docker Desktop_, making sure to choose the right download for your device.
- Open Docker Desktop and make sure it's running. (The bottom left corner of the Docker Desktop window indicates the status of the Docker Engine).

**Start the web app**
- Open up any terminal or shell. On Windows, Mac, or Linux simply search "Terminal" and open it up. You could also search for "Command Prompt" or "PowerShell" instead on Windows.
- Navigate to the location where you've stored the web app. Do this using the "cd" command.  E.g. if the files are in your downloads folder: `cd C:\Users\<UserName>\Downloads\My-Movie-List-Website`. The correct directory will contain the "docker-compose.yml" file.
  - Alternatively, navigate to the directory in the file explorer, then right-click within the folder while holding Shift, and select "Open in Terminal" or "Open PowerShell window here". 
- From here, run the web app with the following command:

     ```console
     docker compose up -d
     ```
**Access the website**
- To view and interact with the site, head to: http://localhost:8080

Note: If the website has trouble connecting to the database, make sure that in the "dbh.inc.php" file, "$servername" is equal to "db", i.e. `$servername = "db";`, and not something else.

---------------------------------------------------------------------------------------------------------------------------------------

### Hosting using XAMPP
Another easy way to host the web app is by using XAMPP. With this method all the necessary services are provided by XAMPP and all run within the same environment on your device. 

**Get XAMPP**
- Head to https://www.apachefriends.org/download.html and choose a download compatible with your operating system.
- Run the XAMPP installer. It is recommended to keep the default settings for the install for less set-up later.
  - If you installed XAMPP in a different location, you can execute the setup_xampp.bat file on Windows to automatically update configurational information.

**Set-up website files**
- Head to the installation location (default is root directory, i.e. C: in Windows) and open the "xampp" folder.
- Open the "htdocs" folder, delete everything inside and replace it with the contents of the "my_movie_list" folder (i.e. the php files, includes folder, images folder, and css folder).

**Initialise the database**
- Go to the "xampp" folder and open the "xampp-control.exe" executable. Press the "Start" buttons for both the "Apache" and the "MySQL" modules.
- Head to the database administration page at: http://localhost/phpmyadmin/
- Select "Import" from the toolbar at the top of the page. Press "Browse" and select the "mymovielist.sql" file from the "database" folder among the downloaded repository files. Then, scroll down to the bottom and press "Import".
- Optional: Repeat the above steps with the "testdata.sql" file to populate the database with some sample data.
- Go back to "htdocs" and open the "dbh.inc.php" file from inside the "includes" folder. Edit the line specifying "$servername" to say: `$servername = "localhost";`

**Access the website**
- Make sure both "Apache" and "MySQL" are started in the "xampp-control.exe" executable.
- View and interact with the site by heading to: http://localhost

