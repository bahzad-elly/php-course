<?php
/*
-- syntax the create a table ; create table name_table (
-- name_column data type constrains 
-- )


-- this is the comment in sql
-- int : numbers 
-- varchar(n) : strings and short text texts 
-- text : long text
-- decimal : money 
-- date : year-month-day
-- time : hour - min - sec
-- timestamp : for created at 
-- boolean :  true or false 
-- enum : male or female
-- set : multi choose
CREATE TABLE person(
	id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(100),
    email varchar(200),
    password varchar(255),
    desription text,
    price decimal(10,2),
    times date,
    hh time,
    created_at timestamp ,
    is_active boolean,
    gender ENUM('male','female'),
    languages SET('kurdish','english','pharsi','turky','arabic')
    
)
*/
?>