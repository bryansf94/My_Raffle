use my_riffle;

create table admin_cadastro (
id_admin_cadastro int auto_increment primary key,
nome_admin varchar(45) not null,
sobre_nome_admin varchar(45) not null,
tel_admin varchar(45) not null unique,
email_admin varchar(45) not null unique,
login_admin varchar(45) not null unique,
senha_admin varchar(45) not null);

use my_riffle;

create table sorteio (
id_sorteio int primary key not null auto_increment,
nome_sorteio varchar(45) not null,
descricao_sorteio varchar(200) not null,
data_inicio date not null,
data_fim date not null,
satus varchar(45) not null);

use my_riffle;

create table comprador_rifa (
id_comprador int primary key not null auto_increment,
nome_comprador varchar(45) not null,
sobre_nome_comprador varchar(45) not null,
tel_comprador varchar(45) unique not null,
email_comprador varchar(45) unique,
insta_comprador varchar(45) unique);

use my_riffle;

create table bilhete (
id_bilhete int primary key auto_increment not null,
numero_bilhete int not null,
fk_comprador int not null,
fk_sorteio int not null,
data_compra date not null,
foreign key (fk_comprador) references comprador_rifa (id_comprador),
foreign key (fk_sorteio) references sorteio (id_sorteio));

use my_riffle;
ALTER TABLE comprador_rifa ADD UNIQUE (nome_comprador);
ALTER TABLE comprador_rifa ADD UNIQUE (sobre_nome_comprador);
ALTER TABLE comprador_rifa ADD UNIQUE (email_comprador);
ALTER TABLE comprador_rifa ADD UNIQUE (insta_comprador);

use my_riffle;

create table vencedor (
id_vencedor int primary key not null auto_increment,
fk_comprador_vencedor int not null,
fk_sorteio int not null,
fk_bilhete_sorteado int not null,
fk_nome_vencedor varchar(45) not null,
fk_sobre_nome_vencedor varchar(45) not null,
fk_email_vencedor varchar(45) unique,
fk_insta_vencedor varchar(45) unique,
foreign key (fk_comprador_vencedor) references comprador_rifa (id_comprador),
foreign key (fk_sorteio)references sorteio (id_sorteio),
foreign key (fk_bilhete_sorteado) references bilhete (id_bilhete),
foreign key (fk_nome_vencedor) references comprador_rifa (nome_comprador),
foreign key (fk_sobre_nome_vencedor) references comprador_rifa (sobre_nome_comprador),
foreign key (fk_email_vencedor) references comprador_rifa (email_comprador),
foreign key (fk_insta_vencedor) references comprador_rifa (insta_comprador));


































