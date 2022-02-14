/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
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

