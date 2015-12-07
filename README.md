# Library_System

This is an application which visualizes a library system for a foundation with a user-friendly web interface. The code is written with JavaScript, HTML, PHP and CSS. 

For the beginning, MySQL connection has to be done at the first place. After it is done, i writed the code with a database named "test".
I used WAMP server for Apache, MySQL and PHP configuration. 

In the test database, there are 3 tables and they can be implemented with following code segment;

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

CREATE TABLE IF NOT EXISTS `studentbook` (
  `student_id` int(11) DEFAULT NULL,
  `book` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=157 ;


There are dummy variables just for testing, but after the interface is opened at first, they can be changed with buttons and text 
inputs. 

The main page for the system is edit.php. After the project is in the directory of localhost, the system can be visualized by opening 
localhost/<project_name>/edit.php 

The code for database is also included in the project named "test.sql". Necessary code for connection to MySQL is in the data.php page and data.php is included in every php page by using 'require' clause. 

The interface is also visualized with css so every button, text and tables are colorized and rebuilded with some segment code of colors
and the code for that is included in "css_generator.css". For the buttons, the css code is included by "class="<code_pointer_for
_buttons>" in which it can reach the colors, width,height,etc. 


User Guide

The system works like following;

At first the edit.php page has to be opened to make some applications with students. Otherwise in case of opening any other php pages will cause error since to student id is received from the main page. 

Main page is edit.php. If "edit" is pressed, the desired student will be chosen to add(borrow),delete(return) or print the books that the student has. If "ADD BOOK" is pressed, all the books in the library will be listed and the student can choose from those books into his or her account. If "ADD BOOK" is pressed again in the adding_book.php page, the value will be inserted into the student. By clicking "RETURN TO HOME PAGE" one can go backward to main page. While adding a book, if no value is typed, user will get a warning saying that "YOU DIDN'T INSERT ANYTHING!PLEASE TYPE ATTRIBUTES CORRECTLY!.". 

If a student is to add to the system, in the main page it will be enough to press "ADD STUDENT TO THE LIBRARY". The attributes name,surname and department are necessary to be typed in for the student. Clicking "ADD STUDENT" will add the student to the system.

Deleting a book from the system is also possible. By pressing "DELETE BOOK FROM THE LIBRARY" you can choose which book to be deleted from the system from a selectbox. The same way a student can be deleted from the system. 

A student or a book can be updated in the system with the same procedures. 

All the students are available in the main page and all the books can be printed with "PRINT ALL THE BOOKS IN THE LIBRARY" button in the main page(edit.php).

PS. Turkish characters are not defined in the scope of the project. 






