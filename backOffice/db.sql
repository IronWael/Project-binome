create table products(
    id int AUTO_INCREMENT,
    type varchar(100),
    name varchar(255),
    genre varchar(50),
    marque varchar(100),
    description text,
    price real,
    discount int,
    imagef varchar(255),
    imageb varchar(255),
    constraint pk_books PRIMARY KEY (id)
    
);
create table users(
    id int AUTO_INCREMENT,
    firstname varchar(50),
    lastname varchar(50),
    password varchar(50),
    email varchar(250) UNIQUE,
    adress varchar(50),
    image varchar(255),
    role varchar(50),

    
    constraint pk_admins PRIMARY KEY(id)
);