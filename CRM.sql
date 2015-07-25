/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     25/07/2015 14:14:33                          */
/*==============================================================*/


drop table if exists CLIENT;

drop table if exists DEPENSE;

drop table if exists DEVIS;

drop table if exists EXP_MANAGER;

drop table if exists FACTURE;

drop table if exists FACTURE_SERVICE;

drop table if exists SERVICE;

drop table if exists SERVICE_DEVIS;

/*==============================================================*/
/* Table: CLIENT                                                */
/*==============================================================*/
create table CLIENT
(
   ID_CLIENT            int not null,
   NOM                  text,
   PRENOM               text,
   ADRESSE              text,
   NUMERO               int,
   CODE_TVA             text,
   MARTRICULE_FISCALE   text,
   primary key (ID_CLIENT)
);

/*==============================================================*/
/* Table: DEPENSE                                               */
/*==============================================================*/
create table DEPENSE
(
   ID_DEPENSE           int not null,
   DATE_DEPENSE         date,
   MONTANT              int,
   primary key (ID_DEPENSE)
);

/*==============================================================*/
/* Table: DEVIS                                                 */
/*==============================================================*/
create table DEVIS
(
   ID_DEVIS             int not null,
   ID_CLIENT            int not null,
   DATE_ENVOIE          date,
   DATE_VALIDATION      date,
   primary key (ID_DEVIS)
);

/*==============================================================*/
/* Table: EXP_MANAGER                                           */
/*==============================================================*/
create table EXP_MANAGER
(
   PSEUDO               text not null,
   PWD                  text,
   EMAIL                text,
   primary key (PSEUDO)
);

/*==============================================================*/
/* Table: FACTURE                                               */
/*==============================================================*/
create table FACTURE
(
   ID_FACTURE           int not null,
   ID_CLIENT            int not null,
   NOM_FACTURE          text,
   DATE_FACTURE         date,
   REMISE               float,
   PRIX_TVA             float,
   primary key (ID_FACTURE)
);

/*==============================================================*/
/* Table: FACTURE_SERVICE                                       */
/*==============================================================*/
create table FACTURE_SERVICE
(
   ID_FACTURE           int not null,
   ID_SERVICE           int not null,
   PRIX_SERVICE_        float,
   primary key (ID_FACTURE, ID_SERVICE)
);

/*==============================================================*/
/* Table: SERVICE                                               */
/*==============================================================*/
create table SERVICE
(
   ID_SERVICE           int not null,
   NOM_SERVICE          text,
   TYPE_SERVICE         text,
   primary key (ID_SERVICE)
);

/*==============================================================*/
/* Table: SERVICE_DEVIS                                         */
/*==============================================================*/
create table SERVICE_DEVIS
(
   ID_SERVICE           int not null,
   ID_DEVIS             int not null,
   PRIX_SERVICE         float,
   primary key (ID_SERVICE, ID_DEVIS)
);

alter table DEVIS add constraint FK_DEVIS_CLIENT foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table FACTURE add constraint FK_CLIENT_FACTURE foreign key (ID_CLIENT)
      references CLIENT (ID_CLIENT) on delete restrict on update restrict;

alter table FACTURE_SERVICE add constraint FK_FACTURE_SERVICE foreign key (ID_FACTURE)
      references FACTURE (ID_FACTURE) on delete restrict on update restrict;

alter table FACTURE_SERVICE add constraint FK_FACTURE_SERVICE2 foreign key (ID_SERVICE)
      references SERVICE (ID_SERVICE) on delete restrict on update restrict;

alter table SERVICE_DEVIS add constraint FK_SERVICE_DEVIS foreign key (ID_SERVICE)
      references SERVICE (ID_SERVICE) on delete restrict on update restrict;

alter table SERVICE_DEVIS add constraint FK_SERVICE_DEVIS2 foreign key (ID_DEVIS)
      references DEVIS (ID_DEVIS) on delete restrict on update restrict;

