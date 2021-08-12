<?php
/** 
	- Working with Structures
	[01]: Create database statement
		- CREATE DATABASE db_name;
		- CREATE DATABASE IF NOT EXISTS db_name;
		- CREATE DATABASE IF NOT EXISTS db_name CHARACTER SET utf8mb4 collate utf8mb4_general_ci;
		- To see the available character sets and collations use 
			[ SHOW CHARACTER SET; or SHOW COLLATION; ]

	[02]: Delete database statement
		- DROP DATABASE IF EXISTS db_name;
		- Drops all tables in the database and deletes the database.

	[03]: Use statement:
		- USE db_name;
		- The USE statement tells MySQL to use the named database as the default (current) database for subsequent statements.

	[04]: Create table statement:
		- Syntax:  
			[1]
				CREATE TABLE [IF NOT EXISTS] tbl_name (
					create_definition,...
				) [table_options] [partition_options];
			
			[2]
				CREATE [TEMPORARY] TABLE [IF NOT EXISTS] tbl_name
				{ LIKE old_tbl_name | (LIKE old_tbl_name) }
			[3]
				table_option:
					[
						CHARACTER SET  = character_set_name,
						COLLATE 			= collection_name
						COMMENT 			= 'String',
						ENGINE 			= engine_name,
						MAX_ROWS			= value
						MIN_ROWS 		= value
						PASSWORD 		= 'string'
						... [ see the full list in: https://dev.mysql.com/doc/refman/8.0/en/create-table.html]
					]
		- You can create temporary table using [ TEMPORARY ] keyword, this table will dropped at the end of the current session
		- Use [ LIKE ] keyword to cloning and copying another table into new table, will create empty table with the same definition of the other table.
		- create_definition => Column Data Types and Attributes [ See SQL datatype ]
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn SQL - Working with Structures</title>
</head>
<body>
	<h1>Working with Structures</h1>
</body>
</html>