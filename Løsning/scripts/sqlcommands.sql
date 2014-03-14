-- Marker delen av scriptet du ønsker å kjøre.



-- For fjerning av tabell utvalg
DROP TABLE utvalg;

-- For fjerning av tabell bruker
DROP TABLE bruker;


-- Opprett tabell 'utvalg'
CREATE TABLE utvalg
(

Navn VARCHAR(55) NOT NULL UNIQUE,
Oppsummering VARCHAR(100) NOT NULL DEFAULT '', 
Kategori ENUM('Musikk og Media', 'Idrett og Friluft', 'Skole', 'Spill ', 'Utvikling', 'Annet') NOT NULL DEFAULT 'Annet', 
Bilde VARCHAR (255) DEFAULT '../bilder/missing.png',
Tekst TEXT NOT NULL,

PRIMARY KEY (Navn)

);


-- Opprett tabell 'bruker'
CREATE TABLE bruker
(

MailAdr VARCHAR(255) NOT NULL UNIQUE, 
Fornavn VARCHAR (80) NOT NULL DEFAULT 'ukjent',
Etternavn VARCHAR (160) NOT NULL DEFAULT 'ukjent',
Passord VARCHAR (50) NOT NULL, 
Adgang ENUM('Admin', 'Student'),

PRIMARY KEY (MailAdr)

);

-- Sett verdier i 'bruker' (som eksempel) 
INSERT INTO utvalg
VALUES

('tmbv93@gmail.com', 'Are', 'Bjoernsen', '123abc', 'Admin'),
('veitom13@nith.no', 'Stian', 'Eriksen', 'eple', 'Student');


-- Sett verdier i 'utvalg'
INSERT INTO utvalg
VALUES

('UFF', 'Utvalget for deg med Fantastiske Fritidsinteresser!', 'Spill', '../bilder/uff.png', 'UFF#'),
('PUS', 'For deg som vil utvikle egne spill', 'Utvikling', '../bilder/pus.png', 'PUS#'),
('Apple User Group', '', 'Spill', '../bilder/uff.png', 'MASSEMASSE MASSEMAS 2 2 SEMASSEMASSE MASSEMASSE 2 MASSEMASSEMASSEMASSE MASSEMASSE'),
('NITH Idrett', 'Idrett etc', 'Spill', '../bilder/uff.png', 'MASSEMASSE MASSEMASSEMASSEMASSE MASSEMASSE MASSEMASSEMASSEMASSE MASSEMASSE'),
('Microsoft User Group', 'Microsoft Works', 'Spill', '../bilder/uff.png', 'MASSEMASSE MASSEMAS 2 2 SEMASSEMASSE MASSEMASSE 2 MASSEMASSEMASSEMASSE MASSEMASSE');
