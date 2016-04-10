<?php
$conn = mysqli_connect("localhost","mcelevan12","")
or die("Error: Cannot connect to database server");

$dbname = "suggestions";

//mysqli_query($conn, "DROP DATABASE $dbname");

if(!mysqli_select_db($conn, $dbname)){
  echo "YOU DONE FUCKED UP EVAN";
  mysqli_query($conn, "CREATE DATABASE $dbname");
  mysqli_query($conn, "USE $dbname");
  
  mysqli_query($conn, "
     CREATE TABLE Posts
     (
       PostID int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       UserID int NOT NULL,
       Status tinyint NOT NULL,
       UpVotes int NOT NULL,
       DownVotes int NOT NULL,
       Score DOUBLE(15,6),
       CategoryID int NOT NULL,
       SubCategoryID int NOT NULL,
       Title VARCHAR(175) NOT NULL,
       Content VARCHAR(1000) NOT NULL,
       Threshold int,
       AdminComment VARCHAR(1000),
       Anonymous tinyint,
       Time DATETIME,
       EditTime DATETIME
     )");
    mysqli_query($conn, "
      CREATE TABLE Users(
        UserID int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        FirstName VARCHAR(20) NOT NULL,
        LastName VARCHAR(30) NOT NULL,
        Password VARCHAR(50) NOT NULL,
        Email VARCHAR(55) NOT NULL,
        Score int,
        ModStatus ENUM('Y','N') DEFAULT 'N',
        AdminStatus ENUM('Y','N') DEFAULT 'N',
        CWID int
    )
    ");
  
    mysqli_query($conn,"
      CREATE TABLE Duties(
        UserID int NOT NULL,
        CategoryID int NOT NULL
      )
    ");
  
  mysqli_query($conn, "
    CREATE TABLE Subs(
      PostID int NOT NULL,
      UserID int NOT NULL
    )");
  
  mysqli_query($conn, "
    CREATE TABLE Category(
      CategoryID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      Name VARCHAR(50) NOT NULL
    )
  ");
  
  mysqli_query($conn, "
  INSERT INTO Category 
  VALUES ('$nameofcategory')");
  
  mysqli_query($conn, "
    CREATE TABLE Tags(
      TagID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      Name VARCHAR(50) NOT NULL;
  )");
  
  
  mysqli_query($conn, "
    CREATE TABLE PostsTags(
    PostID INT,
    TagID INT)
  ");
  
  mysqli_query($conn,"
    CREATE TABLE SubC(
    SubCID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50),
    CategoryID INT NOT NULL
    )
  ");
  
  mysqli_query($conn, "
  INSERT INTO SubCategory 
  VALUES ('$nameofcategory', '$CategoryID')");
  
  
  //Let's Populate the DB w/ some actual info:
  
  
  //Categories
  mysqli_query($conn,"INSERT INTO Category(name)
  VALUES ('Academics'),('Admissions'),('Athletics'),('Maintenance'),
  ('Health Services'),('Dining'),('Housing'),('Registration'),
  ('Clubs/Organizations'),('Priority Points'),('Special Services'),
  ('Counseling Services'),('Security'),('Intramurals')");
  //Sub-Categories
  mysqli_query($conn, "
  INSERT INTO SubC(name, CategoryID) VALUES ('Accounting',1),
  ('American Studies',1),('Applied Mathematics',1),('Athletic Training',1),
  ('Biochemistry',1),('Biology',1),('Biology Education',1),
  ('Biomedical Sciences',1),('Business Administration',1),('Chemistry',1),
  ('Communication',1),('Computer Science',1),('Computer Science/Game Design',1),
  ('Criminal Justice',1),('Digital Media',1),('Economics',1),('English',1),
  ('Envrionmental Science',1),('Fashion Design',1),('Fashion Marchandising',1),
  ('Fine Arts',1),('History',1),('Information Technology and Systems',1),
  ('Mathematics',1),('Media Studies and Production',1),('Medical Technology',1),
  ('Modern Languages and Cultures',1),('Philosophy',1),('Political Science',1),
  ('International Studies',1),('Public Affairs',1),('Psychology',1),
  ('Psychology/Dual Certification',1),('Social Work',1),
  
  ('Undergraduate',2),('Graduate',2),('Pre-College',2),('Transfer Students',2),
  ('International Students',2),('Adult Students',2),('Military Students',2),
  ('Part-Time',2),
  
  ('Basketball',3),('Baseball',3),('Football',3),('Softball',3),('Soccer',3),
  ('Lacrosse',3),('Cross Country',3),('Track & Field',3),('Swimming & Diving', 3),
  ('Water Polo',3),('Volleyball',3),('Tennis',3),('Crew',3),('Ultimate Frisbee',3),
  
  
  ('Maintenence',4),
  ('Health Services',5),
  ('Dining',6),
  ('Housing',7),
  ('Registration', 8),
  
  
  
  ('Business Club',9),('Computer Society',9),('Marist Game Society',9),
  ('Math Club',9),('Campus Ministry',9),
  ('Student Government Association',9),('Marist Band',9),('ARCO',9),
  ('Black Student Union',9),('Asian Alliance',9),('Greek Life',9),
  ('Marist Singers',9),
  
  ('Behavior',10),('Clubs/Community Service/Intramurals', 10),('Room',10),
  ('Grades',10),
  
  ('Special Services',11),
  ('Counseling Services',12),
  ('Security',13),
  
  ('Badminton',14),('Basketball',14),('Dodgeball',14),('Flag Football',14),
  ('Lacrosse',14),('Soccer',14),('Softball',14),('Tennis',14),('Ultimate Frisbee',14),
  ('Volleyball',14)
  ");
  
  
}
?>