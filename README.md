# Bataan Directory

An online directory dedicated to establishments based in Bataan.

## Tech Stack
### Front End
- HTML5
- CSS
- Javascript
- VueJS 2
- Bootstrap 4

#### Back End
- PHP 7.1.11
- Code Igniter 3.1.7
- MySQL

### Server
- XAMPP Server 7.1.11
- phpMyAdmin 4.7.4

====================================================================================

## Requirements & Installation
1. Download and Install Local Server (XAMPP, MAMP, WAMPP, etc)
2. Download zip or clone repository. 
3. Extract zip or copy entire folder to htdocs of XAMPP folder (or any other local server)
4. Import or execute the queries of bataan_directory.sql file found at the root of project
5. Go to localhost/bataan-directory on your browser. 

## File and Structure Guides
- app (Folder for client side)
-- `app.css` (All custom styles used are included here)
-- `app.js` (Main script file.ex: Calling API)

- assets (JS and CSS library files are included here)

- public
-- establishments (Thumbnails of establishments are uploaded here)

- server (CodeIgniter application folder renamed to server)
-- controllers
---- api (API controllers folder)
----- `Establishments.php` (API Controller for Establishments)
---- `Home.php` (Controller for homepage)

-- views 
---- templates (header and footer are here)
---- directory 
----- `result_items.php` (View for result items)
----- `search_filter.php` (Search bar and search button)

====================================================================================

## Features
- Search establishments by name, location and category

## Developer Notes
- Currently the project has only 12 sample datas. (refer to bataan_directory.sql)
- Name (Search text) can be blank, Location and Category are 'All' by default. Just click search button to view all the datas.
*Important* 
- Will be adding a new feature: Admin page in the future where you can add more datas in the directory
- User interface and experience will be further improve
 
## Developer
This project was solely made by Cha Gonzales


For further questions or inquiry you can contact me at:
charlene.gonzles@gmail.com

