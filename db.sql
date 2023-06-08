CREATE TABLE Users(
   IdUsers INT AUTO_INCREMENT,
   lastname VARCHAR(50) ,
   firstname VARCHAR(50) ,
   mail VARCHAR(50) ,
   password VARCHAR(50) ,
   created_at DATETIME,
   updated_at DATETIME,
   validate_at DATETIME,
   PRIMARY KEY(IdUsers)
);

CREATE TABLE Categories(
   IdCategories INT AUTO_INCREMENT,
   category VARCHAR(50) ,
   PRIMARY KEY(IdCategories)
);

CREATE TABLE Rates(
   IdRates INT AUTO_INCREMENT,
   rates VARCHAR(50) ,
   PRIMARY KEY(IdRates)
);

CREATE TABLE Labels(
   IdLabel INT AUTO_INCREMENT,
   label VARCHAR(50) ,
   url VARCHAR(150) ,
   logo VARCHAR(50) ,
   IdCategories INT NOT NULL,
   PRIMARY KEY(IdLabel),
   FOREIGN KEY(IdCategories) REFERENCES Categories(IdCategories)
);

CREATE TABLE Subscriptions(
   IdSubscriptions INT AUTO_INCREMENT,
   date_start DATE,
   date_end DATE,
   date_payment DATE,
   tariffs DECIMAL(5,2)  ,
   created_at DATETIME,
   updated_at DATETIME,
   IdLabel INT NOT NULL,
   IdRates INT NOT NULL,
   PRIMARY KEY(IdSubscriptions),
   FOREIGN KEY(IdLabel) REFERENCES Labels(IdLabel),
   FOREIGN KEY(IdRates) REFERENCES Rates(IdRates)
);

CREATE TABLE Logs(
   IdLogs INT AUTO_INCREMENT,
   created_at DATETIME,
   tariffs DECIMAL(5,2)  ,
   rates VARCHAR(50) ,
   IdSubscriptions INT NOT NULL,
   PRIMARY KEY(IdLogs),
   FOREIGN KEY(IdSubscriptions) REFERENCES Subscriptions(IdSubscriptions)
);

CREATE TABLE Users_subsciptions(
   IdUsers INT,
   IdSubscriptions INT,
   PRIMARY KEY(IdUsers, IdSubscriptions),
   FOREIGN KEY(IdUsers) REFERENCES Users(IdUsers),
   FOREIGN KEY(IdSubscriptions) REFERENCES Subscriptions(IdSubscriptions)
);
