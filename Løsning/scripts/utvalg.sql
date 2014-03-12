CREATE TABLE utvalg
(

-- Opprett tabell
Navn VARCHAR(45) NOT NULL UNIQUE DEFAULT '', 
Oppsummering VARCHAR(100) NOT NULL DEFAULT '', 
Kategori ENUM('Musikk og Media', 'Idrett og Friluft', 'Skole', 'Spill', 'Fritid', 'Annet') NOT NULL DEFAULT 'Annet', 
Bilde VARCHAR (255) DEFAULT 'http://www.google.no',
Tekst TEXT NOT NULL, 

PRIMARY KEY (Navn)

);
-- Sett inn verdier
INSERT INTO utvalg
VALUES 
-- ('UFF', 'Fint studentutvalg for ting', 'Spill', '../bilder/uff.png', 'MASSEMASSE MASSEMASSEMASSEMASSE MASSEMASSE MASSEMASSEMASSEMASSE MASSEMASSE') ,
-- ('UFF2', 'Finere studentutvalg for flere ting', 'Spill', '../bilder/uff.png', 'MASSEMASSE MASSEMAS 2 2 SEMASSEMASSE MASSEMASSE 2 MASSEMASSEMASSEMASSE MASSEMASSE'),
('PUS', 'Lær å lage spill!', 'Dyr', '../bilder/uff.png', 'MASSEMASSE MASSEMASSEMASSEMASSE MASSEMASSE MASSEMASSEMASSEMASSE MASSEMASSE') ,
('Apple User Group', 'Relativt mye tekst for å demonstrere hva man får plass til', 'Spill', '../bilder/uff.png', 'MASSEMASSE MASSEMAS 2 2 SEMASSEMASSE MASSEMASSE 2 MASSEMASSEMASSEMASSE MASSEMASSE'),
('NITH Idrett', 'Idrett etc', 'Spill', '../bilder/uff.png', 'MASSEMASSE MASSEMASSEMASSEMASSE MASSEMASSE MASSEMASSEMASSEMASSE MASSEMASSE') ,
('Microsoft User Group', 'Microsoft Works', 'Spill', '../bilder/uff.png', 'MASSEMASSE MASSEMAS 2 2 SEMASSEMASSE MASSEMASSE 2 MASSEMASSEMASSEMASSE MASSEMASSE');