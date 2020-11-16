<template>
    <div class="banner">
        <h1 class="banner__title">{{ title }}</h1>
    </div>
</template>

<script>
export default {
    name:"Banner",
    props:{
        title:String
    }
}
</script>