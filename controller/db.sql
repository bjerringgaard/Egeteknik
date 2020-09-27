DROP DATABASE IF EXISTS egeteknik;
CREATE DATABASE egeteknik;
USE egeteknik;

CREATE TABLE user (
    userid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username varchar (20) NOT NULL,
    userpass varchar (255) NOT NULL
);

CREATE TABLE news (
    newsid int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    newstitle varchar (50) NOT NULL,
    newsdesc varchar (255) NULL,
    newsimage varchar (255) NOT NULL,
    newstime TIMESTAMP NOT NULL
);

INSERT INTO user (userid, username, userpass)
VALUES (
    '1',	
    'Admin',
    '$2y$05$Hll3v.I5jWGK3gjaUYScL.nZKrCyxGcIBPcyxw/bpuMhuAfwH2r.G'
);

INSERT INTO user (userid, username, userpass)
VALUES (
    '2',	
    'Marcus',
    '$2y$05$Hll3v.I5jWGK3gjaUYScL.nZKrCyxGcIBPcyxw/bpuMhuAfwH2r.G'
);

INSERT INTO user (userid, username, userpass)
VALUES (
    '3',	
    'Poul',
    '$2y$05$Hll3v.I5jWGK3gjaUYScL.nZKrCyxGcIBPcyxw/bpuMhuAfwH2r.G'
);