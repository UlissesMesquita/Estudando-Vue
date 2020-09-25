<template>


  <span>


      <div class="row">
        <grid-vue tamanho="12" class="input-field">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">O que está Acontecendo? </label>
        </grid-vue>
        <p>
          <button class="btn waves-effect waves-light col s2 offset-s10">Publicar</button>
        </p>
      </div>


      <card-conteudo-vue 
        perfil="https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png" 
        nome="Ulisses" 
        data="19/09/2020" 
        hora="08:25 AM">    

        <card-detalhe-vue 
        img = "https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png"
        txt = "Apenas mais um teste com CardDetalhe">
        </card-detalhe-vue>

      </card-conteudo-vue>
  </span>      

</template>

<script>
//Importação de NavBars
  //Components - Layouts
    import CardConteudoVue from '@/components/social/CardConteudoVue'
    import CardDetalheVue from '@/components/social/CardDetalheVue'
    import GridVue from '@/components/layouts/GridVue'


//Importação de componentes
export default {
  name: 'Home',
  components: {
    CardConteudoVue,
    CardDetalheVue,
    GridVue
  }
}
</script>

<style scoped>

</style>

