<?php
/** 
	- Introduction to SQL
	- SQL is a programming language designed to manage data stored in a relational database management system (RDBMS).
	- SQL stands for the [ structured query language. ]
	- SQL consists of:
		- a data definition language 		=> [ deals with the schema creation and modification (CREATE, ALTER TABLES) ]
		- a data manipulation language.	=> [ provides the constructs to query data ( SELECT, UPDATE, DELETE ) ]
		- a data control language.			=> [ consists of the statements that deal with the user authorization and security (GRANT, REVOKE) ]
	- SQL Syntax:
		- SQL is a declarative language, therefore, its syntax reads like a natural language.
		- An SQL statement begins with a verb that describes the action, for example: ( SELECT, INSERT... )
			Following the verb are the subject and predicate.
			A predicate specifies conditions that can be evaluated as true, false, or unknown.
		- Exp:
			SELECT username FROM users WHERE userid = 1;
		- The SQL statement end with semicolon(;)
		- SQL has many keywords that have special meanings such as SELECT, INSERT, UPDATE, DELETE, and DROP. 
		- These keywords are the reserved words, 
		- therefore, you cannot use them as the name of tables, columns...
		- To creat comments in SQL use (--) or (/*\*\/ without back-slashes)
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn SQL - Introduction to SQL</title>
</head>
<body>
	<h1>Introduction to SQL</h1>
</body>
</html>