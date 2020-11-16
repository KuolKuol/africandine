<template>
    <header class="header" id="header">
        <div class="container">
            <!-- HEADER HEADING -->
            <div class="header__heading">
                <div class="hamburger-icon" id="hamburger-icon" v-on:click="toggleMenu">&#9776;</div>
                <div class="logo">
                    <a class="logo__link" href="/">
                       <span id="logo-1">African Dine</span>
                       <span id="logo-2">restarant</span> 
                    </a>
                </div>
            </div>
            <!-- HEADER MENU -->
            <div class="header__menu" id="header__menu">
                <!-- GET WORDPRESS NAVIGATION MENU ITEMS -->
                <div class="nav">
                    <ul class="nav__list">
                        <li v-for="link in links" :key="link.id" class="nav__item">
                            <router-link :to="link.url" class="nav__link">{{ link.title }}</router-link>
                        </li>
                    </ul>
                    <!-- BUTTON SECTION  -->
                    <a class="primary-button" href="tel:4032489696">place an order</a>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name:"Header",
    data(){
        return {
            links:[
                {id:1, title:"Menu", url:"/menu"},
                {id:2, title:"About", url:"/about"},
                {id:3, title:"Contact", url:"/contact"}
            ]
        }
    },
    methods:{
        toggleMenu: ()=> {
            let header_menu = document.querySelector("#header__menu")
            header_menu.classList.toggle("toggleMenu");
        }
    }
}
</script>