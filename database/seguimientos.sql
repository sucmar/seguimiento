/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     12/16/2016 3:48:39 PM                        */
/*==============================================================*/


drop table if exists AULA;

drop table if exists CARRERA;

drop table if exists DIAS;

drop table if exists DOCENTE;

drop table if exists FACULTAD;

drop table if exists GRUPO;

drop table if exists HORARIO;

drop table if exists MATERIA;

drop table if exists PLAN_ESTUDIOS;

drop table if exists TIENE;

drop table if exists USUARIO;

/*==============================================================*/
/* Table: AULA                                                  */
/*==============================================================*/
create table AULA
(
   ID_AULA              int(10) not null auto_increment,
   NOMBRE_AULA          varchar(25),
   DESCRIPCION_AULA     varchar(200),
   primary key (ID_AULA)
);

/*==============================================================*/
/* Table: CARRERA                                               */
/*==============================================================*/
create table CARRERA
(
   ID_CARRERA           int(10) not null auto_increment,
   ID_FACULTAD          int(10) not null,
   NOMBRE_CARRERA       varchar(20),
   SIGLA_CARRERA        varchar(15),
   FACULTAD_CARRERA     varchar(20),
   DPTO_CARRERA         varchar(20),
   primary key (ID_CARRERA)
);

/*==============================================================*/
/* Table: DIAS                                                  */
/*==============================================================*/
create table DIAS
(
   ID_MATERIA           int(10),
   ID_HORARIO           int(10),
   ID_AULA              int(10),
   DIA                  varchar(20)
);

/*==============================================================*/
/* Table: DOCENTE                                               */
/*==============================================================*/
create table DOCENTE
(
   ID_DOCENTE           int not null,
   CI_DOCENTE           int,
   NOMBRE_DOC           varchar(30),
   APELLPATERNO_DOC     varchar(30),
   APELLMATERNO_DOC     varchar(30),
   TELEFONO_DOC         int,
   CELULAR_DOC          int,
   NACIMIENTO_DOC       varchar(50),
   CIEXPEDIDO_DOC       char(15),
   DIRECCION_DOC        varchar(100),
   DEDICACION_DOC       varchar(30),
   CORREO_DOC           varchar(50),
   PROFECION_DOC        varchar(30),
   USER_DOC             varchar(50),
   CONTRASENIA_DOC      varchar(500),
   primary key (ID_DOCENTE)
);

/*==============================================================*/
/* Table: FACULTAD                                              */
/*==============================================================*/
create table FACULTAD
(
   ID_FACULTAD          int(10) not null auto_increment,
   NOMBRE_FACULTAD      varchar(50),
   UBICACION_FACULTAD_  varchar(200),
   primary key (ID_FACULTAD)
);

/*==============================================================*/
/* Table: GRUPO                                                 */
/*==============================================================*/
create table GRUPO
(
   ID_GRUPO             int(10) not null auto_increment,
   ID_DOCENTE           int not null,
   ID_MATERIA           int(10) not null,
   NOM_GRUPO            varchar(50),
   primary key (ID_GRUPO)
);

/*==============================================================*/
/* Table: HORARIO                                               */
/*==============================================================*/
create table HORARIO
(
   ID_HORARIO           int(10) not null auto_increment,
   INICIO_HORARIO       varchar(10),
   FIN_HORARIO          varchar(10),
   primary key (ID_HORARIO)
);

/*==============================================================*/
/* Table: MATERIA                                               */
/*==============================================================*/
create table MATERIA
(
   ID_MATERIA           int(10) not null auto_increment,
   NOMBRE_MATERIA       varchar(20),
   SIGLA_MATERIA        int,
   TIPO_MATERIA         varchar(20),
   NIVEL_MATERIA        varchar(15),
   primary key (ID_MATERIA)
);

/*==============================================================*/
/* Table: PLAN_ESTUDIOS                                         */
/*==============================================================*/
create table PLAN_ESTUDIOS
(
   ID_PLAN              int(10) not null auto_increment,
   ID_CARRERA           int(10) not null,
   NOMBRE_PLAN          varchar(20),
   primary key (ID_PLAN)
);

/*==============================================================*/
/* Table: TIENE                                                 */
/*==============================================================*/
create table TIENE
(
   ID_PLAN              int(10) not null,
   ID_MATERIA           int(10) not null,
   DESCRIPCION          varchar(200)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   ID_USUARIO           int not null,
   ID_CARRERA           int(10) not null,
   NOMBRE_USUARIO       varchar(50),
   APELLPA_USUARIO      varchar(50),
   APELLMA_USUARIO      varchar(50),
   ESTADO_USUARIO       varchar(25),
   GENERO_USUARIO       varchar(15),
   CUENTA               varchar(20),
   CONTRASENIA          varchar(500),
   primary key (ID_USUARIO)
);

alter table CARRERA add constraint FK_FACULTAD_CARRERA foreign key (ID_FACULTAD)
      references FACULTAD (ID_FACULTAD) on delete restrict on update restrict;

alter table DIAS add constraint FK_RELATIONSHIP_6 foreign key (ID_HORARIO)
      references HORARIO (ID_HORARIO) on delete restrict on update restrict;

alter table DIAS add constraint FK_RELATIONSHIP_7 foreign key (ID_AULA)
      references AULA (ID_AULA) on delete restrict on update restrict;

alter table DIAS add constraint FK_RELATIONSHIP_8 foreign key (ID_MATERIA)
      references MATERIA (ID_MATERIA) on delete restrict on update restrict;

alter table GRUPO add constraint FK_GRUPO_DOCENTE foreign key (ID_DOCENTE)
      references DOCENTE (ID_DOCENTE) on delete restrict on update restrict;

alter table GRUPO add constraint FK_MATERIA_GRUPO foreign key (ID_MATERIA)
      references MATERIA (ID_MATERIA) on delete restrict on update restrict;

alter table PLAN_ESTUDIOS add constraint FK_CARRERA_PLAN foreign key (ID_CARRERA)
      references CARRERA (ID_CARRERA) on delete restrict on update restrict;

alter table TIENE add constraint FK_PLAN foreign key (ID_PLAN)
      references PLAN_ESTUDIOS (ID_PLAN) on delete restrict on update restrict;

alter table TIENE add constraint FK_RELATIONSHIP_10 foreign key (ID_MATERIA)
      references MATERIA (ID_MATERIA) on delete restrict on update restrict;

alter table USUARIO add constraint FK_CARRERA_SECRETARIA foreign key (ID_CARRERA)
      references CARRERA (ID_CARRERA) on delete restrict on update restrict;

