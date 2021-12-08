#include <iostream>
using namespace std;


class Samochod
{
public:
    string marka;
    string model;
    int rocznik;
    float przyspieszenie;
    float pojemnosc;
    float spalanie;

public:

    void dodajSamochod(){
    cout << " Marka samochodu to: ";
    cin >> marka;
    cout << " Model: ";
    cin >> model;
     cout << " Rocznik: ";
    cin >> rocznik;
    cout << " Przyspieszenie:   ";
    cin >> przyspieszenie;
     cout << " Pojemnosc: ";
    cin >> pojemnosc;
    cout << " Spalanie:   ";
    cin >> spalanie;
    }

    void pokazSamochod(){

    cout << "Marka: "<< marka << endl;
    cout << "Model: " << model << endl;
    cout << "Rocznik: " << rocznik << " rok." << endl;
    cout << "Przyspieszenie: " << przyspieszenie << " km/h"<< endl;
    cout << "Pojemnosc: " << pojemnosc << " dm^3" << endl;
    cout << "Spalanie: " << spalanie <<" litrow na kilometr" << endl;
        }
};

int main (){
int ilosc;

cout << "Podaj ilosc samochodow ktore chcesz wprowadzic:" << endl;
cin >> ilosc;


    Samochod* s1 =new Samochod[ilosc];

    //student.name = "John";
    //student.surname = " Doe";
    for(int i = 0; i < ilosc; i++){
        cout  << i+1 << " {" << endl;
        s1[i].dodajSamochod();
        cout << "}" << endl;
    }
    for(int i = 0; i < ilosc; i++){
            cout  << i+1 << " {" << endl;
    s1[i].pokazSamochod();
    cout << "}" << endl;
    }
delete []s1;


}
