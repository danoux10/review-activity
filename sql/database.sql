drop database activityBeta;
create database activityBeta;
use activityBeta;

create table icon(
    idIcon int(11) primary key auto_increment not null,
    nameIcon varchar(255) not null,
    tag varchar(255) not null
);

create table color(
    idColor int(11) primary key auto_increment not null,
    border varchar(255),
    text varchar(255) not null,
    back varchar(255),
    fill varchar(255)
);

create table cards(
    idCard int(11) primary key auto_increment not null,
    iconId int,
    colorId int,
    nameCard varchar(255) not null,
    activ boolean not null ,
    foreign key (iconId) references icon(idIcon),
    foreign key (colorId) references color(idColor)
);

create table data_graph(
    idDataG int primary key auto_increment not null,
    jours date,
    debut time,
    fin time,
    duration time,
    durationNum int(255),
    card int(11),
    info varchar(255),
    ajout varchar(255),
    foreign key (card) references cards(idCard)
);

create table data_graphbis(
    idDataG int primary key auto_increment not null,
    jours date not null ,
    debut time not null ,
    fin time,
    duration time not null ,
    durationNum int(255) not null ,
    card int(11) not null ,
    info varchar(255) not null ,
    ajout varchar(255) not null ,
    foreign key (card) references cards(idCard)
);

create table DataBar(
    idBar int primary key auto_increment not null,
    jours date not null,
    durationTotal int(255) not null
);

create table DataOther(
    idOther int primary key  auto_increment not null,
    jours date not null,
    durationTotalAct int(255) not null,
    cardId int(255) not null,
    foreign key (cardId) references cards(idCard)
)