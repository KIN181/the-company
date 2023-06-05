-- DB name = the_company

--create table users
CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    fiest_name VARCHAR(50)NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    username VARCHAR(15) NOT NULL,
    password VARCHAR(255) NOT NULL,
    photo VARCHAR(255) DEFAULT NULL,
    PRIMARY KEY(id)
);

-- CRUD -> datebase operations
-- C means CREATE /INSERT
-- R means SELECTE
-- U means UPDATE
-- D means DELETE