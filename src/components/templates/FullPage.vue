<template>
    <div id="app">
        <Header/>
        <slot></slot>
        <Footer/>
    </div>
</template>

<script>

import Header from './Header'
import Footer from './Footer'

export default {
    name:"FullPage",
    components: {
        "Header":Header,
        "Footer": Footer
    }
}

</script>