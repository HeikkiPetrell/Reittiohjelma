
--SQLite
create table reitit (
	idR INTEGER PRIMARY KEY AUTOINCREMENT,
	pvm DATETIME DEFAULT CURRENT_TIMESTAMP,
	alku VARCHAR(256),
	loppu VARCHAR(256),
	kuvaus VARCHAR(256),
	huippu decimal(4,1),
	keski decimal(4,1),
	kokmatka decimal(4,2),
	kokaika DATETIME

);

create table merkit (
	idM INTEGER PRIMARY KEY AUTOINCREMENT,
	idR int NOT NULL,
	lon decimal(8,6),
	lat decimal(8,6),
	FOREIGN KEY (idR) REFERENCES reitit(idR)
);

INSERT INTO reitit (alku,loppu,kuvaus,huippu,keski,kokmatka,kokaika) VALUES (
'Klaukkala', 'Helsinki', 'Testi reitti', 100.2, 76.1, 26, '00:20:30'
);

INSERT INTO merkit (idR, lon, lat) VALUES (
 (SELECT last_insert_rowid()), 24.748501, 60.381919
);

INSERT INTO merkit (idR, lon, lat) VALUES (
 (SELECT last_insert_rowid()), 24.938379, 60.169856
);

/*
DROP TABLE merkit;
DROP TABLE reitit;
*/
