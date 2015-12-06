# Library_System

This is an application which visualizes a library system for a foundation with a user-friendly web interface. The code is written with 
JavaScript, HTML, PHP and CSS. 

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

The code for database is also included in the project named "test.sql". 

The interface is also visualized with css so every button, text and tables are colorized and rebuilded with some segment code of colors
and the code for that is included in "css_generator.css". For the buttons, the css code is included by "class="<code_pointer_for
_buttons>" in which it can reach the colors, width,height,etc. 





