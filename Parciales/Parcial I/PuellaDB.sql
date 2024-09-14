CREATE DATABASE PuellaDB;
USE PuellaDB;

CREATE TABLE tbl_Brand(
	BrandID INT PRIMARY KEY auto_increment,
    BrandName VARCHAR(100)
);

INSERT INTO tbl_Brand (BrandID, BrandName) VALUES (NULL, 'HP');
INSERT INTO tbl_Brand (BrandID, BrandName) VALUES (NULL, 'DELL');
INSERT INTO tbl_Brand (BrandID, BrandName) VALUES (NULL, 'ASUS');

CREATE TABLE tbl_Computers(
	computerID INT PRIMARY KEY auto_increment,
    computerName VARCHAR(100),
    computerStock INT,
    brandID INT,
    
	FOREIGN KEY (BrandID) REFERENCES tbl_Brand(BrandID)
);

INSERT INTO tbl_Computers (computerID, computerName, computerStock, brandID) 
VALUES (NULL, 'Pavilon 15', 5, 1);
INSERT INTO tbl_Computers (computerID, computerName, computerStock, brandID) 
VALUES (NULL, 'Modular', 10, 2);
INSERT INTO tbl_Computers (computerID, computerName, computerStock, brandID) 
VALUES (NULL, 'TUF', 15, 3);


CREATE TABLE tbl_Users(
	UserID INT PRIMARY KEY auto_increment,
    userOwner VARCHAR(100),
    userName VARCHAR(100),
    userPass VARCHAR(100)
);

INSERT INTO tbl_Users(UserID, userOwner, userName, userPass) 
VALUES(NULL, 'Aaron Fagoaga', 'AaronF', '202cb962ac59075b964b07152d234b70');
INSERT INTO tbl_Users(UserID, userOwner, userName, userPass) 
VALUES(NULL, 'Josué Montoya', 'JosueM', '202cb962ac59075b964b07152d234b70');
INSERT INTO tbl_Users(UserID, userOwner, userName, userPass) 
VALUES(NULL, 'Gissell Márquez', 'GigiMqz', 'e68fe0199d8998f9747ff4d66e36865a');

