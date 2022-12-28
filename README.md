<p align="center" > <img src="https://media-cdn.tripadvisor.com/media/photo-s/19/e9/b4/78/nuovo-logo.jpg" width="400"></p>
<h1 align="center"> Shereen Chalet, Kalpitiya</h1>

<h4 align="center"> Online Hotel management web application</h4>
<p align="center">The users of this web application will be the Administration panel of the Hotel system</p>

## About the project
<p>Shereen Chalet hotel is a newly established holiday resort in Kalpitiya with limited 
facilities yet. This hotel specializes in providing facilities like room reservations and
managing events for its clients. <br><br>
Currently, this hotel consists of only a few employees. It had been exhausting for our 
client to manage rooms, bookings, inventories, events, menus, employees, maintenance 
activities, and finances all this time even with limited several employees and services. <br><br>
Up until now, our client has managed the hotel manually with ledgers and physical 
documentations due to the hotel’s scale and now they wish to renovate and upgrade the 
premises. <br><br>
Therefore, they have realized that functionalities in the hotel will be much more 
productive and efficient if they upgrade their manual system to a web-based system</p>

### Tools and Technologies used
- **Front end framework** - Bootstrap <p align="center"> <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" target="_blank"><img src="https://i.stack.imgur.com/dMXbE.png" width="300"></a></p>
- **Back end framework** - Laravel version 8 <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
- **DBMS** - phpmyadmin
- **Database** - mySQL 

## To run the application

### Prerequisities

 ###### Following servers and packages should be installed prior to the the application installation

- xammp server with php version 8
- latest version of composer
- mySQL server

### Installation
  
######  Following commands can be followed to run the application successfully

1. Create a new folder, go inside the folder and open git bash from it
2. Clone the project
    ```
    git clone https://github.com/TharinduAB/Hotel-Management-System-for-the-Shereen-Chalet.git
    ```
3. Go inside the cloned project folder using CD command
4. Install composer packages
    ```
    composer install
    ```
5. Open the cloned project from VS code IDE
6. Change the database name in the .env.example with the relevant DB name and Rename the .env.example file as .env
7. Create a new Database inside MySQL DBMS with the DB name given in the .env file
8. Generate keys 
    ```
    php artisan key:generate
    ```
9. Do the table migrations 
    ```
    php artisan migrate
    ```
10. Run the server 
    ```
    php artisan serve
    ```
11. Run the application by using the suggested URL in a prefered web browser

## Contributing
* cmd to create a new feature branch in the repo                                   
        ``git checkout -b newFeatureBranchName``                            
        ``git push origin newFeatureBranchName`` (now check whether it's created in github)
* cmd to checkout to a branch which is already created                              
        ``git checkout featureBranchName``                              
        
    ###### When working in your branch,                                                                       
* if multiple files created, add them all at once:                                      
        ``git add . ``                                                  
        
    ###### After doing any modification to the code in your branch,                                                  
* commit it:                                        
        ``git commit -m "commitName"``                                  
* push it to the featureBranch in github                                        
        ``git push origin featureBranchName``                                   
        
    ###### When your featureBranch is ready to merged with the Master branch,                              
* pull the latest updates in github master to local master                              
        ``git checkout master``                                     
        ``git pull``                                                                                
* Now your featureBranch can be merged to local master                                                                                                                                     
        ``git merge featureBranchName``                                             
* If everything works(run) perfect, push the updates in local master to github master:                                      
        ``git push``                        
        
## Acknowledgment
<p align="center"> <a href="https://www.sliit.lk/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/en/a/a6/SLIIT_Logo_Crest.png" width="100"></a></p>
<p align="center"> This is a group project done for ITP module in second year, SLIIT </p>

## Contributors
   * IT19977980– Abeynayake T.C-<a href="https://github.com/TharinduAB">TharinduAB</a>
   * IT19987026– Abeysinha A.M.V.A-<a href="https://github.com/vihangaAshvinda">vihangaAshvinda</a>
   * IT19985350– Rathnahewage T.V-<a href="https://github.com/Thusil99">Thusil99</a>
   * IT19974910– Hapugala H.A.V.V-<a href="https://github.com/VenuraHapugala">VenuraHapugala</a>
   * IT19975764– Bandara M.B.D.N-<a href="https://github.com/dilendranishadhi">dilendranishadhi</a>
   * IT19987644– Ranodya M.J.C-<a href="https://github.com/CharmieRanodya">CharmieRanodya</a>
   * IT19986036– Amarakoon A.V.G.H.S-<a href="https://github.com/HeliSahanya">HeliSahanya</a>
   * IT19961422– Uyanahewa M.I.R-<a href="https://github.com/MadhaviImashi">MadhaviImashi</a>
