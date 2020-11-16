<template>
  <!-- Default page layout -->
    <FullPage>
      <!-- page transition animation -->
      <transition name="slide" mode="out-in">
        <!-- component matched by the route will render here -->
        <router-view />
      </transition>
    </FullPage>
</template>

<script>
import FullPage from './components/templates/FullPage.vue'

export default {
  components:{
    "FullPage":FullPage
  },
  watch: {
    '$route' (to) {
      document.title = to.meta.title || 'African Dine'
    }
  }
}
</script>

<style lang="scss">
.slide-enter-active,
.slide-leave-active {
  // transition:opacity 3s, transform 1s;
}

.slide-enter,
.slide-leave {
  opacity:0;
  // transform:translateX(-30%);
}
</style>
