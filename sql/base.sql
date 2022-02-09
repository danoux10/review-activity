drop database review_activity;
create database review_activity;
use review_activity;

create table icon(
    id_icon int primary key  auto_increment not null ,
    name_icon varchar(255) not null ,
    tag varchar(255) not null
);

create table color(
    id_color int primary key  auto_increment not null ,
    border varchar(255),
    back varchar(255),
    fill varchar(255),
    color_name varchar(255) not null
);

create table cards (
    id_card int primary key  auto_increment not null ,
    icon_id int,
    color_id int,
    name_card varchar(255) not null,
    actived boolean not null ,
    foreign key (icon_id) references icon(id_icon),
    foreign key (color_id) references color(id_color)
);

create table data_graph(
    id_data_graph int auto_increment primary key  not null ,
    jours date,
    debut time,
    fin time,
    duration time,
    duration_num int(255),
    card int(11) not null ,
    info varchar(255) not null,
    ajout varchar(255) not null ,
    foreign key (card) references cards(id_card)
);

create table data_bar(
    id_bar int primary key auto_increment not null ,
    jours date not null ,
    duration_total int(255) not null
);

create table  data_pie(
    id_pie int primary key auto_increment not null ,
    jours date not null ,
    duration_totam int(255) not null ,
    card_id int(255) not null ,
    foreign key (card_id) references cards(id_card)
)

create table valeur(
    id int primary key auto_increment not null ,
    valeur int(255) not null,
    other date
);

create table somme(
    id int primary key  auto_increment not null ,
    somme int(255) ,
    other varchar(255)
)