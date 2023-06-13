CREATE TABLE users(
   idUser INT AUTO_INCREMENT,
   lastname VARCHAR(50) ,
   firstname VARCHAR(50) ,
   mail VARCHAR(120) ,
   password VARCHAR(255) ,
   created_at DATETIME,
   updated_at DATETIME,
   validated_at DATETIME,
   PRIMARY KEY(idUser),
   UNIQUE(mail)
);

CREATE TABLE categories(
   idCategory INT AUTO_INCREMENT,
   category VARCHAR(50) ,
   PRIMARY KEY(idCategory)
);

CREATE TABLE rates(
   idRate INT AUTO_INCREMENT,
   rates VARCHAR(50) ,
   PRIMARY KEY(idRate)
);

CREATE TABLE labels(
   idLabel INT AUTO_INCREMENT,
   label VARCHAR(50) ,
   url VARCHAR(150) ,
   logo VARCHAR(150) ,
   idCategory INT NOT NULL,
   PRIMARY KEY(idLabel),
   FOREIGN KEY(idCategory) REFERENCES categories(idCategory)
);

CREATE TABLE families(
   idFamily INT AUTO_INCREMENT,
   name VARCHAR(50) ,
   idUser INT NOT NULL,
   PRIMARY KEY(idFamily),
   FOREIGN KEY(idUser) REFERENCES users(idUser)
);

CREATE TABLE subscriptions(
   idSubscription INT AUTO_INCREMENT,
   date_start DATE,
   date_end DATE,
   date_payment DATE,
   price DECIMAL(5,2)  ,
   created_at DATETIME,
   updated_at DATETIME,
   idFamily INT,
   idLabel INT NOT NULL,
   idRate INT NOT NULL,
   idUser INT,
   PRIMARY KEY(idSubscription),
   FOREIGN KEY(idFamily) REFERENCES families(idFamily),
   FOREIGN KEY(idLabel) REFERENCES labels(idLabel),
   FOREIGN KEY(idRate) REFERENCES rates(idRate),
   FOREIGN KEY(idUser) REFERENCES users(idUser)
);

CREATE TABLE logs(
   idLog INT AUTO_INCREMENT,
   tariffs DECIMAL(5,2)  ,
   created_at DATETIME,
   idRate INT NOT NULL,
   idSubscription INT NOT NULL,
   PRIMARY KEY(idLog),
   FOREIGN KEY(idRate) REFERENCES rates(idRate),
   FOREIGN KEY(idSubscription) REFERENCES subscriptions(idSubscription)
);
