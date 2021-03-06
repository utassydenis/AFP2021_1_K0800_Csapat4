CREATE USER 'Zoldseg_Gyumolcs_Kereskedes'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT USAGE ON *.* TO 'Zoldseg_Gyumolcs_Kereskedes'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;CREATE DATABASE IF NOT EXISTS `Zoldseg_Gyumolcs_Kereskedes`;GRANT ALL PRIVILEGES ON `Zoldseg\_Gyumolcs\_Kereskedes`.* TO 'Zoldseg_Gyumolcs_Kereskedes'@'localhost';

create database Zoldseg_Gyumolcs_Kereskedes;

use Zoldseg_Gyumolcs_Kereskedes;

create table Raktarkeszlet(
id int primary key not null auto_increment,
termeknev varchar(30) not null,
kategoria varchar(8) not null,
mennyiseg int not null,
mennyisegi_egyseg varchar(15) not null,
ar int not null
);

insert into Raktarkeszlet(termeknev, kategoria, mennyiseg, mennyisegi_egyseg, ar) values("vöröshagyma", "zöldség", 500, "kg", 150);