<template>
    <Fragment>
        <VideoBackground/>
        <Hero/>
        <!-- <Information :items="data.items"/> -->
        <Book title="{book.title}"/>
    </Fragment>
</template>

<script>

import { Fragment } from 'vue-fragment'
import VideoBackground from '../components/partials/VideoBackground.vue';
import Hero from '../components/partials/Hero.vue';
// import Information from '../components/partials/Information.vue';
import Book from '../components/partials/Book.vue';

export default {
  name: "Home",
  data: function(){
    return {
      items: [
        {id:"info__group__one",icon:"fas fa-utensils",title:"Quality Food",text:"We serve only the best African food in our restaurant."},
        {id:"info__group__two",icon:"fas fa-seedling",title:"Wide Selection",text:"We serve a wide selection of African foods from all parts of Africa, ranging from Nigerian to Sudanese."},
        {id:"info__group__three",icon:"fas fa-globe-africa",title:"Authentic Restaurant",text:"We serve authentic African food at our restaurant. "}
      ],
      Book: {
        title:'What is up'
      }
    }
  },
  components:{
    "VideoBackground":VideoBackground,
    "Hero":Hero,
    "Fragment":Fragment,
    "Book":Book
    // "Information":Information
    // "Information":Information
  },
  props:{
    Details:Array
  }
};
</script>