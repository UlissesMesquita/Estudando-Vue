<template>

  <div>
    <card-conteudo-vue 
    perfil="https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png" 
    nome="Ulisses" 
    data="19/09/2020" 
    hora="08:25 AM" 
    >
      <div class="card-image">
        <img src="https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png">
      </div>

      <div class="card-content">
        <p>Imagem Google by: Ulisses Mesquita</p>
      </div>
              
    </card-conteudo-vue>
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

