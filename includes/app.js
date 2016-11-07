Vue.config.devtools = true;

var form = new Vue({
  el: '#form',
  data: {
    homeowner: false,
  }
});

var viewer = new Vue({

  el: '#viewer',

  data: {

    active: 'villas',

    viewerDir: 'img/viewer/',

    units: {

      villas: [
        {
          name: 'upland',
          active: true,
          type: 'villa',
          location: 'Upper',
          sqft: '1691',
          bed: '3',
          bath: '2',
          price: '200,000'
        },
        {
          name: 'woodland',
          active: false,
          type: 'villa',
          location: 'Lower',
          sqft: '944',
          bed: '1',
          bath: '1',
          price: '200,000'
        }
      ],

      towns: [
        {
          name: 'hillside',
          active: true,
          type: 'town',
          location: 'Exterior',
          sqft: '2047',
          bed: '3',
          bath: '2.5',
          price: '300,000'
        },
        {
          name: 'stone creek',
          active: false,
          type: 'town',
          location: 'Interior',
          sqft: '1689',
          bed: '2',
          bath: '2.5',
          price: '300,000'
        }
      ]

    },
  },
  computed: {
    activated: function () {
      if (this.active == 'villas') {
        return this.units.villas
      } else if (this.active == 'towns') {
        return this.units.towns
      }
    }
  },
  methods: {
    changeType: function (type) {
      this.active = type
    },
    activate: function (unit) {
      for ( var i = 0; i < this.activated.length; i++) {
        if ( this.activated[i].active == true) {
          this.activated[i].active = false
        }
      }
      unit.active = true
    }
  }
});
