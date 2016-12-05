/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     02/12/2016 16:18:39                          */
/*==============================================================*/


drop table if exists AUXILIAR;

drop table if exists CARGO;

drop table if exists CARGO_DOC;

drop table if exists CARRERA;

drop table if exists DOCENTE;

drop table if exists DOC_AUX;

drop table if exists HORARIO_DOC;

drop table if exists MATERIA;

drop table if exists MATERIA_DICTA;

drop table if exists NOMBRAMIENTO_AUX;

drop table if exists NOMBRAMIENTO_DOC;

drop table if exists PLAN;

drop table if exists ROL;

drop table if exists SEGUIMIENTO_AUX;

drop table if exists SEGUIMIENTO_DOC;

drop table if exists SEGUIMIENTO_EXCLU_DOC;

drop table if exists TIENE;

drop table if exists USUARIO;

/*==============================================================*/
/* Table: AUXILIAR                                              */
/*==============================================================*/
create table AUXILIAR
(
   ID_AUX               int(10) not null auto_increment,
   CI_AUX               int not null,
   EXTENSION_CI_AUX     varchar(25) not null,
   NOMBRE_AUX           varchar(50) not null,
   APELLPA_AUX          varchar(50) not null,
   APELLMA_AUX          varchar(50) not null,
   FECHA_NACIMIENTO_AUX date,
   TELEFONO_AUX         int,
   CELULAR_AUX          int,
   CORREO_AUX           varchar(50),
   GENERO_AUX           varchar(20),
   DIRECCION_AUX        varchar(100),
   CARRERA_AUX          varchar(50),
   primary key (ID_AUX)
);

/*==============================================================*/
/* Table: CARGO                                                 */
/*==============================================================*/
create table CARGO
(
   ID_CARGO             int(10) not null auto_increment,
   ID_USUARIO           int(10) not null,
   TIPO_CARGO           varchar(50) not null,
   GESTION              varchar(20) not null,
   AUTORIDAD            varchar(50),
   primary key (ID_CARGO)
);

/*==============================================================*/
/* Table: CARGO_DOC                                             */
/*==============================================================*/
create table CARGO_DOC
(
   ID_CARGO_DOC         int(10) not null auto_increment,
   ID_DOC               int(10) not null,
   CARGO_DOC            varchar(50),
   ESTADO_CARGO_DOC     varchar(200),
   primary key (ID_CARGO_DOC)
);

/*==============================================================*/
/* Table: CARRERA                                               */
/*==============================================================*/
create table CARRERA
(
   ID_CARRERA           int(10) not null auto_increment,
   NOMBRE_CARRERA       varchar(50),
   SIGLA_CARRERA        varchar(20),
   FACULTAD             varchar(50),
   DEPTO_CARRERA        varchar(50),
   primary key (ID_CARRERA)
);

/*==============================================================*/
/* Table: DOCENTE                                               */
/*==============================================================*/
create table DOCENTE
(
   ID_DOC               int(10) not null auto_increment,
   ID_ROL               int(10) not null,
   CI_DOC               int not null,
   NOMBRE_DOC           varchar(50) not null,
   APELLPA_DOC          varchar(50) not null,
   APELLMA_DOC          varchar(50) not null,
   TITULO_DOC           varchar(50),
   FECHA_NACIMIENTO_DOC date,
   TELEFONO_DOC         int,
   CELULAR_DOC          int,
   EXPEDIDO_CI_DOC      varchar(25) not null,
   CORREO_DOC           varchar(100),
   GENERO_DOC           varchar(20) not null,
   DIRECCION_DOC        varchar(100),
   TIEMPO_DEDICACION_DOC varchar(50),
   NICK                 varchar(50),
   CONTRASENIA_DOC      varchar(500),
   TIPO_DOC             varchar(80),
   primary key (ID_DOC)
);

/*==============================================================*/
/* Table: DOC_AUX                                               */
/*==============================================================*/
create table DOC_AUX
(
   ID_DOC               int(10) not null,
   ID_AUX               int(10) not null,
   primary key (ID_DOC, ID_AUX)
);

/*==============================================================*/
/* Table: HORARIO_DOC                                           */
/*==============================================================*/
create table HORARIO_DOC
(
   ID_HORARIO_DOC       int(10) not null auto_increment,
   ID_MATERIA_DICTA     int(10) not null,
   GRUPO                varchar(20),
   AULA                 varchar(20),
   NUMERO_ALUMNOS       int,
   DIA                  varchar(50),
   primary key (ID_HORARIO_DOC)
);

/*==============================================================*/
/* Table: MATERIA                                               */
/*==============================================================*/
create table MATERIA
(
   ID_MATERIA           int(10) not null auto_increment,
   NOMBRE_MATERIA       varchar(50) not null,
   SIGLA_MATERIA        int not null,
   TIPO_MATERIA         varchar(50) not null,
   NIVEL_MATERIA        varchar(20) not null,
   primary key (ID_MATERIA)
);

