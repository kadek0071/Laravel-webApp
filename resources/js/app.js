/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
<<<<<<< HEAD
import $ from 'jquery';
window.$ = window.jQuery = $;

$('#icon_cog').on('click', function(){
    home_dropdown_menu();
});

$(document).on("click", (evt) => {

    const home_dropdown_menu = document.getElementById('home_dropdown_menu');
    const icon_cog = document.getElementById('icon_cog');

    let targetElement = evt.target; 

    do {
        if (targetElement == home_dropdown_menu || targetElement == icon_cog) {
            return;
        }
        targetElement = targetElement.parentNode;
    } while (targetElement);   

    if(home_dropdown_menu.classList.contains("show")){          
        icon_cog.classList.toggle("rotate-icon-cog");
        home_dropdown_menu.classList.remove('show'); 
        home_dropdown_menu.classList.add('hide');
    }
});

function home_dropdown_menu(){

    const home_dropdown_menu = document.getElementById('home_dropdown_menu');
    const icon_cog = document.getElementById('icon_cog');

    icon_cog.classList.toggle("rotate-icon-cog");

    if(home_dropdown_menu.classList.contains("hide")){
        home_dropdown_menu.classList.remove('hide');         
        home_dropdown_menu.classList.add('show');
    } else{
        home_dropdown_menu.classList.remove('show'); 
        home_dropdown_menu.classList.add('hide');             
    } 
}

=======

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
>>>>>>> master
