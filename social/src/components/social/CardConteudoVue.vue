<template>

      <div class="card">
        <div class="card-content">
          <div class="row valign-wrapper">

            <grid-vue tamanho="2">
              <img :src="perfil" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </grid-vue>

            <grid-vue tamanho="10">
              <span class="black-text">
                <strong>{{nome}}</strong> - <small>{{data}} {{hora}}</small>
              </span>
            </grid-vue>
            
          </div>

        </div>

            <slot/>

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
  name: 'CardConteudoVue',
  props:['perfil','nome','data','hora'],
  data() {
    return { 

    }
  },
  components: {
    CardConteudoVue,
    GridVue
  }


}
</script>

<style scoped>



</style>

