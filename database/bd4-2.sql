/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     14/11/2016 18:46:26                          */
/*==============================================================*/



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
   DIRECCION_AUX        varchar(80),
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
/* Table: CURSO                                                 */
/*==============================================================*/
create table CURSO
(
   ID_CURSO             int not null auto_increment,
   NOMBRE_CURSO         varchar(50) not null,
   TOTAL_HORAS_CURSO    int,
   COSTO_CURSO          int,
   PERIODO_CURSO        varchar(25),
   OBS_CURSO            varchar(50),
   NIVEL_CURSO          varchar(25),
   ESTADO_CURSO         varchar(50),
   primary key (ID_CURSO)
);

/*==============================================================*/
/* Table: DOCENTE                                               */
/*==============================================================*/
create table DOCENTE
(
   ID_DOC               int(10) not null auto_increment,
   ID_AUX               int(10) not null,
   CI_DOC               int,
   NOMBRE_DOC           varchar(50),
   APELLPA_DOC          varchar(50),
   APELLMA_DOC          varchar(50),
   TITULO_DOC           varchar(50),
   FECHA_NACIMIENTO_DOC date,
   TELEFONO_DOC         int,
   CELULAR_DOC          int,
   EXTENSIOIN_CI_DOC    varchar(25),
   CORREO_DOC           varchar(50),
   GENERO_DOC           varchar(20),
   DIRECCION_DOC        varchar(80),
   TIEMPO_DEDICACION_DOC varchar(50),
   CARGO_DOC            varchar(50),
   primary key (ID_DOC)
);

/*==============================================================*/
/* Table: HORARIO_DOC                                           */
/*==============================================================*/
create table HORARIO_DOC
(
   ID_HORARIO_DOC       int(10) not null auto_increment,
   ID_MATERIA_DICTA     int(10) not null,
   GRUPO                varchar(10),
   AULA                 varchar(10),
   NUMERO_ALUMNOS       int,
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
   HORA_SEMANA          time,
   HORA_TEORIA          time,
   HORA_PRACTICA        time,
   primary key (ID_MATERIA_DICTA)
);

/*==============================================================*/
/* Table: NOMBRAMIENTO_AUX                                      */
/*==============================================================*/
create table NOMBRAMIENTO_AUX
(
   ID_NOMBRAMIENTO_AUX  int(10) not null auto_increment,
   ID_AUX               int(10) not null,
   CARRERA_AUX          varchar(50),
   DEPTO_AUX            varchar(50),
   FACULTAD_AUX         varchar(50),
   FECHA_NOMBRAMIENTO_AUX date,
   DURACION_AUX         varchar(30),
   GESTION_AUX          varchar(20),
   HRS_SEMANA_AUX       int,
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
   NOMBRE_PLAN          varchar(20),
   CODIGO_SIS           int,
   primary key (ID_PLAN)
);

/*==============================================================*/
/* Table: RESERVA                                               */
/*==============================================================*/
create table RESERVA
(
   ID_RESERVA           int(10) not null auto_increment,
   ID_SALA              int(10) not null,
   ID_CURSO             int not null,
   ID_MATERIA           int(10) not null,
   ASUNTO               varchar(25),
   CANT_EQUI            int,
   RESPONSABLE          varchar(30),
   COSTO_RESERVA        int,
   MONEDA               varchar(20),
   HORARIO_FIJO         date,
   TELEFONO_RESP        int,
   DIRECCION_RESP       varchar(50),
   FECHA_INICIAL_RESERVA date,
   FECHA_FINAL_RESERVA  date,
   primary key (ID_RESERVA)
);

/*==============================================================*/
/* Table: SALA                                                  */
/*==============================================================*/
create table SALA
(
   ID_SALA              int(10) not null auto_increment,
   NOMBRE_SALA          varchar(50),
   CANTIDAD_EQUI_SALA   int,
   primary key (ID_SALA)
);

/*==============================================================*/
/* Table: SEGUIMIENTO_AUX                                       */
/*==============================================================*/
create table SEGUIMIENTO_AUX
(
   ID_ASEGUIMIENTO_AUX  int(10) not null auto_increment,
   ID_AUX               int(10) not null,
   OTRO_CARGO_AUX       varchar(50),
   HRS_PRACTICA         time,
   HRS_INVES_AUX        time,
   primary key (ID_ASEGUIMIENTO_AUX)
);

