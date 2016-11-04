Vue.config.devtools = true;

var form = new Vue({
  el: '#form',
  data: {
    homeowner: false
  }
});

var viewer = new Vue({
  el: '#viewer',
  data: {
    active: 'villas',
  },
  methods: {
    changeType: function (type) {
      this.active = type
    }
  }
});