/*==============================================================*/
/* Table: MATERIA_DICTA                                         */
/*==============================================================*/
create table MATERIA_DICTA
(
   ID_MATERIA_DICTA     int(10) not null auto_increment,
   ID_NOMBRAMIENTO_DOC  int(10) not null,
   ID_SEGUIMIENTO_DOC   int(10) not null,
   HORA_SEMANA          float,
   HORA_TEORIA          float,
   primary key (ID_MATERIA_DICTA)
);

/*==============================================================*/
/* Table: NOMBRAMIENTO_AUX                                      */
/*==============================================================*/
create table NOMBRAMIENTO_AUX
(
   ID_NOMBRAMIENTO_AUX  int(10) not null auto_increment,
   ID_AUX               int(10) not null,
   DEPTO_AUX            varchar(50),
   FACULTAD_AUX         varchar(50),
   FECHA_NOMBRAMIENTO_AUX date,
   DURACION_AUX         varchar(30),
   GESTION_AUX          varchar(20),
   HRS_SEMANA_AUX       float,
   CATEGORIA_AUX        varchar(30),
   primary key (ID_NOMBRAMIENTO_AUX)
);

/*==============================================================*/
/* Table: NOMBRAMIENTO_DOC                                      */
/*==============================================================*/
create table NOMBRAMIENTO_DOC
(
   ID_NOMBRAMIENTO_DOC  int(10) not null auto_increment,
   ID_DOC               int(10) not null,
   FECHA_NOMBRAMIENTO   date,
   primary key (ID_NOMBRAMIENTO_DOC)
);

/*==============================================================*/
/* Table: PLAN                                                  */
/*==============================================================*/
create table PLAN
(
   ID_PLAN              int(10) not null auto_increment,
   ID_CARRERA           int(10) not null,
   NOMBRE_PLAN          varchar(50),
   primary key (ID_PLAN)
);

/*==============================================================*/
/* Table: ROL                                                   */
/*==============================================================*/
create table ROL
(
   ID_ROL               int(10) not null auto_increment,
   NOMBRE_ROL           varchar(100),
   DESCRIPCION_ROL      varchar(200),
   TAREA_ROL            varchar(200),
   DESCRIPCION_TAREA_ROL varchar(200),
   primary key (ID_ROL)
);

/*==============================================================*/
/* Table: SEGUIMIENTO_AUX                                       */
/*==============================================================*/
create table SEGUIMIENTO_AUX
(
   ID_ASEGUIMIENTO_AUX  int(10) not null auto_increment,
   ID_AUX               int(10) not null,
   OTRO_CARGO_AUX       varchar(200),
   HRS_PRACTICAS_AUX    float,
   HRS_INVES_AUX        float,
   primary key (ID_ASEGUIMIENTO_AUX)
);

/*==============================================================*/
/* Table: SEGUIMIENTO_DOC                                       */
/*==============================================================*/
create table SEGUIMIENTO_DOC
(
   ID_SEGUIMIENTO_DOC   int(10) not null auto_increment,
   ID_DOC               int(10) not null,
   ASIST                varchar(30),
   ADJ                  varchar(30),
   CAT                  varchar(30),
   AUXILIAR_DOC         varchar(30),
   OTRO_CARGO           varchar(200),
   HRS_TEORIA           float,
   HRS_INVES            float,
   HRS_EXTENSION        float,
   HRS_SERVICIO         float,
   HRS_PRACTICA         float,
   RCF1                 varchar(10),
   RCF2                 varchar(10),
   RCF3                 varchar(10),
   HRS_PRODUCCION       float,
   HRS_SERVICIO_ACAD    float,
   HRS_PRODUCCION_ACAD  float,
   HRS_ADMIN_ACAD       float,
   HRS_TRAB_SEMANA      float,
   HRS_TRAB_MES         float,
   HRS_AUTORIZADAS      float,
   TIEMPO_PARCIAL       float,
   DEDICACION_EXCLUSIVA varchar(60),
   OBSERVACION          varchar(300),
   RCF4                 varchar(10),
   RCF5                 varchar(10),
   RCF6                 varchar(10),
   RCF7                 varchar(10),
   primary key (ID_SEGUIMIENTO_DOC)
);

/*==============================================================*/
/* Table: SEGUIMIENTO_EXCLU_DOC                                 */
/*==============================================================*/
create table SEGUIMIENTO_EXCLU_DOC
(
   ID_SEGUIMIENTO_EXCLU int(10) not null auto_increment,
   ID_SEGUIMIENTO_DOC   int(10) not null,
   CASO_EXCLU           varchar(20),
   TIPO                 varchar(20),
   HORA_INIAL           time,
   RANGO_INICIAL        varchar(15),
   HORA_FINAL           time,
   RANGO_FINAL          varchar(15),
   primary key (ID_SEGUIMIENTO_EXCLU)
);

