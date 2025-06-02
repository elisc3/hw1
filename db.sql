Create DATABASE mirador;
USE mirador;

CREATE TABLE utenti (
    id integer primary key auto_increment,
    username varchar(255) not null unique,
    password varchar(255) not null,
    name varchar(255) not null,
    surname varchar(255) not null,
    email varchar(255) not null unique
);

CREATE TABLE if NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    author_id integer,
    content TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(author_id) REFERENCES utenti(id)
);

CREATE TABLE if NOT EXISTS immagini_preferiti (
    id_img VARCHAR(255),
    user_id integer,
    link VARCHAR(255),
    PRIMARY KEY(id_img, user_id),
    FOREIGN KEY(user_id) REFERENCES utenti(id)
);

CREATE TABLE if NOT EXISTS sale (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255),
    link VARCHAR(255),
    descrizione VARCHAR(255)
);

INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Ristorante & Pizzeria', 'mirador13.png', 'Ampio e luminoso, l’ambiente lussuoso è stato creato per gli ospiti del nostro ristorante. I suoi pavimenti chic e gli arredi di lusso creano un’atmosfera accogliente.');
INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Sala Antares', 'mirador5.jpg', 'Classica e sofisticata, la Sala Antares fa del bianco e dell’avorio i colori principali dei suoi complementi d’arredo, creando un ambiente intimo ed elegante. L’ambiente è impreziosito da cristalli e candide porcellane. ');
INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Sala Aurora Garden', 'mirador1.png', 'Romantica sala esterna con vista panoramica sull’Etna e sul mare. La Sala Aurora Garden è la cornice perfetta per i vostri eventi all’aperto, grazie alla scenografica passerella in vetro che attraversa la piscina e agli arredi total white.');
INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Sala Congressi', 'mirador14.png', 'Villa Mirador dispone di un elegante sala meeting climatizzata e attrezzata per organizzare qualsiasi tipo di evento congressuale, garantendovi un servizio completo e accurato. La sala dispone di moderne tecnologie audiovisive e della copertura wi-fi.');
INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Sala Gloria', 'mirador15.jpg', 'La Sala Gloria si compone di un ambiente molto ampio circondato da larghe vetrate da cui osservare gli splendidi paesaggi etnei. Giochi di luci e di acqua renderanno indimenticabile il vostro evento, trasformando la sala in un luogo magico.');
INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Sala Luxury', 'mirador16.jpg', 'La più classica e lussuosa fra le sale di Villa Mirador. L’ampia scalinata in pietra lavica che precede l’ingresso della Sala Luxury vi regalerà un’entrata ricca di stile, personalizzabile con diversi decori.');
INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Sala Miramar', 'mirador17.jpg', 'Romantica sala esterna con vista panoramica sul mare. La Sala Miramar sarà la cornice perfetta per i vostri eventi all’aperto, grazie alla scenografica passerella in vetro che attraversa la piscina e agli arredi total white.');
INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Sala Preziosa', 'mirador18.jpg', 'Sobria, elegante e moderna, la Sala Preziosa, con i suoi complementi bianco e avorio, dona ai suoi ospiti un’atmosfera intima e d accogliente. Le grandi vetrate rendono l’ambiente molto luminoso e permettono di accedere alla terrazza panoramica.');
INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Sala Roberta', 'mirador19.jpg', 'Semplice ed elegante, Sala Roberta si compone di un ambiente luminoso dal quale si accede a una terrazza panoramica. All’interno gli arredi bianchi creano un atmosfera tranquilla e intima, armonizzandosi con il lussuoso lampadario che illumina gli spazi.');
INSERT INTO sale ( id, nome, link, descrizione) VALUES( NULL, 'Sala Sinfonia', 'mirador20.jpg', 'Sala Sinfonia è il luogo adatto per chi ama le atmosfere raffinate e chic. I suoi arredi in stile optical conquisteranno gli ospiti con la loro personalità, trasportandoli in serate danzanti. Sinfonia è ideale per concludere gli eventi a ritmo di musica.');


