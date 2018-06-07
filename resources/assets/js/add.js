require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));

var vm = new Vue({
    el: '#tuto',
    data: {
        personnes: [
            {nom: "Claret", prenom: "Marcel"},
            {nom: "Dupont", prenom: "Albert"},
            {nom: "Durand", prenom: "Jacques"},
            {nom: "Martin", prenom: "Denis"},
            {nom: "Torlet", prenom: "Arthur"}
        ],
        poubelle: []
    },
    methods: {
        supprimer: function(index) {
            this.poubelle.push(this.personnes[index]);
            this.personnes.splice(index, 1);
            this.poubelle.sort(ordonner);
        },
        retablir: function(index) {
            this.personnes.push(this.poubelle[index]);
            this.poubelle.splice(index, 1);
            this.personnes.sort(ordonner);
        },
        eliminer: function(index) {
            this.poubelle.splice(index, 1);
        },
        toutPoubelle: function() {
            this.poubelle = this.poubelle.concat(this.personnes);
            this.poubelle.sort(ordonner);
            this.personnes = [];
        },
        toutRetablir: function() {
            this.personnes = this.personnes.concat(this.poubelle);
            this.personnes.sort(ordonner);
            this.poubelle = [];
        },
        toutEliminer: function() {
            this.poubelle = [];
        }
    }
});