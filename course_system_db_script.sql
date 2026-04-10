create database college_db;

use college_db;

create table courses(
	id int primary key auto_increment,
    course_code varchar(20) not null,
    course_name varchar(100) not null,
    units int not null,
    instructor varchar(100) not null,
    created_at timestamp not null
);

select * from course;