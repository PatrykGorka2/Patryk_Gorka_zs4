class Komis{
constructor(nazwa){
    this.nazwa = nazwa;
    this.samochody = [];
}

dodajSamochod(auto){
    this.samochody.push(auto);

}

wyswietlSamochody(){
    const div = document.querySelector('div');
    //div.innerHTML  = `<div>: ${this.samochody[0].cena}</div>`;
    this.samochody.forEach((auto)=>{
        div.innerHTML += `<p> Model: ${auto.model}</p>`;
        div.innerHTML += `<p> Marka: ${auto.marka}</p>`;
        div.innerHTML += `<p> Cena: ${auto.cena}</p>`;
        div.innerHTML += `<p> Rozcnik: ${auto.rocznik}</p>`;
        div.innerHTML += '<hr>';
    });
}
}