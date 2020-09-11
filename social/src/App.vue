<template>
<span>

  <header>
      <nav-bar cor="green darken-1" logo="Social Media" url="#"/>
  </header>

  <main>
    <div class="container">

      <div class="row">
        <grid-vue tamanho="4">
          
          <card-menu-vue nome="Ulisses Mesquita" desc="Desenvolvedor"></card-menu-vue>

               

        </grid-vue>

        <grid-vue tamanho="8">
          <router-view/>
        </grid-vue>
      </div>




      
    </div>  
  </main>

    <footer-vue cor="green darken-1" logo="Social" descricao="Informações Sobre o Social" ano="2020"/>

</span>
</template>

<script>
//Importação de NavBars
  //Components - Layouts
    import NavBar from '@/components/layouts/NavBar'
    import FooterVue from '@/components/layouts/FooterVue'
    import GridVue from '@/components/layouts/GridVue'
    import CardMenuVue from '@/components/layouts/CardMenuVue'


//Importação de componentes
export default {
  name: 'App',
  components: {
    NavBar,
    FooterVue,
    GridVue,
    CardMenuVue
  }
}
</script>



<style scoped>
/* Rodapé Fixado */
  main {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }  
</style>