/*==============================================================*/
/* Table: SEGUIMIENTO_DOC                                       */
/*==============================================================*/
create table SEGUIMIENTO_DOC
(
   ID_SEGUIMIENTO_DOC   int(10) not null auto_increment,
   ID_DOC               int(10) not null,
   ASIST                varchar(15),
   ADJ                  varchar(15),
   CAT                  varchar(15),
   AUX_DOC              varchar(15),
   OTRO_CARGO           varchar(25),
   HRS_TEORIA           time,
   HRS_INVES            time,
   HRS_EXT              time,
   HRS_SER              time,
   HRS_PRAC             time,
   HRS_PROD             time,
   HRS_SERV             time,
   HRS_PROD_ACAD        time,
   HRS_ADM_ACAD         time,
   HRS_TRAB_SEM         time,
   HRS_TRAB_MES         time,
   HRS_AUTO             time,
   DEDICACION_EXCLUSIVA varchar(50),
   OBSERVACION          varchar(100),
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
/* Table: SESION                                                */
/*==============================================================*/
create table SESION
(
   ID_SESION            int(10) not null auto_increment,
   ID_USUARIO           int(10) not null,
   FECHA_SESION         date,
   primary key (ID_SESION)
);

/*==============================================================*/
/* Table: TABLA_HORARIO                                         */
/*==============================================================*/
create table TABLA_HORARIO
(
   ID_TABLA_HORARIO     int(0) not null auto_increment,
   ID_MATERIA_DICTA     int(10) not null,
   ID_SESION            int(10) not null,
   RANGO                varchar(15),
   DIA                  date,
   primary key (ID_TABLA_HORARIO)
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
   NOMBRE_USUARIO       varchar(20) not null,
   APELLPA_USUARIO      varchar(20) not null,
   APELLMA_USUARIO      varchar(20) not null,
   ESTADO_USUARIO       varchar(25),
   GENERO_USUARIO       varchar(15),
   CUENTA               varchar(20),
   CONTRASENIA          varchar(15),
   primary key (ID_USUARIO)
);

alter table CARGO add constraint FK_RELATIONSHIP_20 foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO) on delete restrict on update restrict;

alter table DOCENTE add constraint FK_RELATIONSHIP_21 foreign key (ID_AUX)
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

alter table RESERVA add constraint FK_RELATIONSHIP_11 foreign key (ID_MATERIA)
      references MATERIA (ID_MATERIA) on delete restrict on update restrict;

alter table RESERVA add constraint FK_RELATIONSHIP_12 foreign key (ID_CURSO)
      references CURSO (ID_CURSO) on delete restrict on update restrict;

alter table RESERVA add constraint FK_RELATIONSHIP_14 foreign key (ID_SALA)
      references SALA (ID_SALA) on delete restrict on update restrict;

alter table SEGUIMIENTO_AUX add constraint FK_RELATIONSHIP_19 foreign key (ID_AUX)
      references AUXILIAR (ID_AUX) on delete restrict on update restrict;

alter table SEGUIMIENTO_DOC add constraint FK_RELATIONSHIP_17 foreign key (ID_DOC)
      references DOCENTE (ID_DOC) on delete restrict on update restrict;

alter table SEGUIMIENTO_EXCLU_DOC add constraint FK_RELATIONSHIP_9 foreign key (ID_SEGUIMIENTO_DOC)
      references SEGUIMIENTO_DOC (ID_SEGUIMIENTO_DOC) on delete restrict on update restrict;

alter table SESION add constraint FK_RELATIONSHIP_2 foreign key (ID_USUARIO)
      references USUARIO (ID_USUARIO) on delete restrict on update restrict;

alter table TABLA_HORARIO add constraint FK_RELATIONSHIP_3 foreign key (ID_SESION)
      references SESION (ID_SESION) on delete restrict on update restrict;

alter table TABLA_HORARIO add constraint FK_RELATIONSHIP_7 foreign key (ID_MATERIA_DICTA)
      references MATERIA_DICTA (ID_MATERIA_DICTA) on delete restrict on update restrict;

alter table TIENE add constraint FK_TIENE foreign key (ID_MATERIA)
      references MATERIA (ID_MATERIA) on delete restrict on update restrict;

alter table TIENE add constraint FK_TIENE2 foreign key (ID_PLAN)
      references PLAN (ID_PLAN) on delete restrict on update restrict;

alter table USUARIO add constraint FK_RELATIONSHIP_1 foreign key (ID_CARRERA)
      references CARRERA (ID_CARRERA) on delete restrict on update restrict;

