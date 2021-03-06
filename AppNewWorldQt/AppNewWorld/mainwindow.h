#ifndef MAINWINDOW_H
#define MAINWINDOW_H

#include <QMainWindow>

namespace Ui {
class MainWindow;
}

class MainWindow : public QMainWindow
{
    Q_OBJECT

public:
    explicit MainWindow(QWidget *parent = 0);
    ~MainWindow();

public slots:
    void validerProduit(int coche);
private slots:
    void demandeProducteurs();

    void on_pushButton_4_clicked();

    void on_pushButton_3_clicked();

    void on_boutonSupprimer_clicked();

    void on_demandeProducteur_clicked(const QModelIndex &index);

    void on_pushButton_clicked();

private:
    Ui::MainWindow *ui;
};

#endif // MAINWINDOW_H
