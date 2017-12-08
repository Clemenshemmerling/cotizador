var app = new Vue({
  el: ".app",
  data: {
    cantidad: 'Elije la cantidad de boletos',
    counter: 0,
    childConter: 0,
    inicio: moment().format('DD'),
    final: moment(Date.now(), "DD-MM-YYYY").add(5, 'days').format('DD')
  },
  methods: {
    moreFirst: function () {
      this.counter += 1;
      this.cantidad = 'Adultos'+ ' '+ this.counter +' niños ' + this.childConter
    },
    minusFirst: function () {
      this.counter -= 1;
      this.cantidad = 'Adultos'+ ' '+ this.counter +' niños ' + this.childConter
    },
    cmoreFirst: function () {
      this.childConter += 1;
      this.cantidad = 'Adultos'+ ' '+ this.counter +' niños ' + this.childConter
    },
    cminusFirst: function () {
      this.childConter -= 1;
      this.cantidad = 'Adultos'+ ' '+ this.counter +' niños ' + this.childConter
    },
  },
  mounted: function () {
    $('#inicio').pickadate();
    $('#finaliza').pickadate();
    $('.dropdown-content').click(function (event) {
      event.stopPropagation();
    });
  }
})
