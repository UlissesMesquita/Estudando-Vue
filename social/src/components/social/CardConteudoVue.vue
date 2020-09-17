<template>

      <div class="card">
        <div class="card-content">
          <div class="row valign-wrapper">

            <grid-vue tamanho="2">
              <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </grid-vue>

            <grid-vue tamanho="10">
              <span class="black-text">
                <strong>Ulisses Mesquita</strong> - <small>12/09/2020 17:08</small>
              </span>
            </grid-vue>
            
          </div>

            <div class="card-image">
              <img src="https://materializecss.com/images/sample-1.jpg">
            </div>

            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>

        <div class="card-action">
          <p>
            <i class="material-icons">favorite_border</i>
            <i class="material-icons">insert_comment</i>
          </p>
        </div>
      </div>
  

</template>

<script>
//Importação de NavBars
  //Components - Layouts
    import CardConteudoVue from '@/components/social/CardConteudoVue'
    import GridVue from '@/components/layouts/GridVue'

//Importação de componentes
export default {
  name: 'Home',
  components: {
    CardConteudoVue,
    GridVue
  }
}
</script>

<style scoped>



</style>

