<template>



      <div class="card">
        <div class="card-content">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>

         




</template>

<script>
//Importação de NavBars
  //Components - Layouts
    import CardConteudoVue from '@/components/social/CardConteudoVue'


//Importação de componentes
export default {
  name: 'Home',
  components: {
    CardConteudoVue
  }
}
</script>

<style scoped>



</style>