/*==============================================================*/
/* Table: TIENE                                                 */
/*==============================================================*/
create table TIENE
(
   ID_MATERIA           int(10) not null,
   ID_PLAN              int(10) not null,
   primary key (ID_MATERIA, ID_PLAN)
);

/*==============================================================*/
/* Table: USUARIO                                               */
/*==============================================================*/
create table USUARIO
(
   ID_USUARIO           int(10) not null auto_increment,
   ID_CARRERA           int(10) not null,
   ID_ROL               int(10) not null,
   NOMBRE_USUARIO       varchar(50) not null,
   APELLPA_USUARIO      varchar(50) not null,
   APELLMA_USUARIO      varchar(50) not null,
   ESTADO_USUARIO       varchar(60),
   GENERO_USUARIO       varchar(25),
   CUENTA               varchar(50),
   CONTRASENIA          varchar(500),
   ROL_USUARIO          varchar(50) not null,
   primary key (ID_USUARIO)
);

alter table CARGO add constraint FK_RELATIONSHIP_20 foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO) on delete restrict on update restrict;

alter table CARGO_DOC add constraint FK_RELATIONSHIP_23 foreign key (ID_DOC)
      references DOCENTE (ID_DOC) on delete restrict on update restrict;

alter table DOCENTE add constraint FK_RELATIONSHIP_24 foreign key (ID_ROL)
      references ROL (ID_ROL) on delete restrict on update restrict;

alter table DOC_AUX add constraint FK_RELATIONSHIP_21 foreign key (ID_DOC)
      references DOCENTE (ID_DOC) on delete restrict on update restrict;

alter table DOC_AUX add constraint FK_RELATIONSHIP_22 foreign key (ID_AUX)
      references AUXILIAR (ID_AUX) on delete restrict on update restrict;

alter table HORARIO_DOC add constraint FK_RELATIONSHIP_10 foreign key (ID_MATERIA_DICTA)
      references MATERIA_DICTA (ID_MATERIA_DICTA) on delete restrict on update restrict;

alter table MATERIA_DICTA add constraint FK_RELATIONSHIP_15 foreign key (ID_NOMBRAMIENTO_DOC)
      references NOMBRAMIENTO_DOC (ID_NOMBRAMIENTO_DOC) on delete restrict on update restrict;

alter table MATERIA_DICTA add constraint FK_RELATIONSHIP_8 foreign key (ID_SEGUIMIENTO_DOC)
      references SEGUIMIENTO_DOC (ID_SEGUIMIENTO_DOC) on delete restrict on update restrict;

alter table NOMBRAMIENTO_AUX add constraint FK_RELATIONSHIP_18 foreign key (ID_AUX)
      references AUXILIAR (ID_AUX) on delete restrict on update restrict;

alter table NOMBRAMIENTO_DOC add constraint FK_RELATIONSHIP_16 foreign key (ID_DOC)
      references DOCENTE (ID_DOC) on delete restrict on update restrict;

alter table PLAN add constraint FK_RELATIONSHIP_5 foreign key (ID_CARRERA)
      references CARRERA (ID_CARRERA) on delete restrict on update restrict;

alter table SEGUIMIENTO_AUX add constraint FK_RELATIONSHIP_19 foreign key (ID_AUX)
      references AUXILIAR (ID_AUX) on delete restrict on update restrict;

alter table SEGUIMIENTO_DOC add constraint FK_RELATIONSHIP_17 foreign key (ID_DOC)
      references DOCENTE (ID_DOC) on delete restrict on update restrict;

alter table SEGUIMIENTO_EXCLU_DOC add constraint FK_RELATIONSHIP_9 foreign key (ID_SEGUIMIENTO_DOC)
      references SEGUIMIENTO_DOC (ID_SEGUIMIENTO_DOC) on delete restrict on update restrict;

alter table TIENE add constraint FK_TIENE foreign key (ID_MATERIA)
      references MATERIA (ID_MATERIA) on delete restrict on update restrict;

alter table TIENE add constraint FK_TIENE2 foreign key (ID_PLAN)
      references PLAN (ID_PLAN) on delete restrict on update restrict;

alter table USUARIO add constraint FK_RELATIONSHIP_1 foreign key (ID_CARRERA)
      references CARRERA (ID_CARRERA) on delete restrict on update restrict;

alter table USUARIO add constraint FK_RELATIONSHIP_25 foreign key (ID_ROL)
      references ROL (ID_ROL) on delete restrict on update restrict;

