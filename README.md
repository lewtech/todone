# todone
To do list Take Home Project Requirements

 - [x] Allows the creation of new TODO items
 - [x] A Todo item consists of text and the date and time of creation
 - [x] Allows the removal of existing TODO items
 - [x] Allows updating the text of the TODO item
 - [x] Displays in the order they are created with the date of creation
 - [x] TODO items are stored in a SQL database and are persistent...any SQL Server is accepted (MySQL Xammp)
 - [x] Use a public Git repository for version control
 - [x] Documentation on how to build and deploy

# Build and Deploy Documentation
my personal folder path on mac:
/Users/lewflauta/.bitnami/stackman/machines/xampp/volumes/root/htdocs/ 

1. Download and install XAMP : https://www.apachefriends.org/index.html
2. Create folder "todone" in /htdocs folder under xamp
3. Copy files to /todone (minus screenshots and todo_demo.mov)
4. Run Xammp
5. Start webserver under |General| tab
6. Under |Services| tab, start apache, and mysql if they aren't already
7. Under |Network| tab, enable localhost:8080->80
8. Create Mysql database in http://localhost:8080/phpmyadmin/
#### Database Setup
name | type | default 
---|---|---
task | varchar(200) | none
datetime | datetime | CURRENT_TIMESTAMP 

9. Browse to http://localhost:8080/todone/




# Notes 

I am creating a Todo list as a take home exercise after an interview. I
don't have much practical experience in webdevelopment lately, so I am
starting mostly from scratch. I do have a fundamental understanding of
webdevelopment/js/css/bootstrap. I think php is my best bet. I can get
a functional app up quickly, demonstrating all of the above requirements. It
would be nice to really dive into webdevelopment and design something
that's responsive, functional, and beautiful. But that is a task for Future-Lew.

Included are some screenshots and demo vid for convenience.

