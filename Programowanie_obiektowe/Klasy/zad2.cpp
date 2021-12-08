#include <iostream>
using namespace std;

class Psy
{
public:
    string imie;
    string rasa;
    int wiek;
};

int main (){
    Psy pies_Janka;
    pies_Janka.imie = "Azor";
    pies_Janka.rasa = "Buldog";
    pies_Janka.wiek = 10;

    cout << "Pies Janka ma na imie "<< pies_Janka.imie << endl;
    cout << pies_Janka.imie << " jest rasy "<< pies_Janka.rasa << " i ma "<< pies_Janka.wiek << " lat."<< endl;

    Psy pies_Franka;
    pies_Franka.imie = "Rex";
    pies_Franka.rasa = "Wilczur";
    pies_Franka.wiek = 5;

    cout << "Pies Franka ma na imie "<< pies_Franka.imie << endl;
    cout << pies_Franka.imie << " jest rasy "<< pies_Franka.rasa << " i ma "<< pies_Franka.wiek << " lat."<< endl;


    Psy pies_Marka;
    pies_Marka.imie = "Boy";
    pies_Marka.rasa = "Pudel";
    pies_Marka.wiek = 6;

    cout << "Pies Janka ma na imie "<< pies_Marka.imie << endl;
    cout << pies_Marka.imie << " jest rasy "<< pies_Marka.rasa << " i ma "<< pies_Marka.wiek << " lat."<< endl;

    Psy pies_Kamila;
    pies_Kamila.imie = "Michalek";
    pies_Kamila.rasa = "Jamink";
    pies_Kamila.wiek = 8;

    cout << "Pies Kamila ma na imie "<< pies_Kamila.imie << endl;
    cout << pies_Kamila.imie << " jest rasy "<< pies_Kamila.rasa << " i ma "<< pies_Kamila.wiek << " lat."<< endl;


}
