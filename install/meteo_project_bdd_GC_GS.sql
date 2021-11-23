#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        user_id   Int  Auto_increment  NOT NULL ,
        firstname Char (45) NOT NULL ,
        lastname  Char (45) NOT NULL ,
        username  Char (100) NOT NULL ,
        password  Char (100) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (user_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: City
#------------------------------------------------------------

CREATE TABLE City(
        city_id   Int  Auto_increment  NOT NULL ,
        city_name Char (45) NOT NULL
	,CONSTRAINT City_PK PRIMARY KEY (city_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Historical
#------------------------------------------------------------

CREATE TABLE Historical(
        historical_id Int  Auto_increment  NOT NULL ,
        data_time     Datetime NOT NULL ,
        temperature   Float NOT NULL ,
        wind_speed    Float NOT NULL ,
        humidity      Float NOT NULL ,
        user_id       Int NOT NULL ,
        city_id       Int NOT NULL
	,CONSTRAINT Historical_PK PRIMARY KEY (historical_id)

	,CONSTRAINT Historical_User_FK FOREIGN KEY (user_id) REFERENCES User(user_id)
	,CONSTRAINT Historical_City0_FK FOREIGN KEY (city_id) REFERENCES City(city_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Appartenir
#------------------------------------------------------------

CREATE TABLE Appartenir(
        user_id Int NOT NULL ,
        city_id Int NOT NULL
	,CONSTRAINT Appartenir_PK PRIMARY KEY (user_id,city_id)

	,CONSTRAINT Appartenir_User_FK FOREIGN KEY (user_id) REFERENCES User(user_id)
	,CONSTRAINT Appartenir_City0_FK FOREIGN KEY (city_id) REFERENCES City(city_id)
)ENGINE=InnoDB;

