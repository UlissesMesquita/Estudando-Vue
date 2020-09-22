<template>

  <div>
    <card-conteudo-vue 
    perfil="https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png" 
    nome="Ulisses" 
    data="19/09/2020" 
    hora="08:25 AM" 
    >    


    <card-detalhe-vue 
    img = "https://kgo.googleusercontent.com/profile_vrt_raw_bytes_1587515358_10512.png"
    txt = "Apenas mais um teste com CardDetalhe"
    
    ></card-detalhe-vue>

    </card-conteudo-vue>



  </div>         

</template>

<script>
//Importação de NavBars
  //Components - Layouts
    import CardConteudoVue from '@/components/social/CardConteudoVue'
    import CardDetalheVue from '@/components/social/CardDetalheVue'


//Importação de componentes
export default {
  name: 'Home',
  components: {
    CardConteudoVue,
    CardDetalheVue
  }
}
</script>

<style scoped>

</style>

