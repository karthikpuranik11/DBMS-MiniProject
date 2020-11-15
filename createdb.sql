use mydb;
create table lot( 
lot_no int,
total int);
create table production(
lot_no int,
serial_no int unique,
weight int,
pr_type varchar(255),
descr varchar(255));
create table material(
lot_no int,
no_of_u int,
mat_id int,
cost int not null);