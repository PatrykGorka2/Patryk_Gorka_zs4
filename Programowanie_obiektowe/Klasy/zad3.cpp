#include <iostream>
using namespace std;


class Pies
{
public:
    string imie;
    string rasa;
    int wiek;


public:

    void dodajPsa(){
    cout << " Imie: ";
    cin >> imie;
    cout << " Rasa: ";
    cin >> rasa;
     cout << " Wiek: ";
    cin >> wiek;
    }

    void pokazPsa(){

    cout << "Ten pies ma na mie: "<< imie << endl;
    cout << "Jest rasy: " << rasa << endl;
    cout << "Ma: " << wiek << " lat." << endl;
        }
};

int main (){
int ilosc;

cout << "Podaj ilosc swoich psow:" << endl;
cin >> ilosc;


    Pies* p1 =new Pies[ilosc];

    //student.name = "John";
    //student.surname = " Doe";
    for(int i = 0; i < ilosc; i++){
        cout  << i+1 << " {" << endl;
        p1[i].dodajPsa();
        cout << "}" << endl;
    }
    for(int i = 0; i < ilosc; i++){
            cout  << i+1 << " {" << endl;
    p1[i].pokazPsa();
    cout << "}" << endl;
    }
delete []p1;


}
