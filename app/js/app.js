var app = new Vue({
  el: ".app",
  data: {
    cantidad: 'Elije la cantidad de boletos',
    counter: 0,
    childConter: 0,
  },
  methods: {

  },
  mounted: function () {
    $('#inicio').pickadate()
    $('#finaliza').pickadate()
  }
})
