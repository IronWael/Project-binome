create table products(
    id int AUTO_INCREMENT,
    type varchar(100),
    genre varchar(50),
    marque varchar(100),
    description text,
    price real,
    discount int,
    imagef varchar(255),
    imageb varchar(255),
    constraint pk_books PRIMARY KEY (id),
    
);