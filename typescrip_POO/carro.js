var Carro = /** @class */ (function () {
    // Método Constructor
    function Carro(marca, modelo) {
        this.marca = marca;
        this.modelo = modelo;
        this.velocidad = 0;
    }
    // Acelerar el carro
    Carro.prototype.acelerar = function (velocidadIncremento) {
        this.velocidad += velocidadIncremento;
        console.log('El ' + this.marca + ' está acelerando a ' + this.velocidad + ' km/h');
    };
    return Carro;
}());
var carroMartha = new Carro("Chevrolet", 2023);
carroMartha.acelerar(80);