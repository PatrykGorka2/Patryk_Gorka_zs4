#include <iostream>
using namespace std;


class Student
{
public:
    string imie;
    string nazwisko;
    string pesel;
    string uczelnia;
    string wydzial;
    int rok_studiow;



public:

    void dodajStudenta(){
    cout << " Imie: ";
    cin >> imie;
    cout << " Nazwisko: ";
    cin >> nazwisko;
     cout << " Pesel: ";
    cin >> pesel;

    while(pesel.length() !=11){
        cout << "Niepoprawna ilosc liczb. PESEL sklada sie z 11 cyfr kolego.."<<endl;
        cout <<" Wprowadz PESEL ponownie: "<< endl;
        cin >> pesel;
    }
         cout << " Uczelnia: ";
    cin >> uczelnia;
             cout << " Wydzial: ";
    cin >> wydzial;
             cout << " Rok studiow: ";
    cin >> rok_studiow;


    while(rok_studiow>5){
        cout << "Zla wartosc"<<endl;
        cout <<" Wprowadz rok studiow ponownie: "<< endl;
        cin >> rok_studiow;
    }
    }

    void pokazStudenta(){

    cout << "Studentem jest "<< imie<< " "<< nazwisko <<", ktory jest na " <<rok_studiow<<" roku studiow. " << endl;
    cout << " Uczy sie na wydziale " << wydzial <<" na uczelni "<< uczelnia<<". "<< endl;
    cout << "PESEL Studenta: " << pesel << ". " << endl;

        }

};

int main (){
int ilosc;

cout << "Podaj ilosc wprowadzanych Studentow:" << endl;
cin >> ilosc;


    Student* S1 =new Student[ilosc];

    //student.name = "John";
    //student.surname = " Doe";
    for(int i = 0; i < ilosc; i++){
        cout  << i+1 << " Student" << endl;
        S1[i].dodajStudenta();
        cout << "" << endl;
    }
    for(int i = 0; i < ilosc; i++){
            cout  <<"    "<< i+1 << " STUDENT" << endl;
    S1[i].pokazStudenta();
    cout << endl;
    cout << "<-------->" << endl;
        cout << endl;
    }
delete []S1;


}
