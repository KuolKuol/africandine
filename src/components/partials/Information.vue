<template>
    <div class="info">
        <div class="container">
            <div class="info__group" v-for="(item,key) in items" v-bind:key="key" v-bind:id="item.id">
                <div class="icon"><i v-bind:class="item.icon"></i></div>
                <div class="info__title"><b>{{ item.title }}</b></div>
                <div class="info__text">{{ item.text }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"Information",
    data: function(){
        return {

        }
    },
    props: {
        item:String,
        icon:String,
        title:String,
        text:String
    }
}
</script>