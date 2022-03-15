class Samochod{
    constructor(marka, model, cena, rocznik, spalanie){
        this.marka = marka;
        this.model = model;
        this.cena = cena;
        this.rocznik  = rocznik;
        this.spalanie = spalanie;
    }
    wiek(){
        const data = new Date();
        const rok = data.getFullYear();
        return 'Wiek samochodu wynosi: ' +(rok - this.rocznik) + ' lat';
    }
    koszt(){
        const cenaPaliwa= 7.50;
        return 'Przejevhanie 100 KM tym samochodem bedzie kosztowac: ' +(this.spalanie*cenaPaliwa)+ ' zl';
    }

}

