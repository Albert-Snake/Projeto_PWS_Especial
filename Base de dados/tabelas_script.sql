Create database if not exists projetopwsespecial;

use projetopwsespecial;

CREATE TABLE IF NOT EXISTS airplanes (
  ID int NOT NULL,
  reference varchar(100) NOT NULL,
  capacity int NOT NULL,
  airplanetype varchar(50) NOT NULL,
  airline varchar(50) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS airports (
  ID int NOT NULL,
  name varchar(100) NOT NULL,
  city varchar(50) NOT NULL,
  adress varchar(50) NOT NULL,
  phonenumber int NOT NULL,
  email varchar(50) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS users (
  ID int NOT NULL,
  fullname varchar(100) NOT NULL,
  birthdate date NOT NULL,
  email varchar(50) NOT NULL,
  phone int NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(50) NOT NULL,
  usertype varchar(50) NOT NULL,
  points int NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS flights (
  ID int NOT NULL,
  price int NOT NULL,
  orirgin varchar(50) NOT NULL,
  destiny varchar(50) NOT NULL,
  IDAirplane int NOT NULL,
  IDOriginAirport int NOT NULL,
  IDDestinyAirport int NOT NULL,
  distance int NOT NULL,
  PRIMARY KEY (ID),
  FOREIGN KEY (IDAirplane) REFERENCES airplanes(ID),
  FOREIGN KEY (IDOriginAirport) REFERENCES airports(ID),
  FOREIGN KEY (IDDestinyAirport) REFERENCES airports(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS chekins (
  ID int NOT NULL,
  IDPassenger int NOT NULL,
  IDFlight int NOT NULL,
  state varchar(50) NOT NULL,
  PRIMARY KEY (ID),
  FOREIGN KEY (IDPassenger) REFERENCES users(ID),
  FOREIGN KEY (IDFlight) REFERENCES flights(ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

