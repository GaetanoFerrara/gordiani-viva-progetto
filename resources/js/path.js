require('./bootstrap');
import Vue from 'vue';

let path = new Vue({
    el: "#path",
    data: {
      panelPopup: "",
      panel: {},  
    },
    methods: {
        openPanelPopup(item) {
            this.panelPopup = "d-block";
            this.panel = item;
        }
    }
})