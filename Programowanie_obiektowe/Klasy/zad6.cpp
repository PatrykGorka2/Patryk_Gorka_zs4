#include <iostream>
using namespace std;


class Ksiazka
{
public:
    string autor;
    string tittle;
    string wydawnictwo;
    int rok_wydania;


public:

    void dodajKsiazke(){
    cout << " Autor: ";
    cin >> autor;
    cout << " Tytul: ";
    cin >> tittle;
     cout << " Wydawnictwo: ";
    cin >> wydawnictwo;
         cout << " Rok wydania: ";
    cin >> rok_wydania;
    }

    void pokazKsiazke(){

    cout << "Autorem ksiazki "<< tittle << ", wydanej w "<< rok_wydania<<" roku jest " << autor <<". "<< endl;
    cout << "Ksiazka zostala wydana przez wydawnictwo " << wydawnictwo << ". " << endl;

        }

};

int main (){
int ilosc;

cout << "Podaj ilosc wprowadzanych ksiazek:" << endl;
cin >> ilosc;


    Ksiazka* k1 =new Ksiazka[ilosc];

    //student.name = "John";
    //student.surname = " Doe";
    for(int i = 0; i < ilosc; i++){
        cout  << i+1 << " ksiazka" << endl;
        k1[i].dodajKsiazke();
        cout << "" << endl;
    }
    for(int i = 0; i < ilosc; i++){
            cout  <<"    "<< i+1 << " KSIAZKA" << endl;
    k1[i].pokazKsiazke();
    cout << endl;
    cout << "<-------->" << endl;
        cout << endl;
    }
delete []k1;


}
