require('./bootstrap');

import Vue from 'vue';
import axios from 'axios';

let app = new Vue({
    el: "#app",
    data: {
        resources: [],
        contentsVisibility: false,
        openTutorials: false,
    },
    methods: {
        getResources(id) {

            this.contentsVisibility = true;
            
            axios
                .get(`api/resources/${id}`)
                .then( response => {
                    this.resources = response.data;
                    this.resourcesVisibility = true;
                    console.log(this.resources);
                } )
        }
    }
})
