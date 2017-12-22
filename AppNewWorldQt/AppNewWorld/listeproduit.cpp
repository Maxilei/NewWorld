#include <QSqlQuery>
#include "listeproduit.h"
#include "ui_listeproduit.h"


ListeProduit::ListeProduit(QWidget *parent) :
    QDialog(parent),
    ui(new Ui::ListeProduit)
{
    ui->setupUi(this);
    maListe();
}

ListeProduit::~ListeProduit()
{
    delete ui;
}

void ListeProduit::on_pushButton_clicked()
{
    reject();
}

void ListeProduit::maListe()
{
    QString texteRequete="SELECT produit.prodID as prodID,libelleRayon, libelleEspece, libelleVariete, prodPhoto FROM produit INNER JOIN produitVariete ON produit.varId=produitVariete.varId INNER JOIN produitEspece ON produit.prodID=produitEspece.prodId INNER JOIN produitRayon ON idRayon=rayId WHERE not isAccepted;";
    QSqlQuery maRequete (texteRequete);
    while (maRequete.next())
    {
        int noLigne=ui->maListe->rowCount();
        ui->maListe->setRowCount(noLigne+1);
        ui->maListe->setColumnCount(7);
        //ajout d'une propriété de la QCheckbox idProd avec comme valeur l'identifiant du produit auquel la case à cocher correspond
        ui->maListe->setItem(noLigne,1,new QTableWidgetItem(maRequete.value("libelleRayon").toString()));
        ui->maListe->setItem(noLigne,2,new QTableWidgetItem(maRequete.value("libelleEspece").toString()));
        ui->maListe->setItem(noLigne,3,new QTableWidgetItem(maRequete.value("libelleVariete").toString()));
        ui->maListe->setItem(noLigne,4,new QTableWidgetItem(maRequete.value("prodID").toString()));
        ui->maListe->setItem(noLigne,5,new QTableWidgetItem(maRequete.value("prodPhoto").toString()));
        ui->maListe->hideColumn(5);
    }
}
